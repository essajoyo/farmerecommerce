<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id('state_id');
            $table->string('state_name');
            $table->unsignedBigInteger('country_id_fk');
            $table->timestamps();

            $table->foreign('country_id_fk')->references('country_id')->on('countries')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
