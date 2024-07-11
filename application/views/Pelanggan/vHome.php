<!-- Categories Section Begin -->
<section class="categories">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="categories__item categories__large__item set-bg" data-setbg="<?= base_url('asset/1.jpg') ?>">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/5.jpg') ?>">
							<div class="categories__text">
								<!-- <h4 class="text-light">Pakaian Laki - Laki</h4> -->
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/2.jpg') ?>">
							<div class="categories__text">
								<!-- <h4>Pakaian Wanita</h4> -->
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/3.jpg') ?>">
							<div class="categories__text">
								<!-- <h4 class="text-light">Pakaian Muslim</h4> -->
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 p-0">
						<div class="categories__item set-bg" data-setbg="<?= base_url('asset/4.jpg') ?>">
							<div class="categories__text">
								<!-- <h4 class="text-light">Bayi</h4> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="section-title">
					<h4>New product</h4>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<ul class="filter__controls">
					<li class="active" data-filter="*">All</li>


				</ul>
			</div>

		</div>
		<?php
		if ($this->session->userdata('success') != '') {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<div class="alert-icon">
					<i class="zmdi zmdi-notifications-none"></i>
				</div>
				<div class="alert-message">
					<span><strong>Success!</strong> <?= $this->session->userdata('success') ?></span>
				</div>
			</div>
		<?php
		}
		?>
		<div class="row property__gallery">
			<?php
			foreach ($produk as $key => $value) {

			?><div class="col-lg-3 col-md-4 col-sm-6 mix ">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->foto) ?>">


							<ul class="product__hover">
								<li><a href="<?= base_url('asset/foto-produk/' . $value->foto) ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
								<li><a href="<?= base_url('Pelanggan/cCart/add_to_cart/' . $value->id_produk) ?>"><span class="icon_bag_alt"></span></a></li>
								<li><a href="<?= base_url('Pelanggan/cHome/detail_produk/' . $value->id_produk) ?>"><span class="icon_info"></span></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6><a href="#"><?= $value->nama_produk ?></a></h6>

							<div class="product__price">
								<?php
								if ($this->session->userdata('level') == '1') {
								?>
									Rp. <?= number_format($value->harga - ($value->harga * ($value->disc / 100)), 0); ?>
								<?php
								} else {
								?>
									Rp. <?= number_format($value->harga); ?>
								<?php
								}
								?>
								<?php
								if ($value->disc && $this->session->userdata('level') == '1') {
								?>
									<del>Rp. <?= number_format($value->harga, 0)  ?></del>
								<?php
								}
								?>



							</div>
						</div>
					</div>
				</div>

			<?php
			}
			?>

		</div>
	</div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-8 m-auto">
				<div class="banner__slider owl-carousel">
					<?php
					foreach ($kritik_saran as $key => $value) {
					?>
						<div class="banner__item">
							<div class="banner__text">
								<span>STYLE</span>
								<h1>RFSTORE</h1>
								<p><?= $value->nama_pelanggan ?> | <?= $value->tgl_transaksi ?></p>
								<a href="#"><?= $value->review ?></a>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->