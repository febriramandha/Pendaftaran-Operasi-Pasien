<div class="card-body table-responsive p-0">
    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nama Pegawai</th>
                <th>Instansi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
                <tr>
                    <td><?= $no++; ?>.</td>
                    <td>
                        <?= users_icon_datatables(gelar_nama($data->gelar_depan, $data->nama_pegawai, $data->gelar_blkng), $data->nip); ?>
                    </td>
                    <td><?= instansi_icon_datatables($data->nama_unor, $data->nama_jabatan); ?></td>
                    <td class="text-center"><?= str_status($data->stat_peg); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
        })
    });
</script>