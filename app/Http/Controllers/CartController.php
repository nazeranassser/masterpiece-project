<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // إضافة منتج إلى السلة
    public function addToCart(Request $request, $product_id)
    {
        // الحصول على المنتج من قاعدة البيانات
        $product = Product::find($product_id);

        if (!$product) {
            return back()->with('error', 'Product not found');
        }

        // استرجاع السلة الحالية من الكوكيز أو تهيئتها إذا كانت فارغة
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

        // التحقق إذا كان المنتج موجودًا بالفعل في السلة
        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $product_id) {
                return back()->with('error', 'Product is already in the cart');
            }
        }

        // إضافة المنتج إلى السلة مع الكمية الافتراضية
        $cart[] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1, // الكمية الافتراضية
            'available_quantity' => $product->available_quantity, // الكمية المتوفرة
            'image' => $product->image
        ];

        // تخزين السلة الجديدة في الكوكيز
        Cookie::queue('cart', json_encode($cart), 60); // الكوكيز صالح لمدة 60 دقيقة

        return back()->with('success', 'Product added to cart');
    }

    // عرض سلة التسوق
    public function viewCart()
    {
        // استرجاع السلة من الكوكيز
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
        
        // حساب المجموع الكلي للمنتجات في السلة
        $total_amount = 0;
        foreach ($cart as $item) {
            $total_amount += $item['price'] * $item['quantity'];
        }

        return view('theme.cart', compact('cart', 'total_amount'));
    }

    // حذف منتج من السلة
    public function removeItemFromCart($id)
    {
        // استرجاع السلة من الكوكيز
        $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

        if ($cart) {
            // البحث عن العنصر وحذفه من السلة
            foreach ($cart as $key => $item) {
                if ($item['product_id'] == $id) {
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
            if ($item['product_id'] == $request->product_id) {
                // التحقق من أن الكمية المطلوبة لا تتجاوز الكمية المتوفرة
                $newQuantity = $request->quantity;
                if ($newQuantity > $item['quantity']) {
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

    // إتمام الشراء (Checkout)
    public function checkout(Request $request)
{
    // تعيين قيمة افتراضية لـ user_id إذا لم يكن المستخدم مسجل الدخول
    $userId = Auth::check() ? Auth::id() : 0; // إذا كان المستخدم مسجل دخول يتم استخدام ID الخاص به، وإلا تعيين 0

    // استرجاع السلة من الكوكيز
    $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];

    if (empty($cart)) {
        return back()->with('error', 'Your cart is empty');
    }

    // جمع المعلومات اللازمة للطلب
    $total_amount = 0;
    foreach ($cart as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    // تمرير بيانات السلة إلى الصفحة
    return view('theme.checkout', [
        'cart' => $cart,
        'total_amount' => $total_amount,
        'userId' => $userId
    ]);
}

// إتمام الشراء (Checkout - حفظ البيانات)
public function placeOrder(Request $request)
{
    

    $request->validate([
        'billing_fname' => 'required|string|max:255',
        'billing_lname' => 'required|string|max:255',
        'billing_email' => 'required|email|max:255',
        'billing_phone' => 'required|string|max:15',
        'billing_street' => 'required|string|max:255',
        'order_note' => 'nullable|string|max:1000',
    ]);

    // تحقق من أن السلة ليست فارغة
    $cart = json_decode(Cookie::get('cart') ?? '[]', true);

    if (empty($cart)) {
        return redirect()->route('cart')->with('error', 'سلتك فارغة');
    }

    // جمع بيانات الطلب من الفورم
    $total_amount = 0;
    foreach ($cart as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    // إنشاء الطلب في قاعدة البيانات
    $order = Order::create([
        'user_id' => Auth::check() ? Auth::id() : 0,
        'customer_first_name' => $request->billing_fname,
        'customer_last_name' => $request->billing_lname,
        'customer_email' => $request->billing_email,
        'customer_phone' => $request->billing_phone,
        'total_amount' => $total_amount,
        'payment_method' => $request->payment_method,
        'status' => 'pending',
        'shipping_address' => $request->billing_street,
    ]);

    // إضافة المنتجات إلى الطلب
    foreach ($cart as $item) {
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $item['product_id'],
            'quantity' => $item['quantity'],
            'price' => $item['price'],
        ]);
    }

    // تفريغ السلة بعد الإتمام
    Cookie::queue(Cookie::forget('cart'));

    return redirect()->route('theme.index')->with('success', 'Order placed successfully');
}


    

    // صفحة نجاح الطلب
    public function orderSuccess()
    {
        return view('theme.order_success');
    }
}

