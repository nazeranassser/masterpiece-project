<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Auto-incrementing Order ID (Primary Key)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign Key for user
            $table->text('shipping_address'); // Shipping Address
            $table->string('customer_phone', 15); // Customer Phone (Limit to 15 characters)
            $table->timestamp('placed_on')->nullable(); // Date and time when the order was placed
            $table->string('order_status', 50)->default('pending'); // Order Status (Default: 'pending')
            $table->decimal('total', 10, 2); // Total cost of the order
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
