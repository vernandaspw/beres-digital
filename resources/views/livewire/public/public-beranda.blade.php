<div>
    <livewire:public.component.public-navbar />
    <div class="pt-2 mb-5">
        <section class="mb-lg-5 mt-lg-5 pt-lg-3 pb-lg-3">
            <div class="container align-items-center  d-md-flex justify-content-between" style="height: 480px">
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
                            <a href="{{ url('pesan') }}" class="btn px-4 shadow text-white" style="{{ env('bgColor300') }} border-radius: 360px;">Pesan Layanan Sekarang</a>
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
            <div class="container align-items-center d-md-flex justify-content-between" >
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

        <section class="mt-3 mt-md-5 pt-md-4 pt-2 mb-4 pb-4">
            <div class="container align-items-center d-md-flex justify-content-evenly" style="height: 280px">
                {{-- <div class="card-group"> --}}
                <div class="col-lg-4 d-flex justify-content-center align-items-center mt-4">
                    <div class="card shadow-lg border-0 py-3 mx-2" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="text-center mt-1">
                                <img src="{{ asset('images/undraw_online_product.svg') }}" width="200px" alt="">
                            </div>
                            <div class="text-center mt-3">
                                <h4><b>Produk</b></h4>
                            </div>
                            <div class="">
                                <div class="mt-3">
                                    <p class="text-center">
                                        Cari produk yang kamu butuhkan dan mempermudah bisnis dan pekerjaan anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center mt-4">
                    <div class="card shadow-lg border-0 py-3 mx-2" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="text-center mt-1">
                                <img src="{{ asset('images/undraw_online_product.svg') }}" width="200px" alt="">
                            </div>
                            <div class="text-center mt-3">
                                <h4><b>Produk</b></h4>
                            </div>
                            <div class="">
                                <div class="mt-3">
                                    <p class="text-center">
                                        Cari produk yang kamu butuhkan dan mempermudah bisnis dan pekerjaan anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            {{-- </div> --}}
        </section>
    </div>
</div>
