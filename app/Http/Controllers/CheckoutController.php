<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class CheckoutController
{
    public function showCheckoutForm()
    {
        // جلب المنتجات من السلة المخزنة في الكوكيز
        $cart = $_COOKIE['cart'] ?? [];
        
        // استعراض السلة في الواجهة
        return view('theme.checkout', [
            'cart' => $cart
        ]);
    }

    public function placeOrder()
    {
        // جلب بيانات الطلب من النموذج
        $first_name = $_POST['billing-fname'];
        $last_name = $_POST['billing-lname'];
        $email = $_POST['billing-email'];
        $phone = $_POST['billing-phone'];
        $street = $_POST['billing-street'];
        $note = $_POST['order-note'];
        $payment_method = $_POST['payment']; // طريقة الدفع

        // التحقق من وجود السلة
        if (empty($_COOKIE['cart'])) {
            return redirect()->route('cart'); // العودة للسلة إذا كانت فارغة
        }

        $cart = json_decode($_COOKIE['cart'], true);

        // إنشاء الطلب في جدول `orders`
        $order = new Order();
        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->email = $email;
        $order->phone = $phone;
        $order->street = $street;
        $order->note = $note;
        $order->payment_method = $payment_method;
        $order->total_amount = $this->calculateTotal($cart); // حساب المبلغ الإجمالي
        $order->status = 'pending'; // الحالة الأولية
        $order->save();

        // إضافة العناصر إلى جدول `order_items`
        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product->id;
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $product->price;
            $orderItem->save();
        }

        // حذف السلة من الكوكيز بعد إتمام الطلب
        setcookie('cart', '', time() - 3600, '/'); 

        return redirect()->route('order.success'); // توجيه إلى صفحة النجاح
    }

    private function calculateTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            $total += $product->price * $item['quantity'];
        }
        return $total;
    }
}
