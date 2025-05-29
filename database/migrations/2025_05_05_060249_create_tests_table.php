<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_create_tests_table.php
public function up()
{
    Schema::create('tests', function (Blueprint $table) {
        $table->id();
        $table->string('subject');
        $table->string('title');
        $table->date('date');
        $table->integer('total_marks');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
