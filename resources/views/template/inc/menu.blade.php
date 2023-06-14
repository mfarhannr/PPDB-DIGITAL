<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === '/' ? 'text-primary' : '' }}" href="{{ route('dashboard') }}">
            <span class="nav-link-title"> Home </span>
        </a>
    </li>
    <li class="nav-item drop-down">
        <div class="card">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title"> Daftar </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item {{ Request::path() === 'formulir' ? 'text-light bg-primary' : '' }}"
                href="{{ route('formulir') }}" rel="noopener">
                Isi Formulir Pendaftaran
            </a>
            <a class="dropdown-item" href="#" rel="noopener">
                Nilai
            </a>
        </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title"> Pengaturan </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item {{ Request::path() === 'role' ? 'text-light bg-primary' : '' }}"
                href="{{ route('role') }}" rel="noopener">
                Role
            </a>
            <a class="dropdown-item {{ Request::path() === 'pengguna' ? 'text-light bg-primary' : '' }}"
                href="{{ route('pengguna') }}" rel="noopener">
                Pengguna
            </a>
        </div>
    </li>
</ul>
