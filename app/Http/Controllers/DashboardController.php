<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class DashboardController extends Controller
{
    public function index(){
        $jumlahProduk = Product::count();
        $jumlahKategoriProduk = ProductCategory::count();
        $jumlahKlikProduk = Product::sum('click');

        return view('dashboard', compact(
            'jumlahProduk','jumlahKategoriProduk','jumlahKlikProduk'
        ));
    }


}
