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

                <div class="card-body table-responsive p-0" style="height: 500px;">
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table12">

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row as $key => $data) {
                            ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td style="background-color: #e0e0e0;">
                                        <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                        <?= $data->element; ?>
                                    </td>
                                </tr>

                                <tr class="expandable-body">
                                    <td>
                                        <div class="p-0">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <?php
                                                    foreach ($data->level as $sub_data) {
                                                    ?>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                            <td style="background-color: #f0f0f0;">
                                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                                <?= $sub_data->kode_level; ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="expandable-body">
                                                            <td>
                                                                <div class="p-0">
                                                                    <table class="table table-hover">
                                                                        <tbody>
                                                                            <?php
                                                                            foreach ($sub_data->indikator_level as $sub_level) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $no++; ?>.</td>
                                                                                    <td style="white-space: normal !important; word-break: break-word !important; "><?= $sub_level->indikator; ?></td>
                                                                                    <td><?= str_status($data->status); ?></td>
                                                                                    <td class="text-center">
                                                                                        <a href="<?= site_url('level/edit/' . $data->id); ?>" class="btn btn-warning btn-xs">
                                                                                            <i class="fas fa-pen"></i> Edit
                                                                                        </a>
                                                                                        <a href="<?= site_url('level/delete/' . $data->id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin hapus?')">
                                                                                            <i class="fas fa-trash"></i> Hapus
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
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
                <div class="alert" style="background-color: #dcedfc;" role="alert">
                    <span><i class="fas fa-info-circle"></i></span> Informasi <br>
                    <p>Pastikan <b>Kode Level Kamus</b> dan <b>Kompetensi</b> yang diinputkan benar !!</p>
                </div>
                <form action="">
                    <div class="form-group">
                        <label for="kompetensi">Kompetensi <span class="text-red">*</span></label>
                        <select class="form-control js-basic-single" name="kompetensi" id="kompetensi" data-placeholder="Pilih Kompetensi">
                            <option value="">Pilih Kompetensi</option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kode_level">Level Kamus <span class="text-red">*</span></label>
                        <select class="form-control js-basic-single" name="kode_level" id="kode_level" data-placeholder="Pilih Level Kamus">
                            <option value="">Pilih Level Kamus</option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="indikator">Indikator <span class="text-red">*</span></label>
                        <textarea class="form-control" name="indikator" id="indikator" rows="3" placeholder="Input Indikator"></textarea>
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