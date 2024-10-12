<div class="modal fade" id="statusModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel{{ $data->id }}">Ubah Status</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group d-flex align-items-center">
                    <label class="mr-2">STATUS SAAT INI:</label>
                    @php
                    $buttonColor = '';
                    switch ($data->status) {
                    case 'SELEKSI':
                    $buttonColor = 'btn-warning';
                    break;
                    case 'REVIEW TEST':
                    $buttonColor = 'btn btn-info'; // Mengubah warna untuk status 'REVIEW' menjadi biru
                    break;
                    case 'DITERIMA':
                    $buttonColor = 'btn-success';
                    break;
                    case 'DITOLAK':
                    $buttonColor = 'btn-danger';
                    break;
                    case 'MENDAFTAR':
                    $buttonColor = 'btn-primary';
                    break;
                    default:
                    $buttonColor = 'btn-secondary';
                    break;
                    }
                    @endphp
                    <button type="button" class="btn {{ $buttonColor }} btn-sm" data-toggle="modal" data-target="#statusModal{{ $data->id }}">
                        {{ $data->status }}
                    </button>
                </div>

                <form action="{{ route('update-status', $data->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="newStatus">Pilih Status Baru:</label>
                        <select class="form-control" id="newStatus" name="newStatus">
                            <option value="#">Silahkan Pilih</option>
                            <option value="SELEKSI" {{ $data->status === 'SELEKSI' ? 'selected' : '' }}>SELEKSI</option>
                            <option value="REVIEW TEST" {{ $data->status === 'REVIEW TEST' ? 'selected' : '' }}>REVIEW TEST</option>
                            <option value="DITERIMA" {{ $data->status === 'DITERIMA' ? 'selected' : '' }}>DITERIMA</option>
                            <option value="MENDAFTAR" {{ $data->status === 'MENDAFTAR' ? 'selected' : '' }}>MENDAFTAR</option>
                            <option value="DITOLAK" {{ $data->status === 'DITOLAK' ? 'selected' : '' }}>DITOLAK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>