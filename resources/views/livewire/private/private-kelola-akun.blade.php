<div>
    <livewire:private.component.private-navbar />

    <div class="mt-2">
        <div class="table-responsive">
            <table class="table table-sm table-striped  table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" style="">Nama</th>
                        <th scope="col">Sex</th>
                        <th scope="col">No HP</th>
                        <th scope="col" style="width: 15%">Role</th>
                        <th scope="col" style="width: 15%">STATUS</th>
                        <th scope="col" style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($akun as $data)
                        <tr>
                            <th scope="row" class="text-center">
                                {{ $data->nama }}
                            </th>
                            <td>
                                {{ $data->sex }}
                            </td>
                            <td>
                                {{ $data->nohp }}
                            </td>
                            <td>{{ $data->role }}</td>
                            <td>
                                @if ($data->isaktif)
                                    <button type="button" class="rounded-pill btn btn-success">Aktif</button>
                                @else
                                    <button type="button" class="rounded-pill btn btn-danger">Tidak aktif</button>
                                @endif
                            </td>
                            <td>
                                {{-- <button type="button" class="rounded-pill btn btn-warning">Ubah</button> --}}
                                <a href="{{ url('admin/kelola-akun/detail', $data->id) }}" class="rounded-pill btn btn-warning">Lihat</a>
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
