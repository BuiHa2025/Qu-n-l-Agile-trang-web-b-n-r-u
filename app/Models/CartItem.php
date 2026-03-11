<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    // cart_item thuộc cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // cart_item thuộc product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
