<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'name',
        'price',
        'details',
        'is_available',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
