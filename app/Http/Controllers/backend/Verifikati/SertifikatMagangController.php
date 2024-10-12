<?php

namespace App\Http\Controllers\Backend\Verifikati;

use App\Http\Controllers\Controller;
use App\Models\Verifikasi\SertifikatMagang;
use Illuminate\Http\Request;

class SertifikatMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikatmagang = SertifikatMagang::OrderBy('nama_lengkap', 'asc')->get();
        return view('backend.verifikasi.sertifikat-magang.index', compact('sertifikatmagang'));
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
        $this->validate($request, [
            'reg_sertifikat' => 'required',
            'nama_lengkap' => 'required',
            'departemen' => 'required',
        ], [
            'reg_sertifikat.required' => 'Registrasi Sertifikat tidak boleh
            kosong',
            'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
            'departemen.required' => 'Departemen tidak boleh kosong',
        ]);
        SertifikatMagang::Create([
            'reg_sertifikat' => $request->reg_sertifikat,
            'nama_lengkap' => $request->nama_lengkap,
            'departemen' => $request->departemen,
            'qrcode_sertifikat' => $request->qrcode_sertifkat,
        ]);
        return redirect()->route('sertifikat-magang.index')->with('success', 'Sertifikat Upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
