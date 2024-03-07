<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan'
        // ];
        // DB::table('m_kategori')-> insert($data);
        // return 'insert data berhasil dilakukan';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil dilakukan sebanyak: ' . $row . ' baris ';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Hapus data berhasil dilakukan sebanyak: ' . $row . ' baris ';

        $data= DB::table('m_kategori')-> get();
        return view('kategori', ['data' => $data]);

    }
}