@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = 'Hasil Seleksi magang - PT . Winnicode Garuda Teknologi';
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
                        <div style="text-align: center;">
                            <h1>PESERTA TERDAFTAR</h1>
                            <div class="container">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <label>Nama :</label>
                                        <p class="form-control">{{ $peserta->nama_lengkap }}</p>
                                        <label>Email :</label>
                                        <p class="form-control">{{ $peserta->email }}</p>
                                    </div>
                                    <div class="grid-item">
                                        <label>Posisi Diambil :</label>
                                        <p class="form-control">{{ $peserta->posisi_magang }}</p>
                                        <label>Asal Universitas :</label>
                                        <p class="form-control">{{ $peserta->universitas }}</p>
                                    </div>
                                </div>
                                <div>
                                    <label>Status Magang</label>
                                    <p class="form-control">{{ $peserta->status_magang }}</p>
                                </div>
                            </div>

                            <style>
                                .container {
                                    margin: 0 auto;
                                    max-width: 1100px;
                                    /* menambahkan max-width lebih besar untuk desktop */
                                    padding: 0 20px;
                                }

                                .grid-container {
                                    display: grid;
                                    grid-template-columns: 1fr;
                                    grid-gap: 20px;
                                    justify-content: center;
                                }

                                .grid-item {
                                    margin-bottom: 20px;
                                }

                                label {
                                    display: inline-block;
                                    width: 150px;
                                    /* lebar label tetap */
                                    margin-right: 10px;
                                }

                                @media (min-width: 800px) {
                                    .grid-container {
                                        grid-template-columns: repeat(2, 1fr);
                                    }

                                    label {
                                        margin-right: 20px;
                                        /* menambahkan margin-right lebih besar untuk desktop */
                                    }
                                }

                                /* Tambahkan style untuk memastikan tampilan mobile tidak terlalu berdekatan */
                                @media (max-width: 600px) {
                                    .grid-item {
                                        margin-bottom: 20px;
                                    }

                                    label {
                                        width: 100%;
                                        /* mengatur lebar label menjadi penuh pada mobile */
                                        margin-right: 0;
                                        /* reset margin-right untuk mobile */
                                        margin-bottom: 10px;
                                        /* menambahkan margin-bottom pada label untuk mobile */
                                    }
                                }
                            </style>
                            <div class="status-container">
                                <label class="long-label">Status Pendaftaran Peserta :</label>
                                @php
                                $buttonColor = '';
                                switch ($peserta->status) {
                                case 'SELEKSI':
                                $buttonColor = 'btn-warning';
                                break;
                                case 'REVIEW TEST':
                                $buttonColor = 'btn-info';
                                break;
                                case 'DITERIMA':
                                $buttonColor = 'btn-success';
                                break;
                                case 'DITOLAK':
                                $buttonColor = 'btn-danger';
                                break;
                                case 'MENDAFTAR':
                                $buttonColor = 'btn-primary';
                                break;
                                default:
                                $buttonColor = 'btn-secondary';
                                break;
                                }
                                @endphp
                                <!-- Button trigger modal -->
                                <div class="d-flex justify-content-center">
                                    <br>
                                    <button type="button" class="btn btn-sm {{ $buttonColor }} d-block d-sm-inline" data-toggle="modal" data-target="#statusModal">
                                        {{ $peserta->status }}
                                    </button>
                                </div>
                            </div>

                            <style>
                                .long-label {
                                    flex: 0 0 auto;
                                    /* agar label tetap */
                                    width: 200px;
                                    /* lebar tetap untuk label */
                                    margin-right: 20px;
                                    /* margin kanan untuk label */
                                    margin-left: 42px;
                                    /* menggeser ke kanan */
                                }
                            </style>
                            <div>
                                @if($peserta->status == 'DITERIMA')
                                <div style="text-align: center;">
                                    <p>Selamat,Silahkan Terima Penawaran Magang Bersama Kami <a class="btn btn-primary" href="{{ route('validasi.magang.index') }}">TERIMA MAGANG</a></p>
                                </div>
                                @elseif($peserta->status == 'DITOLAK')
                                <div style="text-align: center;">
                                    <div>
                                        <p>Silahkan Mendaftar kembali Di lain Kesempatan</p>
                                    </div>
                                    <p style="color: brown;">Data Anda Di Hapus Otomatis</p>
                                    <p style="color: brown;">Setelah 30 Hari</p>
                                </div>
                                @endif
                            </div>
                            <div>
                                <p>Terimakasih,Atas Partisipasinya.</p>
                            </div>
                            <br>
                            <div style="grid-column: span 2; text-align: center;">
                                <a href="/pengumuman" class="form-control">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection