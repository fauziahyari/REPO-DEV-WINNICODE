<?php

namespace App\Http\Controllers\Frontend\Pengumuman\CekPendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang\Peserta;

class CekStatusMagangController extends Controller
{
    public function CekStatusMagang(Request $request)
    {
        // Validasi input email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Ambil email dari request
        $email = $request->input('email');

        // Cari peserta berdasarkan email
        $peserta = Peserta::where('email', $email)->first();
        $pesertaMagangReguler = Peserta::where('email', $email)->first();

        if ($peserta) {
            // Sensor nama peserta
            $peserta->nama_lengkap = $this->sensorData($peserta->nama_lengkap);
            $peserta->email = $this->sensorDataEmail($peserta->email);

            // Jika peserta ditemukan pada model Peserta, tampilkan halaman dengan informasi peserta
            return view('frontend.beranda.pengumuman.seleksi-magang.cek-status-magang.peserta', [
                'active' => 'index',
                'peserta' => $peserta
            ]);
        } elseif ($pesertaMagangReguler) {
            // Sensor nama pesertaMagangReguler
            $pesertaMagangReguler->nama_lengkap = $this->sensorData($pesertaMagangReguler->nama_lengkap);

            // Jika peserta ditemukan pada model MagangReguler, tampilkan halaman dengan informasi peserta
            return view('frontend.beranda.pengumuman.seleksi-magang.cek-status-magang.peserta', [
                'active' => 'index',
                'peserta' => $pesertaMagangReguler
            ]);
        } else {
            // Jika peserta tidak ditemukan, tampilkan halaman bahwa peserta tidak terdaftar
            return view('frontend.beranda.pengumuman.seleksi-magang.cek-status-magang.bukan-peserta', [
                'active' => 'index',
            ]);
        }
    }

    private function sensorData($data)
    {
        $panjangData = strlen($data);
        $bagianAwal = substr($data, 0, floor($panjangData * 0.6));
        $bagianTengah = str_repeat('*', floor($panjangData * 0.6));
        $bagianAkhir = substr($data, floor($panjangData * 0.8));

        return $bagianAwal . $bagianTengah . $bagianAkhir;
    }
    private function sensorDataEmail($email)
    {
        // Membagi email menjadi nama pengguna dan domain
        $parts = explode('@', $email);

        // Mengambil nama pengguna dan domain
        $username = $parts[0] ?? '';
        $domain = $parts[1] ?? '';

        // Menghitung panjang nama pengguna dan domain
        $lengthUsername = strlen($username);
        $lengthDomain = strlen($domain);

        // Sensor nama pengguna
        $usernameAwal = substr($username, 0, floor($lengthUsername * 0.3));
        $usernameTengah = str_repeat('*', floor($lengthUsername * 0.4));
        $usernameAkhir = substr($username, floor($lengthUsername * 0.7));

        // Sensor domain
        $domainAwal = substr($domain, 0, floor($lengthDomain * 0.3));
        $domainTengah = str_repeat('*', floor($lengthDomain * 0.4));
        $domainAkhir = substr($domain, floor($lengthDomain * 0.7));

        // Menggabungkan nama pengguna dan domain yang telah disensor
        $usernameSensor = $usernameAwal . $usernameTengah . $usernameAkhir;
        $domainSensor = $domainAwal . $domainTengah . $domainAkhir;

        // Menggabungkan usernameSensor dan domainSensor dengan simbol '@'
        $emailSensor = $usernameSensor . '@' . $domainSensor;

        return $emailSensor;
    }
}
