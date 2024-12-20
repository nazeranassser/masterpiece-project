<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.dashboard'); // صفحة لوحة التحكم
    }
}
