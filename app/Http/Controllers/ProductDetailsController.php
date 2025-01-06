<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        // جلب تفاصيل المنتج بناءً على المعرف
        $product = Product::find($id);

        // التحقق من وجود المنتج
        if (!$product) {
            return abort(404, 'Product not found');
        }

        // جلب المنتجات المشابهة بناءً على الفئة
        $similarProducts = Product::where('category_id', $product->category_id)
                                   ->where('id', '!=', $id) // استبعاد المنتج الحالي
                                   ->take(4) // عدد المنتجات المشابهة
                                   ->get();

                                   $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);

        // عرض الصفحة مع البيانات
        return view('theme.productdetail', [
            'product' => $product,
            'similarProducts' => $similarProducts,
            'totalItems' => $totalItems
        ]);
    }
}

