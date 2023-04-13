<div>
    <livewire:public.component.public-navbar-dashboard />

    <div class="mt-5 pt-4 container-fluid">
        <div class="card">
            <div class="card-body">
                <b>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            {{ $data->no_transaksi }}
                        </div>
                        <div class="">
                            {{ $data->status }}
                        </div>
                    </div>
                </b>
                <div class="d-flex mt-2 justify-content-between">
                    <div class="">
                        {{ $data->layananjenis->nama }}
                    </div>
                    <div class="">
                        {{ $data->layanan->nama }}
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        Nama Project
                    </div>
                    <div class="">
                        {{ $data->nama_project }}
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        Nama Project
                    </div>
                    <div class="">
                        {{ $data->nama_project }}
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        Pembayaran
                    </div>
                    <div class="">
                        @uang($data->total_pembayaran)
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        status bayar
                    </div>
                    <div class="">
                        @if ($data->status_bayar == 'lunas')
                            <span class="text-success">{{ $data->status_bayar }}</span>
                        @elseif ($data->status_bayar == 'belum bayar')
                            <span class="text-danger">{{ $data->status_bayar }}</span>
                        @else
                            <span class="text-warning">{{ $data->status_bayar }}</span>
                        @endif
                    </div>
                </div>

                <div class="mt-3">
                    <b>Pembayaran</b>
                    {{ $data->metodepembayaran->metode }} - {{ $data->metodepembayaran->nama }}
                    <h5><b>Transfer ke Rekening</b></h5>
                    @foreach ($rekening as $rek)
                        <div class="d-flex justify-content-between">
                            <div class="">
                                Nama bank/wallet
                            </div>
                            <div class="">
                                {{ $rek->nama_bank }}
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                Atas nama
                            </div>
                            <div class="">
                                {{ $rek->atas_nama }}
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                Nomor rekening/ponsel
                            </div>
                            <div class="">
                                {{ $rek->nomor_rek }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($data->status == 'pay awal')
        <div class="card mt-2">
            <div class="card-body">
                <form wire:submit.prevent='dp'>
                    <div class="">
                        <label for="bayar">Jumlah ingin bayar tagihan</label>
                        <input type="number" class="form-control rounded-pill" wire:model='jumlah_bayar'
                            placeholder="min bayar 50% dari total tagihan">
                        @error('jumlah_bayar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn mt-2 rounded-pill btn-warning form-control">
                        Bayar sebagian/DP
                    </button>
                </form>
                <center>
                    - Atau -
                </center>
                <button type="button" wire:click="lunas" class="btn rounded-pill btn-success form-control">
                    Bayar Lunas
                </button>
            </div>
        </div>
        @else

        @endif
    </div>
</div>
