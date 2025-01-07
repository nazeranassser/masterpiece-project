<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getBestSellersThisWeek($id )
    {
        // Example logic to fetch best sellers of the week
        return self::select('product_id', DB::raw('COUNT(*) as total_sales'))
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->groupBy('product_id')
            ->orderByDesc('total_sales')
            ->get();
    }
}
