<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    public function sub_categories(){
         return $this->hasMany(ProductSubcategory::class, 'products_categories_id', 'products_categories_id');
   }
}
