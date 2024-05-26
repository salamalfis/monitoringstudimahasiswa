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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nip')->nullable()->unique();
            $table->string('nim')->nullable()->unique();
            $table->string('emailsso')->unique();
            $table->string('emailpribadi')->unique();
            $table->string('notelp');
            $table->string('password');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->boolean('active')->default(false);
            $table->timestampsTz();
            $table->softDeletesTz(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
