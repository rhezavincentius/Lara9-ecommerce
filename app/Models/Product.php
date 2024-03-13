<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'stock'
    ];
    
    //1 product bisa punya banyak order
    public function transactions (){
        return $this->hasMany(Transaction::class);
    }

    // 1 product bisa punya banyak cart
    public function carts (){
        return $this->hasMany(Cart::class);
    }
}
