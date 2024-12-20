<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // تحقق من أن المستخدم مسؤول
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // السماح بالدخول
        }

        // إذا لم يكن المستخدم مسؤولًا، يتم التوجيه للصفحة الرئيسية
        return redirect('/')->with('error', 'Unauthorized Access');
    }
}

