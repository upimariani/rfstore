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
						<h5 class="card-header-text">Tambah Data Kupon</h5>
						<p>Silahkan tambah data kupon transaksi jika diperlukan.</p>
					</div>
					<form action="<?= base_url('Admin/cKupon/create') ?>" method="POST">
						<div class="card-block button-list">
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-abacus"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" id="name" name="nama" placeholder="Masukkan Nama Kupon" class="md-form-control" title="yourname" />
									<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
									<label>Nama Kupon</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-pen"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" id="name" name="deskripsi" placeholder="Masukkan Deskripsi" class="md-form-control" title="yourname" />
									<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
									<label>Deskripsi</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-mathematical-alt-1"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" id="name" name="potongan" placeholder="Masukkan Potongan Harga Transaksi" class="md-form-control" title="yourname" />
									<?= form_error('potongan', '<small class="text-danger">', '</small>') ?>
									<label>Potongan Harga Transaksi</label>
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
