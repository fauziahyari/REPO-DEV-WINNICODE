<?php

namespace App\Http\Controllers\backend\Bootcamps;

use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Bootcamps\Bootcamp;
use Illuminate\Support\Facades\Auth;

class BootcampadminController extends Controller
{

    public function index() {
        $Bootcamps=collect([]);
        return view('backend.bootcamps.index',['bootcamps'=>$Bootcamps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bootcamps.create');
    }

    /**
     * Menyimpan bootcamp baru ke dalam database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'url_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Proses penyimpanan gambar
    if ($request->hasFile('gambar')) {
        $filename = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images/bootcamps'), $filename);
    }

    // Simpan data ke dalam database
    $bootcamps = new Bootcamp();
    $bootcamps->name = $request->name;
    $bootcamps->url_gambar = $filename; // Simpan nama file gambar
    $bootcamps->price = $request->price;
    $bootcamps->description = $request->description; // Simpan deskripsi
    $bootcamps->save();

    return redirect()->route('bootcamps.index')->with('success', 'Bootcamp berhasil ditambahkan!');
}

public function destroy(Bootcamp $bootcamps)
    {
        $bootcamp->delete();
        return redirect()->route('backend.bootcamps.index')->with('success', 'Bootcamp berhasil dihapus.');
    }
}

