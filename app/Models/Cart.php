<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id'
    ];

    // cart thuộc user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // cart có nhiều cart_item
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
