<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data <?= $this->title; ?></h3>
            </div>
            <form action="">
                <div class="card-body">
                    <div class="alert" style="background-color: #dcedfc;" role="alert">
                        <span><i class="fas fa-info-circle"></i></span> Informasi <br>
                        <p>Pastikan data <b>Asesmen Kompetensi</b> diinputkan dengan benar !!</p>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai <span class="text-red">*</span></label>
                        <div class="col-sm-10">
                            <select class="form-control js-basic-single" name="nama_pegawai" id="nama_pegawai" data-placeholder="Pilih Nama Pegawai">
                                <option value="">Pilih Nama Pegawai</option>
                                <option value="1">Pilihan 1</option>
                                <option value="2">Pilihan 2</option>
                                <option value="3">Pilihan 3</option>
                                <option value="4">Pilihan 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_pegawai" class="col-sm-2 col-form-label">Jabatan Pegawai <span class="text-red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan_pegawai" placeholder="Jabatan Pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelompok_jabatan" class="col-sm-2 col-form-label">Kelompok Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelompok_jabatan" placeholder="Kelompok Jabatan">
                        </div>
                    </div> -->

                    <div class="row font-weight-bold">
                        <ol>
                            <li>
                                <p>Komptenesi Manajerial<br>
                                    ( √ Pilih yang sesuai dengan kepribadian dan kondisi PNS)</p>
                            </li>
                            <div class="card-body table-bordered table-responsive p-0 mb-3 font-weight-normal">
                                <table class="table table-hover text-nowrap table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Checklist<br>PNS ybs</th>
                                            <th>Uraian</th>
                                            <th>Checklist<br>Atasan</th>
                                            <th>Checklist<br>Sejawat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $lv = 1;
                                        foreach ($row->result() as $key => $data) { ?>
                                            <tr>
                                                <td><?= $no++; ?>.</td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                                <td style="white-space: normal !important; word-break: break-word !important; width: 350px;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis quo modi, soluta omnis veritatis blanditiis mollitia aliquam eum? Saepe?
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <li>
                                <p>Kompetensi Sosial Kultural<br>
                                    ( √ Pilih yang sesuai dengan kepribadian dan kondisi PNS)</p>
                            </li>
                            <div class="card-body table-bordered table-responsive p-0 mb-3">
                                <table class="table table-hover text-nowrap table-head-fixed font-weight-normal">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Checklist<br>PNS ybs</th>
                                            <th>Uraian</th>
                                            <th>Checklist<br>Atasan</th>
                                            <th>Checklist<br>Sejawat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $lv = 1;
                                        foreach ($row->result() as $key => $data) { ?>
                                            <tr>
                                                <td><?= $no++; ?>.</td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                                <td style="white-space: normal !important; word-break: break-word !important; width: 350px;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis quo modi, soluta omnis veritatis blanditiis mollitia aliquam eum? Saepe?
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="checkboxPrimary2" height="100px">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </ol>
                    </div>

                    <p class="font-weight-bold">Data Prestasi Kerja</p>
                    <div class="card-body table-responsive p-0 col-md-8">
                        <table class="table table-hover text-nowrap table-head-fixed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Unsur Yang Dinilai</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Sasaran Kerja Pegawai (SKP)</td>
                                    <td>
                                        <input type="text" id="checkboxPrimary2">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Perilaku Kerja</td>
                                    <td>
                                        <input type="text" id="checkboxPrimary2">
                                    </td>
                                </tr>
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