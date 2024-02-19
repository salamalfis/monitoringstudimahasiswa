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
        Schema::create('menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('route');
            $table->string('icon');
            $table->timestamps();
            
        });

        Schema::create('submenu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('route');
            $table->uuid('menu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('submenu');
    }
};
