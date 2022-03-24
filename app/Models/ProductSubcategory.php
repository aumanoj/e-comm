<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    use HasFactory;

    public function categories(){
        return $this->hasMany(ProductCategory::class, 'products_subcategories_id', 'products_subcategories_id');
  }

}
