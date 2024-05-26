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
        Schema::create('detaildata_mahasiswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('status');
            $table->string('jumlahsksselesai');
            $table->string('jumlahsksmengulang');
            $table->string('eprt');
            $table->string('buktieprt')->nullable();
            $table->string('tak');
            $table->string('ipk');
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
        Schema::dropIfExists('detaildata_mahasiswa');
    }
};
