<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__links">
					<a href="<?= base_url('Pelanggan/cHome') ?>"><i class="fa fa-home"></i> Home</a>
					<span>Profile</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="contact__content">
					<div class="contact__address">
						<h5>Profile</h5><br>
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
						<ul>
							<li>
								<h6><i class="fa fa-map-marker"></i> Alamat</h6>
								<p><?= $pelanggan->alamat ?></p>
							</li>
							<li>
								<h6><i class="fa fa-phone"></i> Phone</h6>
								<p><span><?= $pelanggan->no_tlpon ?></span></p>
							</li>
							<li>
								<h6><i class="fa fa-headphones"></i> Akun</h6>
								<p><?= $pelanggan->username ?> | <?= $pelanggan->password ?></p>
							</li>
						</ul>
					</div>
					<div class="contact__form">
						<h5>UPDATE PELANGGAN</h5>
						<form action="<?= base_url('Pelanggan/cProfil/update_profil') ?>" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" name="nama" value="<?= $pelanggan->nm_pel ?>" placeholder="Name">
								</div>
								<div class="col-lg-6">
									<input type="text" name="no_hp" value="<?= $pelanggan->no_tlpon ?>" placeholder="No Telepon">
								</div>
							</div>
							<textarea name="alamat" placeholder="Message"><?= $pelanggan->alamat ?></textarea>
							<div class="row">
								<div class="col-lg-6">
									<input type="text" name="username" value="<?= $pelanggan->username ?>" placeholder="Username">
								</div>
								<div class="col-lg-6">
									<input type="text" name="password" value="<?= $pelanggan->password ?>" placeholder="Password">
								</div>
							</div>
							<button type="submit" class="site-btn">Update Profil</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>