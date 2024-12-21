<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ThemeController extends Controller
{ 
    public function index(Request $request)
{
    // جلب آخر 4 منتجات مضافة إلى قاعدة البيانات
    $newArrivals = Product::orderBy('created_at', 'desc')->limit(4)->get();
    
    // جلب جميع المنتجات
    $products = Product::all();

    // جلب المنتجات مع الأنواع المرتبطة بها
    $productsByType = Product::with('category')->get();  // assuming 'type' is the relationship name

    // عرض الصفحة الرئيسية مع تمرير البيانات
    return view('theme.index', compact('newArrivals', 'products', 'productsByType'));
}

    public function about()
    {
        return view('theme.about');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function cart()
    {
        return view('theme.cart');
    }

    public function checkout()
    {
        return view('theme.checkout');
    }

    public function wishlist()
    {
        return view('theme.wishlist');
    }

    // دالة عرض المنتجات الجديدة
    public function newArrivals()
    {
        // جلب آخر 4 منتجات مضافة إلى قاعدة البيانات
        $newArrivals = Product::orderBy('created_at', 'desc')->limit(4)->get();

        // عرض الصفحة الرئيسية مع تمرير البيانات
        return view('theme.index', compact('newArrivals'));
    }
    public function ourProducts(Request $request)
{
    // جلب جميع المنتجات مع تصنيفها حسب النوع
    $products = Product::all(); // جلب كل المنتجات من قاعدة البيانات

    // جلب جميع الأنواع (الفئات) المرتبطة بالمنتجات
    $categories = Category::all(); // تأكد من أن لديك موديل Category مرتبط بالمنتجات

    // إذا تم اختيار نوع (فئة) من قبل المستخدم، فلترة المنتجات بناءً على الفئة
    if ($request->has('category')) {
        $categorySlug = $request->input('category');
        $products = Product::whereHas('category', function($query) use ($categorySlug) {
            $query->where('slug', $categorySlug); // تأكد من أن الفئة يتم تحديدها باستخدام "slug"
        })->get();
    }

    return view('theme.index', compact('products', 'categories'));
}

}
