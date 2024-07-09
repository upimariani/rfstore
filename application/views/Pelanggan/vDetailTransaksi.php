<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="<?= base_url('Pelanggan/cHome') ?>"><i class="fa fa-home"></i> Home</a>
					<span>Detail Pesanan</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
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
				<div class="shop__cart__table">

					<table>
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($transaksi['detail_transaksi'] as $key => $value) {
							?>
								<tr class="table_row">
									<td class="column-1">
										<div>
											<img style="width: 50px;" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?= $value->nama_produk ?></td>
									<td class="column-3">Rp. <?= number_format($value->harga)  ?></td>
									<td class="column-4">
										<?= $value->qty ?>
									</td>
									<td class="column-5">Rp. <?= number_format(($value->harga) * $value->qty)  ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cart__btn">
					<a href="<?= base_url('Pelanggan/cPesananSaya') ?>">Kembali</a>
					<?php
					if ($transaksi['transaksi']->bukti_payment == '0') {

					?>
						<a class="btn btn-danger" href="<?= base_url('Pelanggan/cPesananSaya/batalkan_pesanan/' . $transaksi['transaksi']->id_transaksi) ?>">Batalkan Pesanan</a>
					<?php
					}
					?>
					<?php
					if ($transaksi['transaksi']->stat_transaksi == '3') {
					?>
						<a class="btn btn-success" href="<?= base_url('Pelanggan/cPesananSaya/pesanan_diterima/' .  $transaksi['transaksi']->id_transaksi) ?>">Pesanan Diterima</a>
					<?php
					}
					?>
				</div>
			</div>
			<?php
			if ($transaksi['transaksi']->bukti_payment == '0') {
			?>
				<div class="col-lg-4 offset-lg-2">
					<?php echo form_open_multipart('Pelanggan/cPesananSaya/bayar/' . $transaksi['transaksi']->id_transaksi); ?>
					<div class="cart__total__procced">
						<h6>PEMBAYARAN</h6>
						<ul>
							<li>Nama BANK <span>BRI</span></li>
							<li>Atas Nama <span>RFSTORE</span></li>
							<li>No Rekening <span>033928-0091-02-1</span></li>
							<li>Total Pembayaran <span>Rp. <?= number_format($transaksi['transaksi']->total_pembayaran)  ?></span></li>
						</ul>
						<h5>Bukti Pembayaran</h5>
						<input type="file" class="form-control mb-4" name="gambar">
						<button type="submit" class="primary-btn">Proceed to payment</button>
					</div>
					</form>
				</div>
			<?php
			}
			?>
			<?php
			if ($kritik_saran->review == null && $kritik_saran->stat_transaksi == '4') {
			?>
				<div class="col-lg-4 offset-lg-2">
					<?php echo form_open_multipart('Pelanggan/cPesananSaya/kritik_saran/' . $transaksi['transaksi']->id_transaksi); ?>
					<div class="cart__total__procced">
						<h6>Kritik dan Saran</h6>
						<textarea name="kritik_saran" class="form-control mb-4" required></textarea>
						<button type="submit" class="btn btn-primary primary-btn">Kirim Kritik Saran</button>
					</div>
					</form>
				</div>
			<?php
			}
			?>
		</div>

	</div>
</section>
<!-- Shop Cart Section End -->
