<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;

class CashRegisterController extends Controller
{
    /**
     * Returns grouped products.
     *
     * @return Response
     */
    public function index(): Response {
        $products = Product::get()
            ->groupBy('subcategory.category.name')
            ->transform(function ($product) {
                return $product->groupBy('subcategory.name');
            });
        return response($products, Response::HTTP_OK);
    }
}
