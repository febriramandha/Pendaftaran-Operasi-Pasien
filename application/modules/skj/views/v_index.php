<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title; ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url('skj/add'); ?>" class="btn btn-primary">
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
                                <th>Kelompok Jabatan</th>
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
                                    <td><?= $data->nama_kelompok; ?></td>
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