<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'Meubel',
                'harga_barang' => '350000',
                'deskripsi_barang' => 'Kursi',
                'satuan_id' => '1'
            ],
        ]);
    }
}
