@extends('backend.layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" value="{{ $artikel->judul }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Penulis</label>
                            <select name="penulis" class="form-control">
                                <option value="" disabled>Silahkan Pilih</option>
                                @foreach($penulis as $data)
                                <option value="{{ $data->penulis }}" {{ $artikel->penulis == $data->penulis ? 'selected' : '' }}>{{ $data->penulis }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ganti Gambar</label>
                            <input type="file" name="gambar" class="form-control" accept="image/png, image/jpeg, image/jpg" placeholder="Pilih file gambar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Preview Gambar</label><br>
                            <button href="#" data-toggle="modal" data-target="#previewModal" class="btn btn-primary">Preview Gambar</button>
                            <!-- Modal Preview Gambar -->
                            <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="previewModalLabel">Preview Gambar</h5>
                                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">

                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                        <img src="{{ asset('images/' . $artikel->url_gambar) }}" style="width: 800px; height: auto;" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="5" style="width: 545px;" required>{{ $artikel->deskripsi }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-1 mb-1">Simpan</button>
    </form>
</div>
@endsection