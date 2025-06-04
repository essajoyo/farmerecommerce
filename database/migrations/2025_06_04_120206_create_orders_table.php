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
        $table->id('order_id'); // Primary Key
        $table->string('name'); // Customer name
        $table->string('email'); // Customer email
        $table->text('billing_address');
        $table->text('shipping_address')->nullable();
        $table->unsignedBigInteger('cart_id')->nullable(); 
        $table->unsignedBigInteger('city_id');              
        $table->unsignedBigInteger('method_id');            
        //$table->unsignedBigInteger('status_id');            
        $table->string('discount_code')->nullable();
        $table->enum('order_status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
        $table->timestamps();

        // Foreign Keys
        $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade');
       // $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
