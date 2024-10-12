@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div>
                <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah</a>
                <table class="table table-entered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Penulis</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $artikel as $data )
                        <tr>
                            <td class="judul-artikel">{{ $data->judul }}</td>
                            <td>
                                <img src="{{ asset('images/' . $data->url_gambar) }}" style="width: 100px; height: auto;">
                            </td>
                            <td>{{ $data->penulis }}</td>
                            <td>{{ Str::limit($data->deskripsi, 50, '...') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('artikel.edit', $data->id ) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('artikel.destroy', $data->id )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    .judul-artikel {
        max-width: 200px;
        /* Sesuaikan dengan kebutuhan Anda */
        word-wrap: break-word;
        word-break: break-all;
        white-space: normal;
    }
</style>
@endsection