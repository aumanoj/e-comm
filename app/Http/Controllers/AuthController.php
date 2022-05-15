<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ProductCategory;
use App\models\User;
use Hash;
use Auth;
class AuthController extends Controller
{
    function index(){
        $product_categories = ProductCategory::get();
        return view('frontend.login',compact('product_categories'));
    }

    function user_store(Request $request){
        //return $request->all();

        $data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'address'=> 'address',
            'password'=> Hash::make($request->password)
        );

        $user = User::create($data);
        return redirect()->route('user_login');
    }

    function loginCheck(Request $request){
        $data = array(
            'email'=> $request->email,
            'password'=> $request->password
        );

        if(Auth::attempt($data)){
            return redirect()->route('home');
        } else {
            return back()->withErrors(['message'=>'invalid email or pasword']);
        }

    }

    function logout(){
        Auth::logout();
        return redirect()->route('user_login');
    }
}
