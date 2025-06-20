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
        Schema::create('cart_products', function (Blueprint $table) {
                $table->id('cart_product_id');
                $table->integer('quantity')->default(1);
                $table->unsignedBigInteger('product_id');
                $table->unsignedBigInteger('cart_id');
                $table->string('order_status')->default('pending');
                $table->timestamps();

                // Add foreign key constraints if needed
                $table->foreign("cart_id")->references("cart_id")->on("carts")->onDelete("cascade");
                $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
