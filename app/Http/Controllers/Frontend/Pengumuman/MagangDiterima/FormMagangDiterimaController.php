<?php

namespace App\Http\Controllers\Frontend\Pengumuman\MagangDiterima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang\PesertaTervalidasi;

class FormMagangDiterimaController extends Controller
{
    public function PendataanPesertaMagang(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|unique:data_magang_tervalidasi',
        ], [
            'nama_lengkap.unique' => 'Nama Lengkap sudah Terdaftar',
        ]);

        PesertaTervalidasi::create([
            'nama_lengkap' => $request->nama_lengkap,
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'nim' => $request->nim,
            'posisi_magang' => $request->posisi_magang,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'durasi_magang' => $request->durasi_magang
        ]);

        return redirect()->route('notifikasi.pendataan.index', ['nama_lengkap' => $request->nama_lengkap])->with('success', 'Data berhasil Diterima');
    }
}
