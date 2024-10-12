<?php

namespace App\Http\Controllers\Frontend\InformasiPublikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publikasi\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(10);
        return view('frontend.informasi-publikasi.berita.index', [
            'active' => 'index',
            'berita' => $berita,
        ]);
    }
    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('frontend.informasi-publikasi.berita.detail', [
            'active' => 'index',
            'berita' => $berita,
        ]);
    }
}
