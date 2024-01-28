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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid('id');

            $table->foreign('id')
                ->references('id') // users id
                ->on('users')
                ->onDelete('cascade');
            $table->integer('nim')->unique();
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->tinyInteger('angkatan');
            $table->string('kelas');
            $table->string('dosenwali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
