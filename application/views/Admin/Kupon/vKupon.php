<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Kupon</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Informasi Kupon</a>
						</li>

					</ol>
					<a href="<?= base_url('Admin/cKupon/create') ?>" class="btn btn-success btn-sm mt-3">Tambah Data Kupon</a>

				</div>
			</div>
		</div>
		<!-- Header end -->

		<!-- Tables start -->
		<!-- Row start -->
		<div class="row">
			<div class="col-sm-12">
				<!-- Basic Table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Informasi Kupon</h5>
						<p>Kupon yang tersedia di <code>RFSTORE</code></p>
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
								<table id="myTable" class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Kupon</th>
											<th>Deskripsi</th>
											<th>Potongan Harga Transaksi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($kupon as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_kupon ?></td>
												<td><?= $value->deskripsi_kupon ?></td>
												<td>Rp. <?= number_format($value->potongan_harga)  ?></td>
												<td> <a href="<?= base_url('Admin/cKupon/update/' . $value->id_kupon) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
														Perbaharui
													</a>
													<a href="<?= base_url('Admin/cKupon/delete/' . $value->id_kupon) ?>" class="btn btn-flat flat-danger txt-danger waves-effect waves-light">
														Hapus
													</a>
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
				<!-- Basic Table ends -->


			</div>
		</div>
		<!-- Row end -->
		<!-- Tables end -->
	</div>

	<!-- Container-fluid ends -->
</div>
</div>
