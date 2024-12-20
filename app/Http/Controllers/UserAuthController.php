<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }
    // عرض صفحة تسجيل الدخول
    public function login()
    {
        return view('theme.login'); // تأكد من إنشاء هذا الملف لاحقًا
    }

    // تسجيل الدخول
    public function handelLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // التحقق من بيانات تسجيل الدخول
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // إعادة التوجيه إلى الصفحة الرئيسية
            return redirect()->route('theme.index');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('theme.login');
    }
}
