<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // عرض جميع الرسائل
    public function index()
    {
        // جلب الرسائل الأخيرة مع التصفح عبر الصفحات
        $messages = Message::latest()->paginate(10);

        // إرجاع صفحة عرض الرسائل في لوحة التحكم
        return view('admin.messages.index', compact('messages'));
    }

    // تخزين رسالة جديدة
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // إنشاء الرسالة وحفظها في قاعدة البيانات
        Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // إعادة توجيه المستخدم أو عرض رسالة تأكيد
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    // عرض تفاصيل رسالة معينة
    public function show($id)
    {
        // جلب الرسالة من قاعدة البيانات
        $message = Message::findOrFail($id);

        // إرجاع صفحة تفاصيل الرسالة في لوحة التحكم
        return view('admin.messages.show', compact('message'));
    }

    // حذف رسالة
    public function destroy($id)
    {
        // جلب الرسالة وحذفها
        $message = Message::findOrFail($id);
        $message->delete();

        // إعادة التوجيه مع رسالة تأكيد بعد الحذف
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully!');
    }
}
