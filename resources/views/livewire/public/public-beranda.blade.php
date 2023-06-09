<div>
    <livewire:public.component.public-navbar />
    <div class="pt-2">
        <section class="mb-lg-5 mt-lg-5 pt-lg-3 pb-lg-3">
            <div class="container align-items-center  d-md-flex justify-content-between"
                style="padding-bottom: 100px; padding-top: 100px;">
                <div class="col-lg-6  d-md-none">
                    <div class="text-center mt-2">
                        <img src="{{ asset('images/human1.png') }}" width="300px" class="" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="header mb-2" style="font-size: 35px">
                            <b>Grow With Beres Digital</b>
                        </div>
                        <div class="">
                            <p style="font-size: 17px">
                                Beres digital merupakan solusi membantu bagi masyarakat, pelaku bisnis UMKM dan
                                organisasi di era digitalisasi. menyediakan produk dan jasa layanan digital. Waktunya Go
                                Digital! #GrowWithBeresDigital
                            </p>
                        </div>
                        <div class="mt-3 d-lg-flex d-md-flex d-xl-flex">
                            <div class="">
                                <a href="{{ url('pesan') }}" class="btn px-4 shadow text-white"
                                    style="{{ env('bgColor300') }} border-radius: 360px;">Pesan Layanan Sekarang</a>
                            </div>
                            <div class="">
                                <a href="{{ url('cara-pesan') }}"
                                    class="ms-3 mt-2 mt-lg-0 mt-md-0 px-3 btn btn-transparent rounded-pill text-decoration-none"
                                    style="{{ env('fontColor300') }}">Cara pesan</a>
                            </div>
                            {{-- <a href="{{ url('pesan') }}" class="btn px-4 shadow-sm text-white" style="{{ env('bgColor300') }} border-radius: 360px;">Google Play</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-md-block">
                    <div class="text-center">
                        <img src="{{ asset('images/human1.png') }}" class="" alt="">
                    </div>
                </div>
            </div>
        </section>



        <section class="mt-3" style="{{ env('bgColor400') }}">
            <div class="container align-items-center d-md-flex justify-content-between">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="text-center d-flex align-items-center">
                        <img src="{{ asset('images/logoberesdigital5.png') }}" width="300px" class="bg-transparent"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="text-white">
                        <div class="header mb-2" style="font-size: 25px">
                            <b>Tentang beres digital</b>
                        </div>
                        <div class="">
                            <p class="" style="">
                                Kami hadir sebagai solusi untuk membantu masyarakat, pelaku bisnis UMKM dan organisasi
                                untuk meningkatkan digitalisasi, memperluas jangkauan, menyediakan produk d migital,
                                jasa buat website, buat aplikasi, buat desain, hingga memproduksi berbagai gambar dan
                                video untuk kebutuhan iklan dan komersial lainnya.
                            </p>
                            <p class="mt-2">
                                <a href="{{ url('tentang') }}" class="">Selengkapnya >></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-3 mt-md-3 pt-md-3 pt-2 mb-3 pb-3">
            <div class="container align-items-center d-md-flex justify-content-evenly">
                {{-- <div class="card-group"> --}}
                {{-- <div class="col-lg-4 d-flex justify-content-center align-items-center mt-4">

                </div> --}}
                <div class="col-lg-10 d-flex justify-content-center align-items-center mt-4">
                    <div class="card-group">
                        <a href="{{ url('produk', []) }}"
                            class="card produk-layanan text-dark text-decoration-none shadow-lg border-0 my-4 px-lg-4 mx-2 mx-md-5"
                            style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="text-center mt-2">
                                    <img src="{{ asset('images/undraw_online_product.svg') }}" width="130px">
                                </div>
                                <div class="text-center mt-3">
                                    <h5><b>Produk</b></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="text-center" style="font-size: 14px">
                                        Cari produk yang kamu butuhkan dan mempermudah bisnis dan pekerjaan anda.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ url('layanan/jenis', []) }}"
                            class="card produk-layanan text-dark text-decoration-none shadow-lg border-0 my-4 px-lg-4 mx-2 mx-md-5"
                            style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="text-center mt-2">
                                    <img src="{{ asset('images/undraw_services.svg') }}" width="130px" alt="">
                                </div>
                                <div class="text-center mt-3">
                                    <h5><b>Layanan</b></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="text-center" style="font-size: 14px">
                                        Temukan jasa yang kamu butuhkan.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

        </section>

        <div class="container mt-5">
            <hr class="mb-0 pb-0">
        </div>

        <section class="mt-3 pt-0">
            <div class="mb-1 container">

                <h3><b> <span style="font-size: 25px">PRODUK</span></b></h3>

            </div>
            <div class="container mt-4">
                <div class="card-group">
                    @forelse ($produk as $data)
                    <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                        <a href="{{ $data->link }}"  target="_blank"  rel="noopener noreferrer" class="card produkcard text-dark text-decoration-none border-0 my-2 mx-2"
                            style="border-radius: 15px; {{ env('bgColor400') }} ">
                            <div class="card-body p-3 text-white">
                                <div class="mt-2 d-flex justify-content-start align-items-center align-content-center">
                                    <div class="me-2">
                                        <div class=""><img src="{{ $data->gambar != null ? Storage::url($data->gambar) : asset('images/logoberesdigital4.png') }}"
                                                width="50px" alt=""></div>
                                    </div>
                                    <div class="text-start d-flex align-items-center" style="font-size: 35px">
                                        <h6><b>{{ $data->nama }}</b></h6>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-start text-wrap" style="font-size: 14px">
                                        {{ $data->singkat }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty

                    @endforelse


                </div>
            </div>
        </section>
        <div class="container mt-5">
            <hr class="mb-0 pb-0">
        </div>
        <section class="mt-3 pt-0">
            <div class="mb-1 container">

                <h3><b> <span style="font-size: 25px">LAYANAN</span></b></h3>

            </div>
            <div class="container mt-4">
                <div class="card-group">
                   @foreach ($layanan as $data)
                   <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                    <a href="{{ url('layanan/jenis') }}" class="card layanancard text-dark text-decoration-none border-0 my-2 mx-2"
                        style="border-radius: 15px; {{ env('bgColor400') }} ">
                        <div class="card-body p-3 text-white">
                            <div class="mt-2 d-flex justify-content-start align-items-center align-content-center">
                                <div class="me-2">
                                    <div class=""><img src="{{ $data->gambar != null ? Storage::url($data->gambar) : asset('images/logoberesdigital4.png') }}"
                                            width="50px" alt=""></div>
                                </div>
                                <div class="text-start d-flex align-items-center" style="font-size: 35px">
                                    <h6><b>{{ $data->nama }}</b></h6>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="text-start text-wrap" style="font-size: 14px">
                                    {{ $data->singkat }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                   @endforeach
                </div>
            </div>
        </section>
        <div class="container mt-5">
            <hr class="mb-0 pb-0">
        </div>
        <section class="mt-3 pt-0 pb-3">
            <div class="mb-1 container">

                <h3><b> <span style="font-size: 25px">PORTOFOLIO</span></b></h3>

            </div>
            <div class="container mt-4">

                {{-- <ul class="nav d-flex flex-nowrap overflow-auto nav-pills mb-3 justify-content-start" id="pills-tab"
                    role="tablist">
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link active rounded-pill" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Semua</button>
                    </li>
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Website</button>
                    </li>
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Website</button>
                    </li>
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Website</button>
                    </li>
                </ul> --}}
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="card-group">
                            @foreach ($porto as $data2)
                            <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                                <a href="{{ url('portofolio', $data2->slug) }}"
                                    class="card portofoliohover text-dark text-decoration-none border-0 my-2 mx-2"
                                    style="border-radius: 15px; ">
                                    <img class="card-img-top" height="170px" src="{{ asset('React.jpg') }}"
                                        alt="" style="border-radius: 15px;">
                                    <div class="card-body">
                                        <div
                                            class=""style="font-weight: lighter; font-size: 13px; {{ env('fontColor300') }}">
                                            {{ $data2->layananjenis->nama }} | {{ $data2->layanan->nama }}
                                        </div>
                                        <div class="text-dark mb-1" style="font-size: 16px">
                                            {{ $data2->nama }}
                                        </div>
                                        <p class="" style="font-weight: lighter; font-size: 13px">
                                            {{ Str::substr($data2->tentang, 1, 100) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>





    </div>
    <livewire:public.component.public-footer />
</div>

<style>
    body {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .produk-layanan:hover {
        {{ env('bgColor100') }}
    }

    .portofoliohover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .portofoliohover:hover {
        box-shadow: rgba(46, 195, 240, 0.4) 0px 5px, rgba(46, 195, 240, 0.3) 0px 10px, rgba(46, 195, 240, 0.2) 0px 15px, rgba(46, 195, 240, 0.1) 0px 20px, rgba(46, 195, 240, 0.05) 0px 25px;
    }

    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    div.scrollmenu::-webkit-scrollbar {
        display: none;
    }


    div.scrollmenu a {
        display: inline-block;
        text-align: center;
        /* padding-top: 8px;
        padding-bottom: 8px; */
        color: black;
        text-decoration: none;
    }

    div.scrollmenu .card:hover {
        color: white;
        border: none;
        background-color: {{ env('COLOR_PRIMARY') }};
    }

    .produkcard:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }

    .layanancard:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
</style>
