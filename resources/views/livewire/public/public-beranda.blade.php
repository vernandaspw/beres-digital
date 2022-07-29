<div>
    <livewire:public.component.public-navbar />
    <div class="pt-2 mb-5">
        <section class="mb-lg-5 mt-lg-5 pt-lg-3 pb-lg-3">
            <div class="container align-items-center  d-md-flex justify-content-between"  style="padding-bottom: 100px; padding-top: 100px;">
                <div class="col-lg-6  d-md-none">
                    <div class="text-center mt-2">
                        <img src="{{ asset('images/human1.png') }}" width="300px" class="" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="header mb-2" style="font-size: 35px">
                            <b>Grow With Beres DIgital</b>
                        </div>
                        <div class="">
                            <p style="font-size: 17px">
                                Beres digital merupakan solusi membantu bagi masyarakat, pelaku bisnis UMKM dan
                                organisasi di era digitalisasi. menyediakan produk dan jasa layanan digital. Waktunya Go
                                Digital! #GrowWithBeresDigital
                            </p>
                        </div>
                        <div class="mt-3
                        ">
                            <a href="{{ url('pesan') }}" class="btn px-4 shadow text-white"
                                style="{{ env('bgColor300') }} border-radius: 360px;">Pesan Layanan Sekarang</a>
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
            <div class="container align-items-center d-md-flex justify-content-evenly" style="height: 280px">
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
            <hr>
        </div>

        <section class="">
            <center>
                <h3><b> <span style="font-size: 25px">Produk</span></b></h3>
            </center>
            <div class="container mt-2">
                <div class="card-group">
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
    </div>
</div>

<style>
    .produk-layanan:hover {
        {{ env('bgColor100') }}
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
</style>
