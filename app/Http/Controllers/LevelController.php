<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    function index(){
        // DB::insert('insert into m_level(level_kode, level_nama) values(?,?)', ['Cus','Pelanggan']);
        // return 'insert baru berhasil ditambahkan';

        // $row = DB::update('update m_level set level_nama=? where level_kode = ?', ['Customer', 'CUS']);
        // return 'update data berhasil dilakukan jumlah data yang berhasil diperbarui adalah: ' .$row. ' baris';

        // $row = DB::delete('delete from m_level where level_kode=?',['CUS']);
        // return 'delete data berhasil dilakukan, jumlah data yang berhasil dihapus adalah ' .$row. ' baris';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);

    }
    function tambah(){
        return view('level/create');
    }
    function store(Request $request): RedirectResponse{
        $validated = $request-> validated();
        $validated= $request->safe()->only('level_id','level_kode','level_nama') ;
        $validated= $request->safe()->except('level_id','level_kode','level_nama') ;
        return redirect('/level');
    }
}
