<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $data = [
        [
            'kode_barang' => 'BRG001',
            'nama_barang' => 'barang 1',
            'harga_barang' => '10000',
            'stok_barang' => '100',
            'kode_kategori' => 'KTR001',
        ],
        [
            'kode_barang' => 'BRG002',
            'nama_barang' => 'barang 2',
            'harga_barang' => '20000',
            'stok_barang' => '200',
            'kode_kategori' => 'KTR002',
        ]
    ];

       DB::table('barang')->insert($data);
    }
}
