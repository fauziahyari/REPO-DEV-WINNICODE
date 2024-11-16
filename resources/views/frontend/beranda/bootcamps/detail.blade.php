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
<div class="container my-5">
<div class="container my-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-color: white; color: white; border-radius: 10px; padding: 20px; max-width: 320px; height: 100%; display: flex;">
            <img src="{{ asset('images/bootcamps/' . $bootcamps->url_gambar) }}" class="img-fluid" alt="Bootcamp Image" style="max-width: 300px;">
        </div>
        <div class="col-md-6">
            <h3 class="text-uppercase"style="color: white; font-weight: bold;">{{ strtoupper($bootcamps->name) }} : BOOTCAMP</h3>
            <p class="fs-4 fw-bold text-primary">Rp {{ number_format($bootcamps->price, 0, ',', '.') }}</p>
        </div>
    </div>

    <div class="p-4">
        <h4 class="text-primary">Deskripsi Bootcamp</h4>
        <p style="color: white; font-weight: bold;">{{ $bootcamps->description }}</p>
    </div>

    <div class="text-center my-5">
        <a href="#" class="btn btn-primary btn-lg">DAFTAR SEKARANG</a>
    </div>
</div>

@endsection
