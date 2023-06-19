<div>
    <div class="mt-3">
    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Masukkan Nilai</a>
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
                            <th>Nilai Ijazah Sekolah</th>
                            <th>Nilai Tes Akademik</th>
                            <th>Nilai Tes Wawancara</th>
                            <th>Status</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->diploma_grades }}</td>
                                <td>{{ $item->academic_score }}</td>
                                <td>{{ $item->interview_score }}</td>
                                <td>{{ $item->status }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('nilai.update', $item->id) }}" class="btn btn-blue">Edit</a>
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
