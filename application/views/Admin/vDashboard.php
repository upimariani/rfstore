<!-- Sidebar chat end-->
<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<!-- Main content starts -->
	<div class="container-fluid">
		<div class="row">
			<div class="main-header">
				<h4>Dashboard</h4>
			</div>
		</div>
		<?php
		$user = $this->db->query("SELECT COUNT(id_user) as user FROM `user`")->row();
		$pelanggan = $this->db->query("SELECT COUNT(id_pelanggan) as pelanggan FROM `pelanggan`")->row();
		$transaksi = $this->db->query("SELECT SUM(total_transaksi) as total FROM `transaksi`")->row();
		$review = $this->db->query("SELECT COUNT(id_penilaian) as penilaian FROM `penilaian`")->row();
		?>
		<!-- 4-blocks row start -->
		<div class="row dashboard-header">
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>User</span>
					<h2 class="dashboard-total-products"><?= number_format($user->user) ?></h2>
					<span class="label label-warning">Sales</span>Arriving Today
					<div class="side-box">
						<i class="ti-signal text-warning-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Pelanggan</span>
					<h2 class="dashboard-total-products"><?= number_format($pelanggan->pelanggan) ?></h2>
					<span class="label label-primary">Views</span>View Today
					<div class="side-box ">
						<i class="ti-gift text-primary-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Transaksi</span>
					<h2 class="dashboard-total-products">Rp.<span><?= number_format($transaksi->total) ?></span></h2>
					<span class="label label-success">Sales</span>Reviews
					<div class="side-box">
						<i class="ti-direction-alt text-success-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Pelanggan Review</span>
					<h2 class="dashboard-total-products"><span><?= number_format($review->penilaian) ?></span></h2>
					<span class="label label-danger">Sales</span>Reviews
					<div class="side-box">
						<i class="ti-rocket text-danger-color"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- 4-blocks row end -->

		<!-- 1-3-block row start -->
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="user-block-2">
						<img class="img-fluid" src="<?= base_url('asset/quantam-lite/') ?>assets/images/widget/user-1.png" alt="user-header">
						<h5>Admin</h5>
						<h6>RFSTORE</h6>
					</div>
					<div class="card-block">
						<div class="user-block-2-activities">
							<div class="user-block-2-active">
								<i class="icofont icofont-clock-time"></i> User
								<label class="label label-primary"><?= number_format($user->user) ?></label>
							</div>
						</div>
						<div class="user-block-2-activities">
							<div class="user-block-2-active">
								<i class="icofont icofont-users"></i> Pelanggan Registered
								<label class="label label-primary"><?= number_format($pelanggan->pelanggan) ?></label>
							</div>
						</div>

						<div class="user-block-2-activities">
							<div class="user-block-2-active">
								<i class="icofont icofont-ui-user"></i> Transaksi
								<label class="label label-primary">Rp.<span><?= number_format($transaksi->total) ?></span></label>
							</div>

						</div>
						<div class="user-block-2-activities">
							<div class="user-block-2-active">
								<i class="icofont icofont-picture"></i> Penilaian
								<label class="label label-primary"><?= number_format($review->penilaian) ?></label>
							</div>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
								Follows
							</button>
							<button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
								Message
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h4>Informasi Pelanggan Level Member</h4>
					</div>
					<div class="card-block">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Level Member</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								$pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();
								foreach ($pelanggan as $key => $value) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->nama_pelanggan ?></td>
										<td><?= $value->alamat ?></td>
										<td><?php if ($value->level_member == '1') {
											?>
												<span class="badge badge-success">Member</span>
											<?php
											} else {
											?>
												<span class="badge badge-danger">Non Member</span>
											<?php
											} ?>
										</td>
									</tr>
								<?php
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
		<!-- 1-3-block row end -->

	</div>
	<!-- Main content ends -->
	<!-- Container-fluid ends -->
	<div class="fixed-button">
		<a href="#!" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	</div>
</div>
</div>
