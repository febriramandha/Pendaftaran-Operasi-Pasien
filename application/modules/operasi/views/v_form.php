<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">RSUD dr. ACHMAD DARWIS</h3>
            </div>
            <?= form_open('operasi/process'); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama_pasien" class="col-sm-3 col-form-label">Nama Pasien
                    </label>
                    <div class="col-sm-6">
                        <input type="hidden" id="id_pasien" name="id_pasien" value="<?= $row->id; ?>">
                        <input type="text" class="form-control" id="nama_pasien" value="<?= $row->nama_pasien; ?>" name="nama_pasien" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_mr" class="col-sm-3 col-form-label">No Rekam Medis
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="no_mr" value="<?= $row->no_mr; ?>" name="no_mr" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wkt_tunggu" class="col-sm-3 col-form-label">Lama Waktu Tunggu <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="wkt_tunggu" name="wkt_tunggu" placeholder="Input Lama Waktu Tunggu" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam_sign_in" class="col-sm-3 col-form-label">Jam Operasi Sign In <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jam_sign_in" name="jam_sign_in" placeholder="Input Jam Operasi Sign In" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam_time_out" class="col-sm-3 col-form-label">Jam Operasi Time Out <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jam_time_out" name="jam_time_out" placeholder="Input Jam Operasi Time Out" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam_sign_out" class="col-sm-3 col-form-label">Jam Operasi Sign Out <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jam_sign_out" name="jam_sign_out" placeholder="Input Jam Operasi Sign Out" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="petugas_ok" class="col-sm-3 col-form-label">Petugas OK <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="petugas_ok" name="petugas_ok" placeholder="Input Petugas OK" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rencana_rawat" class="col-sm-3 col-form-label">Rencana Rawat <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="rencana_rawat" name="rencana_rawat" placeholder="Input Rencana Rawat" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="implan" class="col-sm-3 col-form-label">Implan <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="implan" name="implan" placeholder="Input Implan" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status_pasien_ok" class="col-sm-3 col-form-label">Status Pasien OK <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <select class="form-control js-basic-single" name="status_pasien_ok" id="status_pasien_ok">
                            <option selected disabled>Pilih</option>
                            <option value="1">Pasien Batal</option>
                            <option value="2">Penjadwalan Prioritas Tindakan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ket" class="col-sm-3 col-form-label">Keterangan <?= label_required(); ?>
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="ket" id="ket" placeholder="Input Keterangan"></textarea>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" id="submit" class="btn btn-primary" name="add"><i class="fas fa-save"></i> Simpan</button>
                    <a href="<?= base_url('/'); ?>" class="btn btn-danger">
                        <i class="fas fa-times-circle"></i> Batal
                    </a>
                </div>

                <?= form_close(); ?>

            </div>
        </div>
    </div>
</section>

<!-- clockpicker styles -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js"></script>

<script>
    $('#jam_sign_in').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
    });
    $('#jam_time_out').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
    });
    $('#jam_sign_out').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
    });
</script>