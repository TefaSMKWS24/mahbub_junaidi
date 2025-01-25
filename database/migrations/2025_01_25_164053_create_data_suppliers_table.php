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
        Schema::create('data_suppliers', function (Blueprint $table) {
            $table->string('kode_supllier', 6)->unique()->primary();
            $table->string('nama_supllier', 20);
            $table->string('no_telpon', 13);
            $table->string('kode_barang', 4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_suppliers');
    }
};
