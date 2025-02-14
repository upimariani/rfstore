<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="<?= base_url('Pelanggan/cHome') ?>"><i class="fa fa-home"></i> Home</a>
					<span>Chatting</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="blog__details__content">


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
						</div>
					</div>
					<div class="blog__details__comment">
						<h5>Chatting</h5>
						<a href="#" class="leave-btn">Leave a chatting</a>

						<?php
						foreach ($pesan as $key => $value) {
							if ($value->pelanggan_send != '0') {
						?>
								<div class="blog__comment__item">
									<div class="blog__comment__item__pic">
										<img src="<?= base_url('asset/ashion-master/') ?>img/blog/details/comment-3.jpg" alt="">
									</div>
									<div class="blog__comment__item__text">
										<h6><?= $value->nama_pelanggan ?></h6>
										<p><?= $value->pelanggan_send ?></p>
										<ul>
											<li><i class="fa fa-clock-o"></i> <?= $value->time ?></li>

										</ul>
									</div>
								</div>
							<?php
							} else if ($value->admin_send != '0') {
							?>
								<div class="blog__comment__item blog__comment__item--reply">
									<div class="blog__comment__item__pic">
										<img src="<?= base_url('asset/ashion-master/') ?>img/blog/details/comment-1.jpg" alt="">
									</div>
									<div class="blog__comment__item__text">
										<h6>Admin</h6>
										<p><?= $value->admin_send ?></p>
										<ul>
											<li><i class="fa fa-clock-o"></i> <?= $value->time ?></li>

										</ul>
									</div>
								</div>
							<?php
							}
							?>
						<?php
						}
						?>
						<hr>
						<form action="<?= base_url('Pelanggan/cChatting') ?>" method="POST">
							<textarea class="form-control mt-3" name="pesan" placeholder="Masukkan pesan untuk admin..."></textarea>
							<button type="submit" class="btn btn-success mt-3">Kirim</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Blog Details Section End -->