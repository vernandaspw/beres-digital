<div>
    <nav style="{{ env('bgColor200') }}" class="navbar shadow-sm navbar-fixed navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><b>Beras Digital</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" style="{{ env('bgColor100') }}">
                            <li><a class="dropdown-item " href="#">Qumanten</a></li>
                            <li><a class="dropdown-item " href="#">Sewa Tamu</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Semua produk</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" style="{{ env('bgColor100') }}">
                            <li><a class="dropdown-item " href="#">Jasa desain</a></li>
                            <li><a class="dropdown-item " href="#">Jasa buat website</a></li>
                            <li><a class="dropdown-item " href="#">Jasa buat aplikasi</a></li>
                            <li><a class="dropdown-item " href="#">Jasa foto</a></li>
                            <li><a class="dropdown-item " href="#">Jasa video</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Semua layanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Portofolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Perusahaan
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" style="{{ env('bgColor100') }}">
                            <li><a class="dropdown-item " href="#">Tentang</a></li>
                            <li><a class="dropdown-item " href="#">Kontak</a></li>
                           
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link text-decoration-none text-white" type="submit">Login</a>
                        </li>
                    </ul>
                    <a class="btn px-4 rounded-pill hoverdaftar text-white d-flex align-items-center"
                        style="{{ env('bgColor300') }}" type="submit">Daftar</a>
                </form>
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
