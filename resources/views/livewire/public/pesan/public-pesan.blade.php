<div>
    <livewire:public.component.public-navbar />
    <form wire:submit.prevent='buat'>
        <main class="mt-5 pt-5 mb-5 container d-flex justify-content-center">

            <div class="row row-cols-md-2 w-100">
                <div class="col-md-6">
                    <div class="card border-0" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="mt-2 mb-2">
                                <h3>
                                    Pesan Layanan
                                </h3>
                                <div>
                                    Isi formulir dibawah untuk proses pemesanan

                                </div>
                                <div class="text-danger" style="font-size: 13px">
                                    *pastikan nomor ponsel pada akun sama dengan nomor whatsapps
                                </div>
                                <hr>
                                <div class="">
                                    <div class="">
                                        <label for="layananjenis"><b>Jenis layanan</b></label>
                                        <select wire:model='layanan_jenis_id' required class="form-control rounded-pill"
                                            id="layananjenis">
                                            <option value="">Pilih</option>
                                            @foreach ($layananjenis as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-1">
                                        <label for="layanan"><b>Layanan</b></label>
                                        <select wire:model='layanan_id' class="form-control rounded-pill"
                                            id="layanan">
                                            <option value="">Pilih</option>
                                            @foreach ($layanan as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}
                                                    (@uang($data->harga))
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @if ($layanan_varian || $layanan_varian2 || $layanan_varian3 || $layanan_varian4 || $layanan_varian5)
                                        <div class="mt-2">
                                            <b>Pilihan tambahan</b>
                                        </div>
                                    @endif
                                    @if ($layanan_varian)
                                        <div class="mt-1">
                                            <label
                                                for="varian{{ $layanan_varian->id }}">{{ $layanan_varian->nama }}</label>
                                            <select required wire:model='layanan_varian_item_1'
                                                class="form-control rounded-pill" id="varian{{ $layanan_varian->id }}">
                                                <option value="">Pilih</option>
                                                @foreach ($layanan_varian->items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                        (@uang($item->harga))
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    @if ($layanan_varian2)
                                        <div class="mt-1">
                                            <label
                                                for="varian{{ $layanan_varian2->id }}">{{ $layanan_varian2->nama }}</label>
                                            <select required wire:model='layanan_varian_item_2'
                                                class="form-control rounded-pill"
                                                id="varian{{ $layanan_varian2->id }}">
                                                <option value="">Pilih</option>
                                                @foreach ($layanan_varian2->items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                        (@uang($item->harga))
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    @if ($layanan_varian3)
                                        <div class="mt-1">
                                            <label
                                                for="varian{{ $layanan_varian3->id }}">{{ $layanan_varian3->nama }}</label>
                                            <select required wire:model='layanan_varian_item_3'
                                                class="form-control rounded-pill"
                                                id="varian{{ $layanan_varian3->id }}">
                                                <option value="">Pilih</option>
                                                @foreach ($layanan_varian3->items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                        (@uang($item->harga))
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    @if ($layanan_varian4)
                                        <div class="mt-1">
                                            <label
                                                for="varian{{ $layanan_varian4->id }}">{{ $layanan_varian4->nama }}</label>
                                            <select required wire:model='layanan_varian_item_4'
                                                class="form-control rounded-pill"
                                                id="varian{{ $layanan_varian4->id }}">
                                                <option value="">Pilih</option>
                                                @foreach ($layanan_varian4->items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                        (@uang($item->harga))
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    @if ($layanan_varian5)
                                        <div class="mt-1">
                                            <label
                                                for="varian{{ $layanan_varian5->id }}">{{ $layanan_varian5->nama }}</label>
                                            <select required wire:model='layanan_varian_item_5'
                                                class="form-control rounded-pill"
                                                id="varian{{ $layanan_varian5->id }}">
                                                <option value="">Pilih</option>
                                                @foreach ($layanan_varian5->items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                        (@uang($item->harga))
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    <div class="mt-1">
                                        <label for="namaproject"><b>Nama project</b></label>
                                        <input wire:model='nama_project' type="text" id="namaproject"
                                            class="form-control rounded-pill" placeholder="isi nama project">
                                    </div>
                                    <div class="mt-1">
                                        <label for="keterangan"><b>Keterangan</b></label>
                                        <textarea wire:model='keterangan' id="keterangan" class="form-control" rows="5"
                                            placeholder="isi penjelasan singkat project"></textarea>
                                    </div>


                                    <div class="mt-1">
                                        <label for="metode_pembayaran"><b>Metode pembayaran</b></label>
                                        <select wire:model='metode_pembayaran_id' class="form-control rounded-pill"
                                            id="metode_pembayaran">
                                            <option value="">Pilih</option>
                                            @foreach ($metode_pembayaran as $data)
                                                <option value="{{ $data->id }}">{{ $data->metode }} -
                                                    {{ $data->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="d-block d-md-none d-lg-none d-xl-none">
                                        <hr>
                                        <div class="" style="font-weight: 600">Rinciran biaya</div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Biaya dasar layanan
                                            </div>
                                            <div class="">
                                                @uang($harga_layanan)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Biaya pilihan tambahan
                                            </div>
                                            <div class="">
                                                @uang($harga_tambahan)
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <b>Subtotal biaya layanan</b>
                                            </div>
                                            <div class="">
                                                <b>@uang($subtotal_layanan)</b>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Kode unik
                                            </div>
                                            <div class="">
                                                @uang($kode_unik)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Fee
                                            </div>
                                            <div class="">
                                                @uang($fee)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Tax {{ $setting->pajak }} %
                                            </div>
                                            <div class="">
                                                @uang($this->total_pajak)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <b>Total pembayaran</b>
                                            </div>
                                            <div class="">
                                                <b>@uang($total_pembayaran)</b>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary rounded-pill form-control mt-3">Order
                                            project</button>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-none d-md-block d-lg-block d-xl-block card border-0" style="border-radius: 15px">
                        <div class="card-body">

                                        <div class="" style="font-weight: 600">Rinciran biaya</div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Biaya dasar layanan
                                            </div>
                                            <div class="">
                                                @uang($harga_layanan)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Biaya pilihan tambahan
                                            </div>
                                            <div class="">
                                                @uang($harga_tambahan)
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <b>Subtotal biaya layanan</b>
                                            </div>
                                            <div class="">
                                                <b>@uang($subtotal_layanan)</b>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Kode unik
                                            </div>
                                            <div class="">
                                                @uang($kode_unik)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Fee
                                            </div>
                                            <div class="">
                                                @uang($fee)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Tax {{ $setting->pajak }} %
                                            </div>
                                            <div class="">
                                                @uang($this->total_pajak)
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <b>Total pembayaran</b>
                                            </div>
                                            <div class="">
                                                <b>@uang($total_pembayaran)</b>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary rounded-pill form-control mt-3">Order
                                            project</button>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </form>
</div>

<style>
    .card {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
</style>
