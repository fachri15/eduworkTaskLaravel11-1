<?php

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
