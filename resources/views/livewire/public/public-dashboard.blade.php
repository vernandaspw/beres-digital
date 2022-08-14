<div>
    <livewire:public.component.public-navbar-dashboard />

    <div class="mt-5 pt-4">
        {{-- <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div> --}}


        <div class="container">
            <div class="mb-2">
                <h4><b>Pesanan saya</b></h4>
            </div>
            @forelse ($transaksi as $data)
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
                           @if($data->status_bayar == 'lunas')
                            <span class="text-success">{{ $data->status_bayar }}</span>
                            @elseif ($data->status_bayar == 'belum bayar')
                            <span class="text-danger">{{ $data->status_bayar }}</span>
                            @else
                            <span class="text-warning">{{ $data->status_bayar }}</span>
                           @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            Belum melakukan transaksi
            @endforelse
        </div>
    </div>
</div>
