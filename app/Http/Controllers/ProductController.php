<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request): JsonResponse
    {

        $products = Product::all();

        return response()->json($products);
    }

    public function addNewProduct(Request $request): JsonResponse
    {
        $product = Product::create($request->all());

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json('Product not created', 500);
        }
    }


}
