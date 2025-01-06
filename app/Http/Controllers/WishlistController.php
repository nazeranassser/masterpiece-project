<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class WishlistController extends Controller
{
    // عرض الـ Wishlist
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);

        return view('theme.wishlist', compact('wishlist' , 'totalItems'));
    }

    // إضافة منتج إلى الـ Wishlist
    public function add($id)
    {
        // افترض أن لديك موديل خاص بالمنتجات
        $product = \App\Models\Product::find($id);

        if ($product) {
            // إضافة المنتج إلى الكوكيز
            $wishlist = session()->get('wishlist', []);
            
            // تحقق إذا كان المنتج موجوداً بالفعل في الـ Wishlist
            if (!in_array($id, array_column($wishlist, 'id'))) {
                $wishlist[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                   
                    'image' => $product->image,
                    'category_name' => $product->category->name,
                    
                ];

                session()->put('wishlist', $wishlist);
                session()->flash('message', 'Product added to wishlist!');
            }
        }

        return redirect()->route('wishlist');
    }

    // إزالة منتج من الـ Wishlist
    public function remove($id)
    {
        $wishlist = session()->get('wishlist', []);

        foreach ($wishlist as $key => $item) {
            if ($item['id'] == $id) {
                unset($wishlist[$key]);
            }
        }

        session()->put('wishlist', array_values($wishlist));
        return redirect()->route('wishlist');
    }

    // مسح جميع العناصر من الـ Wishlist
    public function clear()
    {
        session()->forget('wishlist');
        return redirect()->route('wishlist');
    }
}

