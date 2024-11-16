@extends('backend.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('bootcamps.create') }}" class="btn btn-success mb-3">Tambah Bootcamp</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($bootcamps->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Tidak ada bootcamp yang terdaftar.</td>
                </tr>
            @else
                @foreach($bootcamps as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            @if($data->url_gambar)
                                <img src="{{ asset('images/bootcamps/' . $data->url_gambar) }}" alt="Gambar Bootcamp" width="100">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>{{ $data->description }}</td>
                        <td>Rp {{ number_format($data->price, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('bootcamps.edit', $data->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('bootcamps.destroy', $data->id)}}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus bootcamp ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
