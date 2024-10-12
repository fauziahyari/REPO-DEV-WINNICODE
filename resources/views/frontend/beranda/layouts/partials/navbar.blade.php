<style>
    /* Add the below transitions to allow a smooth color change similar to lyft */
    .navbar {
        -webkit-transition: all 0.6s ease-out;
        -moz-transition: all 0.6s ease-out;
        -o-transition: all 0.6s ease-out;
        -ms-transition: all 0.6s ease-out;
        transition: all 0.6s ease-out;
    }

    .navbar.scrolled {
        background: rgb(68, 68, 68);
        /* IE */
        background: rgb(0, 0, 0);
        /* NON-IE */
    }
</style>
<nav class="navbar navbar-dark navbar-expand-md py-3" style="font-family: Raleway, sans-serif;padding-left: 35px;padding-right: 35px;background: rgb(0, 0, 0);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('mazer/images/nav-banner-logo.png') }}" alt="Logo" width="270" height="108" class=""></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse p-4" style="font-size: 14px;" id="navcol-2">
            <ul class="navbar-nav fw-bold ms-auto">
                <li class="nav-item fw-bold"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}" data-bss-hover-animate="pulse" href="/">BERANDA</a></li>
                <li class="nav-item "><a class="nav-link {{ $active === 'bootcamp' ? 'active' : '' }}" data-bss-hover-animate="pulse" href="/bootcamps">BOOTCAMP</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === 'pengumuman' ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PENGUMUMAN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('informasi.index') }}">Informasi Magang</a></li>
                        <li><a class="dropdown-item" href="{{ route('daftar.magang.index') }}">Pendaftaran Magang</a></li>
                        <li><a class="dropdown-item" href="/pengumuman">Cek Seleksi Magang</a></li>
                        <li><a class="dropdown-item" href="/validasi-peserta-magang">Daftar Ulang Magang</a></li>
                        <!-- Tambahkan opsi dropdown lainnya di sini jika diperlukan -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === 'informasi' ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        INFORMASI
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('frontend.artikels.index') }}">Artikel</a></li>
                        <li><a class="dropdown-item" href="{{ route('frontend.berita.index') }}">Berita</a></li>
                        <!-- Tambahkan opsi dropdown lainnya di sini jika diperlukan -->
                    </ul>
                </li>
                @auth
                <li class="nav-item fw-bold">
                    <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" data-bss-hover-animate="pulse" href="/dashboard">DASHBOARD</a>
                </li>
                @else
                <li class="nav-item fw-bold">
                <li class="nav-item "><a class="nav-link {{ $active === 'login' ? 'active' : '' }}" data-bss-hover-animate="pulse" href="/login">MASUK</a></li>
                </li>
                @endauth
                <li class="nav-item "><a class="nav-link {{ $active === 'about' ? 'active' : '' }}" data-bss-hover-animate="pulse" href="/tentang">TENTANG</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    /**
     * Listen to scroll to change header opacity class
     */
    function checkScroll() {
        var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

        if ($(window).scrollTop() > startY) {
            $('.navbar').addClass("scrolled");
        } else {
            $('.navbar').removeClass("scrolled");
        }
    }

    if ($('.navbar').length > 0) {
        $(window).on("scroll load resize", function() {
            checkScroll();
        });
    }
</script>