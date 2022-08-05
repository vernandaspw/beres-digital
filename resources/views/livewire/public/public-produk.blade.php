<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 container">
        <div class="">
            <h3>Produk</h3>
            <p>Cari produk yang kamu butuhkan dan mempermudah bisnis dan pekerjaan anda.</p>
        </div>
        <div class="mt-4 row row-cols-md-2">
            <div class="col-md-6">
                <a href="https://qumanten.com" class="text-dark text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card border-0 mb-3" style="border-radius: 15px">
                        <div class="row g-0">
                            <div class="col-4 justify-content-center d-flex align-items-center">
                                <img width="140px" src="{{ asset('images/undraw_online_product.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Qumanten</h5>
                                    <p class="card-text" style="font-size: 13px">Butuh undangan digital? lihat disini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </main>
</div>

<style>
    .card{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
    .card:hover{
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
</style>
