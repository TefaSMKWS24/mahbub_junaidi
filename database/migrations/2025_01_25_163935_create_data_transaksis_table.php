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
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->string('kode_transaksi', 6)->unique()->primary();
            $table->date('tgl_transaksi');
            $table->string('kode_kasir', 6);
            $table->string('kode_pelangan', 6);
            $table->string('kode_voucher', 6);
            $table->string('diskon', 6);
            $table->integer('total_belanja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_transaksi');
    }
};
