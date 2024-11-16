<?php

namespace App\Http\Controllers\backend\Bootcamps;

use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Bootcamps\Bootcamps;
use Illuminate\Support\Facades\Auth;

class BootcampadminController extends Controller
{

    public function index() {
        $Bootcamps= Bootcamps::query()->get();
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
    $bootcamps = new Bootcamps();
    if ($request->hasFile('url_gambar')) {
        $file = $request->file('url_gambar');
        $imagename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/bootcamps'), $imagename);
        $bootcamps->url_gambar = $imagename; 
    }

    // Simpan data ke dalam database
    $bootcamps->name = $request->name;// Simpan nama file gambar
    $bootcamps->price = $request->price;
    $bootcamps->description = $request->description; // Simpan deskripsi
    $bootcamps->save();

    return redirect()->route('bootcamps.index')->with('success', 'Bootcamp berhasil ditambahkan!');
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
        $bootcamps = Bootcamps::find($id);
        return view('backend.bootcamps.edit', compact('bootcamps'));
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
    $bootcamps = Bootcamps::find($id);

    $request->validate([
        'name' => 'required',
        'url_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Hapus gambar lama jika ada dan menyimpan gambar baru jika diupload
    if ($request->hasFile('url_gambar')) {
        // Hapus gambar lama jika ada
        if ($bootcamps->url_gambar && file_exists(public_path('images/bootcamps/' . $bootcamps->url_gambar))) {
            unlink(public_path('images/bootcamps/' . $bootcamps->url_gambar));
        }
        
        // Proses penyimpanan gambar baru
        $file = $request->file('url_gambar');
        $imagename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/bootcamps'), $imagename);
        $bootcamps->url_gambar = $imagename;
    }

    // Update data bootcamp
    $bootcamps->name = $request->name;
    $bootcamps->price = $request->price;
    $bootcamps->description = $request->description;
    $bootcamps->save();

    return redirect()->route('bootcamps.index')->with('success', 'Bootcamp berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $bootcamps = Bootcamps::find($id);

    // Hapus gambar jika ada
    if ($bootcamps->url_gambar && file_exists(public_path('images/bootcamps/' . $bootcamps->url_gambar))) {
        unlink(public_path('images/bootcamps/' . $bootcamps->url_gambar));
    }

    Bootcamps::find($id)->delete();
    return redirect()->route('bootcamps.index')->with('success', 'Bootcamp berhasil dihapus');
}


}

