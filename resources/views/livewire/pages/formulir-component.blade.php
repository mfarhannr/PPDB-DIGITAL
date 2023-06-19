<div>
    <div class="mt-3">
    <a href="{{ route('formulir.create') }}" class="btn btn-primary">Isi Formulir</a>
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
                            <th>NISN</th>
                            <th>Asal Sekolah</th>
                            <th>Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelamin</th>
                            <th>Agama</th>
                            <th>Kelamin</th>
                            <th>Alamat Rumah</th>
                            <th>No Telephone</th>
                            <th>Riwayat Penyakit</th>
                            <th>Nama Orangtua</th>
                            <th>Pekerjaan Orangtua</th>
                            <th>Kontak Orangtua</th>
                            <th>Prestasi</th>
                            <th>Sertifikat</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->school_origin }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->place }}</td>
                                <td>{{ $item->birthday }}</td>
                                <td>{{ $item->religion }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->parents_name }}</td>
                                <td>{{ $item->parents_occupation }}</td>
                                <td>{{ $item->parents_contact}}</td>
                                <td>{{ $item->achievement }}</td>
                                <td>{{ $item->file }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('formulir.update', $item->id) }}" class="btn btn-blue">Edit</a>
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
