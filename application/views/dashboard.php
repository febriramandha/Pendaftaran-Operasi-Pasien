<section class="content">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter"><?= $total_pegawai->total; ?></h3>
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
						<h3 class="counter"><?= $total_jabatan_unor->total; ?></h3>
						<p>Total Jabatan Organisasi</p>
					</div>
					<div class="icon">
						<i class="fas fa-sitemap text-success"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter">1536</h3>
						<p>Total Kelompok Jabatan</p>
					</div>
					<div class="icon">
						<i class="fas fa-layer-group text-danger"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner pl-3">
						<h3 class="counter">15</h3>
						<p>Total Kompetensi</p>
					</div>
					<div class="icon">
						<i class="fas fa-handshake text-warning"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="small-box bg-white">
					<div class="inner">
						<h3 class="counter">6</h3>
						<p>Total Asesmen</p>
					</div>
					<div class="icon">
						<i class="fas fa-cubes text-info"></i>
					</div>
				</div>
			</div>


			<div class="col-md-8 col-sm-6 col-xs-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"><b>Pengumuman</b></h3>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Panduan Penggunaan Aplikasi</h5>
								<small>3 days ago</small>
							</div>
							<p class="mb-1">Silahkan <span class="text-primary">Klik Disini</span> untuk melihat panduan penggunaan aplikasi SISBANGKOM.</p>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col-xl-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
					<div class="card-body">
						<p class="card-text h4">Wujudkan Pengembangan Kompetensi ASN Berbasis Teknologi Bersama <b>SISBANGKOM</b>.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
			// $array = '{1,2,3,4,5}';
			// $level = pg_to_array($array);
			// if (in_array(3, $level) == TRUE) {
			// 	echo "Terdapat Angka Tiga <br>";
			// } else {
			// 	echo "Tidak ada Angka Tiga <br>";
			// }

			// $this->db->select('*');
			// $this->db->from('_acl');
			// $this->db->where('status', 1);
			// $this->db->where('title !=', null);
			// $this->db->order_by('position', 'ASC');
			// $query = $this->db->get();
			// $result = $query->result();

			// foreach ($result as $row) {
			// 	$lv_user = $this->fungsi->user_login()->level;
			// 	$lv = pg_to_array($row->level);

			// 	if (in_array($lv_user, $lv) == TRUE && !empty($row->title)) {
			// 		echo $row->id . $row->title . "<br>";
			// 	}
			// }
			?>
			<!-- <ul> -->
			<?php foreach (sidebar_dinamis() as $menu_side) : ?>
				<!-- <li class="nav-item"> -->
				<!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
				<!-- <p> -->
				<?php
				$lv_user = $this->fungsi->user_login()->level;
				$lv = pg_to_array($menu_side->level);
				// echo $lv;
				// $no = 1;
				// if (in_array(3, $lv) == TRUE) {
				// 	echo $no++ . '-' . $menu_side->id . '-' . $menu_side->title;
				// }
				// if (in_array(3, $lv) == TRUE) {
				// if ($menu_side->title != NULL) {
				// 	echo $menu_side->id . $menu_side->title . '-' . in_array(3, $lv);
				// }
				// }
				?>
				<!-- </p>
					</li> -->
			<?php endforeach; ?>
			<!-- </ul> -->
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