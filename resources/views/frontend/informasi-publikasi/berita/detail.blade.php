@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = $berita->judul . ' - PT . Winnicode Garuda Teknologi';
@endphp
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="fw-bold" style="text-align: left; font-size: 2.5rem;">{{ $berita->judul }}</h1>
            <hr>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <img src="{{ asset('images/' . $berita->url_gambar) }}" alt="{{ $berita->judul }}" class="img-fluid my-4" style="width: 100%; height: auto; max-height: 500px; object-fit: cover; border-radius: 10px;">
        <div class="d-flex justify-content-start align-items-center mb-3">
            <p class="badge bg-primary me-2">Penulis</p> 
            <span class="me-2">{{ $berita->penulis }}</span> 
            <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Terverifikasi">
        </div>
        <p class="text-muted">Tanggal Upload: {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, j F Y \P\u\k\u\l H:i \W\i\b') }}</p>
    </div>
    <div class="col-lg-6">
        <div style="text-align: justify;">
            @php
            $deskripsi = $berita->deskripsi;
            $words = str_word_count($deskripsi, 1); 
            $paragraphs = array_chunk($words, 50); 
            @endphp

            @foreach ($paragraphs as $paragraph)
                <p>{{ implode(' ', $paragraph) }}</p>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
