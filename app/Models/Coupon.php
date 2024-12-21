<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'discount', 'is_active'];

    public function products()
{
    return $this->hasMany(Product::class, 'coupon_id');
}
}
