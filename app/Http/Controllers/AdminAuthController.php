<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function login()
    {
        return view('admin.login'); // تأكد من إنشاء هذا الملف لاحقًا
    }

    // تسجيل الدخول
    public function handelLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // التحقق من بيانات تسجيل الدخول
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // إعادة التوجيه إلى لوحة التحكم
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
