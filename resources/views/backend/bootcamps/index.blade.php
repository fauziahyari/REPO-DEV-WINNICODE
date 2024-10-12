@extends('backend.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('bootcamps.create') }}" class="btn btn-success mb-3">Tambah Bootcamp</a>
    <table class="table table-bordered">
        <thead>
            <tr>
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
                    <td colspan="5" class="text-center">Tidak ada bootcamp yang terdaftar.</td>
                </tr>
            @else
                @foreach($bootcamps as $data)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                        <td>{{ $bootcamps->name }}</td>
                        <td>{{ $bootcamps->description }}</td>
                        <td>{{ $bootcamps->price }}</td>
                        <td> @if($bootcamp->url_gambar)
                            <img src="{{ asset('storage/' . $bootcamps->url_gambar) }}" alt="Gambar Bootcamp" width="100">
                            @else
                            Tidak ada gambar
                            @endif
                        <td>
                            <a href="{{ route('bootcamps.edit', $bootcamps->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('bootcamps.destroy', $bootcamps->id ) }}" method="post"style="display:inline-block;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus bootcamp ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
