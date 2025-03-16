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

    public function coba() {
        $title = "Coba Controller Blade";
        $ifLogin = true;
        $products = ['Laptop', 'Monitor', 'Keyboard', 'Mouse', 'CPU'];


        return view('coba', compact('title', 'ifLogin', 'products'));
    }
}
