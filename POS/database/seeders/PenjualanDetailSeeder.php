<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 30; $i++) {
            $data[] = [
                'detail_id' => $i,
                'penjualan_id' => rand(1, 10),
                'barang_id' => rand(1, 10),
                'jumlah' => rand(1, 5),
                'subtotal' => rand(50000, 500000),
            ];
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
