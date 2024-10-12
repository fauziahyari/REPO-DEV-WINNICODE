@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Bootcamp</h1>

        <form action="{{ route('bootcamps.update', $bootcamp->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Bootcamp</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $bootcamp->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" required>{{ $bootcamp->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ $bootcamp->price }}" required>
            </div>

            <div class="mb-3">
                <label for="url_gambar" class="form-label">Unggah Gambar</label>
                <input type="file" name="url_gambar" class="form-control" id="url_gambar" accept="image/*">
            </div>

            <button type="submit" class="btn btn-success">Update Bootcamp</button>
            <a href="{{ route('bootcamps.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
