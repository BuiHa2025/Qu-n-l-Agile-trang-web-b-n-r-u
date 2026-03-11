<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'customer_name',
        'phone',
        'address',
        'total_price',
        'status'
    ];

    // order thuộc user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // order có nhiều order_item
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
