<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class OurProductController extends Controller
{
    // عرض المنتجات بناءً على التصنيف أو نوع المنتج
    // في الكنترولر
public function showProducts($category)
{
    // جلب المنتجات بناءً على الفئة
    $category = Category::where('name', $category)->first(); // افترض أن الاسم هو الذي يتم البحث عنه
    $products = Product::where('category_id', $category->id)->get();

    // تمرير المنتجات إلى الـ View لعرضها
    return view('theme.ourproducts', compact('products', 'category'));
}

}
