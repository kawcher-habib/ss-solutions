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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('fName', 100);
            $table->string('lName', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('roll');
            $table->longText('area_address');
            $table->string('bod');
            $table->timestamp('create_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
