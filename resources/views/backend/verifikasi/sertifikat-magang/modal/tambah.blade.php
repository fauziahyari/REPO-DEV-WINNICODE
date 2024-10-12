<!-- Modal -->
<div class="modal fade" id="TambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sertifikat <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sertifikat-magang.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Departemen</label>
                                    <select name="departemen" class="form-control" required>
                                        <option value="">Silahkan Pilih</option>
                                        <option value="COPYWRITER">COPYWRITER</option>
                                        <option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
                                        <option value="FULLSTACK DEVELOPMENT">FULLSTACK DEVELOPMENT</option>
                                        <option value="LARAVEL SPECIALIST">LARAVEL SPECIALIST</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button> <!-- Ubah type menjadi 'submit' -->
                </div>
            </form>
        </div>
    </div>
</div>
