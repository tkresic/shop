<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class CategoryController extends Controller
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Categories index route.
     *
     * @OA\Get(
     *      path="/api/categories",
     *      description="Get all Categories",
     *      tags={"Categories"},
     *      @OA\Response(
     *          response="200",
     *          description="Category",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return JsonResponse|ResponseFactory
     */
    public function index()
    {
        return response($this->categoryRepository->all(), Response::HTTP_OK);
    }

    /**
     * Creates new category.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validateAttributes($request);

        $category = $this->categoryRepository->create($request->all());

        return response($category, Response::HTTP_OK);
    }

    /**
     * Updates the category.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $category = $this->categoryRepository->update($id, $request->all());

        if ($category == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        return response()->json($category, Response::HTTP_OK);
    }

    /**
     * Deletes the category.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $category = $this->categoryRepository->find($id);

        if ($category == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $success = $this->categoryRepository->delete($id);

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
            'name' => "required|string|max:255|unique:categories,name,$id",
            'active' => 'required|boolean',
        ];


        $this->validate($request, $rules);
    }
}
