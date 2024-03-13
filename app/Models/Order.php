<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_paid',
        'payment_receipt'
    ];

    //1 order hanya punya 1 user
    public function user (){
        return $this->belongsTo(User::class);
    }

    //1 order punya banyak product
    public function transactions (){
        return $this->hasMany(Transaction::class);
    }
}
