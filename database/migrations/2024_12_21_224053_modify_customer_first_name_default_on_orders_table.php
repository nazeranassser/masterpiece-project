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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('customer_first_name')->default('غير محدد')->change();
        });
    }
    
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('customer_first_name')->default(null)->change();
        });
    }
    
};
