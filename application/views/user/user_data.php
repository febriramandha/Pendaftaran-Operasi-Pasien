<section class="content">

    <?php $this->view('messages'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools">
                <a href="<?= site_url('user/add'); ?>" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Tambah User
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Username/Nip</th>
                            <th>Nama User</th>
                            <th>OPD</th>
                            <th>Level</th>
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
                                <td><?= $data->nip; ?></td>
                                <td><?= $data->full_name; ?></td>
                                <td><?= $data->nama_unor; ?></td>
                                <td><?= str_level($data->level); ?></td>
                                <td><?= str_status($data->status_user); ?></td>
                                <td class="text-center" width="160px">

                                    <a href="<?= site_url('user/edit/' . $data->userid); ?>" class="text-warning pr-3" title="Edit">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <a href="#" class="text-danger pr-3" title="Hapus" onclick="hapusData('<?= $data->userid; ?>')">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                    <a href="#" class="text-danger pr-3" title="Hapus" onclick="ubahStatus('<?= $data->userid; ?>')">
                                        <span class="text-success" title="Non Aktifkan" style="font-size: 20px;"><i class="aktif fas fa-toggle-on"></i></span>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    function hapusData(id) {
        Swal.fire({
            text: "Yakin ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('user/delete/'); ?>" + id
            }
        })
    }


    function ubahStatus(id) {
        Swal.fire({
            text: "Yakin ingin ubah status user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Ubah'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('user/status/'); ?>" + id
            }
        })
    }
</script>