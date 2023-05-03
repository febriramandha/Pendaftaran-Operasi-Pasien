<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Master Modul SKJ</h3>
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
                                <th>Nama SKJ</th>
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
                                    <td><?= $data->nama_skj; ?></td>
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
                <h4 class="modal-title">Tambah Master <?= $this->title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="nama_skj">Nama SKJ <span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="nama_skj" placeholder="Input Nama SKJ">
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