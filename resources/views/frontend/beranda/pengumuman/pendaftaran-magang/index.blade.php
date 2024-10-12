@extends('frontend.beranda.layouts.app')

@section('container')
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
                        <h1 style="text-align: center;">PENDAFTARAN MAGANG MBKM</h1>
                        <div style="text-align: center;">
                            <p>Formulir peserta magang</p>
                            <p style="color: crimson;">Masukan CV Sesuai Kriteria Posisi Magang</p>
                        </div>
                        <form action="{{ route('submit.magang.mbkm') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" style="text-align: left;">
                                <label for="nama_lengkap" class="form-label">Masukkan Nama Lengkap Peserta:</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Masukan Nama lengkap" required>
                                @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="email" class="form-label">Masukkan Email Peserta:</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="nomor_wa" class="form-label">Masukkan Whatsapp Peserta:</label>
                                <input type="nomor_wa" id="nomor_wa" name="nomor_wa" class="form-control @error('nomor_wa') is-invalid @enderror" placeholder="Masukan Nomor Whatsapp" required>
                                @error('nomor_wa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="universitas" class="form-label">Universitas</label>
                                <input type="text" id="universitas" name="universitas" class="form-control" placeholder="Masukan Asal Universitas" required>
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="cv" class="form-label">CV</label><span style="color: red;">(Upload format PNG,JPG,JPEG,PDF)</span>
                                <input type="file" id="cv" name="cv" class="form-control @error('cv') is-invalid @enderror" placeholder="Masukan Asal Universitas" required>
                                @error('cv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <div class=" row">
                                    <div class="col-md-6"> <!-- Bagian kiri -->
                                        <div class="form-group">
                                            <label for="posisi_magang">Posisi Magang</label>
                                            <select id="posisi_magang" name="posisi_magang" class="form-select @error('status') is-invalid @enderror">
                                                <option value="">Silakan Pilih</option>
                                                <option value="Web Developer">Web Developer</option>
                                                <option value="Laravel Specialist">Laravel Specialist</option>
                                                <option value="Fullstack Developer">Fullstack Developer</option>
                                                <option value="CopyWriter">CopyWriter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> <!-- Bagian kiri -->
                                        <div class="form-group">
                                            <label for="tipe_magang">Tipe Magang</label>
                                            <select id="tipe_magang" name="tipe_magang" class="form-select @error('tipe_magang') is-invalid @enderror">
                                                <option value="">Silakan Pilih</option>
                                                <option value="WFO" disabled>WFO (Penuh)</option>
                                                <option value="WFH">WFH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> <!-- Bagian kanan -->
                                        <div class="form-group" id="status_magang_container" style="display:none;">
                                            <label>Status Magang</label>
                                            <select id="status_magang" name="status_magang" class="form-select @error('status_magang') is-invalid @enderror">
                                                <option value="">Silahkan Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#tipe_magang').change(function() {
                                                var selectedType = $(this).val();
                                                $('#status_magang').empty(); // Mengosongkan pilihan pada dropdown 'Status Magang'

                                                if (selectedType == 'WFO') {
                                                    $('#status_magang').append('<option value="PAID">PAID</option>'); // Menambahkan pilihan 'PAID'
                                                } else if (selectedType == 'WFH') {
                                                    $('#status_magang').append('<option value="UNPAID">UNPAID</option>'); // Menambahkan pilihan 'UNPAID'
                                                }

                                                $('#status_magang_container').show(); // Menampilkan container dropdown 'Status Magang'
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection