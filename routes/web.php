<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/cart',[HomeController::class, 'cart']);

Route::get('/products', function() {
    return "Ini Route Prooduk";
});
Route::get('/carts', function() {
    return "Ini Route Cart";
});
Route::get('/checkout', function() {
    return "Ini Route Checkout";
});

Route::get('/coba', [ContohController::class, 'coba']);

Route::get('/contoh', [ContohController::class, 'index']);

Route::resource('products-resource', ProductController::class);
