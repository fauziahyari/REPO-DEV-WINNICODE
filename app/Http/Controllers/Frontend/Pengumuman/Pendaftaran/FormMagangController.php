<?php

namespace App\Http\Controllers\Frontend\Pengumuman\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang\Peserta;

class FormMagangController extends Controller
{
    public function SubmitMagang(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|unique:db_magang',
            'email' => 'required|unique:db_magang',
            'cv' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'  // validasi untuk CV, maksimal 2MB dan harus berformat PDF
        ], [
            'nama_lengkap.unique' => 'Nama Lengkap sudah Terdaftar',
            'email.unique' => 'Email Sudah Terdaftar',
            'cv.required' => 'CV wajib diupload',
            'cv.mimes' => 'Format CV harus JPG,JPEG,PNG,PDF',
            'cv.max' => 'Ukuran CV maksimal 2MB'
        ]);

        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
            // Simpan file CV ke storage
            $cvPath = $request->file('cv')->store('cv', 'public');

            if (!$cvPath) {
                Alert::error('Error', 'Gagal menyimpan CV');
                return back();
            }
        } else {
            Alert::error('Error', 'CV tidak valid atau wajib diupload');
            return back();
        }

        Peserta::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomor_wa' => $request->nomor_wa,
            'universitas' => $request->universitas,
            'posisi_magang' => $request->posisi_magang,
            'tipe_magang' => $request->tipe_magang,
            'status_magang' => $request->status_magang,
            'cv' => $cvPath
        ]);

        return redirect()->route('notifikasi.magang.index', ['nama_lengkap' => $request->nama_lengkap])->with('success', 'Data magang berhasil terkirim');
    }
}
