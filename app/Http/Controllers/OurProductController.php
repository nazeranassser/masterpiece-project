<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class OurProductController extends Controller
{
    // عرض المنتجات بناءً على التصنيف أو نوع المنتج مع دعم الفلاتر
    public function showProducts(Request $request, $categoryName)
    {
        // جلب التصنيف بناءً على الاسم
        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found');
        }

        // بدء جلب المنتجات المرتبطة بالفئة
        $query = Product::where('category_id', $category->id);

        // تطبيق الفلاتر إذا وُجدت
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }

        if ($request->has('show')) {
            $products = $query->paginate($request->show);
        } else {
            $products = $query->paginate(8); // عرض 12 منتجًا افتراضيًا
        }

        // تمرير البيانات إلى الـ View
        return view('theme.ourproducts', compact('products', 'category'));
    }
}

