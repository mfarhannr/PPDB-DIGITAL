<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark mt-3">
            PPDB
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === '/' ? 'bg-primary' : '' }}"
                        href="{{ route('dashboard') }}">
                        <span class="nav-link-title"> Home </span>
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span class="nav-link-title"> Daftar </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item {{ Request::path() === 'formulir.create' ? 'bg-primary' : '' }}"
                            href="{{ route('formulir.create') }}" rel="noopener">
                            Isi Data Pendaftar
                        </a>
                        {{-- @if (auth()->user()->level == 'admin') --}}
                        <a class="dropdown-item {{ Request::path() === 'formulir' ? 'bg-primary' : '' }}"
                            href="{{ route('formulir') }}" rel="noopener">
                            Detail Data Pendaftar
                        </a>
                        {{-- @endif --}}
                        <a class="dropdown-item {{ Request::path() === 'nilai' ? 'bg-primary' : '' }}"
                            href="{{ route('nilai.create') }}" rel="noopener">
                            Masukkan Nilai
                        </a>
                        {{-- @if (auth()->user()->level == 'admin') --}}
                        <a class="dropdown-item {{ Request::path() === 'nilai.create' ? 'bg-primary' : '' }}"
                            href="{{ route('nilai') }}" rel="noopener">
                            Detail Nilai
                        </a>
                        {{-- @endif --}}
                        <a class="dropdown-item {{ Request::path() === 'berkas' ? 'bg-primary' : '' }}"
                            href="{{ route('berkas.create') }}" rel="noopener">
                            Upload Berkas
                        </a>
                        <a class="dropdown-item {{ Request::path() === 'berkas.create' ? 'bg-primary' : '' }}"
                            href="{{ route('berkas') }}" rel="noopener">
                            Detail Berkas
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</aside>
