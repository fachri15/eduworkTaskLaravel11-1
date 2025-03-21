<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('home', compact('products'));
    }

    public function cart(){
        return view('cart');
    }
}
