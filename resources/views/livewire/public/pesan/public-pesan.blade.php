<div>
    <livewire:public.component.public-navbar />

    <main class="mt-5 pt-5 mb-5 container d-flex justify-content-center">
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
                                <div class="">
                                    <label for="layanan"><b>Layanan</b></label>
                                    <select class="form-control rounded-pill" id="layanan">
                                        <option value="">Logo</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="keterangan"><b>Keterangan</b></label>
                                    <textarea id="keterangan" class="form-control" rows="5" placeholder="isi penjelasan singkat project"></textarea>
                                </div>
                                <div class="mt-2">
                                    <b>Pilihan tambahan</b>
                                </div>
                                <div class="">
                                    <label for="varian">Berapa hari?</label>
                                    <select class="form-control rounded-pill" id="varian">
                                        <option value="">5 hari</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill form-control mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
.card{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
</style>
