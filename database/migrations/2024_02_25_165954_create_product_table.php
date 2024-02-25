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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('title');
            $table->string('description');
            $table->float('price');
            $table->float('supplierPrice');
            $table->string('product_model');
            $table->string('brand');
            $table->integer('cnt');
            $table->string('img');
            $table->timestamp('create_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
