<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Chatting Pelanggan</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Chatting</a>
						</li>

					</ol>

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
						<h5 class="card-header-text">Informasi Chatting Pelanggan</h5>
						<p>Komunikasi antara <code>admin dan pelanggan</code></p>
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
							<div class="col-sm-12 ">
								<?php
								foreach ($pesan as $key => $value) {
									if ($value->pelanggan_send != '0') {
								?>
										<hr>
										<div class="media chat-messages">
											<a class="media-left photo-table" href="#!">
												<img class="media-object img-circle m-t-5" src="<?= base_url('asset/quantam-lite/') ?>assets/images/avatar-1.png" alt="Generic placeholder image">

											</a>
											<div class="media-body chat-menu-content">
												<div class="">
													<p class="chat-cont"><?= $value->pelanggan_send ?></p>
													<p class="chat-time text-danger"><?= $value->time ?></p>
												</div>
											</div>
										</div>
										<hr>
									<?php
									} else if ($value->admin_send != '0') {
									?>
										<div class="media chat-messages mt-3">
											<div class="media-body chat-menu-reply">
												<div class="">
													<p class="chat-cont"><?= $value->admin_send ?></p>
													<p class="chat-time"><?= $value->time ?></p>
												</div>
											</div>
											<div class="media-right photo-table">
												<a href="#!">
													<img class="media-object img-circle m-t-5" src="<?= base_url('asset/quantam-lite/') ?>assets/images/avatar-2.png" alt="Generic placeholder image">

												</a>
											</div>
										</div>
									<?php
									}
									?>


								<?php
								}
								?>




								<hr>


							</div>

						</div>
					</div>
					<div class="card-footer">
						<div class="col-lg-12">
							<form action="<?= base_url('Admin/cChatting/balas/' . $id_pelanggan) ?>" method="POST">

								<input type="text" name="pesan" class="md-form-control" id="inputEmail" name="inputEmail" placeholder="Enter Message...">
								<button type="submit" class="chat-send waves-effect waves-light">
									<i class="icofont icofont-location-arrow f-20 "></i>
								</button>
							</form>
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