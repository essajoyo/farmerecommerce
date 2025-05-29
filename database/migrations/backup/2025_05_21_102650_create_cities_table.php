<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id('city_id');
            $table->string('city');
            $table->unsignedBigInteger('state_id_fk');
            $table->timestamps();

            $table->foreign('state_id_fk')->references('state_id')->on('states')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
