<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload() {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request) {
        // dump($request->berkas);
        // dump($request->file('file'));
        // return "Pemrosesan file upload di sini";
        $request->validate([
            'berkas' => 'required|file|image|max:5000']);
            $extFile = $request->berkas->getClientOriginalName();
            $namaFile = "web-" . time() . "." . $extFile;
            $path = $request->berkas->move('gambar', $namaFile);
            $path = str_replace("\\","//",$path);
            echo "Variabel path berisi: $path <br>";
            $pathBaru = asset('gambar/' . $namaFile);
            echo "proses upload berhasil, data disimpan pada:$path";
            echo "<br>";
            echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
    }
}
