<section class="content">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<a href="<?= site_url('pendaftaran'); ?>" class="nav-link" style="color: black;">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-hospital-user"></i></span>
						<div class="info-box-content">
							<h3 class="text-black">Pendaftaran Operasi Pasien</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter">23</h3>
						<p>Total Pegawai</p>
					</div>
					<div class="icon">
						<i class="fas fa-user-friends text-primary"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter">45</h3>
						<p>Total Pasien</p>
					</div>
					<div class="icon">
						<i class="fas fa-procedures text-success"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter">546</h3>
						<p>Total Dokter</p>
					</div>
					<div class="icon">
						<i class="fas fa-user-md text-danger"></i>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<script>
	$(document).ready(function() {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
</script>