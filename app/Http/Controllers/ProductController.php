<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Traits\ImageTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class ProductController extends Controller
{
    use ImageTrait;

    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Products index route.
     *
     * @OA\Get(
     *      path="/api/products",
     *      description="Get all Products",
     *      tags={"Products"},
     *      @OA\Response(
     *          response="200",
     *          description="Product",
     *          @OA\JsonContent()
     *      ),
     * )
     * @param Request $request
     * @return JsonResponse|ResponseFactory
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $products = Product::with('subcategory.category')
            ->when($search && strlen($search), function ($query) use ($search) {
                $query->where('name', 'ILIKE', "%$search%")
                ->orWhere('sku', 'ILIKE', "%$search%")
                ->orWhere('price', 'ILIKE', "%$search%")
                ->orWhere(function($query) use ($search) {
                    $query->whereHas('subcategory', function ($query) use ($search) {
                        $query->where('name', 'ILIKE', "%$search%");
                    });
                })
                ->orWhere(function($query) use ($search) {
                    $query->whereHas('subcategory.category', function ($query) use ($search) {
                        $query->where('name', 'ILIKE', "%$search%");
                    });
                });
            })
            ->orderByDesc('id')
            ->get();

        return response($products, Response::HTTP_OK);
    }

    /**
     * Creates new product.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validateAttributes($request);

        $data = $request->all();

        $imagePath = $this->store($request->file('file'));

        $data['image'] = $request->hasFile('file') ? $imagePath : 'http://admin.requiro.info/storage/images/Placeholder.png';
        $data['tax']['id'] = (int) $data['tax']['id'];
        $data['tax']['amount'] = (int) $data['tax']['amount'];

        $product = $this->productRepository->create($data);

        return response($product, Response::HTTP_OK);
    }


    /**
     * Updates the product.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $product = $this->productRepository->find($id);

        if ($product == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $data = $request->all();

        $imagePath = $this->store($request->file('file'));

        if ($imagePath) {
            $data = array_merge($data, ['image' => $imagePath]);
            if ($product->image && strpos($product->image, 'admin.requiro.info') === false) {
                $this->remove($product->image);
            }
        }

        $data['tax']['id'] = (int) $data['tax']['id'];
        $data['tax']['amount'] = (int) $data['tax']['amount'];

        $product = $this->productRepository->update($id, $data);

        return response()->json($product, Response::HTTP_OK);
    }

    /**
     * Deletes the product.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if ($product->image && strpos($product->image, 'admin.requiro.info') === false) {
            $this->remove($product->image);
        }

        if ($product == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $success = $this->productRepository->delete($id);

        return $success ? response()->json($success, Response::HTTP_OK) : response()->json('Something went wrong', Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * Validation method for create and update methods.
     *
     * @param Request $request
     * @param int $id
     * @throws ValidationException
     */
    private function validateAttributes(Request $request, int $id = -1)
    {
        $rules = [
            'name' => "required|string|max:255|unique:products,name," . $id,
            'sku' => "required|string|unique:products,sku," . $id,
            'subcategory_id' => 'required|integer|exists:subcategories,id',
            'active' => 'required|boolean',
            'tax' => 'required|array',
            'tax.id' => 'required|integer',
            'tax.name' => 'required|string|max:255',
            'tax.amount' => 'required|integer|between:1,100',
            'price' => 'required|integer|min:1',
            'cost' => 'nullable|integer',
            'file' => 'nullable|image|mimes:jpeg,jpg,png,bmp',
        ];

        $this->validate($request, $rules);
    }
}
