<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Message;
use App\Models\User;

class AdminController extends Controller
{
    // عرض صفحة تسجيل الدخول للإدمن
    public function showLoginForm()
    {
        return view('admin.login'); // ملف Blade مخصص للإدمن
    }

    // معالجة تسجيل الدخول
    public function login(Request $request)
    {
        // التحقق من بيانات تسجيل الدخول
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role === 'admin') {
            // تسجيل دخول ناجح، إعادة التوجيه إلى لوحة التحكم
            return redirect()->route('admin.dashboard');
        }

        // بيانات تسجيل دخول خاطئة
        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials or not an admin.',
        ]);
    }

    public function dashboard()
    {
        // استرجاع عدد الرسائل
        $messagesCount = Message::count(); // افترض أن نموذج الرسائل اسمه Message
        
        // استرجاع عدد الطلبات
        $ordersCount = Order::count();
        
        // استرجاع عدد المستخدمين
        $usersCount = User::count();
        
        // استرجاع آخر 5 طلبات فقط مع ترتيبها حسب تاريخ الإنشاء
        $orders = Order::with('user')->latest()->take(5)->get();
        
        // تمرير المتغيرات إلى واجهة لوحة التحكم
        return view('admin.dashboard', compact('orders', 'messagesCount', 'ordersCount', 'usersCount'));
    }
    
}
