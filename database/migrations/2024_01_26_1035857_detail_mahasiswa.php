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
        Schema::create('detail_mahasiswa', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreign('id')
                ->references('id') // mahasiswa id
                ->on('mahasiswa')
                ->onDelete('cascade');
            $table->string('kode');
            $table->string('skema');
            $table->string('nilaimatakuliah');
            $table->string('indeks')->refrences('indeks')->on('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_mahasiswa');
    }
};
