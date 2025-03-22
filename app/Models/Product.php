<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'price', 'stock', 'product_category_id', 'image'];

    public function category(){
       return $this->belongsTo(ProductCategory::class);
    }
}
