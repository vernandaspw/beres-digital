<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-3 mb-5 pb-5">
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
                                        <b>Tambah Pilihan Item</b>
                                        <form wire:submit.prevent="tambahVarianItem({{ $layananvarian->id }})"
                                            class="">
                                            <div class="">
                                                <input wire:model='namaVarianItem' type="text" id='namaVarianItem'
                                                    class="form-control" placeholder="Nama pilihan">
                                                @error('namaVarianItem')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <input wire:model='hargaVarianItem' type="number" id='hargaVarianItem'
                                                    class="form-control" placeholder="Harga">
                                                @error('hargaVarianItem')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn mt-1 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        <button type="button" wire:click="tutup"
                                            class="btn mt-1 btn-secondary">Tutup</button>
                                    @else
                                        <button type="button"
                                            wire:click="formTambahVarianItem({{ $layananvarian->id }})"
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
                        <tr>
                            <th scope="row" class="text-center">
                                2
                            </th>
                            @if ($layananvarian2)
                                <td>{{ $layananvarian2->nama }}</td>
                                <td>
                                    <ul>
                                        @forelse ($layananvarian2->items as $item)
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
                                    @if ($formTambahVarianItem2)
                                        <b>Tambah Pilihan Item</b>
                                        <form wire:submit.prevent="tambahVarianItem2({{ $layananvarian2->id }})"
                                            class="">
                                            <div class="">
                                                <input wire:model='namaVarianItem2' type="text" id='namaVarianItem2'
                                                    class="form-control" placeholder="Nama pilihan">
                                                @error('namaVarianItem2')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <input wire:model='hargaVarianItem2' type="number"
                                                    id='hargaVarianItem2' class="form-control" placeholder="Harga">
                                                @error('hargaVarianItem2')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn mt-1 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        <button type="button" wire:click="tutup2"
                                            class="btn mt-1 btn-secondary">Tutup</button>
                                    @else
                                        <button type="button"
                                            wire:click="formTambahVarianItem2({{ $layananvarian2->id }})"
                                            class="btn btn-primary">Tambah</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($layananvarian2->istersedia)
                                        <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                    @else
                                        <button type="button" class="rounded-pill btn btn-danger">Tidak
                                            tersedia</button>
                                    @endif
                                </td>
                            @else
                                <td colspan="3">
                                    <form wire:submit.prevent='tambahVariasi2' class="d-flex align-items-center">
                                        <div class="me-2">
                                            <input wire:model='namaVariasi2' type="text" id='namaVariasi2'
                                                class="form-control" placeholder="Nama variasi layanan">
                                            @error('namaVariasi2')
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
                        <tr>
                            <th scope="row" class="text-center">
                                3
                            </th>
                            @if ($layananvarian3)
                                <td>{{ $layananvarian3->nama }}</td>
                                <td>
                                    <ul>
                                        @forelse ($layananvarian3->items as $item)
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
                                    @if ($formTambahVarianItem3)
                                        <b>Tambah Pilihan Item</b>
                                        <form wire:submit.prevent="tambahVarianItem3('{{ $layananvarian3->id }}')"
                                            class="">
                                            <div class="">
                                                <input wire:model='namaVarianItem3' type="text"
                                                    id='namaVarianItem3' class="form-control"
                                                    placeholder="Nama pilihan">
                                                @error('namaVarianItem3')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <input wire:model='hargaVarianItem3' type="number"
                                                    id='hargaVarianItem3' class="form-control" placeholder="Harga">
                                                @error('hargaVarianItem3')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn mt-1 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        <button type="button" wire:click="tutup3"
                                            class="btn mt-1 btn-secondary">Tutup</button>
                                    @else
                                        <button type="button"
                                            wire:click="formTambahVarianItem3('{{ $layananvarian3->id }}')"
                                            class="btn btn-primary">Tambah</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($layananvarian3->istersedia)
                                        <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                    @else
                                        <button type="button" class="rounded-pill btn btn-danger">Tidak
                                            tersedia</button>
                                    @endif
                                </td>
                            @else
                                <td colspan="3">
                                    <form wire:submit.prevent='tambahVariasi3' class="d-flex align-items-center">
                                        <div class="me-2">
                                            <input wire:model='namaVariasi3' type="text" id='namaVariasi3'
                                                class="form-control" placeholder="Nama variasi layanan">
                                            @error('namaVariasi3')
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
                        <tr>
                            <th scope="row" class="text-center">
                                4
                            </th>
                            @if ($layananvarian4)
                                <td>{{ $layananvarian4->nama }}</td>
                                <td>
                                    <ul>
                                        @forelse ($layananvarian4->items as $item)
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
                                    @if ($formTambahVarianItem4)
                                        <b>Tambah Pilihan Item</b>
                                        <form wire:submit.prevent="tambahVarianItem4('{{ $layananvarian4->id }}')"
                                            class="">
                                            <div class="">
                                                <input wire:model='namaVarianItem4' type="text"
                                                    id='namaVarianItem4' class="form-control"
                                                    placeholder="Nama pilihan">
                                                @error('namaVarianItem4')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <input wire:model='hargaVarianItem4' type="number"
                                                    id='hargaVarianItem4' class="form-control" placeholder="Harga">
                                                @error('hargaVarianItem4')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn mt-1 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        <button type="button" wire:click="tutup4"
                                            class="btn mt-1 btn-secondary">Tutup</button>
                                    @else
                                        <button type="button"
                                            wire:click="formTambahVarianItem4('{{ $layananvarian4->id }}')"
                                            class="btn btn-primary">Tambah</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($layananvarian4->istersedia)
                                        <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                    @else
                                        <button type="button" class="rounded-pill btn btn-danger">Tidak
                                            tersedia</button>
                                    @endif
                                </td>
                            @else
                                <td colspan="3">
                                    <form wire:submit.prevent='tambahVariasi4' class="d-flex align-items-center">
                                        <div class="me-2">
                                            <input wire:model='namaVariasi4' type="text" id='namaVariasi4'
                                                class="form-control" placeholder="Nama variasi layanan">
                                            @error('namaVariasi4')
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
                        <tr>
                            <th scope="row" class="text-center">
                                5
                            </th>
                            @if ($layananvarian5)
                                <td>{{ $layananvarian5->nama }}</td>
                                <td>
                                    <ul>
                                        @forelse ($layananvarian5->items as $item)
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
                                    @if ($formTambahVarianItem5)
                                        <b>Tambah Pilihan Item</b>
                                        <form wire:submit.prevent="tambahVarianItem5('{{ $layananvarian5->id }}')"
                                            class="">
                                            <div class="">
                                                <input wire:model='namaVarianItem5' type="text"
                                                    id='namaVarianItem5' class="form-control"
                                                    placeholder="Nama pilihan">
                                                @error('namaVarianItem5')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <input wire:model='hargaVarianItem5' type="number"
                                                    id='hargaVarianItem5' class="form-control" placeholder="Harga">
                                                @error('hargaVarianItem5')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn mt-1 btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        <button type="button" wire:click="tutup5"
                                            class="btn mt-1 btn-secondary">Tutup</button>
                                    @else
                                        <button type="button"
                                            wire:click="formTambahVarianItem5('{{ $layananvarian5->id }}')"
                                            class="btn btn-primary">Tambah</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($layananvarian5->istersedia)
                                        <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                    @else
                                        <button type="button" class="rounded-pill btn btn-danger">Tidak
                                            tersedia</button>
                                    @endif
                                </td>
                            @else
                                <td colspan="3">
                                    <form wire:submit.prevent='tambahVariasi5' class="d-flex align-items-center">
                                        <div class="me-2">
                                            <input wire:model='namaVariasi5' type="text" id='namaVariasi5'
                                                class="form-control" placeholder="Nama variasi layanan">
                                            @error('namaVariasi5')
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
