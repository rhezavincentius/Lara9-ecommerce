<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    Protected $fillable = [
        'order_id',
        'product_id',
        'amount'
    ];

    //1 Transaksi cuma punya 1 order_id
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    //1 Transaksi cuma punya 1 jenis product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
