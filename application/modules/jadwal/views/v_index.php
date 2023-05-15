<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title; ?></h3>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <select class="form-control js-basic-single" name="filter" id="filter" data-placeholder="Pilih Sortir">
                            <option selected disabled></option>
                            <option value="1">Tampilkan Semua</option>
                            <option value="2">Hari Ini</option>
                            <option value="3">Kemarin</option>
                            <option value="4">Besok</option>
                        </select>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Pasien</th>
                                <th>No Rekam Medis</th>
                                <th>Tanggal Operasi</th>
                                <th>Diagnosa</th>
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
                                    <td><?= $data->nama_pasien; ?></td>
                                    <td><?= $data->no_mr; ?></td>
                                    <td><?= indo_date($data->tgl_operasi); ?></td>
                                    <td><?= $data->diagnosa; ?></td>
                                    <td class="text-center"><?= status_operasi($data->status); ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('jadwal/detail/' . $data->id); ?>" class="btn btn-primary btn-xs" title="Lihat Detail">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>

                                        <?php if ($data->status == 1) { ?>
                                            <a href="#" class="btn btn-success btn-xs" title="Lihat Detail" onclick="ubahStatus('<?= $data->id; ?>')">
                                                <i class="fas fa-check"></i> Terima
                                            </a>
                                        <?php } ?>
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

<script>
    function ubahStatus(id) {
        Swal.fire({
            text: "Yakin ingin terima pasien?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Terima'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('jadwal/status/'); ?>" + id
            }
        })
    }
</script>