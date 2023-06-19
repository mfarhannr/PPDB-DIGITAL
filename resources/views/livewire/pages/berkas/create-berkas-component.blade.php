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
        <h2>Lengkapi berkas</h2>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="create" autocomplete="off">

                <div class="form-group mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" wire:model="name" class="form-control"
                        placeholder="masukkan nama lengkap...">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Foto</div>
                    <input type="file" name="foto" wire:model="foto" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">Kartu Keluarga</div>
                    <input type="file" name="kk" wire:model="kk" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">KTP Orangtua</div>
                    <input type="file" name="ktp_ortu" wire:model="ktp_ortu" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">Nilai Raport</div>
                    <input type="file" name="nilai_rapot" wire:model="nilai_rapot" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">Ijazah</div>
                    <input type="file" name="ijazah" wire:model="ijazah" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label">File Tambahan</div>
                    <input type="file" name="file" wire:model="file" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="#">
                    <button class="btn btn-red">Kembali</button>
                </a>

            </form>
        </div>
    </div>


</div>
