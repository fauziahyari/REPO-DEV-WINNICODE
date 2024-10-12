<!-- Load style Leaflet.css -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Load jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Load script Leaflet.js (library untuk menggunakan OpenStreetMap) -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- Script untuk menampilkan peta menggunakan OpenStreetMap -->
<script>
    // Fungsi untuk menginisialisasi peta
    function initMap() {
        // Buat objek peta menggunakan OSM
        var map = L.map('map').setView([-7.801194, 110.364917], 12);

        // Tambahkan layer peta dari OSM
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker ke lokasi Yogyakarta
        L.marker([-7.801194, 110.364917]).addTo(map)
            .bindPopup('Yogyakarta')
            .openPopup();
    }
    // Event listener untuk menampilkan peta saat modal ditampilkan
    $('#lokasiModal').on('shown.bs.modal', function() {
        initMap();
    });
</script>