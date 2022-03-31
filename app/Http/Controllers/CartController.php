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
        $cartCount=0;
        $carts=[];
         if(Auth::user()){
            $cartCount = Cart::where('user_id',Auth::user()->id)->count();
            $carts = Cart::with('products')->where('user_id',Auth::user()->id)->get();
            return view('frontend/cart',compact('product_categories','carts','cartCount'));
        } else {
            return "Empty cart";
        }
        
    }

    function cart(Request $request){
    
        if(Auth::user()){
           $product = Product::where('products_id',$request->product_id)->first();
       $id=Auth::user()->id;
           $cart_exist = Cart::where(['user_id'=>$id,'p_id'=>$request->product_id])->first();
           //dd($cart_exist);
        if($cart_exist) {
            Cart::where(['user_id'=>$id,'p_id'=>$request->product_id])
       ->update([
           'qty' => $cart_exist->qty+1
        ]);
            
        }  else {
           
        $cart = new Cart();
            $cart->user_id = $id;
            $cart->p_id = $request->product_id;
            $cart->price = $product->product_price;
            $cart->qty = '1';
            $cart->user_ip = '1';
            $cart->save();
        }

             $record=Cart::where('user_id',$id,)->first();
                 //return view('frontend/cart',compact('product_categories','carts'));
                return redirect()->route('cart');
       // dd($cart);
        //return redirect()->back()->with('success', 'Product add to cart successfully!');
            
                return view('frontend/cart',compact('product_categories','record'));
                //return redirect()->route('cart');
            
        } else {
            return redirect()->route('user_login');
        }
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = Cart::where('id',$request->id)->update([
           'qty' => $request->quantity
        ]);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = Cart::where('id',$request->id)->delete();
           
            session()->flash('success', 'Product successfully removed!');
        }
    }

}