<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function about()
    {
        return view('theme.about');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function cart()
    {
        return view('theme.cart');
    }

    public function checkout()
    {
        return view('theme.checkout');
    }

    public function wishlist()
    {
        return view('theme.wishlist');
    }
    
}
