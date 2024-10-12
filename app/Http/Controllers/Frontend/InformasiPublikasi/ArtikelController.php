<?php

namespace App\Http\Controllers\Frontend\InformasiPublikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publikasi\Artikel;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(10);
        return view('frontend.informasi-publikasi.artikels.index', [
            'active' => 'index',
            'artikels' => $artikels,
        ]);
    }
    public function detail($slug)
    {
        $artikels = Artikel::where('slug', $slug)->firstOrFail();
        return view('frontend.informasi-publikasi.artikels.detail', [
            'active' => 'index',
            'artikels' => $artikels,
        ]);
    }
}
