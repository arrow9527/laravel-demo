<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class ProductController extends Controller
{
    // 顯示所有產品
    public function index()
    {
        $products = Product::factory()->count(10)->make();
        return response()->json(
            $products
        );
    }

    // 顯示單個產品
    public function show($id)
    {
        $product = Product::factory()->make();
        return response()->json(
            $product
        );
    }
}
