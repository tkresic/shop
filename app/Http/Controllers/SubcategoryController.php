<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubcategoryCollection;
use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;
use App\Traits\ModelTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class SubcategoryController extends Controller
{
    use ModelTrait;

    private SubcategoryRepository $subcategoryRepository;

    public function __construct(SubcategoryRepository $subcategoryRepository)
    {
        $this->subcategoryRepository = $subcategoryRepository;
    }

    /**
     * Lists all subcategories.
     *
     * @param Request $request
     * @return SubcategoryCollection|Response|ResponseFactory
     */
    public function index(Request $request)
    {
        $resources = boolval($request->input('resources'));

        if ($resources) {
            $perPage = $request->input('per_page');
            $perPage = isset($perPage) && is_numeric($perPage) ? $perPage : 10;
            //$search = $request->input('search');
            return new SubcategoryCollection(Subcategory::latest()->paginate($perPage));
        }

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
     * Reads the subcategory.
     *
     * @param $id
     * @return Response|ResponseFactory
     */
    public function read(int $id)
    {
        $subcategory = $this->subcategoryRepository->find($id);

        return $subcategory == null ? response(null, Response::HTTP_NOT_FOUND) : response($subcategory, Response::HTTP_OK);
    }

    /**
     * Updates the subcategory.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse {
        $this->validateAttributes($request, $id);

        $subcategory = $this->subcategoryRepository->update($id, $request->all());

        return response()->json($subcategory, Response::HTTP_OK);
    }

    /**
     * Deletes the subcategory.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse {
        $subcategory = $this->subcategoryRepository->find($id);

        if ($subcategory == null) {
            return response()->json(null, Response::HTTP_NOT_FOUND);
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
            'name' => "required|string|max:255|unique:subcategories,name,$id,id,deleted_at,NULL",
            'category_id' => 'required|integer|exists:categories,id',
        ];

        if ($id != -1) {
            $rules['subcategory_id'] = 'required|integer|exists:subcategories,id';
        }

        $this->validate($request, $rules);
    }
}
