<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use Illuminate\Http\Request;

class POSController extends Controller
{
    function index()
    {
        $useri = m_user::all(); // Mengambil semua isi tabel
        return view('m_user.index', compact('useri'))->with('i');
    }
    public function create()
    {
        return view('m_user.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'user_id' => 'max 20',
            'username' => 'required',
            'nama' => 'required',
        ]);
        m_user::create($request->all());

        return redirect()->route('m_user.index')
            ->with('success', 'user Berhasil Ditambahkan');
    }
    public function show(string $id, m_user $useri)
    {
        $useri = m_user::findOrFail($id);
        return view('m_user.show', compact('useri'));
    }

    public function edit(string $id)
    {
        $useri = m_user::find($id);
        return view('m_user.edit', compact('useri'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([

            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        m_user::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('m_user.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy(string $id)
    {
        $useri = m_user::findOrFail($id)->delete();
        return \redirect()->route('m_user.index')

            ->with('success', 'data Berhasil Dihapus');
    }
}
