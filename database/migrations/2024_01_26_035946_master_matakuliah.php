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
        Schema::create('master_matakuliah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kategori');
            $table->string('kode')->unique();
            $table->string('namamatakuliah');
            $table->string('namamatakuliahenglish');
            $table->tinyInteger('sks');
            $table->tinyInteger('semester');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::create('matkul_pilihan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kategori');
            $table->string('kode')->unique();
            $table->string('namamatakuliah');
            $table->string('namamatakuliahenglish');
            $table->tinyInteger('sks');
            $table->tinyInteger('semester');
            $table->timestampsTz();
            $table->softDeletesTz();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_matakuliah');
        Schema::dropIfExists('matkul_pilihan');
    }
};
