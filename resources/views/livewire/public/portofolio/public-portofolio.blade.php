<div>
    <livewire:public.component.public-navbar />

    <main class="mt-4 pt-5 pb-5 container">
        <div class="">
            <h3>Portofolio</h3>
            <p>Jasa yang telah kami kerjakan</p>
        </div>
        <section class="mt-3 pt-0 pb-3">

            <div class="mt-4">
                <ul class="nav d-flex flex-nowrap overflow-auto nav-pills mb-3 justify-content-start" id="pills-tab"
                    role="tablist">
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link active rounded-pill" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Semua</button>
                    </li>
                    @foreach ($layanan as $data)
                        <li class="nav-item m-1" role="presentation">
                            <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#{{ $data->slug }}" type="button" role="tab"
                                aria-controls="{{ $data->slug }}" aria-selected="false">{{ $data->nama }}</button>
                        </li>
                    @endforeach

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="card-group">
                            @foreach ($porto as $data)
                                <div class="col-lg-3 col-12 col-md-4 col-xl-3">
                                    <a href="{{ url('portofolio', $data->slug) }}"
                                        class="card portofoliohover text-dark text-decoration-none border-0 my-2 mx-2"
                                        style="border-radius: 15px; ">
                                        <img class="card-img-top" height="170px" src="{{ asset('React.jpg') }}"
                                            alt="" style="border-radius: 15px;">
                                        <div class="card-body">
                                            <div
                                                class=""style="font-weight: lighter; font-size: 13px; {{ env('fontColor300') }}">
                                                {{ $data->layananjenis->nama }} | {{ $data->layanan->nama }}
                                            </div>
                                            <div class="text-dark mb-1" style="font-size: 16px">
                                                {{ $data->nama }}
                                            </div>
                                            <p class="" style="font-weight: lighter; font-size: 13px">
                                                {{ Str::substr($data->tentang, 1, 100) }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" wire:click='lanjut' class="btn form-control btn-secondary rounded-pill">Lanjut</button>
                    </div>
                    @foreach ($layanan as $data)
                        <div class="tab-pane fade" id="{{ $data->slug }}" role="tabpanel"
                            aria-labelledby="{{ $data->slug }}-tab" tabindex="0">
                            <div class="card-group">
                            @foreach ($porto->where('layanan_id', $data->id)->take($take) as $data2)
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
                            <button type="button" wire:click='lanjut' class="btn form-control btn-secondary rounded-pill">Lanjut</button>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>

    {{-- <div class="mt-5">
        <livewire:public.component.public-footer />
    </div> --}}
</div>

<style>
    .card {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }

    .card:hover {
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
</style>
