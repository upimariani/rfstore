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
						<h5 class="card-header-text">Perbaharui Data Produk</h5>
						<p>Silahkan perbaharui data produk yang diperlukan.</p>
					</div>
					<?php echo form_open_multipart('admin/cproduk/update/' . $produk->id_produk); ?>
					<div class="card-block button-list">
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-barcode"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" value="<?= $produk->nama_produk ?>" name="nama" id="name" class="md-form-control" title="yourname" />
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
								<label>Nama Produk</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-table"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" name="deskripsi" value="<?= $produk->deskripsi ?>" id="name" class="md-form-control" title="yourname" />
								<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
								<label>Deskripsi</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-stamp"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" name="keterangan" id="name" value="<?= $produk->keterangan ?>" class="md-form-control" title="yourname" />
								<?= form_error('keterangan', '<small class="text-danger">', '</small>') ?>
								<label>Keterangan</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-coins"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" id="name" name="harga" value="<?= $produk->harga ?>" class="md-form-control" title="yourname" />
								<?= form_error('harga', '<small class="text-danger">', '</small>') ?>
								<label>Harga</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-square-left"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" id="name" name="kategori" value="<?= $produk->kategori_produk ?>" class="md-form-control" title="yourname" />
								<?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
								<label>Kategori Produk</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-paper-clip"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="text" id="name" name="stok" value="<?= $produk->stok ?>" class="md-form-control" title="yourname" />
								<?= form_error('stok', '<small class="text-danger">', '</small>') ?>
								<label>Stok</label>
							</div>
						</div>
						<div class="md-group-add-on">
							<span class="md-add-on">
								<i class="icofont icofont-multimedia"></i>
							</span>
							<div class="md-input-wrapper">
								<input type="file" id="name" name="gambar" class="md-form-control" title="yourname" />

								<label>Gambar</label>
								<img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $produk->foto) ?>">

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
