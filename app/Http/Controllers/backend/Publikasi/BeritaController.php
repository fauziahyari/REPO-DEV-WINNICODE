<?php

namespace App\Http\Controllers\Backend\Publikasi;

use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use App\Models\Magang\Peserta;
use Illuminate\Http\Request;
use App\Models\Publikasi\Berita;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('backend.publikasi.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peserta = Peserta::OrderBy('nama_lengkap')->get();
        return view('backend.publikasi.berita.create', compact('peserta'));
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
            'judul.required' => 'Judul berita harus diisi',
            'penulis.required' => 'Penulis berita harus diisi',
            'deskripsi.required' => 'Deskripsi berita harus diisi',
        ]);

        // Buat instance dari Slugify
        $slugify = new Slugify();

        // Buat slug dari judul
        $slug = $slugify->slugify($request->judul);

        // Tambahkan nomor urut atau string acak ke slug
        $randomString = Str::random(30);
        $slug .= '-' . $randomString;

        Berita::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'deskripsi' => $request->deskripsi,
            'slug' => $slug,
            'url_gambar' => $request->url_gambar,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambah');
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
        $berita = Berita::find($id);
        $penulis = Berita::select('penulis')->distinct()->get(); // Mengambil daftar penulis unik
        return view('backend.publikasi.berita.edit', compact('berita', 'penulis'));
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
        $berita = Berita::find($id);

        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'judul.required' => 'Judul berita harus diisi',
            'penulis.required' => 'Penulis berita harus diisi',
            'deskripsi.required' => 'Deskripsi berita harus diisi',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        $slug = Str::slug($request->judul, '-');

        // Menghapus gambar lama jika ada dan menyimpan gambar baru jika diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar && file_exists(public_path('images/' . $berita->gambar))) {
                unlink(public_path('images/' . $berita->gambar));
            }

            // Simpan gambar baru ke storage
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $imagename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $imagename);
            
                // Simpan nama file ke database
                $berita->url_gambar = $imagename;
                $berita->save();
            }
        }

        $berita->judul = $request->judul;
        $berita->slug = $slug;
        $berita->penulis = $request->penulis;
        $berita->deskripsi = $request->deskripsi;
        $berita->save();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::find($id)->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
