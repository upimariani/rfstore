<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Produk</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Informasi Produk</a>
						</li>

					</ol>
					<a href="<?= base_url('Admin/cProduk/create') ?>" class="btn btn-success btn-sm mt-3">Tambah Data Produk</a>

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
						<h5 class="card-header-text">Informasi Produk</h5>
						<p>Produk yang tersedia di <code>RFSTORE</code></p>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table id="myTable" class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Produk</th>
											<th>Harga</th>
											<th>Kategori Produk</th>
											<th>Stok</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($produk as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td>
													<img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>">
													<h6 class="mt-4"><?= $value->nama_produk ?></h6>
													<strong>Keterangan: </strong><?= $value->keterangan ?><br>
													<strong>Deskripsi: </strong><?= $value->deskripsi ?>
												</td>
												<td>Rp. <?= number_format($value->harga)  ?></td>
												<td><?= $value->kategori_produk ?></td>
												<td><?= number_format($value->stok) ?></td>
												<td> <a href="<?= base_url('Admin/cProduk/update/' . $value->id_produk) ?>" class="btn btn-flat flat-warning txt-warning waves-effect waves-light">
														Perbaharui
													</a>
													<a href="<?= base_url('Admin/cProduk/delete/' . $value->id_produk) ?>" class="btn btn-flat flat-danger txt-danger waves-effect waves-light">
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
