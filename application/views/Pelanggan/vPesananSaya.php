<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="contact__content">

					<div class="contact__form">
						<h5>PESANAN SAYA</h5>
						<table class="table">
							<tr>
								<th>Tanggal Transaksi</th>
								<th>Total Transaksi</th>
								<th>Ongkos Kirim</th>
								<th>Total Pembayaran</th>
								<th class="column-3">Pengiriman</th>
								<th>Status Order</th>

								<th></th>
							</tr>
							<?php
							foreach ($transaksi['transaksi'] as $key => $value) {
								if ($value->alamat_pengiriman != 'Transaksi Langsung') {

							?>
									<tr>

										<td><?= $value->tgl_transaksi ?></td>
										<td>Rp. <?= number_format($value->total_transaksi)  ?></td>
										<td>Rp. <?= number_format($value->ongkir)  ?> </td>
										<td>Rp. <?= number_format($value->total_pembayaran)  ?> </td>
										<td class="column-3"><small><?= $value->alamat_pengiriman ?>
											</small></td>
										<td><?php
											if ($value->stat_transaksi  == '0') {
												echo '<span class="badge badge-danger">Belum Bayar</span>';
											} else if ($value->stat_transaksi  == '1') {
												echo '<span class="badge badge-warning">Menunggu Konfirmasi</span>';
											} else if ($value->stat_transaksi  == '2') {
												echo '<span class="badge badge-info">Pesanan Diproses</span>';
											} else if ($value->stat_transaksi  == '3') {
												echo '<span class="badge badge-primary">Pesanan Dikirim</span>';
											} else if ($value->stat_transaksi  == '4') {
												echo '<span class="badge badge-success">Selesai</span>';
											}
											?>
										</td>

										<td><a href="<?= base_url('Pelanggan/cPesananSaya/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-warning">
												Detail Transaksi
											</a></td>
									</tr>
							<?php
								}
							}
							?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Contact Section End -->
