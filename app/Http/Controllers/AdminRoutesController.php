<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRoutesController extends Controller
{
   

    public function products()
    {
        return view('admin.products.index');
    }

    public function orders()
    {
        return view('admin.orders.index');
    }

    // يمكنك إضافة المزيد من المسارات هنا حسب الحاجة
}
