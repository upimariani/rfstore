<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Diskon</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Informasi Diskon</a>
						</li>

					</ol>

				</div>
			</div>
		</div>
		<!-- Header end -->

		<!-- Tables start -->
		<!-- Row start -->
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Tambah Data Diskon</h5>
						<p>Silahkan tambah data diskon produk yang diperlukan.</p>
					</div>
					<form action="<?= base_url('Admin/cDiskon/create') ?>" method="POST">
						<div class="card-block button-list">
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-barcode"></i>
								</span>
								<div class="md-input-wrapper">
									<select name="produk" class="md-form-control">
										<option value="">---Pilih Produk Diskon---</option>
										<?php
										foreach ($produk as $key => $value) {
										?>
											<option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
										<?php
										}
										?>

									</select>
									<label>Nama Produk</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-marker"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" name="nama" id="name" class="md-form-control" placeholder="Masukkan Nama Diskon" title="yourname" />
									<label>Nama Diskon</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-mathematical-alt-1"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" name="diskon" id="name" class="md-form-control" placeholder="Masukkan Besar Diskon" title="yourname" />
									<label>Besar Diskon</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
							</button>
						</div>
					</form>
				</div>
				<!-- end of card -->
			</div>
		</div>
		<!-- Row end -->
		<!-- Tables end -->
	</div>

	<!-- Container-fluid ends -->
</div>
</div>
