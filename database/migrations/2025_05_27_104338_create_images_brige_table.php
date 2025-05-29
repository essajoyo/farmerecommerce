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
        Schema::create('images_brige', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
             $table->unsignedBigInteger('images_id');
          
            $table->timestamps();

            $table->foreign("post_id")->references("post_id")->on("posts")->onDelete("cascade");
            $table->foreign("images_id")->references("id")->on("images")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_brige');
    }
};
