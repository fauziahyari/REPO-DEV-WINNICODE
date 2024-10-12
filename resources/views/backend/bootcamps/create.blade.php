@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Bootcamp Baru</h2>
    <form action="{{ route('bootcamps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
                <label for="name" class="form-label">Nama Bootcamp</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>

            <div class="mb-3">
                <label for="url_gambar" class="form-label">Unggah Gambar</label>
                <input type="file" name="url_gambar" class="form-control" id="url_gambar" accept="image/*">
            </div>

        <button type="submit" class="btn btn-primary">Tambah Bootcamp</button>
        <a href="{{ route('bootcamps.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<!-- Styles select2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#single-select-field').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
    });
</script>
@endsection
