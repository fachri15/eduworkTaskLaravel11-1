<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Ini Route Utama";
});

Route::get('/products', function() {
    return "Ini Route Prooduk";
});
Route::get('/carts', function() {
    return "Ini Route Cart";
});
Route::get('/checkout', function() {
    return "Ini Route Checkout";
});

Route::get('/contoh', [ContohController::class, 'index']);

Route::resource('products-resource', ProductController::class);
