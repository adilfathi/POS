<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');

    }
    function store(Request $request): RedirectResponse{
        $validated = $request-> validated();
        $validated= $request->safe()->only('kategori_kode','kategori_nama') ;
        $validated= $request->safe()->except('kategori_kode','kategori_nama') ;
        return redirect('/kategori');
    }
    function create(){
        return view('kategori.create');
    }
    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update($id, Request $request)
    {
        $kategori= KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $data = KategoriModel::find($id);
        $data->delete();
        return redirect('/kategori');
    }

}
