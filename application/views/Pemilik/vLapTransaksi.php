<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Laporan Transaksi Pelanggan</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Informasi Transaksi</a>
						</li>

					</ol>



				</div>

			</div>
		</div>
		<!-- Header end -->

		<!-- Tables start -->
		<!-- Row start -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Cetak Laporan Transaksi</h4>
					</div>
					<form action="<?= base_url('Pemilik/cLapTransaksi/cetak_transaksi') ?>" method="POST">
						<div class="card-block">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Periode</label>
										<select name="periode" class="form-control">
											<option>---Pilih Bulan Transaksi---</option>
											<?php
											for ($i = 1; $i <= 12; $i++) {
											?>
												<option value="<?= $i ?>">Bulan ke - <?= $i ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<option>---Pilih Tahun---</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-sm mt-3">Print</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- Basic Table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Informasi Transaksi</h5>
					</div>
					<?php if ($this->session->userdata('success') != '') {
					?>
						<div class="alert alert-success" role="alert">
							<?= $this->session->userdata('success') ?>
						</div>
					<?php
					} ?>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Pelanggan</th>
											<th>Tanggal Transaksi</th>
											<th>Total Pembayaran</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($transaksi as $key => $value) {
											if ($value->stat_transaksi == '4') {
										?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $value->nama_pelanggan ?></td>
													<td><?= $value->tgl_transaksi ?></td>
													<td>Rp. <?= number_format($value->total_transaksi)  ?></td>

												</tr>
										<?php
											}
										}
										?>



									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Basic Table ends -->


			</div>
		</div>
		<!-- Row end -->
		<!-- Tables end -->
	</div>

	<!-- Container-fluid ends -->
</div>
</div>
