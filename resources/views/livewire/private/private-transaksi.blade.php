<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-4">
       <div class="mb-2">
        <h4>
            Project
        </h4>
       </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped  table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nomor transaksi</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Project</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Metode Pay</th>
                        <th scope="col">Status bayar</th>
                        <th scope="col" style="width: 15%">STATUS</th>
                        <th scope="col" style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksi as $data)
                    <td>
                        {{ $data->no_transaksi }}
                    </td>
                    <td>
                        {{ $data->user->nama }}
                    </td>
                    <td>
                        {{ $data->layananjenis->nama }}({{ $data->layanan->nama }})
                    </td>
                    <td>
                        {{ $data->nama_project }}
                    </td>
                    <td>
                        @uang($data->total_pembayaran)
                    </td>
                    <td>
                        {{ $data->metodepembayaran->metode }}({{ $data->metodepembayaran->nama }})
                    </td>
                    <td>
                        {{ $data->status_bayar }}
                    </td>
                    <td>
                        {{ $data->status }}
                    </td>
                    <td>
                        <button class="btn btn-info rounded-pill" type="button">
                            tes
                        </button>
                    </td>
                    @empty
                    @endforelse

                </tbody>
            </table>
            <center>
                <button wire:click='lanjut' type="button" class="btn btn-secondary rounded-pill">
                    Lanjut
                </button>
            </center>
        </div>
    </div>
</div>
