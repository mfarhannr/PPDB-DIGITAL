<div class="mt-3">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>


    <div class="card">
        <div class="card-body">
        <h2>Update Nilai</h2>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">

                <div class="form-group mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" wire:model="name" class="form-control"
                        placeholder="masukkan nama lengkap...">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Nilai Ijazah Sekolah</label>
                    <input type="number" name="diploma_grades" wire:model="diploma_grades" class="form-control"
                        placeholder="Masukkan Nilai Ijazah">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Nilai Tes Akademik</label>
                    <input type="number" name="academic_score" wire:model="academic_score" class="form-control"
                        placeholder="Masukkan Nilai tes Akademik">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Nilai Tes Wawancara</label>
                    <input type="number" name="interview_score" wire:model="interview_score" class="form-control"
                        placeholder="Masukkan Nilai Tes Wawancara">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Status</label>

                    <input class="form-radio-input" type="radio" name="gender" wire:model="status" value="Lulus"
                        checked="">
                    <span class="form-radio-sign">Lulus</span>
                    </label>
                    <label class="form-radio-label ml-3 mb-3">
                        <input class="form-radio-input" type="radio" name="gender" wire:model="status"
                            value="Tidak Lulus">
                        <span class="form-radio-sign">Tidak Lulus</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="#">
                    <button class="btn btn-red">Kembali</button>
                </a>

            </form>
        </div>
    </div>


</div>
