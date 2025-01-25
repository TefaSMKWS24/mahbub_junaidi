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
        Schema::create('data_kasirs', function (Blueprint $table) {
            $table->string('kode_kasir', 6)->unique()->primary();
            $table->string('nama_kasir', 20);
            $table->time('shif_mulai');
            $table->time('shif_akhir');
            $table->string('no_hp', 13);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kasirs');
    }
};
