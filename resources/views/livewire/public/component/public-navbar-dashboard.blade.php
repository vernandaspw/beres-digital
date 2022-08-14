<div>
    <nav style="{{ env('bgColor200') }}" class="navbar shadow-sm fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><b>Beres Digital</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/dashboard')) active @endif" aria-current="page"
                            href="{{ url('dashboard') }}">Dashboard</a>
                    </li>

                </ul>
                <div class="d-flex">
                    @if (auth()->check())
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->nama }}
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm" style="{{ env('bgColor100') }}">
                                    <li><a class="dropdown-item "
                                            href="{{ auth()->user()->role == 'customer' ? url('dashboard') : url('admin') }}">Dashboard</a>
                                    </li>
                                    <li><a class="dropdown-item " href="{{ url('tentang', []) }}">Akun</a></li>
                                    <li><a class="dropdown-item text-danger" href="{{ url('logout', []) }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item me-3">
                                <a href="{{ url('login') }}" class="nav-link text-decoration-none text-white"
                                    type="submit">Login</a>
                            </li>
                        </ul>
                        <a href="{{ url('daftar') }}"
                            class="btn px-4 rounded-pill hoverdaftar text-white d-flex align-items-center"
                            style="{{ env('bgColor300') }}" type="submit">Daftar</a>
                    @endif

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
