<div>
    <livewire:private.component.private-navbar />

    <div class="container-fluid mt-4">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="mb-2">
            @if ($formTambah)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            Tambah produk
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='tambah' enctype="multipart/form-data">
                                <div class="">
                                    @foreach ($gambar as $data)
                                    <img width="100px" height="100px"
                                    src="{{ $data != null ? $data->temporaryUrl() : '' }}">
                                    @endforeach

                                </div>
                                <div class="">
                                    <label for="gambar">gambar</label>
                                    {{-- @dd($gambar) --}}
                                    <input type="file" multiple wire:model='gambar' id='gambar'
                                        class="form-control">
                                    <div wire:loading wire:target="gambar">Uploading...</div>
                                    @error('gambar')
                                        <span class="error text-danger text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="nama">Nama produk</label>
                                    <input wire:model='nama' type="text" id='nama' class="form-control"
                                        placeholder="Nama produk">
                                    @error('nama')
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
                                    <label for="layanan_id">Layanan</label>
                                    <select class="form-control" required wire:model='layanan_id' id="layanan_id">
                                        <option value="">Pilih</option>
                                        @foreach ($layanan as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('layanan_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="tentang">tentang</label>
                                    <textarea wire:model='tentang' id="tentang" rows="5" class="form-control"></textarea>
                                    @error('tentang')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="alat">alat</label>
                                    <textarea wire:model='alat' id="alat" rows="5" class="form-control"></textarea>
                                    @error('alat')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="proses">proses</label>
                                    <textarea wire:model='proses' id="proses" rows="5" class="form-control"></textarea>
                                    @error('proses')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="tantangan">tantangan</label>
                                    <textarea wire:model='tantangan' id="tantangan" rows="5" class="form-control"></textarea>
                                    @error('tantangan')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-1">
                                    <label for="hasil">hasil</label>
                                    <textarea wire:model='hasil' id="hasil" rows="5" class="form-control"></textarea>
                                    @error('hasil')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <button type="submit"
                                        class="btn btn-primary rounded-pill form-control">Simpan</button>
                                </div>
                            </form>
                            <button wire:click='tutup' type="button"
                                class="btn btn-secondary mt-2 rounded-pill form-control">Tutup</button>
                        </div>
                    </div>
                </div>
            @else
                <button type="button" wire:click='formTambah' class="btn btn-primary rounded-pill">
                    Tambah portofolio
                </button>
            @endif
        </div>

        <div class="table-responsive">
            <table class="table table-sm table-striped  table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" style="">Nama</th>
                        <th scope="col">Jenis layanan</th>
                        <th scope="col">Layanan</th>
                        <th scope="col" style="width: 15%">STATUS</th>
                        <th scope="col" style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($porto as $data)
                        <tr>
                            <td>
                                {{ $data->nama }}
                            </td>
                            <td>
                                {{ $data->layananjenis->nama }}
                            </td>
                            <td>
                                {{ $data->layanan->nama }}
                            </td>
                            <td>
                                @if ($data->tampil)
                                    <button type="button" class="rounded-pill btn btn-success">tampil</button>
                                @else
                                    <button type="button" class="rounded-pill btn btn-danger">Tidak tampil</button>
                                @endif
                            </td>
                            <td>
                                {{-- <button type="button" class="rounded-pill btn btn-warning">Ubah</button> --}}
                                <a href="{{ url('admin/kelola-akun/detail', $data->id) }}"
                                    class="rounded-pill btn btn-warning">Lihat</a>
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
