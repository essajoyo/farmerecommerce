<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id('loc_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            // Foreign key constraints
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade');
             $table->foreign('state_id')->references('state_id')->on('states')->onDelete('cascade');
             $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
