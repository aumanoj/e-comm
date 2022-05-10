<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductSubcategory;
use App\models\Cart;
use Auth;
class HomeController extends Controller
{
    function index(){
        $product_categories = ProductCategory::with('sub_categories')->get();
        $home_products = Product::get();
        $carts=[];
        $cartCount=0;
 if(Auth::user()){
            $cartCount = Cart::where('user_id',Auth::user()->id)->count();
            $carts = Cart::with('products')->where('user_id',Auth::user()->id)->get();
 }
//  dd($home_products);
        return view('frontend/home',compact('product_categories','home_products','cartCount','carts'));
    }

    function getSingleProduct($id){
        $product_categories = ProductCategory::with('sub_categories')->get();
        $single_product = Product::where('products_id',$id)->first();
        return view('frontend/singleProduct',compact('product_categories','single_product'));
    }

    function getCategory($id){
        $product_categories = ProductCategory::with('sub_categories')->get();
        $product_subcategories = ProductSubcategory::where('products_categories_id',$id)->get();
        if($product_subcategories){

            return view('frontend/category',compact('product_categories','product_subcategories'));
        }else{
            return "Not Found";
        }
    }
}