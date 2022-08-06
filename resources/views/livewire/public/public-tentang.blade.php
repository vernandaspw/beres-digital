<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 ">
        <div class="text-center">
            <h3>Tentang kami</h3>

        </div>
        <div class="container pt-3">
            <hr>
        </div>
        <section class="">
            <div class="container align-items-center  d-md-flex justify-content-between"
                style="padding-bottom: 100px; padding-top: 50px;">
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

        <section class="mt-2 mb-5 pb-5">
            <div class="container">
                <div class="visi">
                    <div class="">
                        <h4><b>VISI</b></h4>
                    </div>
                    <div class="mt-1">
                        <p>
                            Memiliki visi menjadi perusahaan yang dapat menyediakan solusi digital dan teknologi tepat guna untuk masyarakat dan para pelaku bisnis UMKM, organisasi di dunia terutama indonesia.
                        </p>
                    </div>
                </div>
                <div class="visi mt-5">
                    <div class="">
                        <h4><b>MISI</b></h4>
                    </div>
                    <div class="mt-1">
                        <p>
                            Misi kami adalah membantu memanfaatkan teknologi internet untuk membangun kesuksesan digitalisasi dengan menyediakan produk, layanan cepat dan mudah.
                        </p>
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
    </main>
    <livewire:public.component.public-footer />
</div>
