<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">RSUD dr. ACHMAD DARWIS</h3>
            </div>
            <?= form_open('pendaftaran/process'); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="tgl_operasi" class="col-sm-3 col-form-label">Tanggal Operasi <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tgl_operasi" name="tgl_operasi" placeholder="Input Tanggal Operasi">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_pasien" class="col-sm-3 col-form-label">Nama Pasien <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Input Nama Pasien" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_mr" class="col-sm-3 col-form-label">No Rekam Medis <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="no_mr" name="no_mr" placeholder="Input No Rekam Medis" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Input Tanggal Lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-sm-3 col-form-label">Umur <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="1">
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="2">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ruangan" class="col-sm-3 col-form-label">Nama Ruangan <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Input Nama Ruangan" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnosa" class="col-sm-3 col-form-label">Diagnosa <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="Input Diagnosa" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rencana_tindakan" class="col-sm-3 col-form-label">Rencana Tindakan <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="rencana_tindakan" name="rencana_tindakan" placeholder="Input Rencana Tindakan" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dpjp_operator" class="col-sm-3 col-form-label">Nama DPJP/ Operator <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="dpjp_operator" name="dpjp_operator" placeholder="Input Nama DPJP/ Operator" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_anastesi" class="col-sm-3 col-form-label">Jenis Anastesi <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_anastesi" name="jenis_anastesi" placeholder="Input Jenis Anastesi" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-sm-3 col-form-label">Jenis Pembayaran <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <select class="form-control js-basic-single" name="jenis_pembayaran" id="jenis_pembayaran" data-placeholder="Pilih Jenis Pembayaran">
                            <option value="">Pilih Jenis Pembayaran</option>
                            <option value="1">BPJS</option>
                            <option value="2">UMUM</option>
                            <option value="3">JAMPERSAL</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <!-- <span class="spinner-border spinner-border-sm text-white mr-2" id="spinner-status" role="status"></span> -->
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

<script>
    $(document).ready(function() {
        $("#tgl_lahir").change(function() {
            var dob = new Date($(this).val());
            var today = new Date();
            var ageInMilliseconds = today - dob;
            var ageDate = new Date(ageInMilliseconds);
            var years = ageDate.getUTCFullYear() - 1970;
            var months = ageDate.getUTCMonth();
            var days = ageDate.getUTCDate() - 1;
            $("#umur").val(years + " tahun, " + months + " bulan, " + days + " hari");
        });
    });

    // $(document).ready(function() {
    //     $("#tgl_lahir").change(function() {
    //         var dob = new Date($(this).val());
    //         var today = new Date();
    //         var year = 0;
    //         console.log(today);

    //         if (today.getMonth() < dob.getMonth()) {
    //             year = 1;
    //         } else if ((today.getMonth() == dob.getMonth()) && today.getDate() < dob.getDate()) {
    //             year = 1;
    //         }

    //         var age = today.getFullYear() - dob.getFullYear() - year;

    //         if (age < 0) {
    //             age = 0;
    //         }
    //         $("#umur").val(dob);
    //     });
    // });
</script>