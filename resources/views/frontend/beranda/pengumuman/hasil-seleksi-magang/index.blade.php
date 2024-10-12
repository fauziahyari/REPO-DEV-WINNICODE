@extends('frontend.beranda.layouts.app')

@section('container')
@php
$title = 'Pendataan Peserta Magang - PT . Winnicode Garuda Teknologi';
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
                        <h1 style="text-align: center;">Daftar Peserta Magang Diterima</h1>
                        <div style="text-align: center;">
                            <h1>Tahun 2024</h1>
                            <div style="color: crimson;">
                                <p>Batas Menerima Penawaran Pada Tanggal</p>
                                <p>Selasa 25 Juni 2024 Pukul 15:00 WIB</p>
                            </div>
                        </div>
                        <form action="{{ route('pendataan.magang.index') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_lengkap">Peserta Terdaftar</label>
                                <select id="nama_lengkap" name="nama_lengkap" class="js-select2 @error('nama_lengkap') is-invalid @enderror">
                                    <option value="">Silakan Pilih</option>
                                    @foreach($posisiMagang as $nama_lengkap => $posisi_magang)
                                    <option value="{{ $nama_lengkap }}">{{ $loop->iteration }}. {{ $nama_lengkap }} - {{ $posisi_magang }}</option>
                                    @endforeach
                                </select>
                                @error('nama_lengkap')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="universitas" class="form-label">Universitas</label>
                                <input type="text" id="universitas" name="universitas" class="form-control" placeholder="Masukan Asal Universitas" value="{{ old('universitas') }}" required>
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukan Jurusan" value="{{ old('jurusan') }}" required>
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="nim" class="form-label">Nim Mahasiswa</label>
                                <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukan Nim Mahasiswa" value="{{ old('nim') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="posisi_magang">Posisi Magang</label>
                                <select id="posisi_magang" name="posisi_magang" class="form-select @error('posisi_magang') is-invalid @enderror">
                                    <option value="">Silakan Pilih</option>
                                    <option value="Web Developer" {{ old('posisi_magang') == 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                                    <option value="Laravel Specialist" {{ old('posisi_magang') == 'Laravel Specialist' ? 'selected' : '' }}>Laravel Specialist</option>
                                    <option value="Fullstack Developer" {{ old('posisi_magang') == 'Fullstack Developer' ? 'selected' : '' }}>Fullstack Developer</option>
                                    <option value="CopyWriter" {{ old('posisi_magang') == 'CopyWriter' ? 'selected' : '' }}>CopyWriter</option>
                                </select>
                                @error('posisi_magang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="email" class="form-label">Masukkan Email Peserta:</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email" value="{{{ old('email') }}}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="no_wa" class="form-label">Masukkan Nomor Whatsapp Aktif</label>
                                <input type="text" id="no_wa" name="no_wa" class="form-control" placeholder="Masukkan Nomor Whatsapp Aktif" value="{{ old('no_wa') }}" required>
                                <small class="text-danger" id="no_wa_error"></small>
                            </div>

                            <script>
                                const noWaInput = document.getElementById("no_wa");

                                noWaInput.addEventListener("input", function(event) {
                                    const inputValue = event.target.value;
                                    const numericValue = inputValue.replace(/[^0-9]/g, "");

                                    if (inputValue !== numericValue) {
                                        event.target.value = numericValue;
                                    }
                                });
                            </script>
                            <div class="form-group" style="text-align: left;">
                                <label for="durasi_magang" class="form-label">Durasi Magang</label>
                                <select id="durasi_magang" name="durasi_magang" class="form-select @error('durasi_magang') is-invalid @enderror">
                                    <option value="3 Bulan">3 Bulan</option>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .select2.select2-container {
        width: 100% !important;
    }

    .select2.select2-container .select2-selection {
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        height: 34px;
        margin-bottom: 15px;
        outline: none !important;
        transition: all .15s ease-in-out;
    }

    .select2.select2-container .select2-selection .select2-selection__rendered {
        color: #333;
        line-height: 32px;
        padding-right: 33px;
    }

    .select2.select2-container .select2-selection .select2-selection__arrow {
        background: #f8f8f8;
        border-left: 1px solid #ccc;
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
        height: 32px;
        width: 33px;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
        background: #f8f8f8;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
        -webkit-border-radius: 0 3px 0 0;
        -moz-border-radius: 0 3px 0 0;
        border-radius: 0 3px 0 0;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
        border: 1px solid #34495e;
    }

    .select2.select2-container .select2-selection--multiple {
        height: auto;
        min-height: 34px;
    }

    .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
        margin-top: 0;
        height: 32px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
        display: block;
        padding: 0 4px;
        line-height: 29px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin: 4px 4px 0 0;
        padding: 0 6px 0 22px;
        height: 24px;
        line-height: 24px;
        font-size: 12px;
        position: relative;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        margin: 0;
        text-align: center;
        color: #e74c3c;
        font-weight: bold;
        font-size: 16px;
    }

    .select2-container .select2-dropdown {
        background: transparent;
        border: none;
        margin-top: -5px;
    }

    .select2-container .select2-dropdown .select2-search {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-search input {
        outline: none !important;
        border: 1px solid #34495e !important;
        border-bottom: none !important;
        padding: 4px 6px !important;
    }

    .select2-container .select2-dropdown .select2-results {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-results ul {
        background: #fff;
        border: 1px solid #34495e;
    }

    .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
        background-color: #3498db;
    }
</style>
@endsection