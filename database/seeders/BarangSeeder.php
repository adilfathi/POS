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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MK001',
                'barang_nama' => 'Indomie Soto',
                'harga_beli' => 1500,
                'harga_jual' => 3000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MK002',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 1250,
                'harga_jual' => 1500
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MN001',
                'barang_nama' => 'Sprite',
                'harga_beli' => 3500,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MN002',
                'barang_nama' => 'Aqua',
                'harga_beli' => 1500,
                'harga_jual' => 2500
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'PD001',
                'barang_nama' => 'Bumbu Racik',
                'harga_beli' => 500,
                'harga_jual' => 1500
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'PD002',
                'barang_nama' => 'Masako',
                'harga_beli' => 5000,
                'harga_jual' => 7500
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'OB001',
                'barang_nama' => 'Paracetamol',
                'harga_beli' => 10000,
                'harga_jual' => 15000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'OB002',
                'barang_nama' => 'Antangin',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PB001',
                'barang_nama' => 'Soklin',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PB002',
                'barang_nama' => 'Sunlight',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ]
            ];
            DB::table('m_barang')->insert($data);
    }
}
