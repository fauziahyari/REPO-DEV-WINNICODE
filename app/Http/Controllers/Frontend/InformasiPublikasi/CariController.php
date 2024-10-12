<?php

namespace App\Http\Controllers\Frontend\InformasiPublikasi;

use App\Http\Controllers\Controller;
use App\Models\Publikasi\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CariController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(3);
        return view('frontend.informasi-publikasi.berita.index', [
            'active' => 'index',
            'berita' => $berita,
        ]);
    }
    public function search(Request $request)
    {
        $query = $request->get('query');

        $data = Berita::where('judul', 'LIKE', "%{$query}%")
            ->orWhere('penulis', 'LIKE', "%{$query}%")
            ->get();

        $output = '';
        if ($data->count() > 0) {
            foreach ($data as $row) {

                $deskripsi = Str::limit($row->deskripsi, 150, '...');

                $output .= '
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                             <img src="' . asset('images/' . $row->gambar) . '" alt="" class="card-img-top">
                            <div class="card-body">
                                <div style="text-align: left;">
                                    <h5 class="card-title">' . $row->judul . '</h5>
                                    <div class="row justify-content-left">
                                    <div class="col-md-12">
                                        <span>' . $row->penulis . '</span> | <span class="badge text-bg-success">Public</span>
                                    </div>
                                </div>
                                <div class="card mt-3 mb-3">
                                    <p class="card-text">' . $deskripsi . '</p>
                                </div>
                                    <a href="/berita/' . $row->slug . '" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
            }
        } else {
            $output = '
                <div class="col-12">
                    <p align="center">Tidak Ditemukan</p>
                </div>
                ';
        }

        return response()->json(['table_data' => $output]);
    }

    public function autocomplete(Request $request)
    {
        $query = $request->get('query');

        // Use `orWhere` to match any of the criteria
        $data = Berita::select("judul", "penulis")
            ->where("judul", "LIKE", "%{$query}%")
            ->orWhere("penulis", "LIKE", "%{$query}%")
            ->orWhere("deskripsi", "LIKE", "%{$query}%")
            ->get();

        // Collect unique titles and penulis
        $titles = [];
        foreach ($data as $row) {
            if (count($titles) < 5 && !in_array($row->judul, $titles)) {
                $titles[] = $row->judul;
            }
            if (count($titles) < 5 && !in_array($row->penulis, $titles)) {
                $titles[] = $row->penulis . ' <img src="' . asset('mazer/images/verified.png') . '" style="width: 1em; height: 1em;" title="Terverifikasi">';
            }
        }

        return response()->json($titles);
    }

    public function latihan()
    {
        return view(
            'frontend.informasi-publikasi.latihan',
            [
                'active' => 'index'
            ]
        );
    }
}
