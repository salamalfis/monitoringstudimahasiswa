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
        Schema::create('dosenwali', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreign('id')
                ->references('id') // users id
                ->on('users')
                ->onDelete('cascade');
            $table->string('nama');
            $table->integer('nip')->unique();
            $table->string('kodedosen')->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosenwali');
    }
};
