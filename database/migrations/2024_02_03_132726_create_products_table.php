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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('cat_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
            $table->integer('size');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->string('code');
            $table->text('short_desc');
            $table->text('long_desc');
            $table->string('old_price');
            $table->string('new_price');
            $table->string('quantity');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');
            $table->text('image5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
