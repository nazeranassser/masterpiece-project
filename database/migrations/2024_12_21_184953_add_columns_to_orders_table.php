<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('customer_email')->after('customer_phone'); // البريد الإلكتروني
            $table->string('customer_first_name')->after('customer_email'); // الاسم الأول
            $table->string('customer_last_name')->after('customer_first_name'); // الاسم الأخير
            $table->text('order_note')->nullable()->after('order_status'); // ملاحظات الطلب
            $table->string('payment_method')->nullable()->after('order_note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // حذف الأعمدة إذا تم التراجع عن الهجرة
            $table->dropColumn(['customer_email', 'customer_first_name', 'customer_last_name', 'order_note', 'payment_method']);
        });
    }
};
