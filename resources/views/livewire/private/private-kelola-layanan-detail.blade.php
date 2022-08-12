<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin', []) }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/kelola-layanan', []) }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Layanan</li>
            </ol>
        </nav>

        <div class="card mb-2">
            <div class="card-body py-2">
                <div class="d-flex justify-content-between">
                    <div class="">

                    </div>
                    <div class="">

                    </div>
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
        <div class="mt-2">
            <h5>Detail Layanan</h5>
            <form action="">
                <label for="nama">Nama layanan</label>
                <input wire:model='nama' type="text" id='nama' class="form-control" placeholder="Nama layanan">
                @error('nama')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </form>
        </div>
        <hr>
        <div class="mt-2">

            <div class="mt-2">
                <button wire:click='formTambahVariasi' class="btn btn-success" type="button">Tambah varian</button>
                @if ($formTambahVariasi)
                    <hr>
                    <h3>Tambah Variasi</h3>
                    <form wire:submit.prevent='tambahVariasi'>
                        <div class="mt-1">
                            <label for="namaVariasi">Nama Variasi</label>
                            <input wire:model='namaVariasi' type="text" id='namaVariasi' class="form-control"
                                placeholder="Nama variasi layanan">
                            @error('namaVariasi')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-1">
                            <label for="keterangan">Keterangan</label>
                            <textarea wire:model='keteranganVariasi' id="keterangan" rows="5" class="form-control"></textarea>
                            @error('keterangan')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn mt-2 btn-primary form-control">Simpan</button>
                    </form>
                @endif

                @if ($formTambahVarianItem)
                <hr>
                <h3>Tambah Varian Item</h3>
                        <form wire:submit.prevent="tambahVarianItem({{ $VarianID }})">
                            <div class="mt-1">
                                <label for="namaVarianItem">Nama Varian Item</label>
                                <input wire:model='namaVarianItem' type="text" id='namaVarianItem'
                                    class="form-control" placeholder="Nama variasi layanan">
                                @error('namaVarianItem')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <label for="hargaVarianItem">Harga Varian Item</label>
                                <input wire:model='hargaVarianItem' type="number" id='hargaVarianItem'
                                    class="form-control" placeholder="Nama variasi layanan">
                                @error('hargaVarianItem')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                @endif
                <div class="table-responsive mt-2">
                    <table class="table table-sm table-striped  table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col" style="width: 4%">URUT</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">VARIAN ITEM</th>
                                <th scope="col" style="width: 15%">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layananvarian as $varian)
                                <tr>
                                    <th scope="row" class="text-center">
                                        {{ $varian->urut }}
                                    </th>
                                    <td>{{ $varian->nama }}</td>
                                    <td>
                                        <ul>
                                            @forelse ($varian->layananvarianitem as $item)
                                                <li>{{ $item->nama }} (@uang($item->harga))
                                                    <button class="btn btn-link">Edit</button>
                                                    @if ($item->istersedia)
                                                        <button type="button"
                                                            class="rounded-pill btn btn-sm btn-success">Tersedia</button>
                                                    @else
                                                        <button type="button"
                                                            class="rounded-pill btn btn-sm btn-danger">Tidak
                                                            tersedia</button>
                                                    @endif
                                                </li>
                                            
                                            @empty
                                            @endforelse
                                            <button wire:click="formTambahVarianItem({{ $varian->id }})"
                                                class="btn btn-sm btn-primary">Tambah</button>
                                        </ul>

                                    </td>
                                    <td>
                                        @if ($varian->istersedia)
                                            <button type="button"
                                                class="rounded-pill btn btn-success">Tersedia</button>
                                        @else
                                            <button type="button" class="rounded-pill btn btn-danger">Tidak
                                                tersedia</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
