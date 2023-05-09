<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add User</h3>
            <div class="card-tools">
                <a href="<?= site_url('user'); ?>" class="btn btn-warning">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="alert" style="background-color: #dcedfc;" role="alert">
                <span><i class="fas fa-info-circle"></i></span> Informasi <br>
                <p>Password di generate secara otomatis oleh sistem yaitu <b>sisbangkom_pass</b></p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <form action="<?= site_url('user/process'); ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Input Nama" autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Input Username" autocomplete="off">
                                <?= form_error('username'); ?>
                            </div>
                            <div class="form-group">
                                <label>Instansi *</label>
                                <select class="form-control" name="unor" id="unor">
                                    <option value="">Pilih Instansi</option>
                                    <?php foreach ($unor as $opd => $data) { ?>
                                        <option value="<?= $data->id; ?>"><?= $data->nama_unor; ?></option>
                                    <?php } ?>
                                </select>
                                <?= form_error('level'); ?>
                            </div>
                            <div class="form-group">
                                <label>Level *</label>
                                <select class="form-control" name="level" id="level">
                                    <option value="">- Pilih -</option>
                                    <option value="1" <?= set_value('level') == 1 ? "selected" : null; ?>>Super Admin</option>
                                    <option value="2" <?= set_value('level') == 2 ? "selected" : null; ?>>Petugas OPD</option>
                                    <option value="3" <?= set_value('level') == 3 ? "selected" : null; ?>>Varifikator</option>
                                </select>
                                <?= form_error('level'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="<?= $page; ?>" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>