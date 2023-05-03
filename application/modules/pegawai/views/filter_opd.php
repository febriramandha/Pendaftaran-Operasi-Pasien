<div class="card-body table-responsive p-0">
    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table_peg">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nama Pegawai</th>
                <th>Instansi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#table_peg').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?= site_url('pegawai/get_ajax') ?>',
                type: 'POST'
            },
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
        });
    });
</script>