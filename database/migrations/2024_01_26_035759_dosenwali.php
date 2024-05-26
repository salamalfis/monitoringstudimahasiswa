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
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->integer('nip')->unique();
            $table->string('kodedosen')->unique();
            $table->string('kelaswali')->unique();
            $table->uuid('user_id');
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
        Schema::dropIfExists('dosenwali');
    }
};
