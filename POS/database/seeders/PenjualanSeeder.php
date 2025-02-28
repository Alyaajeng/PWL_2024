<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'tanggal' => now(),
                'total_harga' => rand(100000, 1000000),
                'user_id' => rand(1, 3), 
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
