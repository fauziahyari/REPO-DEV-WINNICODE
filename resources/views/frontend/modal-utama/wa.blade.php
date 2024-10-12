<!-- Style Css -->
<style>
    #whatsapp-button button {
        background-color: transparent;
        border: none;
        padding: 0;
        position: fixed;
        bottom: 70px;
        right: 20px;
        z-index: 1000;
    }

    #whatsapp-button img {
        width: 80px;
        height: 80px;
    }
</style>
<!-- Tombol WhatsApp -->
<div id="whatsapp-button">
    <button type="button" data-bs-toggle="modal" data-bs-target="#whatsappModal">
        <img src="{{ asset('mazer/images/cs-dua.png') }}" alt="WhatsApp">
    </button>
</div>
<!-- Modal WhatsApp -->
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="whatsappModalLabel">Kontak Kami</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Admin (Layanan Service Center) <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Admin Terverifikasi"></span>
                        <button type="button" class="btn btn-primary" onclick="redirectToWhatsApp('kontak1')">Hubungi Kami</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Admin (Layanan Kerjasama & Collaborate) <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Admin Terverifikasi"></span>
                        <button type="button" class="btn btn-primary" onclick="redirectToWhatsApp('kontak1')">Hubungi Kami</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Admin (Layanan Informasi Magang) <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;" title="Admin Terverifikasi"></span>
                        <button type="button" class="btn btn-primary" onclick="redirectToWhatsApp('kontak1')">Hubungi Kami</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    // Fungsi untuk mengarahkan pengguna ke kontak WhatsApp yang dipilih
    function redirectToWhatsApp(contact) {
        var whatsappNumbers = {
            kontak1: '6285159932501',
            kontak2: '6285159932502' // Ubah dengan nomor WhatsApp yang sesuai
        };
        var selectedContact = whatsappNumbers[contact];
        if (selectedContact) {
            window.location.href = 'https://wa.me/' + selectedContact;
        }
    }
</script>