<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'price', 'quantity', 'category_id', 'image', 'coupon_id'
    ];

    // تعريف العلاقة مع Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coupon()
{
    return $this->belongsTo(Coupon::class, 'coupon_id');
}
}
