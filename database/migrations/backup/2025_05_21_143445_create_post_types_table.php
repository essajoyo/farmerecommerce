<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
{
    Schema::create('post_types', function (Blueprint $table) {
        $table->unsignedBigInteger('post_type_id')->primary(); 
        $table->string('post_type');
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('post_types');
    }
};


