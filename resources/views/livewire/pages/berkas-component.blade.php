<div>
    <div class="mt-3">
    <a href="{{ route('berkas.create') }}" class="btn btn-primary">lengkapi Berkas</a>
    </div>
    <div class="mt-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Pendaftar</th>
                            <th>Foto</th>
                            <th>Kartu Keluarga</th>
                            <th>KTP Orangtua</th>
                            <th>Nilai Rapot</th>
                            <th>Ijazah</th>
                            <th>File Tambahan</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->foto }}</td>
                                <td>{{ $item->kk }}</td>
                                <td>{{ $item->nilai_rapot}}</td>
                                <td>{{ $item->ijazah }}</td>
                                <td>{{ $item->file }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('berkas.update', $item->id) }}" class="btn btn-blue">Edit</a>
                                    <a href="#" wire:click.prevent="destroy({{ $item->id }})" class="btn btn-red">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

