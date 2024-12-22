<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // العلاقة مع الطلب (Order)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // العلاقة مع المنتج (Product)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
