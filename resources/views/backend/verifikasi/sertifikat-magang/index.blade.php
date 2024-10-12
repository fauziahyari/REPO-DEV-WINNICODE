@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="mb-4" style="text-align: end;">
        <button data-toggle="modal" data-target="#TambahModal" class="btn btn-primary">Tambah</button>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-entered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>REG SERTIFIKAT</th>
                        <th>NAMA LENGKAP</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sertifikatmagang as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->reg_sertifikat }}</td>
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('backend.verifikasi.sertifikat-magang.modal.tambah')
@endsection