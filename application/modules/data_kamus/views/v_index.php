<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title; ?> Kompentensi</h3>
            </div>
            <div class="card-body">

                <div class="card-body table-responsive p-0" style="height: 500px;">
                    <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table1">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Kompetensi</th>
                                <th>Element</th>
                                <th>Definisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row as $key => $data) {
                            ?>
                                <tr>
                                    <td style="width: 20px;"><?= $no++; ?></td>
                                    <td style="width: 100px;"><?= $data->kode_kompetensi; ?></td>
                                    <td style="white-space: normal !important; word-break: break-word !important; width: 100px;"><?= $data->element; ?></td>
                                    <td style="white-space: normal !important; word-break: break-word !important; "><?= $data->definisi; ?></td>
                                    <td class="text-center">
                                        <a href="<?= site_url('data_kamus/view/' . $data->id); ?>">
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