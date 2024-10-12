@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = $artikels->judul . ' - PT . Winnicode Garuda Teknologi';
@endphp
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 style="text-align: center;">{{ $artikels->judul }}</h1>
            <div class="row justify-content-center my-3">
                <div style="text-align: center;">
                    <p class="badge text-bg-primary">Penulis</p> <span>{{ $artikels->penulis }}</span> <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Terverifikasi">
                    <p>Tanggal Upload {{ \Carbon\Carbon::parse($artikels->created_at)->translatedFormat('l j F Y \P\u\k\u\l H:i \W\i\b') }}</p>
                </div>
            </div>
            <img src="{{ asset('images/' . $artikels->url_gambar) }}" alt="Team 1" class="card-img-top mx-auto d-block my-4" style="width: 300px; height: auto;">
            <div class="card">
                <div class="card-body">
                    <div style="text-align: left;">
                        @php
                        $deskripsi = $artikels->deskripsi;
                        $words = str_word_count($deskripsi, 1); // Membuat array kata-kata dari deskripsi
                        $paragraphs = array_chunk($words, 30); // Membagi array kata menjadi paragraf dengan 30 kata per paragraf
                        @endphp

                        @foreach ($paragraphs as $paragraph)
                        <p>{{ implode(' ', $paragraph) }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection