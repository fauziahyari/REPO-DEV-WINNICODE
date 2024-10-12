@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = 'Informasi - PT . Winnicode Garuda Teknologi';
@endphp
<style>
    .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
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
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" style="font-family: Raleway;">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative" style="margin: 0 auto;">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <h1 style="text-align: center;">Informasi Magang</h1>
                        <div style="text-align: center;">
                            <p>Kuota Penerimaan Peserta Magang</p>
                            <p>Pembukaan <span style="color: cadetblue;">16 April 2024</span> - Penutupan <span style="color: crimson;">16 Agustus 2024</span></p>
                        </div>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 20px; margin: 0 auto; max-width: 600px; justify-content: center;">
                            <div class="row">
                                <div style="text-align: center;">
                                    <label>Web Development</label>
                                    <p class="form-control">{{ $daftar_Web_Developer }} Mendaftar</p>
                                </div>
                                <div style="text-align: center;">
                                    <label>Laravel Specialist</label>
                                    <p class="form-control">{{ $daftar_laravel_specialist }} Mendaftar</p>
                                </div>
                            </div>
                            <div class="row">
                                <div style="text-align: center;">
                                    <label>Fullstack Development</label>
                                    <p class="form-control">{{ $daftar_fullstack_developer }} Mendaftar</p>
                                </div>
                                <div style="text-align: center;">
                                    <label>CopyWriter</label>
                                    <p class="form-control">{{ $daftar_copywriter }} Mendaftar</p>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <p>Kuota <span style="color: #5755FE; font-weight: bold;">50</span> Peserta Magang</p>
                            <p>PT.Winnicode Garuda Teknologi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection