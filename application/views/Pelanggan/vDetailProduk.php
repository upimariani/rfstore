<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="<?= base_url('Pelanggan/cHome') ?>"><i class="fa fa-home"></i> Home</a>
					<a href="#">Produk </a>
					<span>Detail Produk</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="product__details__pic">
					<div class="product__details__pic__left product__thumb nice-scroll">
						<a class="pt active" href="#product-1">
							<img src="<?= base_url('asset/foto-produk/' . $produk->foto)  ?>" alt="">
						</a>

					</div>
					<div class="product__details__slider__content">
						<div class="product__details__pic__slider owl-carousel">
							<img data-hash="product-1" class="product__big__img" src="<?= base_url('asset/foto-produk/' . $produk->foto)  ?>" alt="">

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product__details__text">
					<h3><?= $produk->nama_produk ?> </h3>
					<div class="rating">
						<!-- <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i> -->
						<span>( Stok: <?= $produk->stok ?> )</span>
					</div>
					<div class="product__details__price">Rp. <?= number_format($produk->harga - ($produk->harga * ($produk->disc / 100)), 0)  ?>
						<del><?= number_format($produk->harga) ?></del>
					</div>
					<p><?= $produk->deskripsi ?></p>


				</div>
			</div>
			<div class="col-lg-12">
				<div class="product__details__tab">
					<ul class="nav nav-tabs" role="tablist">

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews</a>
						</li>
					</ul>
					<div class="tab-content">

						<div class="tab-pane active" id="tabs-3" role="tabpanel">

							<?php
							foreach ($penilaian as $key => $value) {
							?>
								<p><strong><?= $value->nama_pelanggan ?></strong> <?= $value->tgl_transaksi ?> | <?= $value->nama_produk ?></p>

								<p>"<?= $value->review ?>"</p>
							<?php
							}
							?>


						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
<!-- Product Details Section End -->
