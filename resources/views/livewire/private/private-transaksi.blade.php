<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-4">
        <div class="mb-2">
            <h4>
                Project
            </h4>
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
                <tbody wire:poll>
                    @forelse ($transaksi as $data)
                        <tr
                            class="@if ($data->status == 'pending') bg-warning
                        @elseif($data->status == 'batal')
bg-danger @endif">
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
                                @if ($data->status_bayar == 'dp')
                                    (@uang($data->dp))
                                    | kurang: @uang($data->total_pembayaran - $data->dp)
                                @endif
                            </td>
                            <td>
                                {{ $data->status }}
                            </td>
                            <td>
                                @if ($data->status == 'pending')
                                    <button wire:click="approve('{{ $data->id }}')"
                                        class="btn btn-success rounded-pill" type="button">
                                        Approve
                                    </button>
                                    <button
                                        onclick="confirm('Anda yakin ingin batal data?') || event.stopImmediatePropagation()"
                                        wire:click="batal('{{ $data->id }}')" class="btn btn-danger rounded-pill"
                                        type="button">
                                        Batal
                                    </button>
                                @elseif ($data->status == 'approve')
                                    <button wire:click="tagih_pay_awal('{{ $data->id }}')"
                                        class="btn btn-warning rounded-pill" type="button">
                                        Tagih pembayaran awal
                                    </button>
                                    <button
                                        onclick="confirm('Anda yakin ingin batal data?') || event.stopImmediatePropagation()"
                                        wire:click="batal('{{ $data->id }}')" class="btn btn-danger rounded-pill"
                                        type="button">
                                        Batal
                                    </button>
                                @elseif ($data->status == 'pay awal konfirm')
                                    <button wire:click="sudah_bayar_awal('{{ $data->id }}')"
                                        class="btn btn-primary rounded-pill" type="button">
                                        sudah bayar
                                    </button>
                                    <button
                                        onclick="confirm('Anda yakin ingin batal data?') || event.stopImmediatePropagation()"
                                        wire:click="batal('{{ $data->id }}')" class="btn btn-danger rounded-pill"
                                        type="button">
                                        Batal
                                    </button>
                                @elseif($data->status == 'pay awal true')
                                    <button wire:click="pengerjaan('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        Mulai pengerjaan
                                    </button>
                                @elseif($data->status == 'pengerjaan')
                                    <button wire:click="selesai_dikerjakan('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        Selesai dikerjakan
                                    </button>
                                @elseif($data->status == 'selesai dikerjakan')
                                    <button wire:click="review('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        Review
                                    </button>
                                @elseif($data->status == 'review')
                                    <button wire:click="revisi('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        Revisi
                                    </button>
                                    <button wire:click="penyerahan('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        penyerahan
                                    </button>
                                @elseif($data->status == 'revisi')
                                <button wire:click="review('{{ $data->id }}')"
                                    class="btn btn-info rounded-pill" type="button">
                                    Review
                                </button>
                                    <button wire:click="penyerahan('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        penyerahan
                                    </button>
                                @elseif($data->status == 'penyerahan')
                                    @if ($data->status_bayar != 'lunas')
                                        <button wire:click="tagih_sisa_pembayaran('{{ $data->id }}')"
                                            class="btn btn-info rounded-pill" type="button">
                                            tagih sisa pembayaran akhir
                                        </button>
                                    @else
                                        <button wire:click="selesai('{{ $data->id }}')"
                                            class="btn btn-success rounded-pill" type="button">
                                            Selesai
                                        </button>
                                    @endif
                                @elseif ($data->status == 'pay akhir konfirm')
                                    <button wire:click="pay_akhir_sdh_konfirm('{{ $data->id }}')"
                                        class="btn btn-info rounded-pill" type="button">
                                        Telah membayar
                                    </button>
                                @elseif ($data->status == 'pay akhir true')
                                    <button wire:click="selesai('{{ $data->id }}')"
                                        class="btn btn-success rounded-pill" type="button">
                                        Selesai
                                    </button>
                                @endif
                            </td>
                        </tr>
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
