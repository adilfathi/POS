<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'ABC123'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'DEF456'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Michael Johnson',
                'penjualan_kode' => 'GHI789'
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Emily Brown',
                'penjualan_kode' => 'JKL012'
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'David Wilson',
                'penjualan_kode' => 'MNO345'
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Sophia Taylor',
                'penjualan_kode' => 'PQR678'
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Matthew Martinez',
                'penjualan_kode' => 'STU901'
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Olivia Anderson',
                'penjualan_kode' => 'VWX234'
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 2,
                'pembeli' => 'Daniel Thomas',
                'penjualan_kode' => 'YZA567'
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Ava Garcia',
                'penjualan_kode' => 'BCD890'
            ]
            

            ];
        
        DB::table('t_penjualan')-> insert($data);
    }
}
