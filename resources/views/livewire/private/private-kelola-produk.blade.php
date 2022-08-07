<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin', []) }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelola Produk</li>
            </ol>
        </nav>

        <div class="card mb-2">
            <div class="card-body py-2">
                <div class="d-flex justify-content-between">
                    <div class=""></div>
                    <div class="">
                        @if ($tambah)
                        @else
                            <button wire:click='formtambah' type="button" class="btn btn-primary rounded-pill">Tambah
                                produk</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if ($tambah)
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Tambah produk
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='tambah' enctype="multipart/form-data">
                            <div class="">
                                <img width="200px" height="200px" src="{{ $gambar != null ? $gambar->temporaryUrl() : '' }}">
                                <label for="gambar">gambar</label>
                                {{-- @dd($gambar) --}}
                                <input type="file" wire:model='gambar' id='gambar' class="form-control">
                                <div wire:loading wire:target="gambar">Uploading...</div>
                                @error('gambar')
                                    <span class="error text-danger text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mt-1">
                                {{ $nama }}
                                <label for="nama">Nama produk</label>
                                <input wire:model='nama' type="text" id='nama' class="form-control"
                                    placeholder="Nama produk">
                                @error('nama')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <label for="singkat">Singkat</label>
                                <input wire:model='singkat' type="text" id="singkat" class="form-control"
                                    placeholder="Singat mengenai produk">
                                @error('singkat')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <label for="keterangan">Keterangan</label>
                                <textarea wire:model='keterangan' id="keterangan" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="mt-1">
                                <label for="link">Link url</label>
                                <input wire:model='link' type="text" id='link' class="form-control"
                                    placeholder="Link https://">
                                @error('link')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary rounded-pill form-control">Simpan</button>
                            </div>
                        </form>
                        <button wire:click='formtutup' type="button"
                            class="btn btn-secondary mt-2 rounded-pill form-control">Tutup</button>
                    </div>
                </div>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-sm table-striped  table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" style="width: 4%">URUT</th>
                        <th scope="col" style="width: 15%">GAMBAR</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">LINK</th>
                        <th scope="col" style="width: 15%">STATUS</th>
                        <th scope="col" style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $data)
                        <tr>
                            <th scope="row" class="text-center">
                                <select class="form-control text-center" id="urut">
                                    <option value="">1</option>
                                </select>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
