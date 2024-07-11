<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<!-- Main content starts -->

		<!-- Header starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Informasi Transaksi</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#"> Table</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Transaksi</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- Header ends -->



		<!-- row start -->
		<div class="row">


			<!-- Color Open Accordion start -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">TRANSAKSI PELANGGAN</h5>
						<?php if ($this->session->userdata('success') != '') {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						} ?>
					</div>
					<div class="card-block accordion-block">

						<div class="color-accordion" id="color-accordion">
							<a class="accordion-msg bg-danger b-none">Informasi Transaksi Belum Bayar</a>
							<div class="accordion-desc">
								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">Informasi Transaksi</h5>
										<p>Transaksi Pelanggan <code>RFSTORE</code></p>
									</div>
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
															<th>Detail</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														foreach ($transaksi as $key => $value) {
															if ($value->stat_transaksi == '0') {
														?>
																<tr>
																	<td><?= $no++ ?></td>
																	<td><?= $value->nama_pelanggan ?></td>
																	<td><?= $value->tgl_transaksi ?></td>
																	<td>Rp. <?= number_format($value->total_transaksi)  ?></td>
																	<td><a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
																			View Transaksi Produk
																		</a></td>
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
							</div>
							<a class="accordion-msg  bg-info b-none">Informasi Transaksi Menunggu Konfirmasi Admin</a>
							<div class="accordion-desc">
								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">Informasi Transaksi</h5>
										<p>Transaksi Pelanggan <code>RFSTORE</code></p>
									</div>
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
															<th>Detail</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														foreach ($transaksi as $key => $value) {
															if ($value->stat_transaksi == '1') {
														?>
																<tr>
																	<td><?= $no++ ?></td>
																	<td><?= $value->nama_pelanggan ?></td>
																	<td><?= $value->tgl_transaksi ?></td>
																	<td>Rp. <?= number_format($value->total_transaksi)  ?></td>
																	<td><a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
																			View Transaksi Produk
																		</a></td>
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
							</div>
							<a class="accordion-msg bg-warning b-none">Informasi Transaksi Sedang Diproses</a>
							<div class="accordion-desc">
								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">Informasi Transaksi</h5>
										<p>Transaksi Pelanggan <code>RFSTORE</code></p>
									</div>
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
															<th>Detail</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														foreach ($transaksi as $key => $value) {
															if ($value->stat_transaksi == '2') {
														?>
																<tr>
																	<td><?= $no++ ?></td>
																	<td><?= $value->nama_pelanggan ?></td>
																	<td><?= $value->tgl_transaksi ?></td>
																	<td>Rp. <?= number_format($value->total_transaksi)  ?></td>
																	<td><a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
																			View Transaksi Produk
																		</a></td>
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
							</div>
							<a class="accordion-msg bg-success b-none">Informasi Transaksi Sedang Dikirim</a>
							<div class="accordion-desc">
								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">Informasi Transaksi</h5>
										<p>Transaksi Pelanggan <code>RFSTORE</code></p>
									</div>
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
															<th>Detail</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														foreach ($transaksi as $key => $value) {
															if ($value->stat_transaksi == '3') {
														?>
																<tr>
																	<td><?= $no++ ?></td>
																	<td><?= $value->nama_pelanggan ?></td>
																	<td><?= $value->tgl_transaksi ?></td>
																	<td>Rp. <?= number_format($value->total_transaksi)  ?></td>
																	<td><a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
																			View Transaksi Produk
																		</a></td>
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
							</div>
							<a class="accordion-msg bg-primary b-none">Informasi Transaksi Selesai Diterima Pelanggan</a>
							<div class="accordion-desc">
								<div class="card">
									<div class="card-header">
										<h5 class="card-header-text">Informasi Transaksi</h5>
										<p>Transaksi Pelanggan <code>RFSTORE</code></p>
									</div>
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
															<th>Detail</th>
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
																	<td><a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
																			View Transaksi Produk
																		</a></td>
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Color Open Accordion ends -->
		</div>
		<!-- Row end -->

		<!-- Main content ends -->
	</div>
	<!-- Container-fluid ends -->
</div>
</div>
