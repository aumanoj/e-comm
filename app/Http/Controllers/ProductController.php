<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\models\Cart;
use Auth;
class ProductController extends Controller
{
    function cart(Request $request){
        return "cart here";
    }

    public function productList()
    {
        $products = Product::all();
$carts=[];
        $cartCount=0;
 if(Auth::user()){
            $cartCount = Cart::where('user_id',Auth::user()->id)->count();
            $carts = Cart::with('products')->where('user_id',Auth::user()->id)->get();
 }
        return view('products', compact('products','cartCount','carts'));
    }
}