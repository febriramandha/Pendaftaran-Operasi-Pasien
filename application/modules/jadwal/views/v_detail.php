<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">RSUD dr. ACHMAD DARWIS</h3>
            </div>
            <div class="card-body">
                <input type="hidden" id="id" name="id" value="<?= $row->id; ?>">
                <div class="form-group row">
                    <label for="tgl_operasi" class="col-sm-3 col-form-label">Tanggal Operasi
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tgl_operasi" name="tgl_operasi" value="<?= indo_date($row->tgl_operasi); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_pasien" class="col-sm-3 col-form-label">Nama Pasien
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $row->nama_pasien; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_mr" class="col-sm-3 col-form-label">No Rekam Medis
                    </label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="no_mr" name="no_mr" value="<?= $row->no_mr; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= indo_date($row->tgl_lahir); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-sm-3 col-form-label">Umur
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="umur" name="umur" value="<?= $row->umur; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jekel" name="jekel" value="<?= jenis_kel($row->jekel); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ruangan" class="col-sm-3 col-form-label">Nama Ruangan
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="<?= $row->nama_ruangan; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnosa" class="col-sm-3 col-form-label">Diagnosa
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?= $row->diagnosa; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rencana_tindakan" class="col-sm-3 col-form-label">Rencana Tindakan
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="rencana_tindakan" name="rencana_tindakan" value="<?= $row->rencana_tindakan; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dpjp_operator" class="col-sm-3 col-form-label">Nama DPJP/ Operator
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="dpjp_operator" name="dpjp_operator" value="<?= $row->nama_dpjp; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_anastesi" class="col-sm-3 col-form-label">Jenis Anastesi
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_anastesi" name="jenis_anastesi" value="<?= $row->jenis_anastesi; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-sm-3 col-form-label">Jenis Pembayaran
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" value="<?= j_pembayaran($row->jenis_pembayaran); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status
                    </label>
                    <div class="col-sm-6">
                        <?= status_operasi($row->status); ?>
                    </div>
                </div>

            </div>

            <?php if ($row->status == 3) { ?>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table-operasi">
                        <thead>
                            <tr>
                                <th>Lama Waktu Tunggu</th>
                                <th>Jam Operasi Sign In</th>
                                <th>Jam Operasi Time Out</th>
                                <th>Jam Operasi Sign Out</th>
                                <th>Petugas OK</th>
                                <th>Rencana Rawat</th>
                                <th>Implan</th>
                                <th>Status Pasien OK</th>
                                <th>Keterangan</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><?= $operasi->wkt_tunggu; ?></td>
                                <td class="text-center"><?= date('H:i', strtotime($operasi->jam_sign_in)); ?></td>
                                <td class="text-center"><?= date('H:i', strtotime($operasi->jam_time_out)); ?></td>
                                <td class="text-center"><?= date('H:i', strtotime($operasi->jam_sign_out)); ?></td>
                                <td><?= $operasi->petugas_ok; ?></td>
                                <td><?= $operasi->rencana_rawat; ?></td>
                                <td><?= $operasi->implan; ?></td>
                                <td class="text-center"><?= status_ok($operasi->status_pasien_ok); ?></td>
                                <td><?= $operasi->ket; ?></td>
                                <td class="text-center"><?= $operasi->created_at; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</section>