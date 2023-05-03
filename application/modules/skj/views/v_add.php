<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah <?= $this->title; ?></h3>
            </div>
            <form action="">
                <div class="card-body">
                    <div class="alert" style="background-color: #dcedfc;" role="alert">
                        <span><i class="fas fa-info-circle"></i></span> Informasi <br>
                        <p>Pastikan data <b>Kamus Kompetensi</b> telah diinputkan sesuai prosedur !!</p>
                    </div>

                    <div class="form-group row">
                        <label for="kelompok_jabatan" class="col-sm-2 col-form-label">Kelompok Jabatan <span class="text-red">*</span></label>
                        <div class="col-sm-10">
                            <select class="form-control js-basic-single" name="kelompok_jabatan" id="kelompok_jabatan" data-placeholder="Pilih Kelompok Jabatan">
                                <option value="">Pilih Kelompok Jabatan</option>
                                <option value="1">Pilihan 1</option>
                                <option value="2">Pilihan 2</option>
                                <option value="3">Pilihan 3</option>
                                <option value="4">Pilihan 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-head-fixed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Kategori</th>
                                    <th>Nama Kompetensi</th>
                                    <th>Level</th>
                                    <th>Deskripsi</th>
                                    <th>Indikator</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $data->nama_kelompok; ?></td>
                                        <td><?= $data->nama_kelompok; ?></td>
                                        <td style="width: 150px;">
                                            <select class="form-control js-basic-single" name="level_kamus" id="level_kamus" data-placeholder="Pilih">
                                                <option value="">Pilih</option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="4">Pilihan 4</option>
                                            </select>
                                        </td>
                                        <td style="white-space: normal !important; word-break: break-word !important; width: 350px;">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis quo modi, soluta omnis veritatis blanditiis mollitia aliquam eum? Saepe?
                                        </td>
                                        <td style="white-space: normal !important; word-break: break-word !important; width: 350px;">
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet.</li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, officiis.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                    <div class="card-footer">
                        <a href="<?= base_url('skj'); ?>" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </a>
                        <a href="<?= base_url('skj'); ?>" class="btn btn-danger">
                            <i class="fas fa-times-circle"></i> Batal
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>