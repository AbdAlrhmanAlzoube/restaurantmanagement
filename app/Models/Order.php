<?php

namespace App\Models;

use App\Enum\OrderStatus;
use App\Enum\OrderType;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_type',
        'table_number',
        'status',
        'total_price',
    ];
    protected $casts = [
        'status' => OrderStatus::class,
        'order_type' => OrderType::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->items->sum(fn($item) => $item->quantity * $item->price);
    }
}
