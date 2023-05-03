<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User
                    <small>Pengguna</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
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
                    <? //= validation_errors(); 
                    ?>
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name; ?>" placeholder="Input Nama" autocomplete="off" autofocus>
                                <?= form_error('fullname'); ?>
                            </div>
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $this->input->post('username') ?? $row->username; ?>" placeholder="Input Username" autocomplete="off">
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
                                <label>Alamat</label>
                                <textarea class="form-control" name="address"><?= $this->input->post('address') ?? $row->address; ?></textarea>
                                <?= form_error('addres'); ?>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <?php $level = $this->input->post('level') ?? $row->level ?>
                                    <option value="1">Admin</option>
                                    <option value="2" <?= $level == 2 ? 'selected' : null; ?>>Petugas</option>
                                </select>
                                <?= form_error('level'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>