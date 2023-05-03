<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title; ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url('asesmen/add'); ?>" class="btn btn-primary">
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
                                <th>Tanggal</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++; ?>.</td>
                                    <td><?= date('m-d-Y') ?></td>
                                    <td>Nama Pegawai</td>
                                    <td>Jabatan Pegawai</td>
                                    <td class="text-center">
                                        <a href="<?= site_url('asesmen/view/' . $data->id); ?>">
                                            <i class="fas fa-eye"></i> View
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