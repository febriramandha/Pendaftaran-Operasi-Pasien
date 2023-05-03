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
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table_lv">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">#</th>
                                <th>Kode Level</th>
                                <th>Deskripsi Kamus</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        $no = 1;
                        foreach ($row as $key => $data) { ?>
                            <tbody>
                                <tr>
                                    <th style="display: none;"></th>
                                    <th colspan="5" style="background-color: #e0e0e0;"><?= $data->element; ?></th>
                                    <th style="display: none;"></th>
                                    <th style="display: none;"></th>
                                    <th style="display: none;"></th>
                                </tr>
                                <?php
                                foreach ($data->level as $sub_data) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td style="width: 100px;"><?= $sub_data->kode_level; ?></td>
                                        <td style="white-space: normal !important; word-break: break-word !important; width: 350px;"><?= $sub_data->deskripsi_kamus; ?></td>
                                        <td class="text-center"><?= str_status($data->status); ?></td>
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
                        <?php } ?>

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
                        <label for="kode_level">Kode Level <span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="kode_level" placeholder="Input Kode Level">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Kamus <span class="text-red">*</span></label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Input Deskripsi Kamus"></textarea>
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

<script>
    $(document).ready(function() {
        $('#table_lv').DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
        })
    });
</script>