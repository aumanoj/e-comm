<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login',[AuthController::class, 'index'])->name('user_login');
Route::post('/login',[AuthController::class, 'loginCheck'])->name('loginCheck');
Route::post('/register',[AuthController::class, 'user_store'])->name('user_store');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');



Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/cart',[CartController::class, 'index'])->name('cart');
Route::post('/add_to_cart',[CartController::class, 'cart'])->name('add_to_cart');
Route::get('/product/{id}',[HomeController::class, 'getSingleProduct']);
Route::get('/category/{id}',[HomeController::class, 'getCategory']);



// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

