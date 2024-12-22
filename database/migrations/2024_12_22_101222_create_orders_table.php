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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('customer_first_name'); // الاسم الأول للعميل
            $table->string('customer_last_name');  // الاسم الأخير للعميل
            $table->string('customer_email');      // البريد الإلكتروني
            $table->string('customer_phone');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_method');
            $table->string('status')->default('pending');
            $table->text('shipping_address');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
