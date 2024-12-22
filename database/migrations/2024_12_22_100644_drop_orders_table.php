<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::dropIfExists('orders'); // حذف جدول orders إذا كان موجودًا
}

public function down()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        // أضف أعمدة الجدول القديم إذا كنت بحاجة لإعادة إنشائه عند التراجع
    });
}
};
