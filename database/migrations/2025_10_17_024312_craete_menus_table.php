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
         Schema::create('menus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('category_id');
            $table->uuid('cafe_id');
            $table->string('name', 100);
            $table->text('description');
            $table->decimal('price', 10,2);
            $table->string('image', 255);
            $table->boolean('is_featured');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('cafe_id')->references('id')->on('cafes')->onDelete('cascade');

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('menus');
    }
};
