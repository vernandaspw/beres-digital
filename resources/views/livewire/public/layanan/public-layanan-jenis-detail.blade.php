<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 container">
        <div class="">
            <h3>Jenis Layanan Desain</h3>
            <p>Temukan layanan desain yang kamu butuhkan</p>
        </div>
        <div class="mt-4 row row-cols-md-2">
            <div class="col-md-6">
                <a href="{{ url('layanan/jenis', 'jasa-desain') }}" class="text-dark text-decoration-none">
                    <div class="card border-0 mb-3" style="border-radius: 15px">
                        <div class=" d-flex align-items-center">
                            <div class="justify-content-center d-flex align-items-center">
                                <img width="140px" src="{{ asset('images/undraw_online_product.png') }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Logo</h5>
                                    <div class="card-text mt-1 mb-1" style="font-size: 14px">
                                        Logo yang menarik
                                    </div>
                                    <span style="font-size: 18px; font-weight: bold; {{ env('fontColor300') }}">Rp
                                        20.000</span>


                                    <div class="">
                                        <a href="{{ url('pesan') }}" class="btn px-3 btn-primary btn-sm mt-3 rounded-pill">
                                            Pesan
                                        </a>
                                        <a href="{{ url('cara-pesan', []) }}"
                                            class="btn btn-link btn-sm mt-3 rounded-pill">
                                            cara pesan
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



        </div>
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
