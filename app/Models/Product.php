<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id'
    ];

    // product thuộc category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // product có nhiều cart_item
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // product có nhiều order_item
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
