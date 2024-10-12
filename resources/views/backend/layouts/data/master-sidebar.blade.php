<li class="sidebar-item  has-sub">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-stack"></i>
        <span>MAGANG</span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            @if(auth()->user()->level == 'admin')
            <a href="{{ route('magang.index') }}">{{ __('PESERTA MBKM') }}</a>
            @endif

        </li>
    </ul>
</li>
<li class="sidebar-item has-sub">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-stack"></i>
        <span>PUBLIKASI</span>
    </a>
    <ul class="submenu">
        @if(auth()->user()->level == 'admin')
        <li class="submenu-item">
            <a href="{{ route('berita.index') }}">{{ __('Berita') }}</a>
        </li>
        <li class="submenu-item">
            <a href="{{ route('artikel.index') }}">{{ __('Artikel') }}</a>
        </li>
        @endif
    </ul>
</li>
<li class="sidebar-item  has-sub">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-stack"></i>
        <span>VERIFIKASI <img src="{{ asset('mazer/images/verified.png') }}" style="width: 1em; height: 1em;"></span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            @if(auth()->user()->level == 'admin')
            <a href="{{ route('sertifikat-magang.index') }}">{{ __('Sertifikat Magang') }}</a>
            @endif
        </li>
    </ul>
</li>

<li class="sidebar-item  has-sub">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-stack"></i>
        <span>BOOTCAMP</span>
    </a>
    <ul class="submenu ">
        <li class="submenu-item ">
            @if(auth()->user()->level == 'admin')
            <a href="{{ route('bootcamps.index') }}">{{ __('Daftar Bootcamp') }}</a>
            @endif
        </li>
    </ul>
</li>

