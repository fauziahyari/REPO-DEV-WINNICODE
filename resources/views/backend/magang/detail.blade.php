@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4> Data Peserta</h4>
                <a href="{{ route('magang.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('magang.show', $peserta->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="nama_mapel">Nama Lengkap</label>
                                <input type="text" id="nama_mapel" name="nama_lengkap" class="form-control @error('nama_dokter') is-invalid @enderror" placeholder="{{ __('Masukkan Nama Lengkap') }}" value="{{ $peserta->nama_lengkap }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                            <div class="col-sm-4">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Masukkan Nama Lengkap') }}" value="{{ $peserta->email }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                            <div class="col-sm-4">
                                <label for="universitas">Universitas</label>
                                <input type="text" id="universitas" name="universitas" class="form-control @error('universitas') is-invalid @enderror" placeholder="{{ __('Masukkan Universitas') }}" value="{{ $peserta->universitas }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Posisi Magang</label>
                                <input type="text" id="posisi_magang" name="posisi_magang" class="form-control" value="{{ $peserta->posisi_magang }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                            <div class="col-sm-4">
                                <label>Tipe Magang</label>
                                <input type="text" id="tipe_magang" name="tipe_magang" class="form-control" value="{{ $peserta->tipe_magang }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                            <div class="col-sm-4">
                                <label>Status Pendaftaran</label>
                                <input type="text" id="status" name="status" class="form-control" value="{{ $peserta->status }}" readonly style="background-color: #f0f0f0; color: #777;">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="CV">Upload CV</label>
                                <div class="d-flex">
                                    <input type="file" id="cv" name="cv" class="form-control" style="width: 247px;" placeholder="Masukan CV">
                                    <div>
                                        <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#cvModal">
                                            PRATINJAU
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('backend.magang.modal.preview-cv')
@endsection