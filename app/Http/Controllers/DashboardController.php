<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;

class DashboardController extends Controller
{

    /**
     * Returns grouped products.
     *
     * @OA\Get(
     *      path="/api/dashboard",
     *      description="Get grouped Products",
     *      tags={"Dashboard"},
     *      @OA\Response(
     *          response="200",
     *          description="Dashboard",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return Response
     */
    public function index(): Response
    {
        $products = Product::get()
            ->groupBy('subcategory.category.name')
            ->transform(function ($product) {
                return $product->groupBy('subcategory.name');
            });

        return response($products, Response::HTTP_OK);
    }
}
