<div>
    <nav style="{{ env('bgColor200') }}" class="navbar shadow-sm navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><b>Beres Digital</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('admin')) active @endif" aria-current="page"
                            href="{{ url('admin') }}">Dashboard</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('pembayaran') }}">Pembayaran</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('project') }}">Project</a>
                    </li>

                    @if (auth()->user()->role != 'finance')
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('kelola-produk')) active @endif" aria-current="page"
                                href="{{ url('admin/kelola-produk') }}">Kelola Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ url('admin/kelola-layanan') }}">Kelola
                                Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('portofolio') }}">Kelola Portofolio</a>
                        </li>
                    @endif

                    @if (auth()->user()->role == 'superadmin')
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('setting') }}">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('kelola-akun') }}">Kelola Akun</a>
                        </li>
                    @endif
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Setting
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" style="{{ env('bgColor100') }}">
                            <li><a class="dropdown-item " href="{{ url('tentang', []) }}">Pajak</a></li>
                            <li><a class="dropdown-item " href="{{ url('tentang', []) }}">Tentang</a></li>
                            <li><a class="dropdown-item " href="{{ url('kontak', []) }}">Kontak</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a href="{{ url('login') }}" class="nav-link text-decoration-none text-white"
                                type="submit">{{ auth()->user()->role }}</a>
                        </li>
                    </ul>
                    <a href="{{ url('logout') }}"
                        class="btn btn-danger px-4 rounded-pill hoverdaftar text-white d-flex align-items-center"
                        type="submit">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<style>
    .active {
        font-weight: bold;
    }

    .hoverdaftar:hover {
        border: white;
    }
</style>
