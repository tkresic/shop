<?php

namespace App\Http\Controllers;

use App\Repositories\SubcategoryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class SubcategoryController extends Controller
{
    private SubcategoryRepository $subcategoryRepository;

    public function __construct(SubcategoryRepository $subcategoryRepository)
    {
        $this->subcategoryRepository = $subcategoryRepository;
    }

    /**
     * Subcategories index route.
     *
     * @OA\Get(
     *      path="/api/subcategories",
     *      description="Get all Subcategories",
     *      tags={"Subcategories"},
     *      @OA\Response(
     *          response="200",
     *          description="Subcategory",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return JsonResponse|ResponseFactory
     */
    public function index()
    {
        return response($this->subcategoryRepository->all(['category']), Response::HTTP_OK);
    }

    /**
     * Creates new subcategory.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validateAttributes($request);

        $subcategory = $this->subcategoryRepository->create($request->all());

        return response($subcategory, Response::HTTP_OK);
    }

    /**
     * Updates the subcategory.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $subcategory = $this->subcategoryRepository->update($id, $request->all());

        if ($subcategory == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        return response()->json($subcategory, Response::HTTP_OK);
    }

    /**
     * Deletes the subcategory.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $subcategory = $this->subcategoryRepository->find($id);

        if ($subcategory == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $success = $this->subcategoryRepository->delete($id);

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
            'name' => "required|string|max:255|unique:subcategories,name,$id",
            'category_id' => 'required|integer|exists:categories,id',
            'active' => 'required|boolean',
        ];

        $this->validate($request, $rules);
    }
}
