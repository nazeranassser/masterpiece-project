<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // إضافة منتج إلى السلة
    public function addToCart(Request $request, $productId)
    {
        // الحصول على المنتج من قاعدة البيانات
        $product = Product::find($productId);

        if (!$product) {
            return back()->with('error', 'Product not found');
        }

        // استرجاع السلة الحالية من الكوكيز أو تهيئتها إذا كانت فارغة
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

        // التحقق إذا كان المنتج موجودًا بالفعل في السلة
        foreach ($cart as $key => $item) {
            if ($item['id'] == $productId) {
                return back()->with('error', 'Product is already in the cart');
            }
        }

        // إضافة المنتج إلى السلة مع الكمية الافتراضية
        $cart[] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1, // الكمية الافتراضية
            'available_quantity' => $product->available_quantity ,// الكمية المتوفرة
            'image' => $product->image
        ];

        // حفظ السلة الجديدة في الكوكيز
        Cookie::queue('cart', json_encode($cart), 60); // الكوكيز صالح لمدة 60 دقيقة

        return back()->with('success', 'Product added to cart');
    }

    // عرض سلة التسوق
    public function viewCart()
    {
        // استرجاع السلة من الكوكيز
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

        return view('theme.cart', compact('cart'));
    }

    // حذف منتج من السلة
    public function removeItemFromCart($id)
    {
        // استرجاع السلة من الكوكيز
        $cart = Cookie::get('cart');

        if ($cart) {
            // تحويل السلة إلى مصفوفة
            $cart = json_decode($cart, true);

            // البحث عن العنصر وحذفه من السلة
            foreach ($cart as $key => $item) {
                if ($item['id'] == $id) {
                    unset($cart[$key]);
                    break;
                }
            }

            // إعادة تعيين السلة المحذوف منها العنصر في الكوكيز
            Cookie::queue('cart', json_encode($cart), 60);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart');
    }

    // تحديث الكمية
    public function updateCart(Request $request)
    {
        // استرجاع السلة من الكوكيز
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

        foreach ($cart as $key => $item) {
            if ($item['id'] == $request->product_id) {
                // التحقق من أن الكمية المطلوبة لا تتجاوز الكمية المتوفرة
                $newQuantity = $request->quantity;
                if ($newQuantity > $item['available_quantity']) {
                    return redirect()->back()->with('error', 'Quantity exceeds available stock');
                }

                // تحديث الكمية
                $cart[$key]['quantity'] = $newQuantity;
                break;
            }
        }

        // حفظ السلة المحدثة في الكوكيز
        Cookie::queue('cart', json_encode($cart), 60);

        return redirect()->back()->with('success', 'Cart updated');
    }
}
