<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = 'cart';
    public $timestamps = false;

    public function products(){
         return $this->hasOne(Product::class, 'products_id', 'p_id');
   }

}
