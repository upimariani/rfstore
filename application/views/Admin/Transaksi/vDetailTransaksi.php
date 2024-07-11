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
						<div class="row">
							<div class="col-md-6">
								<div class="text-muted">No Transaksi.</div>
								<strong><?= $detail['transaksi']->tgl_transaksi . $detail['transaksi']->id_transaksi ?></strong>
								<hr>
								<div class="text-muted">Customer</div>
								<strong>
									<?= $detail['transaksi']->nama_pelanggan ?>
								</strong>
								<p>

									<?= $detail['transaksi']->alamat_pengiriman ?>
								</p>
							</div>
							<div class="col-md-6 text-md-right">
								<div class="text-muted">Tanggal</div>
								<strong><?= $detail['transaksi']->tgl_transaksi ?></strong>

							</div>

						</div>
					</div>
					<div class="card-body">
						<hr class="my-4" />
						<div class="row mb-4">
							<div class="col-md-6">

							</div>
							<?php
							if ($detail['transaksi']->metode_pembayaran == '1') {
							?>
								<div class="col-md-6">
									<p>Pembayaran</p>
									<img style="width: 150px;" src="<?= base_url('asset/bukti-bayar/' . $detail['transaksi']->bukti_pembayaran) ?>">
								</div>
							<?php
							}
							?>


						</div>

						<table class="table table-sm">
							<thead>
								<tr>
									<th>Quantity</th>
									<th>Produk</th>
									<th>Harga</th>
									<th class="text-right">Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($detail['detail_transaksi'] as $key => $value) {
								?>
									<tr>
										<td><?= $value->qty ?></td>
										<td><?= $value->nama_produk ?></td>
										<td>Rp. <?= number_format($value->harga - (($value->disc / 100) * $value->harga))  ?></td>
										<td class="text-right">Rp. <?= number_format($value->qty * ($value->harga - (($value->disc / 100) * $value->harga)))  ?></td>
									</tr>
								<?php
								}
								?>


							</tbody>
							<tfoot>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Subtotal </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->total_transaksi) ?></th>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Shipping </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->ongkir) ?></th>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Total </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->total_pembayaran) ?></th>
								</tr>
							</tfoot>
						</table>

						<div class="text-center">
							<p class="text-sm">
								<strong>Extra note:</strong> Please send all items at the same time to the shipping address. Thanks in advance.
							</p>

							<button onclick="window.print()" class="btn btn-primary mb-3">
								Print this receipt
							</button>
							<?php
							if ($detail['transaksi']->stat_transaksi == '1') {
							?>
								<a href="<?= base_url('Admin/cTransaksi/konfirmasi/' . $detail['transaksi']->id_transaksi) ?>" class="btn btn-warning">Konfirmasi</a>
							<?php
							} else if ($detail['transaksi']->stat_transaksi == '2') {
							?>
								<a href="<?= base_url('Admin/cTransaksi/kirim/' . $detail['transaksi']->id_transaksi) ?>" class="btn btn-info">Pesanan Dikirim</a>

							<?php
							}
							?>
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
