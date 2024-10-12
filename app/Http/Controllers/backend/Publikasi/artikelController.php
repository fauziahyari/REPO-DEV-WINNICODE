<?php

namespace App\Http\Controllers\Backend\Publikasi;

use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use App\Models\Magang\Peserta;
use Illuminate\Http\Request;
use App\Models\Publikasi\Artikel;
use Illuminate\Support\Facades\Auth;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::all();
        return view('backend.publikasi.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peserta = Peserta::OrderBy('nama_lengkap')->get();
        return view('backend.publikasi.artikel.create', compact('peserta'));
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
            'judul' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'Judul artikel harus diisi',
            'penulis.required' => 'Penulis artikel harus diisi',
            'deskripsi.required' => 'Deskripsi artikel harus diisi',
        ]);

        // Buat instance dari Slugify
        $slugify = new Slugify();

        // Buat slug dari judul
        $slug = $slugify->slugify($request->judul);

        // Tambahkan nomor urut atau string acak ke slug
        $randomString = Str::random(30);
        $slug .= '-' . $randomString;

        artikel::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'deskripsi' => $request->deskripsi,
            'slug' => $slug,
            'url_gambar' => $request->url_gambar,
        ]);

        return redirect()->route('artikel.index')->with('success', 'artikel berhasil ditambah');
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
        $artikel = artikel::find($id);
        $penulis = artikel::select('penulis')->distinct()->get(); // Mengambil daftar penulis unik
        return view('backend.publikasi.artikel.edit', compact('artikel', 'penulis'));
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
        $artikel = artikel::find($id);

        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'judul.required' => 'Judul artikel harus diisi',
            'penulis.required' => 'Penulis artikel harus diisi',
            'deskripsi.required' => 'Deskripsi artikel harus diisi',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        $slug = Str::slug($request->judul, '-');

        // Menghapus gambar lama jika ada dan menyimpan gambar baru jika diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar && file_exists(public_path('images/' . $artikel->gambar))) {
                unlink(public_path('images/' . $artikel->gambar));
            }

            // Simpan gambar baru ke storage
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $imagename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $imagename);
            
                // Simpan nama file ke database
                $artikel->url_gambar = $imagename;
                $artikel->save();
            }
        }

        $artikel->judul = $request->judul;
        $artikel->slug = $slug;
        $artikel->penulis = $request->penulis;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'artikel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        artikel::find($id)->delete();
        return redirect()->route('artikel.index')->with('success', 'artikel berhasil dihapus');
    }
}
