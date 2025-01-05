<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display all orders
    public function index()
    {
        // Fetch all orders from the database
        $orders = Order::with('user')->get();
         

        // Return the view with the orders data
        return view('admin.orders.index', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
{
    // العثور على الطلب بناءً على ID
    $order = Order::findOrFail($id);

    // تحديث حالة الطلب
    $order->status = $request->input('status');
    $order->save();

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->route('admin.order.index')->with('success', 'Order status updated successfully.');
}
}

