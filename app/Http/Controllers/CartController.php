<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Productcategory;
use App\models\Product;
use App\models\Cart;
use Auth;
class CartController extends Controller
{
   
    function index(){
        //return "cart here";
        $product_categories = Productcategory::get();
         if(Auth::user()){
            $cartCount = Cart::where('user_id',Auth::user()->id)->count();
            $carts = Cart::with('products')->where('user_id',Auth::user()->id)->get();
            return view('frontend/cart',compact('product_categories','carts','cartCount'));
        } else {
            return "Empty cart";
        }
        
    }

    function cart(Request $request){
        //return "cart here";

        $product_categories = Productcategory::get();
        if(Auth::user()){
            //return Auth::user()->id;
            $carts = Cart::with('products')->where('user_id',Auth::user()->id)->get();
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->p_id = $request->product_id;
            $cart->price = $request->product_price;
            $cart->qty = '1';
            $cart->user_ip = '1';
            if($cart->save()){
                 //return view('frontend/cart',compact('product_categories','carts'));
                return redirect()->route('cart');
            } 
        } else {
            return redirect()->route('user_login');
        }
    }
}
