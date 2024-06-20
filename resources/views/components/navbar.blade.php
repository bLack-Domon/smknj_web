<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('beranda') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h5 class="m-0 text-primary"><img src="{{ asset('img/logo.png') }}" alt=""></i></h5>
        </a>
        <button type="button" class="navbar-toggler me-2" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('beranda') }}" class="nav-item nav-link {{ Request::routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                <div class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('smknj.*') ? 'text-primary' : '' }}" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('smknj.index') }}" class="dropdown-item {{ Request::routeIs('smknj.index') ? 'text-primary' : '' }}">SMK Nurul Jadid</a>
                        <a href="{{ route('smknj.vimisi') }}" class="dropdown-item {{ Request::routeIs('smknj.vimisi') ? 'text-primary' : '' }}">Visi & Misi</a>
                        <a href="{{ route('smknj.identitas') }}" class="dropdown-item {{ Request::routeIs('smknj.identitas') ? 'text-primary' : '' }}">Identitas Sekolah</a>
                        <a href="#" class="dropdown-item">Hubungan Industri</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('program.*') ? 'text-primary' : '' }}" data-bs-toggle="dropdown">Program</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('program.keahlian') }}" class="dropdown-item {{ Request::routeIs('program.keahlian') ? 'text-primary' : '' }}">Program Keahlian</a>
                        <a href="#" class="dropdown-item">Ekstrakurikuler</a>
                    </div>
                </div>
                <a href="{{ route('alumni') }}" class="nav-item nav-link {{ Request::routeIs('alumni') ? 'active' : '' }}">Alumni</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('galeri.*') ? 'text-primary' : '' }}" data-bs-toggle="dropdown">Galeri</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('galeri.foto') }}" class="dropdown-item {{ Request::routeIs('galeri.video') ? 'text-primary' : '' }}">Foto</a>
                        <a href="{{ route('galeri.video') }}" class="dropdown-item {{ Request::routeIs('galeri.video') ? 'text-primary' : '' }}">Video</a>
                        <a href="#" class="dropdown-item">Fasilitas</a>
                    </div>
                </div>
                <a href="{{ route('berita-sekolah') }}" class="nav-item nav-link {{ Request::routeIs('berita-sekolah') ? 'active' : '' }}">Berita</a>
                <a href="#" class="nav-item nav-link">Pengumuman</a>
                <a href="#" class="nav-item nav-link">Download</a>
                <a href="{{ route('kontak_kami') }}" class="nav-item nav-link {{ Request::routeIs('kontak_kami') ? 'active' : '' }}">Kontak</a>
                <a href="{{ route('ppdb') }}" class="nav-item nav-link {{ Request::routeIs('ppdb') ? 'active' : '' }}">PPDB</a>
            </div>
        </div>
    </nav>