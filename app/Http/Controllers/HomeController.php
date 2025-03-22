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

    public function click($product_id){
        $product = Product::findOrFail($product_id);
        $product->click = $product->click + 1;
        $product->save();

        $no_wa = '628xxx';

        $text = 'Halo, Saya mau beli '.$product->name.' dengan jumlah '.$product->stock.' buah';

        $url = 'https://api.whatsapp.com/send?phone='.$no_wa.'&text='.urlencode($text);

        return redirect()->away($url);
    }
}
