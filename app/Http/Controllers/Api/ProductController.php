<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return ProductResource::collection(Product::all());

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Success fetch all Notam Locations & Codes',
        //     'data' => $location
        // ]);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);
        
        return $product;
    }

    public function delete(Product $product)
    {
        $product->delete();

        return $product;
    }
}
