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
            $table->foreignId('seller_id')->nullable()->unsigned();
            $table->string('title')->nullable();
            $table->string('price')->nullable()->check('price>0');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('size')->nullable();
            $table->foreignId('category_id')->nullable()->unsigned();
            $table->foreignId('sub_category_id')->nullable()->unsigned();
            $table->foreignId('city_id')->nullable()->unsigned();
            $table->string('color')->nullable();
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
