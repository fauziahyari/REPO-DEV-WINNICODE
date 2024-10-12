<?php

namespace App\Http\Controllers;

use App\Models\Magang\Peserta;
use App\Models\magang\PesertaTervalidasi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_count = User::count();
        $peserta_magang = Peserta::where('status', 'DITERIMA')->count();
        $peserta_magang_tolak = Peserta::where('status', 'DITOLAK')->count();
        $peserta_magang_seleksi = Peserta::where('status', 'SELEKSI')->count();
        $mendaftar_magang = Peserta::where('status', 'MENDAFTAR')->count();
        return view('dashboard', compact(
            'user_count',
            'peserta_magang',
            'mendaftar_magang',
            'peserta_magang_tolak',
            'peserta_magang_seleksi',
        ));
    }
}
