<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Master Kompetensi</h3>
                <div class="card-tools">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#add-modal">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Kode Kompetensi</th>
                                <th>Element</th>
                                <th>Definisi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++; ?>.</td>
                                    <td><?= $data->kode_kompetensi; ?></td>
                                    <td style="width: 200px;"><?= $data->element; ?></td>
                                    <td style="white-space: normal !important; word-break: break-word !important; width: 700px;"><?= $data->definisi; ?></td>
                                    <td class="text-center"><?= str_status($data->status); ?></td>
                                    <td class="text-center">
                                        <a href="<?= site_url('master_kompetensi/edit/' . $data->id); ?>" class="btn btn-warning btn-xs">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                        <a href="<?= site_url('master_kompetensi/delete/' . $data->id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin hapus?')">
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
                <div class="alert" style="background-color: #dcedfc;" role="alert">
                    <span><i class="fas fa-info-circle"></i></span> Informasi <br>
                    <p><b>Kode Kompetensi</b> yang telah diinputkan tidak dapat diubah, Pastikan <b>Kode Kompetensi</b> tidak ada yang sama / ganda!!</p>
                </div>

                <form action="">
                    <div class="form-group">
                        <label for="nama_skj">Nama SKJ <span class="text-red">*</span></label>
                        <select class="form-control js-basic-single" name="nama_skj" id="nama_skj" data-placeholder="Pilih Nama Standar Kompetensi Jabatan">
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kode_kompetensi">Kode Kompetensi <span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="kode_kompetensi" placeholder="Input Kode Kompetensi">
                    </div>
                    <div class="form-group">
                        <label for="element">Element <span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="element" placeholder="Input Element">
                    </div>
                    <div class="form-group">
                        <label for="definisi">Definisi <span class="text-red">*</span></label>
                        <textarea class="form-control" name="definisi" id="definisi" rows="3" placeholder="Input Definisi"></textarea>
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