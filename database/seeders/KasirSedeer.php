<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KasirSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kasir' => 'KSR001',
                'nama_kasir' => 'kasir 2',
                'shif_mulai' => '08:00',
                'shif_selesai' => '16:00',
                'nohp' => '081234567890',
                'password' => Hash::make('1234'),
            ],
        ];
        DB::table('kasir')->insert($data);
    }
}
