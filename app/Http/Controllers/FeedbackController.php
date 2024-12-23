<?php

namespace App\Http\Controllers;

use App\Models\Message;

class FeedbackController extends Controller
{
    public function feedback()
    {
        // استرجاع آخر 4 رسائل من جدول messages
        $messages = Message::latest()->take(4)->get();
        

        // تمرير الرسائل إلى العرض
        return view('theme.index', compact('messages'));
    }
}

