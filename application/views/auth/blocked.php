<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Sistem Informasi Pengembangan Kompetensi Kabupaten Agam</title>
    <link rel="shortcut icon" href="<?= base_url('assets/AdminLTE/'); ?>dist/img/logo/agam.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="sisbangkom, pengembangan, kompetensi, agam, pengembangan kompetensi agam" />
    <meta name="description" content="Halaman Login Sistem Informasi Pengembangan Kompetensi Kabupaten Agam" />
    <meta name="author" content="Dinas Komunikasi dan Informatika Kabupaten Agam" />
    <meta name="programmers" content="Febri Ramandha, S.Kom" />
    <meta name="company" content="Dinas Komunikasi dan Informatika Kabupaten Agam" />
    <meta name="powered_by" content="Dinas Komunikasi dan Informatika Kabupaten Agam" />
    <meta name="regency" content="Kabupaten Agam" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>dist/css/adminlte.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<style>
    .bglogin {
        background-image: url("<?= base_url('assets/AdminLTE/'); ?>dist/img/hero-4-bg-img.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-color: #ffffff;
    }
</style>

<body class="login-page bglogin">
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-danger"> 403</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Sepertinya Anda Tersesat.</h3>
                <p>
                    Anda Tidak Memiliki Akses di dalam sistem kami.
                </p>
                <a href="<?= base_url(); ?>" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt"></i> Kembali</a>
            </div>

        </div>

    </section>


    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/jquery/jquery.min.js"></script>

</body>

</html>