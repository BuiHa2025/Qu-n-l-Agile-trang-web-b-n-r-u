<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    // order_item thuộc order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // order_item thuộc product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
