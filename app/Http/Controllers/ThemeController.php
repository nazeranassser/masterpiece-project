<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Cookie;


use Illuminate\Http\Request;

class ThemeController extends Controller
{ 
    public function index(Request $request)
{
    // جلب آخر 4 منتجات مضافة إلى قاعدة البيانات
    $newArrivals = Product::orderBy('created_at', 'desc')->limit(4)->get();
    $themeMessages = Message::latest()->take(4)->get();
    

    $categories = Category::all();
    
    // تصفية المنتجات حسب الفئة إن وجدت
    if ($request->has('category')) {
        $categoryName = $request->input('category');
        $products = Product::whereHas('category', function ($query) use ($categoryName) {
            $query->where('name', $categoryName); // استخدم 'name' بدلاً من 'slug'
        })->get();
    } else {
        $products = Product::all(); // جلب كل المنتجات في حالة عدم اختيار فئة
    }
    
    // جلب جميع المنتجات
    $products = Product::all();

    // جلب المنتجات مع الأنواع المرتبطة بها
    $productsByType = Product::with('category')->get();  // assuming 'type' is the relationship name
    $bestSellersThisWeek = OrderProduct::getBestSellersThisWeek(2);

    $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
    
    // حساب العدد الإجمالي للمنتجات في السلة
    $totalItems = array_reduce($cart, function ($carry, $item) {
        return $carry + $item['quantity'];
    }, 0);

    // عرض الصفحة الرئيسية مع تمرير البيانات
    return view('theme.index', compact('newArrivals', 'products', 'productsByType','themeMessages','categories','bestSellersThisWeek','totalItems'));
}

    public function about()
    {
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);
        return view('theme.about' , compact('totalItems'));
    }

    public function contact()
    {
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);
        return view('theme.contact'  , compact('totalItems'));
    }

   

    public function wishlist()
    {
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);
        return view('theme.wishlist' , compact('totalItems'));
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
    
    // جلب جميع الفئات
    $categories = Category::all();
    
    // تصفية المنتجات حسب الفئة إن وجدت
    if ($request->has('category')) {
        $categoryName = $request->input('category');
        $products = Product::whereHas('category', function ($query) use ($categoryName) {
            $query->where('name', $categoryName); 
        })->get();

    } else {
        $products = Product::all(); 
    }

    return view('theme.index', compact('products', 'categories'));
}

public function feedback()
{
    // استرجاع آخر 4 رسائل من جدول messages
    $themeMessages = Message::latest()->take(4)->get();
    
    

    // تمرير الرسائل إلى العرض
    return view('theme.index', compact('themeMessages'));
} 

}
