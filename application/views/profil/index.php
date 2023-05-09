<section class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data <?= $this->title; ?></h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" value="<?= $profil->full_name; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="username" value="<?= $profil->username; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>