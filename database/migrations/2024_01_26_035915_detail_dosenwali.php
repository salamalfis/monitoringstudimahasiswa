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
        Schema::create('detail_dosenwali', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreign('id')
                ->references('id') // users id
                ->on('dosenwali')
                ->onDelete('cascade');
            $table->string('kelaswali');
            $table->string('angkatankelaswali');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_dosenwali');
    }
};
