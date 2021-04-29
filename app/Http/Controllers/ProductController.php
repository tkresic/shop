<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Traits\ModelTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class ProductController extends Controller
{
    use ModelTrait;

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
        $resources = boolval($request->input('resources'));

        if ($resources) {
            $perPage = $request->input('per_page');
            $perPage = isset($perPage) && is_numeric($perPage) ? $perPage : 10;
            //$search = $request->input('search');
            return new ProductCollection(Product::latest()->paginate($perPage));
        }

        return response($this->productRepository->all(['subcategory.category']), Response::HTTP_OK);
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

        $product = $this->productRepository->create($request->all());

        return response($product, Response::HTTP_OK);
    }

    /**
     * Reads the product.
     *
     * @param $id
     * @return Response|ResponseFactory
     */
    public function read(int $id)
    {
        $product = $this->productRepository->find($id);

        return $product == null ? response(null, Response::HTTP_NOT_FOUND) : response($product, Response::HTTP_OK);
    }

    /**
     * Updates the product.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse {
        $this->validateAttributes($request, $id);

        $product = $this->productRepository->update($id, $request->all());

        return response()->json($product, Response::HTTP_OK);
    }

    /**
     * Deletes the product.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse {
        $product = $this->productRepository->find($id);

        if ($product == null) {
            return response()->json(null, Response::HTTP_NOT_FOUND);
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
            'name' => "required|string|max:255|unique:products,name,$id,id,deleted_at,NULL",
            'subcategory_id' => 'required|integer|exists:subcategories,id',
            'price' => 'required|integer|min:1',
            'cost' => 'nullable|integer',
            'sku' => "required|string|unique:products,sku,$id,id,deleted_at,NULL",
        ];

        if ($id != -1) {
            $rules['product_id'] = 'required|integer|exists:products,id';
        }

        $this->validate($request, $rules);
    }
}
