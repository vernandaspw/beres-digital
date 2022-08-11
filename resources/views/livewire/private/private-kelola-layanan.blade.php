<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin', []) }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelola Layanan</li>
            </ol>
        </nav>

        <div class="card mb-2">
            <div class="card-body py-2">
                <div class="d-flex justify-content-between">
                    <div class="">
                        
                    </div>
                    <div class="">
                        <a href="{{ url('admin/kelola-layanan/jenis') }}" class="btn btn-warning rounded-pill">Jenis
                            layanan</a>
                        @if ($tambah)
                        @else
                            <button wire:click='formtambah' type="button" class="btn btn-primary rounded-pill">Tambah
                                layanan</button>
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
                        Tambah layanan
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='tambah' enctype="multipart/form-data">
                            <div class="">
                                <img width="130px" height="130px" src="{{ $gambar != null ? $gambar->temporaryUrl() : '' }}">
                            </div>
                            <div class="">

                                <label for="gambar">gambar</label>
                                {{-- @dd($gambar) --}}
                                <input type="file" wire:model='gambar' id='gambar' class="form-control">
                                <div wire:loading wire:target="gambar">Uploading...</div>
                                @error('gambar')
                                    <span class="error text-danger text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mt-1">
                                <label for="nama">Nama layanan</label>
                                <input wire:model='nama' type="text" id='nama' class="form-control"
                                    placeholder="Nama layanan">
                                @error('nama')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <label for="harga">Harga dasar</label>
                                <input wire:model='harga' type="text" id="harga" class="form-control"
                                    placeholder="Singat mengenai produk">
                                @error('harga')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <label for="jenis_id">Jenis layanan</label>
                                <select class="form-control" required wire:model='jenis_id' id="jenis_id">
                                    <option value="">Pilih</option>
                                    @foreach ($jenis as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_id')
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
                                @error('keterangan')
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
                        <th scope="col">HARGA</th>
                        <th scope="col">JENIS LAYANAN</th>
                        <th scope="col">Varian</th>
                        <th scope="col" style="width: 15%">STATUS</th>
                        <th scope="col" style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($layanan as $data)
                        <tr>
                            <th scope="row" class="text-center">
                                {{ $data->urut }}
                            </th>
                            <td>
                                <img src="{{ Storage::url($data->gambar) }}" width="50px" height="50px"
                                    alt="">
                            </td>
                            <td>{{ $data->nama }}</td>
                            <td>@uang($data->harga)</td>
                            <td>{{ $data->layananjenis->nama }}</td>
                            <td>{{ $data->layananvarian != null ? $data->layananvarian->count() : 0 }}</td>
                            <td>
                                @if ($data->istersedia)
                                    <button type="button" class="rounded-pill btn btn-success">Tersedia</button>
                                @else
                                    <button type="button" class="rounded-pill btn btn-danger">Tidak tersedia</button>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="rounded-pill btn btn-warning">Ubah</button>
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
