<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function cart(Request $request){
        return "cart here";
    }

    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}
