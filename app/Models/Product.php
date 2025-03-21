<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
       return $this->belongsTo(ProductCategory::class);
    }
}
