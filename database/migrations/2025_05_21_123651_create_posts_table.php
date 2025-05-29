<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id'); 
            $table->string('title');
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('active')->default(true);
            $table->date('issue_date')->nullable();
            $table->unsignedBigInteger('post_type_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign("post_type_id")->references("post_type_id")->on("post_types")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            //$table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade");
           // $table->foreign('post_type_id')->references('post_type_id')->on('post_types');

        });
    }

    public function down(): void
    {
        
            $table->dropForeign("posts_post_type_id_foreign");
            $table->dropForeign("posts_user_id_foreign");
           // $table->dropForeign("posts_tag_id_foreign");
    }
};
