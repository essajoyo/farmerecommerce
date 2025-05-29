<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('conects_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->timestamps();

            // Foreign keys
      
            $table->foreign("post_id")->references("post_id")->on("posts")->onDelete("cascade");
            $table->foreign("subcategory_id")->references("id")->on("sub_categories")->onDelete("cascade");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conects_category');
    }
};
