<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();

//frontend
Route::redirect('/', '/beranda');
Route::get('/beranda', [App\Http\Controllers\Frontend\Beranda\LandingPageController::class, 'index']);
//bootcamp
Route::get('/bootcamps', [App\Http\Controllers\Frontend\Beranda\LandingPageController::class, 'bootcamps'])->name('bootcamps.index');
//detai bootcamp
Route::get('/bootcamps/{id}', [App\Http\Controllers\Frontend\Beranda\LandingPageController::class, 'show'])->name('bootcamps.show');
//informasi
Route::get('/informasi', [App\Http\Controllers\Frontend\Beranda\LandingPageController::class, 'informasi'])->name('informasi.index');
//tentang
Route::get('/tentang', [App\Http\Controllers\Frontend\Beranda\LandingPageController::class, 'tentang']);
Route::get('/daftar-magang-mbkm', [App\Http\Controllers\Frontend\Pengumuman\PengumumanController::class, 'DaftarMagang'])->name('daftar.magang.index');
Route::post('/daftar-magang-mbkm', [App\Http\Controllers\Frontend\Pengumuman\Pendaftaran\FormMagangController::class, 'SubmitMagang'])->name('submit.magang.mbkm');
//notifikasi
Route::get('/notifikasi-magang/{nama_lengkap}', [App\Http\Controllers\Frontend\Pengumuman\PengumumanController::class, 'NotifikasiDaftarMagang'])->name('notifikasi.magang.index');
//notifikasi Pendataan
Route::get('/notifikasi-pendataan-magang/{nama_lengkap}', [App\Http\Controllers\Frontend\Pengumuman\PengumumanController::class, 'NotifikasiPendataan'])->name('notifikasi.pendataan.index');
//seleksi Magang
Route::get('/pengumuman', [App\Http\Controllers\Frontend\Pengumuman\PengumumanController::class, 'SeleksiMagang'])->name('seleksi.magang.index');
//status Pendaftaran Magang
Route::post('/status-magang-mbkm', [App\Http\Controllers\Frontend\Pengumuman\CekPendaftaran\CekStatusMagangController::class, 'CekStatusMagang'])->name('status.daftar.magang');
//status lulus & tidak
Route::get('/validasi-peserta-magang', [App\Http\Controllers\Frontend\Pengumuman\PengumumanController::class, 'HasilSeleksiMagang'])->name('validasi.magang.index');
//Pendataan Peserta Diterima
Route::post('/pendataan-peserta-magang', [App\Http\Controllers\Frontend\Pengumuman\MagangDiterima\FormMagangDiterimaController::class, 'PendataanPesertaMagang'])->name('pendataan.magang.index');
//infromasi-publikasi
Route::group(['prefix' => 'explore'], function () {
    //berita
    Route::get('/berita', [App\Http\Controllers\Frontend\InformasiPublikasi\BeritaController::class, 'index'])->name('frontend.berita.index');
    //detail berita
    Route::get('berita/{slug}', [App\Http\Controllers\Frontend\InformasiPublikasi\BeritaController::class, 'detail'])->name('frontend.berita.detail');
    //artikel
    Route::get('/artikel', [App\Http\Controllers\Frontend\InformasiPublikasi\ArtikelController::class, 'index'])->name('frontend.artikels.index');
   //detail artikel
   Route::get('artikel/{slug}', [App\Http\Controllers\Frontend\InformasiPublikasi\ArtikelController::class, 'detail'])->name('frontend.artikels.detail');
    //cari
    Route::get('/search', [App\Http\Controllers\Frontend\InformasiPublikasi\CariController::class, 'search'])->name('search');
    //autocomplete1
    Route::get('/autocomplete', [App\Http\Controllers\Frontend\InformasiPublikasi\CariController::class, 'autocomplete'])->name('autocomplete');
    //latihan
    Route::get('/latihan-aja', [App\Http\Controllers\Frontend\InformasiPublikasi\CariController::class, 'latihan'])->name('latihan.aja');
});
//backend
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    
    //akun
    Route::get('/akun', [App\Http\Controllers\Backend\Profile\AkunController::class, 'index'])->name('akun');
    Route::post('/akun', [App\Http\Controllers\Backend\Profile\AkunController::class, 'simpan'])->name('akun.simpan');


    Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
        Route::resource('/berita', App\Http\Controllers\Backend\Publikasi\BeritaController::class);
        Route::resource('/artikel', App\Http\Controllers\Backend\Publikasi\ArtikelController::class);
        //magang
        Route::resource('/magang', App\Http\Controllers\Backend\Magang\PesertaMagangController::class);
        //update status
        Route::patch('/update-status/{uuid}', [App\Http\Controllers\Backend\Magang\PesertaMagangController::class, 'updateStatus'])->name('update-status');
        //Verifikasi - sertifikat magang
        Route::resource('/sertifikat-magang', App\Http\Controllers\Backend\Verifikati\SertifikatMagangController::class);
        //bootcamp
        Route::resource('/bootcamps', App\Http\Controllers\Backend\Bootcamps\BootcampadminController::class);

    });
});
