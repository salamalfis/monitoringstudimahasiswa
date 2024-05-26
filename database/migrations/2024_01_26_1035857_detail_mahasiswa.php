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
            $table->uuid('id')->primary();
            $table->string('kode')->refrences('kode')->on('master_matakuliah');
            $table->string('nilaimatakuliah');
            $table->string('indeks')->refrences('indeks')->on('nilai');
            $table->string('mahasiswa_id');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();
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
