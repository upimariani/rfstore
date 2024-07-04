<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Pengguna Sistem (User)</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tables</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Informasi User</a>
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
						<h5 class="card-header-text">Perbaharui Data User</h5>
						<p>Silahkan melakukan perbaharuan data user yang diperlukan.</p>
					</div>
					<form action="<?= base_url('Admin/cUser/update/' . $user->id_user) ?>" method="POST">
						<div class="card-block button-list">
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-ui-user"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" name="nama" value="<?= $user->nama ?>" placeholder="Masukkan Nama User" class="md-form-control" title="yourname" />
									<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
									<label>Nama User</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-envelope"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" name="username" value="<?= $user->username ?>" placeholder="Masukkan Username" class="md-form-control" title="your email name must be 8-16 character long" />
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
									<label>Username</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-unlock"></i>
								</span>
								<div class="md-input-wrapper">
									<input type="text" name="password" value="<?= $user->password ?>" placeholder="Masukkan Password" class="md-form-control" title="your email name must be 8-16 character long" />
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
									<label>Password</label>
								</div>
							</div>
							<div class="md-group-add-on">
								<span class="md-add-on">
									<i class="icofont icofont-privacy"></i>
								</span>
								<div class="md-input-wrapper">
									<select name="level" class="md-form-control">
										<option value="1" <?php if ($user->level_user == '1') {
																echo 'selected';
															} ?>>Admin</option>
										<option value="2" <?php if ($user->level_user == '2') {
																echo 'selected';
															} ?>>Pemilik</option>
									</select>
									<?= form_error('level', '<small class="text-danger">', '</small>') ?>
									<label>Level User</label>
								</div>
							</div>
							<button type="submit" class="btn btn-warning waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="Simpan">Submit
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
