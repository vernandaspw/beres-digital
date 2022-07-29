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
                        <div class="mt-3">
                            <a href="{{ url('pesan') }}" class="btn px-4 shadow text-white"
                                style="{{ env('bgColor300') }} border-radius: 360px;">Pesan Layanan Sekarang</a>
                            <a href="{{ url('pesan') }}" class="ms-3 text-decoration-none"
                                style="{{ env('fontColor300') }}">Cara pesan</a>
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
                        <a href="#"
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
                        <a href="#"
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
            <div class="mb-1">
                <center>
                    <h3><b> <span style="font-size: 25px">PRODUK</span></b></h3>
                </center>
            </div>
            <div class="container mt-4">
                <div class="card-group">
                    <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                        <a href="#" class="card text-dark text-decoration-none border-0 my-2 mx-2"
                            style="border-radius: 15px; {{ env('bgColor400') }} ">
                            <div class="card-body p-3 text-white">
                                <div class="mt-2 d-flex justify-content-start align-items-center align-content-center">
                                    <div class="me-2">
                                        <div class=""><img src="{{ asset('images/logoberesdigital4.png') }}"
                                                width="50px" alt=""></div>
                                    </div>
                                    <div class="text-start d-flex align-items-center" style="font-size: 35px">
                                        <h6><b>Jasa Desain</b></h6>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-start text-wrap" style="font-size: 14px">
                                        Kami menyediakan jasa untuk pembuatan logo, banner, packaging, uiux dan desain
                                        kebutuhan kamu lainnya.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-5">
            <hr class="mb-0 pb-0">
        </div>
        <section class="mt-3 pt-0">
            <div class="mb-1">
                <center>
                    <h3><b> <span style="font-size: 25px">LAYANAN</span></b></h3>
                </center>
            </div>
            <div class="container mt-4">
                <div class="card-group">
                    <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                        <a href="#" class="card text-dark text-decoration-none border-0 my-2 mx-2"
                            style="border-radius: 15px; {{ env('bgColor400') }} ">
                            <div class="card-body p-3 text-white">
                                <div class="mt-2 d-flex justify-content-start align-items-center align-content-center">
                                    <div class="me-2">
                                        <div class=""><img src="{{ asset('images/logoberesdigital4.png') }}"
                                                width="50px" alt=""></div>
                                    </div>
                                    <div class="text-start d-flex align-items-center" style="font-size: 35px">
                                        <h6><b>Jasa Desain</b></h6>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-start text-wrap" style="font-size: 14px">
                                        Kami menyediakan jasa untuk pembuatan logo, banner, packaging, uiux dan desain
                                        kebutuhan kamu lainnya.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-5">
            <hr class="mb-0 pb-0">
        </div>
        <section class="mt-3 pt-0">
            <div class="mb-1">
                <center>
                    <h3><b> <span style="font-size: 25px">PORTOFOLIO</span></b></h3>
                </center>
            </div>
            <div class="container mt-4">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
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
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="card-group">
                            <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                                <a href="#"
                                    class="card portofoliohover text-dark text-decoration-none border-0 my-2 mx-2"
                                    style="border-radius: 15px; ">
                                    <img class="card-img-top" height="170px" src="{{ asset('React.jpg') }}"
                                        alt="" style="border-radius: 15px;">
                                    <div class="card-body">
                                        <div
                                            class=""style="font-weight: lighter; font-size: 13px; {{ env('fontColor300') }}">
                                            Website
                                        </div>
                                        <div class="text-dark mb-1" style="font-size: 16px">
                                            Nama project
                                        </div>
                                        <p class="" style="font-weight: lighter; font-size: 13px">Some quick
                                            example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>


        <section class="mt-4 pt-5 pb-5 " style="{{ env('bgColor100') }}">
            <div class="mb-1 container">
                <center>
                    <h3><b> <span style="font-size: 25px; margin-top: 10px;">Mari Mulai Proyek Bersama Kami!</span></b>
                    </h3>
                    <div class="pt-2">
                        <a href="{{ url('pesan') }}" class="btn px-4 my-1 shadow text-white"
                            style="{{ env('bgColor300') }} border-radius: 360px;">Pesan Layanan Sekarang</a> <div class="d-none d-md-block d-lg-block d-xl-block">
                                |
                            </div>
                        <a href="{{ url('pesan') }}" class="btn px-4 my-1 shadow text-white"
                            style="{{ env('bgColor300') }} border-radius: 360px;">Kontak kami</a>
                    </div>
                </center>
            </div>
        </section>

        <section class="pt-3 pb-1" style="{{ env('bgColor300') }}">
            <p class="text-white text-center">
                Copyright &copy; 2022 Beres Digital. All Rights Reserved.
            </p>
        </section>
    </div>
</div>

<style>
    .produk-layanan:hover {
        {{ env('bgColor100') }}
    }

    .portofoliohover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .portofoliohover:hover {
        box-shadow: rgba(46, 195, 240, 0.4) 0px 5px, rgba(46, 195, 240, 0.3) 0px 10px, rgba(46, 195, 240, 0.2) 0px 15px, rgba(46, 195, 240, 0.1) 0px 20px, rgba(46, 195, 240, 0.05) 0px 25px;
    }
</style>
