<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="title">
        <h1>Isi Formulir</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Nama Dokumen</label>
                    <input type="text" wire:model="name" class="form-control" name="example-text-input"
                        placeholder="Masukkan nama dokumen">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Diupload oleh</label>
                    <select type="text" class="form-select tomselected ts-hidden-accessible" id="select-users"
                        value="" tabindex="1" wire:model="upload">
                        <option selected="">Pilih Jabatan Anda</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Staff">Staff</option>
                        <option value="Guru">Guru</option>
                    </select>
                </div>

                <div class="mb-3">
                    <div class="form-label">Tanggal Upload</div>
                    <input type="date" id="date" name="date" wire:model="date" class="form-control">
                    @error('date')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Pilih File</div>
                    <input type="file" name="file" wire:model="file" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" required name="full_name" class="form-control" id="namalengkap"
                        placeholder="Enter fullname...">
                    @if ($errors->has('full_name'))
                        <span class="text-danger">{{ $errors->first('full_name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" required name="nisn" class="form-control" id="namalengkap"
                        placeholder="Enter NISN...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" required name="school" class="form-control" id="namalengkap"
                        placeholder="Enter fullname...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">kelamin</label>
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="gender" value="laki" checked="">
                        <span class="form-radio-sign">Laki - Laki</span>
                    </label>
                    <label class="form-radio-label ml-3 mb-3">
                        <input class="form-radio-input" type="radio" name="gender" value="perempuan">
                        <span class="form-radio-sign">Perempuan</span>
                    </label>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Tempat lahir</label>
                    <input type="string" name="place" required class="form-control" id="tp2"
                        placeholder="tempat Lahir...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Tanggal lahir</label>
                    <input type="date" name="birthday" required class="form-control" placeholder="Tanggal Lahir...">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="buddha">buddha</option>
                        <option value="konghucu">konghucu</option>
                    </select>
                </div>


                <div class="form-group mb-3">
                    <label class="form-label">Anak ke</label>
                    <input type="number" name="anak_ke" required class="form-control" id="ank"
                        placeholder="anak ke berapa...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Alamat Rumah</label>
                    <input type="text" name="address" required class="form-control" id="almtrm"
                        placeholder="alamat(rt/rw)">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">No Telephone</label>
                    <input type="number" name="phone" required class="form-control" id="tlprmh"
                        placeholder="...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Riwayat Penyakit</label>
                    <input type="text" name="penyakit" required class="form-control" id="pykt"
                        placeholder="jika tidak maka isi strip...">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Nama Orangtua</label>
                    <input type="text" name="nama_ayah" required class="form-control" id="nmyh"
                        placeholder="masih ada/almarhum">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Pekerjaan Orangtua</label>
                    <input type="text" name="kerja_ayah" required class="form-control" id="krjyh"
                        placeholder="...">
                </div>
                <div class="form-group mb-3">
                    <label for="nohape">No. HP/WA :</label>
                    <input type="number" name="no_telportu" required class="form-control" id="nohape"
                        placeholder="...">
                </div>

                <div class="form-group">
                    <label class="form-label">Prestasi yang Pernah Diraih</label>
                    <input type="text" required name="prestasi" class="form-control" id="prsts"
                        placeholder="...">
                </div>

                <div class="form-group">
                    <label class="form-label">Sertifikat</label>
                    <input type="file" required name="file_prestasi" class="form-control-file"
                        id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="">
                    <button class="btn btn-red">Kembali</button>
                </a>

            </form>
        </div>
    </div>


</div>
