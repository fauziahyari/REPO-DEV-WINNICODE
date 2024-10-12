<!-- Modal -->
<div class="modal fade" id="lokasiModal" tabindex="-1" aria-labelledby="lokasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lokasiModalLabel">Lokasi Perusahaan : Yogyakarta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tempat menampilkan peta -->
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>
</div>
@include('frontend.modal-utama.javascript.api-peta')