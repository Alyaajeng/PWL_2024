<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga' => 7500000, 'kategori_id' => 1],
            ['barang_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga' => 3500000, 'kategori_id' => 1],
            ['barang_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Kaos Polos', 'harga' => 50000, 'kategori_id' => 3],
            ['barang_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'Sepatu Sneakers', 'harga' => 300000, 'kategori_id' => 3],
            ['barang_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Minyak Goreng', 'harga' => 15000, 'kategori_id' => 2],
            ['barang_id' => 6, 'barang_kode' => 'BRG006', 'barang_nama' => 'Susu UHT', 'harga' => 10000, 'kategori_id' => 2],
            ['barang_id' => 7, 'barang_kode' => 'BRG007', 'barang_nama' => 'Lipstik', 'harga' => 75000, 'kategori_id' => 5],
            ['barang_id' => 8, 'barang_kode' => 'BRG008', 'barang_nama' => 'Motor Oil', 'harga' => 100000, 'kategori_id' => 4],
            ['barang_id' => 9, 'barang_kode' => 'BRG009', 'barang_nama' => 'Speaker Bluetooth', 'harga' => 250000, 'kategori_id' => 1],
            ['barang_id' => 10, 'barang_kode' => 'BRG010', 'barang_nama' => 'Helm Full Face', 'harga' => 500000, 'kategori_id' => 4],
        ];

        DB::table('m_barang')->insert($data);
    }
}
