@extends('frontend.beranda.layouts.app')

@section('container')
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
<style>
    .background {

        background:
            /* top, transparent black, faked with gradient */
            linear-gradient(rgba(0, 0, 0, 0.09),
                rgba(0, 0, 0, 0.7)), url("mazer/images/banner-logo.png");
        background-size: cover;
        height: 500px;
    }
</style>
<style>
    .text-justify {
        text-align: justify;
    }
</style>
<style>
    .whatsapp-btn:hover {
        /* tombol WhatsApp */
        background-color: #25d366;
        border-color: #25d366;
        color: #0000;
    }
</style>
<section class="shadow">
    <div>
        <div class="border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5 background">
            <div class="row">
                <div class="col-md-12 col-xl-12 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h1 class="text-white fw-bold mb-3">Tentang</h1>
                        <h2 class="text-white fw-normal mb-3">Winnicode Garuda Teknologi</h2>
                        <a href="#scrollspyHeading2" class="btn btn-warning btn-sm fs-5 fw-semibold rounded-pill shadow-sm me-2 py-2 px-4" style="width: 166.475px;height: 40px;" data-bss-hover-animate="tada">
                            Profil
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C12.5523 3 13 3.44772 13 4V17.5858L18.2929 12.2929C18.6834 11.9024 19.3166 11.9024 19.7071 12.2929C20.0976 12.6834 20.0976 13.3166 19.7071 13.7071L12.7071 20.7071C12.3166 21.0976 11.6834 21.0976 11.2929 20.7071L4.29289 13.7071C3.90237 13.3166 3.90237 12.6834 4.29289 12.2929C4.68342 11.9024 5.31658 11.9024 5.70711 12.2929L11 17.5858V4C11 3.44772 11.4477 3 12 3Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-secondary-subtle" id="scrollspyHeading2">
    <div class="container py-5">
        <div class="card rounded shadow">
            <div class="py-4 py-xl-5 d-flex justify-content-center">
                <div class="row gy-4 gy-md-0 w-100 d-flex justify-content-center">
                    <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                        <div style="max-width: 580px;">
                            <h2 class="fw-bold fs-1">Profil</h2>
                            <p class="fw-bold fs-4">Winnicode Garuda Teknologi</p>
                            <p class="fs-4 text-justify">
                                Sistem Jurnalistik Terpadu merupakan sebuah inovasi yang bertujuan untuk menyatukan berbagai aspek dalam dunia
                                jurnalisme, mulai dari pengumpulan informasi, proses penyuntingan, hingga publikasi konten. Platform ini dirancang
                                untuk menjadi wadah yang komprehensif bagi para jurnalis dan penerbit dalam menjalankan tugas mereka dengan lebih
                                efektif dan efisien. Sistem jurnalistik ini dibangun dengan tujuan meningkatkan jurnalistik yang terpadu dan modern
                                yang disusun oleh <strong>Divisi Informatika</strong> dan Development.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Winnicode Official <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Web Terverifikasi"></h5>
                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">PT. Winnicode Garuda Teknologi</p>
                                    <div class="d-flex justify-content-center rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                        <div class="pe-3">
                                            <p class="small text-muted mb-1">Legalitas</p>
                                            <p class="mb-0">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#legalitasModal">
                                                    <span class="badge bg-success">AHU-032656.AH.01.30.Tahun 2023</span>
                                                </button>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="small text-muted mb-1">Bidang</p>
                                            <p class="mb-0">Jurnalistik/Berita</p>
                                        </div>
                                        <div class="px-3">
                                        <p class="small text-muted mb-1">Lokasi</p>
                                                                <p class="mb-0">
                                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#lokasiModal">
                                                                        <span class="badge bg-success">Yogyakarta</span>
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                                            <div class="pe-3">
                                                                <p class="small text-muted mb-1">E-mail</p>
                                                                <p class="mb-0">admin@winnicode.com</p>
                                                            </div>
                                                            <div class="pe-3">
                                                                <p class="small text-muted mb-1">Hubungi Kami ( 24 Jam )</p>
                                                                <p class="mb-0">6285159932501</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex justify-content-between" style="max-width: 200px;">
                                                                <a href="https://www.linkedin.com/company/winnicodegarudateknologi" class="btn btn-outline-primary me-1">LinkedIn</a>
                                                                <a href="https://wa.me/6285159932501" class="btn btn-outline-primary whatsapp-btn">Hubungi Kami</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.modal-utama.legalitas')
@include('frontend.modal-utama.peta')
@include('frontend.modal-utama.wa')
@endsection