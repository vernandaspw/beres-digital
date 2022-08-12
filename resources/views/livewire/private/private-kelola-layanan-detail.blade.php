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
            <div class="table-responsive mt-2">
                <table class="table table-sm table-striped  table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" style="width: 4%">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">VARIAN ITEM</th>
                            <th scope="col" style="width: 15%">STATUS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">
                                1
                            </th>
                            @if ($layananvarian)
                                <td>{{ $layananvarian->nama }}</td>
                                <td>
                                    <ul>
                                        @forelse ($layananvarian->items as $item)
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


                                    </ul>
                                    @if ($formTambahVarianItem)
                                    <form wire:submit.prevent="tambahVarianItem({{ $VarianID }})" class="">
                                        <div class="">

                                            <input wire:model='namaVarianItem' type="text"
                                                id='namaVarianItem' class="form-control"
                                                placeholder="Nama variasi layanan">
                                            @error('namaVarianItem')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <input wire:model='hargaVarianItem' type="number"
                                                id='hargaVarianItem' class="form-control"
                                                placeholder="Nama variasi layanan">
                                            @error('hargaVarianItem')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <button type="submit"
                                                class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                    <button wire:click="formTambahVarianItem({{ $layananvarian->id }})"
                                        class="btn btn-secondary">Tutup</button>
                                @else
                                    <button type="button" wire:click="formTambahVarianItem({{ $layananvarian->id }})"
                                        class="btn btn-primary">Tambah</button>

                                @endif
                                </td>
                                <td>
                                    @if ($layananvarian->istersedia)
                                        <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                    @else
                                        <button type="button" class="rounded-pill btn btn-danger">Tidak
                                            tersedia</button>
                                    @endif
                                </td>
                            @else
                                <td colspan="3">
                                    <form wire:submit.prevent='tambahVariasi' class="d-flex align-items-center">
                                        <div class="me-2">
                                            <input wire:model='namaVariasi' type="text" id='namaVariasi'
                                                class="form-control" placeholder="Nama variasi layanan">
                                            @error('namaVariasi')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn  btn-primary">Buat</button>
                                        </div>
                                    </form>
                                </td>
                            @endif
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
