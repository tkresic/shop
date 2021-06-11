<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Lists all products.
     *
     * @param Request $request
     * @return ProductCollection|Response|ResponseFactory
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $products = Product::with('subcategory.category')
            ->when($search && strlen($search), function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })->get();

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

        if (!$request->hasFile('file')) {
            $data['image'] = url('/') . '/storage/images/Placeholder.png';
        } else {
            $imagePath = $request->file('file')->store('public/images');
            $imageStoragePath = str_replace('public', '/storage', $imagePath);
            $appURL = env('APP_URL');
            $imagePath = $appURL . $imageStoragePath;
            $data['image'] = $imagePath;
        }

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

        $product = $this->productRepository->update($id, $request->all());

        if ($product == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

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

        if ($product->image) {
            $arr = explode('storage', $product->image);
            Storage::delete('public' . $arr[1]);
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
            'price' => 'required|integer|min:1',
            'cost' => 'nullable|integer',
        ];

        $this->validate($request, $rules);
    }
}
