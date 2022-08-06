<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 mb-5 container d-flex justify-content-center">
        <div class="row row-cols-md-2 w-100">
            <div class="col-md-6">
                <div class="card border-0" style="border-radius: 15px">
                    <div class="card-body">
                        <div class="mt-2 mb-2">
                            <h3>
                                Pesan Layanan
                            </h3>
                            <p>
                                Isi formulir dibawah untuk proses pemesanan
                            </p>
                            <hr>
                            <div class="">
                                <form>
                                    <div class="">
                                        <label for="layananjenis"><b>Jenis layanan</b></label>
                                        <select class="form-control rounded-pill" id="layananjenis">
                                            <option value="">Jasa desain</option>
                                        </select>
                                    </div>
                                    <div class="mt-1">
                                        <label for="layanan"><b>Layanan</b></label>
                                        <select class="form-control rounded-pill" id="layanan">
                                            <option value="">Logo</option>
                                        </select>
                                    </div>
                                    <div class="mt-1">
                                        <label for="namaproject"><b>Nama project</b></label>
                                        <input type="text" id="namaproject" class="form-control rounded-pill"
                                            placeholder="isi nama project">
                                    </div>
                                    <div class="mt-1">
                                        <label for="keterangan"><b>Keterangan</b></label>
                                        <textarea id="keterangan" class="form-control" rows="5" placeholder="isi penjelasan singkat project"></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <b>Pilihan tambahan</b>
                                    </div>
                                    <div class="">
                                        <label for="varian">Lama pengerjaan</label>
                                        <select class="form-control rounded-pill" id="varian">
                                            <option value="">5 hari</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="d-block d-md-none d-lg-none d-xl-none">
                                        <div class="" style="font-weight: 600">Rinciran biaya</div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Biaya dasar layanan
                                            </div>
                                            <div class="">
                                                @uang(10000)
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="" style="font-weight: 600; font-size: 13px">Biaya
                                                pilihan
                                                tambahan</div>
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    Lama pengerjaan (5 Hari)
                                                </div>
                                                <div class="">
                                                    @uang(4000)
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Kode unik
                                            </div>
                                            <div class="">
                                                @uang(536)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Tax 10%
                                            </div>
                                            <div class="">
                                                @uang(1000)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <b>Total pembayaran</b>
                                            </div>
                                            <div class="">
                                                <b>@uang(10000)</b>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary rounded-pill form-control mt-3">Order
                                        project</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-none d-md-block d-lg-block d-xl-block">

                    <div class="" style="font-weight: 600">Rinciran biaya</div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            Biaya dasar layanan
                        </div>
                        <div class="">
                            @uang(10000)
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="" style="font-weight: 600; font-size: 13px">Biaya pilihan
                            tambahan</div>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                Lama pengerjaan (5 Hari)
                            </div>
                            <div class="">
                                @uang(4000)
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            Kode unik
                        </div>
                        <div class="">
                            @uang(536)
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            Tax 10%
                        </div>
                        <div class="">
                            @uang(1000)
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <b>Total pembayaran</b>
                        </div>
                        <div class="">
                            <b>@uang(10000)</b>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</div>

<style>
    .card {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
</style>
