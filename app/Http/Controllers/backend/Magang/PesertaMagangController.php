<?php

namespace App\Http\Controllers\Backend\Magang;

use App\Http\Controllers\Controller;
use App\Models\Magang\Peserta;
use Illuminate\Http\Request;

class PesertaMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::OrderBy('nama_lengkap', 'asc')->get();
        return view('backend.magang.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        // Cari data berdasarkan ID
        $peserta = Peserta::find($uuid);

        // Jika data tidak ditemukan
        if (!$peserta) {
            return redirect()->route('magang.index')->with('error', 'Data tidak ditemukan');
        }

        // Tampilkan view dengan data yang sudah ditemukan
        return view('backend.magang.detail', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $magang = Peserta::find($id);
        if ($magang) {
            // Hapus file CV jika ada
            if (!empty($magang->cv)) {
                $cvPath = storage_path('app/public/' . $magang->cv);
                if (file_exists($cvPath)) {
                    unlink($cvPath);
                }
            }

            // Hapus record Peserta dari database
            $magang->delete();

            return back()->with('success', 'Data Peserta dan CV berhasil dihapus!');
        } else {
            return back()->with('error', 'Data Peserta tidak ditemukan!');
        }
    }
    public function updateStatus(Request $request, $id)
    {
        $data = Peserta::findOrFail($id);
        $data->status = $request->newStatus;
        $data->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
}
