<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title; ?></h3>
                <div class="card-tools">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#add-modal">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Modul Kinerja</th>
                                <th>Kinerja</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++; ?>.</td>
                                    <td><?= $data->module_kinerja; ?></td>
                                    <td>
                                        <?php
                                        foreach ($data->master_kinerja as $sub_data) { ?>
                                            <ul>
                                                <?php
                                                if ($sub_data->master_kinerja_id) {
                                                    echo "<li>$sub_data->kinerja</li>";
                                                } else {
                                                    echo "Data Kosong";
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center"><?= str_status($data->status); ?></td>
                                    <td class="text-center">
                                        <a href="<?= site_url('indikator_kinerja/edit/' . $data->id); ?>" class="btn btn-warning btn-xs">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                        <a href="<?= site_url('indikator_kinerja/delete/' . $data->id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin hapus?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="add-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah <?= $this->title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="modul_kinerja">Modul Kinerja <span class="text-red">*</span></label>
                        <select class="form-control js-basic-single" name="modul_kinerja" id="modul_kinerja" data-placeholder="Pilih Modul Kinerja">
                            <option value="">Pilih Modul Kinerja</option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kinerja">Kinerja <span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="kinerja" placeholder="Input Kinerja">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>