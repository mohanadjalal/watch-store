<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => view('home', ['images' => Product::find(18)->first()])); //here 

Route::get('/products', [ProductController::class, "index"]);
Route::get('/product/{product}', [ProductController::class, "show"]);
Route::get('products/create', [ProductController::class, "create"])->middleware('admin');
Route::post('product/store', [ProductController::class, "store"])->middleware('admin');
Route::get('product/update/{product}', [ProductController::class, "edit"])->middleware('admin');
Route::post('product/update/{product}', [ProductController::class, "update"])->middleware('admin');
Route::post('product/destroy/{product}', [ProductController::class, "destroy"])->middleware('admin');


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('login', [LoginController::class, 'create'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::get('logout', [LoginController::class, 'destroy'])->middleware('auth');



Route::get('/cart', [CartController::class, "index"])->middleware('auth');
Route::post('/cart', [CartController::class, "store"])->middleware('auth');
Route::post('/cart/destroy/{cart}', [CartController::class, "destroy"])->middleware('auth');


Route::get('profile', [ProfileController::class, "index"])->middleware('auth');
Route::post('profile/{user}', [ProfileController::class, "update"])->middleware('auth');


Route::get("users", [UserController::class, "index"])->middleware("admin");
Route::post('payment', [PaymentController::class, "store"])->middleware(("customer"));