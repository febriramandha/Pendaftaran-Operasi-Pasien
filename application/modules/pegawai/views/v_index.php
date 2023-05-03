<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <select class="form-control js-basic-single" name="unor" id="unor" data-placeholder="Pilih Instansi">
                            <option value="0">Tampilkan Semua Instansi</option>
                            <?php foreach ($unor as $opd => $data) { ?>
                                <option value="<?= $data->id; ?>"><?= $data->nama_unor; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div id="tampil_data"></div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        unor();
        $("#unor").change(function() {
            unor();
        });
    });

    function unor() {
        var unor = $("#unor").val();

        $.ajax({
            url: "<?php echo base_url('pegawai/load_peg'); ?>",
            data: "unor=" + unor,
            success: function(data) {
                $("#tampil_data").html(data);
            },
        });
    }
</script>