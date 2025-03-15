<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index(){
        $title = "Contoh Halaman Blade";
        $products = ['Laptop', 'Monitor', 'Keyboard', 'Mouse', 'CPU'];
        // return view('contoh', ['products' => $products, 'title' => $title]);
        return view('contoh', compact('products', 'title'));
    }
}
