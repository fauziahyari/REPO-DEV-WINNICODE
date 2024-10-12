<?php

namespace App\Http\Controllers\Frontend\Pengumuman;

use App\Http\Controllers\Controller;
use App\Models\Magang\Peserta;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function DaftarMagang()
    {
        return view('frontend.beranda.pengumuman.pendaftaran-magang.index', [
            'active' => 'index',
        ]);
    }
    public function NotifikasiDaftarMagang()
    {
        return view('frontend.beranda.pengumuman.notifikasi.index', [
            'active' => 'index',
        ]);
    }
    public function NotifikasiPendataan()
    {
        return view('frontend.beranda.pengumuman.notifikasi.pendataan-peserta-magang', [
            'active' => 'index',
        ]);
    }
    public function SeleksiMagang()
    {
        return view('frontend.beranda.pengumuman.seleksi-magang.index', [
            'active' => 'index',
        ]);
    }
    public function HasilSeleksiMagang()
    {
        $pesertaDiterima = Peserta::where('status', 'DITERIMA')->get();

        $posisiMagang = [];

        foreach ($pesertaDiterima as $peserta) {
            $posisiMagang[$peserta->nama_lengkap] = $peserta->posisi_magang;
        }

        return view('frontend.beranda.pengumuman.hasil-seleksi-magang.index', [
            'active' => 'index',
            'posisiMagang' => $posisiMagang,
        ]);
    }
}
