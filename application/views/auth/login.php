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
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-8 text-left mt-3 mb-5">
				<p class="text-uppercase font-weight-bold text-monospace h5">Selamat Datang Di Sisbangkom</p>
				<h1 class="hero-4-title"><b>Sistem Informasi Pengembangan Kompetensi</b> Kabupaten Agam</h1>
				<p class="text-muted h5">Wujudkan Pengembangan Kompetensi ASN Berbasis Teknologi Bersama <b>Sisbangkom.</b></p>
			</div>

			<div class="col-md-4 mb-5">
				<div class="login-box">
					<div class="card">
						<div class="card-body login-card-body">
							<h3 class="login-box-msg">Masuk SISBANGKOM</h3>
							<form action="<?= site_url('auth/proses'); ?>" method="post">
								<label for="username">Nomor Induk Pegawai</label>
								<div class="input-group mb-3">
									<input type="text" name="username" class="form-control" placeholder="Masukkan NIP" required autocomplete="off" autofocus>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-user"></span>
										</div>
									</div>
								</div>
								<label for="password">Kata Sandi</label>
								<div class="input-group mb-3">
									<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
									<div class="input-group-append">
										<span id="check" class="btn input-group-text"><i class="fa fa-eye"></i></span>
									</div>
								</div>
								<div class="row">
									<button type="submit" name="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in-alt"></i> Masuk</button>
								</div>
							</form>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/AdminLTE/'); ?>plugins/jquery/jquery.min.js"></script>

	<script>
		var eye = document.getElementById("check");
		var pass = document.getElementById("password");
		eye.onclick = function() {
			if (pass.type === 'password') {
				pass.type = 'text';
				eye.innerHTML = '<i class="fa fa-eye-slash"></i>';
			} else {
				pass.type = 'password'
				eye.innerHTML = '<i class="fa fa-eye"></i>';
			}
		}
	</script>

</body>

</html>