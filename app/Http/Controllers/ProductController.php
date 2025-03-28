<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->paginate(5);
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('dashboard.products.tambah', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'product_category_id' => ['required', 'exists:product_categories,id'],
        'stock' => ['required', 'numeric'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif']
    ]);

    $category = ProductCategory::findOrFail($request->product_category_id);

    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->product_category_id = $category->id;

    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }

    $product->save();

    return redirect()
        ->route('product.index')
        ->with('success', 'Product Berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'product_category_id' => ['required', 'exists:product_categories,id'],
        'stock' => ['required', 'numeric'],
        'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif']
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->product_category_id = $request->product_category_id;

    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }

    $product->save();

    return redirect()
        ->route('product.index')
        ->with('success', 'Product Berhasil di update!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

          return redirect()
        ->route('product.index')
        ->with('success', 'Product Berhasil di hapus!');

    }
}
