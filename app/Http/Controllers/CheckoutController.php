<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    public function index()
    {
        // هنا يمكنك معالجة السلة، عرض تفاصيل المنتجات، عنوان الشحن، إلخ
        return view('theme.checkout');
    }
    public function showCheckout()
{
    $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
    $total_amount = array_reduce($cart, function ($carry, $item) {
        return $carry + $item['quantity'] * $item['price'];
    }, 0);

    return view('theme.checkout', compact('cart', 'total_amount'));
}


public function placeOrder(Request $request)
{
    $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

    if (empty($cart)) {
        return redirect()->route('cart.index');
    }

    $order = new Order();
    $order->fill($request->only(['first_name', 'last_name', 'email', 'phone', 'street', 'note']));
    $order->payment_method = $request->input('payment');
    $order->total_amount = $this->calculateTotal($cart);
    $order->order_status = 'pending';
    $order->save();

    foreach ($cart as $item) {
        $orderItem = new OrderItem([
            'product_id' => $item['id'],
            'quantity' => $item['quantity'],
            'price' => $item['price'],
        ]);
        $order->orderItems()->save($orderItem);
    }

    Cookie::queue('cart', '', -1); // حذف الكوكيز

    return redirect()->route('theme.index');
}

private function calculateTotal($cart)
{
    return array_reduce($cart, function ($total, $item) {
        return $total + $item['price'] * $item['quantity'];
    }, 0);
}

}
