<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">RSUD dr. ACHMAD DARWIS</h3>
            </div>
            <? //= form_open('operasi/process'); 
            ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="wkt_tunggu" class="col-sm-3 col-form-label">Lama Waktu Tunggu <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="wkt_tunggu" name="wkt_tunggu" placeholder="Input Lama Waktu Tunggu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sign_in" class="col-sm-3 col-form-label">Jam Operasi Sign In <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sign_in" name="sign_in" placeholder="Input Jam Operasi Sign In" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="time_out" class="col-sm-3 col-form-label">Jam Operasi Time Out <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="time_out" name="time_out" placeholder="Input Jam Operasi Time Out" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sign_out" class="col-sm-3 col-form-label">Jam Operasi Sign Out <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sign_out" name="sign_out" placeholder="Input Jam Operasi Sign Out">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="petugas_ok" class="col-sm-3 col-form-label">Petugas OK <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="petugas_ok" name="petugas_ok" placeholder="Input Petugas OK">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rencana_rawat" class="col-sm-3 col-form-label">Rencana Rawat <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="rencana_rawat" name="rencana_rawat" placeholder="Input Rencana Rawat" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="implan" class="col-sm-3 col-form-label">Implan <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="implan" name="implan" placeholder="Input Implan" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ket" class="col-sm-3 col-form-label">Keterangan <span class="text-red">*</span>
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="ket" id="ket" placeholder="Input Keterangan"></textarea>
                    </div>
                </div>

                <? //= form_close(); 
                ?>
                <div class="card-footer">
                    <button type="submit" id="submit" class="btn btn-primary" name="add" onclick="btnSementara()"><i class="fas fa-save"></i> Simpan</button>
                    <a href="<?= base_url('/'); ?>" class="btn btn-danger">
                        <i class="fas fa-times-circle"></i> Batal
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    function btnSementara() {
        Swal.fire({
            text: "Yakin ingin simpan data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Terima'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('jadwal/'); ?>";
            }
        })
    }
</script>