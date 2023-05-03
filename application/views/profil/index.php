<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data <?= $this->title; ?></h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" value="<?= gelar_nama($profil->gelar_depan, $profil->nama_pegawai, $profil->gelar_blkng); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nip" value="<?= $profil->nip; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="instansi" value="<?= $profil->nama_unor; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jekel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jekel" value="<?= jenis_kel($profil->jenis_kelamin); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tgl_lahir" value="<?= indo_date($profil->tgl_lahir); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="agama" value="<?= $profil->agama == null ? '-' : $profil->agama; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status_nikah" class="col-sm-3 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="status_nikah" value="<?= $profil->status_perkawinan; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status_pegawai" class="col-sm-3 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="status_pegawai" value="<?= $profil->status_pegawai == null ? '-' : $profil->status_pegawai; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pangkat_gol" class="col-sm-3 col-form-label">Pangkat/Golongan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control text-uppercase" id="pangkat_gol" value="<?= $golongan->pangkat . ' / ' . $golongan->nama_golongan . ' ' . $golongan->ruang; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jabatan" value="<?= $profil->nama_jabatan; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eselon" class="col-sm-3 col-form-label">Eselon</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="eselon" value="<?= $profil->nama_eselon; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>