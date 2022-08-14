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
                @if ($data->galeris->first())
                    <img src="{{ Storage::url($data->galeris->first()->gambar) }}" alt="" height="350px"
                        class="d-block border w-100" style="border-radius: 15px">
                @else
                    <img src="{{ asset('React.jpg') }}" alt="" height="350px" class="d-block border w-100"
                        style="border-radius: 15px">
                @endif


            </div>

            <div class="mt-3">
                <div class="text-muted">
                    {{ $data->layananjenis->nama }} | {{ $data->layanan->nama }}
                </div>
                <h3>Website Beri Ikan</h3>
                <p>
                    {!! $data->tentang !!}
                </p>
            </div>
            @if ($data->alat)
                <div class="mt-3">
                    <h3>Tools</h3>
                    {!! $data->alat !!}
                </div>
            @else
            @endif

            @if ($data->proses)
                <div class="mt-3">
                    <h3>Proses</h3>
                    <p>
                        {!! $data->proses !!}
                    </p>
                </div>
            @else
            @endif

            @if ($data->tantangan)
                <div class="mt-3">
                    <h3>Tantangan</h3>
                    <p>
                        {!! $data->tantangan !!}
                    </p>
                </div>
            @else
            @endif
            <div class="mt-3">
                @if ($data->hasil)
                    <h3>Hasil</h3>
                    <p>
                        {!! $data->hasil !!}
                    </p>
                @else
                @endif
                <div id="carouselExampleIndicators" class="carousel slide border" data-bs-ride="true"
                    style="border-radius: 15px">
                    <div class="carousel-inner">
                        @foreach ($data->galeris as $gambar)
                            <div class="carousel-item active">
                                <img src="{{ Storage::url($gambar->gambar) }}" height="350px" class="d-block w-100"
                                    alt="..." style="border-radius: 15px">
                            </div>
                        @endforeach
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
