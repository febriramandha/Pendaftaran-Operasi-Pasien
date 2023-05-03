<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lihat <?= $this->title; ?></h3>
            </div>
            <div class="card-body">

                <ul class="nav nav-tabs mb-5" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="content-kompetensi-tab" data-toggle="pill" href="#content-kompetensi" role="tab" aria-controls="content-kompetensi" aria-selected="true">Kompetensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="content-kamus-tab" data-toggle="pill" href="#content-kamus" role="tab" aria-controls="content-kamus" aria-selected="false">Kamus</a>
                    </li>
                </ul>

                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="content-kompetensi" role="tabpanel" aria-labelledby="content-kompetensi-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="font-weight-bold">Kategori Kompetensi <?= $row->komp_id; ?></p>
                            </div>
                            <div class="col-md-9">
                                <p><?= $row->nama_skj; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="font-weight-bold">Element Kompetensi</p>
                            </div>
                            <div class="col-md-9">
                                <p><?= $row->element; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="font-weight-bold">Kode Kompetensi</p>
                            </div>
                            <div class="col-md-9">
                                <p><?= $row->kode_kompetensi; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="font-weight-bold">Definisi Kompetensi</p>
                            </div>
                            <div class="col-md-9">
                                <p><?= $row->definisi; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="font-weight-bold">Status</p>
                            </div>
                            <div class="col-md-9">
                                <p><?= str_status($row->sts_komp); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="content-kamus" role="tabpanel" aria-labelledby="content-kamus-tab">
                        <table class="table table-bordered table-hover text-nowrap table-head-fixed" id="table_lv">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10px">#</th>
                                    <th>Kode Level</th>
                                    <th>Deskripsi Kamus</th>
                                    <th>Indikator</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($lv_kamus as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td style="width: 100px;">
                                            <?= $data->kode_level; ?><br>
                                            <?= str_status($data->status); ?>
                                        </td>
                                        <td style="white-space: normal !important; word-break: break-word !important; width: 350px;"><?= $data->deskripsi_kamus; ?></td>
                                        <td style="white-space: normal !important; word-break: break-word !important;">
                                            <?php
                                            foreach ($data->indikator_level as $sub_data) { ?>
                                                <ul>
                                                    <?php
                                                    if ($sub_data->level_kamus_id) {
                                                        echo "<li>$sub_data->indikator " . str_status($sub_data->status) . "</li>";
                                                    } else {
                                                        echo "Data Kosong";
                                                    } ?>
                                                </ul>
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
    </div>
</section>