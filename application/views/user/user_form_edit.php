<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Users</h3>
            <div class="card-tools">
                <a href="<?= site_url('user'); ?>" class="btn btn-warning">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="hidden" name="user_id" value="<?= $row->userid; ?>">
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $this->input->post('fullname') ?? $row->full_name; ?>" placeholder="Input Nama" autocomplete="off" autofocus>
                                <?= form_error('fullname'); ?>
                            </div>
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $this->input->post('username') ?? $row->nip; ?>" placeholder="Input Username" autocomplete="off">
                                <?= form_error('username'); ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
                                <input type="password" class="form-control" id="password" name="password" value="<?= $this->input->post('password'); ?>" placeholder="Input Password" autocomplete="off">
                                <?= form_error('password'); ?>
                            </div>
                            <div class="form-group">
                                <label>Ulangi Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
                                <input type="password" class="form-control" id="passconf" name="passconf" value="<?= $this->input->post('passconf'); ?>" placeholder="Input Password" autocomplete="off">
                                <?= form_error('passconf'); ?>
                            </div>
                            <div class="form-group">
                                <label>Instansi * <?= $row->opd_id; ?></label>
                                <select class="form-control" name="unor" id="unor">
                                    <option value="">Pilih Instansi</option>
                                    <?php foreach ($unor as $opd) { ?>
                                        <option value="<?= $opd->id; ?>" <?= $row->unor_id == $opd->id ? 'selected' : null; ?>><?= $opd->nama_unor; ?></option>
                                    <?php } ?>
                                </select>
                                <?= form_error('level'); ?>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <?php $level = $this->input->post('level') ?? $row->level ?>
                                    <option value="1" <?= $level == 1 ? 'selected' : null; ?>>Super Admin</option>
                                    <option value="2" <?= $level == 2 ? 'selected' : null; ?>>Petugas OPD</option>
                                    <option value="3" <?= $level == 3 ? 'selected' : null; ?>>Varifikator</option>
                                </select>
                                <?= form_error('level'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Edit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>