@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = 'Bootcamps - PT . Winnicode Garuda Teknologi';
@endphp
<style>
    .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
    }

    #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
    }

    #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
    }

    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }
</style>
<style>
    /* If the screen size is 1200px wide or more, set the font-size to 80px */
    @media (min-width: 1200px) {
        .responsive-header {
            font-size: 64px;
        }

        .responsive-header1 {
            font-size: 50px;
        }

        .responsive-p {
            font-size: 24px;
        }

        .responsive-p1 {
            font-size: 22px;
        }

        .responsive-mini {
            font-size: 20px
        }

        .responsive-small {
            font-size: 16px
        }
    }

    /* If the screen size is smaller than 1200px, set the font-size to 80px */
    @media (max-width: 1199.98px) {
        .responsive-header {
            font-size: 40px;
        }

        .responsive-header1 {
            font-size: 30px;
        }

        .responsive-p {
            font-size: 16px;
        }

        .responsive-p1 {
            font-size: 14px;
        }

        .responsive-mini {
            font-size: 14px
        }
    }
</style>
<section class="background-radial-gradient overflow-hidden">
<div class="container">
    <h1 class="text-center my-5" style="color: white; font-weight: bold;">DAFTAR BOOTCAMP</h1>
    <div class="row">
        @foreach ($bootcamps as $bootcamp)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm" style="border-radius: 10px; overflow: hidden;">
                    <!-- Gambar menyesuaikan ukuran kotak -->
                    <img src="{{ asset('images/bootcamps/' . $bootcamp->url_gambar) }}" class="card-img-top" alt="Bootcamp Image" style="object-fit: cover; width: 100%; height: 200px;">
                    <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title" style="font-size: 18px; font-weight: bold;">{{ $bootcamp->name }}</h5>
                        <p class="card-text" style="font-size: 14px; color: #333;">
                            {{ Str::limit($bootcamp->description, 100) }}
                        </p>
                        <p class="card-text" style="font-size: 16px; font-weight: bold; color: #333;">
                            <strong>Price:</strong> Rp {{ number_format($bootcamp->price, 2) }}
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('bootcamps.detail', $bootcamp->id) }}" class="btn btn-primary w-100" style="font-size: 14px;">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
