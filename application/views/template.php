<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title; ?> | Pendaftaran Operasi RSUD Achmad Darwis</title>
    <link rel="shortcut icon" href="<?= base_url('assets/AdminLTE/'); ?>dist/img/logo/50kota.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="operasi, pendaftaran, pasien, rsud, 50kota, achmad darwis" />
    <meta name="description" content="Halaman Login Pendaftaran Operasi RSUD Achmad Darwis" />
    <meta name="author" content="Febri Ramandha, S.Kom" />
    <meta name="programmers" content="Febri Ramandha, S.Kom" />
    <meta name="company" content="Febri Ramandha, S.Kom" />
    <meta name="powered_by" content="Febri Ramandha, S.Kom" />
    <meta name="regency" content="Kabupaten 50 Kota" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>dist/css/adminlte.min.css">

    <!-- Select 2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .initial {
            align-items: center;
            display: flex;
            justify-content: center;
            font-size: 15px;
            border-radius: 50%;
            height: 2rem;
            width: 2rem;
            float: left;
            margin-right: 5px;
            margin-top: -5px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed <?= $this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null; ?>">
    <?php $lv_user = $this->fungsi->user_login()->level; ?>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-fixed">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifikasi</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Semua Notifikasi</a>
                    </div>
                </li>
                <!-- Profil -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img data-name="<?= $this->fungsi->user_login()->full_name; ?>" class="profile initial" />
                        <span class="text-uppercase font-weight-bold"><?= $this->fungsi->user_login()->full_name; ?></span>
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-2" style="min-width: 200px;">
                        <div class="text-center">
                            <span class="dropdown-item dropdown-header"><?= str_level($this->fungsi->user_login()->level); ?></span>
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('profil'); ?>" class="nav-link">
                                <p class="text-center black"><i class="fas fa-user"></i> Profil Saya</p>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="btn btn-primary btn-block" id="logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar navbar-white elevation-2">
            <!-- Brand Logo -->
            <a href="<?= site_url(''); ?>" class="brand-link navbar-white navbar-light">
                <div class="image">
                    <img src="<?= base_url('assets/AdminLTE/'); ?>dist/img/logo/50kota.png" alt="50 Kota Logo" class="brand-image">
                    <span class="brand-text font-weight-bold">Pendaftaran Operasi</span>
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2 mb-5">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MAIN NAVIGATION</li>
                        <li class="nav-item">
                            <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <?php
                        if ($lv_user == 1 || $lv_user == 3) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('pendaftaran') ?>" class="nav-link <?= $this->uri->segment(1) == 'pendaftaran' || $this->uri->segment(1) == '' ? 'active' : ''; ?>">
                                    <i class="nav-icon fas fa-hospital-user"></i>
                                    <p>Pendaftaran Operasi</p>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($lv_user == 1 || $lv_user == 2) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('jadwal') ?>" class="nav-link <?= $this->uri->segment(1) == 'jadwal' || $this->uri->segment(1) == '' ? 'active' : ''; ?>">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Jadwal Operasi</p>
                                </a>
                            </li>


                            <li class="nav-item <?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == 'kabko' ? 'menu-open' : ''; ?>">
                                <a href="#" class="nav-link <?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == '' ? 'text-primary' : ''; ?>">
                                    <i class="nav-icon fas fa-print"></i>
                                    <p>Laporan <i class="fas fa-angle-right right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('/'); ?>" class="nav-link <?= $this->uri->segment(1) == 'laporan' ? 'active' : ''; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pasien Operasi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php
                        if ($lv_user == 1) { ?>
                            <li class="nav-header">SETTING</li>
                            <li class="nav-item">
                                <a href="<?= site_url('user'); ?>" class="nav-link <?= $this->uri->segment(1) == 'user' ? 'active' : ''; ?>">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/jquery/jquery.min.js"></script>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $this->title; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
                                <li class="breadcrumb-item active"><?= $this->title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <?= $contents; ?>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer text-center">
            <strong>Copyright &copy; <?= date('Y'); ?> | Ns. Melly Elya Yeriza, S.Kep.</strong>
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>dist/js/adminlte.min.js"></script>

    <!-- CounterUp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- Initial JS for Avatar -->
    <script src="https://cdn.jsdelivr.net/npm/initial-js@0.3.4/dist/initial.min.js"></script>

    <!-- Select 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js" integrity="sha256-AFAYEOkzB6iIKnTYZOdUf9FFje6lOTYdwRJKwTN5mks=" crossorigin="anonymous"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>dist/js/custom.js"></script>
    <script>
        document.getElementById("logout").addEventListener("click", function() {
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Ingin Keluar Dari Aplikasi Ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Tidak',
                confirmButtonText: 'Ya, Keluar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?php echo base_url('auth/logout'); ?>';
                }
            })
        });
    </script>
</body>

</html>