<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="title">
        <h1>Formulir Pendaftaran</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">

                <div class="form-group mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" wire:model="name" class="form-control"
                        placeholder="isi nama lengkap...">
                    @if ($errors->has('full_name'))
                        <span class="text-danger">{{ $errors->first('full_name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">NISN</label>
                    <input type="integer" name="nisn" wire:model="nisn" class="form-control"
                        placeholder="isi nisn...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" name="school_origin" wire:model="school_origin" class="form-control"
                        placeholder="asal sekolah...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Kelamin</label>

                    <input class="form-radio-input" type="radio" name="gender" wire:model="gender" value="laki"
                        checked="">
                    <span class="form-radio-sign">Laki - Laki</span>
                    </label>
                    <label class="form-radio-label ml-3 mb-3">
                        <input class="form-radio-input" type="radio" name="gender" wire:model="gender"
                            value="perempuan">
                        <span class="form-radio-sign">Perempuan</span>
                    </label>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Tempat lahir</label>
                    <input type="string" name="place" wire:model="place" class="form-control"
                        placeholder="tempat lahir...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Tanggal lahir</label>
                    <input type="date" name="birthday" wire:model="place" class="form-control"
                        placeholder="tanggal lahir...">
                </div>

                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select type="text" class="form-select tomselected ts-hidden-accessible" id="select-users"
                        value="" tabindex="1" wire:model="religion">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Alamat Rumah</label>
                    <input type="text" name="address" wire:model="address" class="form-control"
                        placeholder="alamat rumah...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">No Telephone</label>
                    <input type="number" name="phone" wire:model="phone" class="form-control" placeholder="...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Riwayat Penyakit</label>
                    <input type="text" name="disease" wire:model="disease" class="form-control"
                        placeholder="jika tidak ada riwayat penyakit maka isi - ">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Nama Orangtua</label>
                    <input type="text" name="parents_name" wire:model="parents_name" class="form-control"
                        placeholder="masih ada/almarhum">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Pekerjaan Orangtua</label>
                    <input type="text" name="parents-occupation" wire:model="parents_occupation"
                        class="form-control" placeholder="...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Kontak Orang Tua</label>
                    <input type="number" name="parents_contact" wire:model="parents_contact" class="form-control"
                        placeholder="...">
                </div>

                <div class="form-group">
                    <label class="form-label">Prestasi yang Pernah Diraih</label>
                    <input type="text" name="achievement" wire:model="achievement" class="form-control"
                        placeholder="...">
                </div>

                <div class="mb-3">
                    <div class="form-label">Sertifikat</div>
                    <input type="file" name="file" wire:model="file" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('formulir') }}">
                    <button class="btn btn-red">Kembali</button>
                </a>

            </form>
        </div>
    </div>


</div>
