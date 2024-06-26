<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProductController;
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("/search",[ProductController::class,'search']);

Route::post("/add_to_cart",[ProductController::class,'addToCart']);
Route::get ("cartlist",[ProductController::class,'Mycart']);
Route::post("/add_to_wishlist",[ProductController::class,'addToWishlist']);
Route::get ("wishlist",[ProductController::class,'Mywishlist']);


