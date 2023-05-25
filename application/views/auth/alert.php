<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Operasi RSUD Achmad Darwis</title>
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

    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE/'); ?>dist/css/adminlte.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/jquery/jquery.min.js"></script>
    <script>
        Swal.fire({
            icon: '<?= $icon; ?>',
            title: '<?= $judul_alert; ?>',
            text: '<?= $text_alert; ?>',
            showConfirmButton: false,
            timer: 2500
        }).then((result) => {
            window.location.href = '<?= base_url($url); ?>';
        });
    </script>

    <!-- jQuery -->
    <script src="<?= base_url('assets/AdminLTE/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/AdminLTE/'); ?>dist/js/adminlte.min.js"></script>

</body>

</html>