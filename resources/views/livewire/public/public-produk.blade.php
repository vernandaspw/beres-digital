<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 container">
        <div class="">
            <h3>Produk</h3>
            <p>Cari produk yang kamu butuhkan dan mempermudah bisnis dan pekerjaan anda.</p>
        </div>
        <div class="mt-4 row row-cols-md-2">
            @forelse ($produk as $data)
            <div class="col-md-6">
                <a href="{{ $data->link }}" class="text-dark text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card border-0 mb-3" style="border-radius: 15px">
                        <div class="row g-0">
                            <div class="col-4 justify-content-center d-flex align-items-center">
                                <img width="140px" src="{{ $data->gambar != null ? Storage::url($data->gambar) : asset('images/undraw_online_product.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->nama }}</h5>
                                    <p class="card-text" style="font-size: 13px">{{ $data->singkat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty

            @endforelse
        </div>
    </main>

    {{-- <div class="mt-5">
        <livewire:public.component.public-footer />
    </div> --}}
</div>

<style>
    .card{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
    .card:hover{
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
</style>
