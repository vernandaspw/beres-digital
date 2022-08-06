<div>
    <livewire:public.component.public-navbar />

    <main class="mt-4 pt-5 pb-5 mb-4 container d-flex justify-content-center">

        <div class="col-lg-8 col-12">
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/', []) }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('portofolio', []) }}">Portofolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Website Beri Ikan</li>
                </ol>
            </nav> --}}
            <div class="">
                <img src="{{ asset('React.jpg') }}" alt="" height="350px" class="d-block border w-100"
                    style="border-radius: 15px">
            </div>

            <div class="mt-3">
                <div class="text-muted">
                    Jasa buat website | Website
                </div>
                <h3>Website Beri Ikan</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae
                    et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque!
                </p>
            </div>
            <div class="mt-3">
                <h3>Tools</h3>
                <div>
                    Alat-alat yang digunakan untuk membuat project ini
                </div>
                <div class="">
                    <ul>
                        <li>
                            bootstrap
                        </li>
                        <li>
                            laravel
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-3">
                <h3>Proses</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae
                    et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque!
                </p>
            </div>

            <div class="mt-3">
                <h3>Tantangan</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae
                    et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque!
                </p>
            </div>
            <div class="mt-3">
                <h3>Hasil</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis quos beatae
                    et earum dolores
                    facilis, eveniet soluta aliquid non ratione modi nobis accusamus voluptas nihil expedita, voluptates
                    sapiente itaque!
                </p>
                <div id="carouselExampleIndicators" class="carousel slide border" data-bs-ride="true"
                    style="border-radius: 15px">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('React.jpg') }}" height="350px" class="d-block w-100" alt="..."
                                style="border-radius: 15px">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </main>

    <livewire:public.component.public-footer />
</div>
