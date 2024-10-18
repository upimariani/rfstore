<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
	<section class="sidebar" id="sidebar-scroll">
		<!-- Sidebar Menu-->
		<ul class="sidebar-menu">
			<li class="nav-level">--- Navigation</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cDashboard') ?>">
					<i class="icon-speedometer"></i><span> Dashboard</span>
				</a>
			</li>
			<li class="nav-level">--- Kelola Data Master</li>


			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cUser') ?>">
					<i class="icon-user"></i><span> Data User</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cProduk') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cProduk') ?>">
					<i class="ti-package"></i><span> Data Produk</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDiskon') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cDiskon') ?>">
					<i class="ti-wallet"></i><span> Data Diskon</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKupon') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cKupon') ?>">
					<i class="ti-id-badge"></i><span> Data Kupon</span>
				</a>
			</li>
			<li class="nav-level">--- Transaksi</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTransaksi') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cTransaksi') ?>">
					<i class="icon-list"></i><span> Transaksi Pelanggan</span>
				</a>
			</li>


		</ul>
	</section>
</aside>
<!-- Sidebar chat start -->
<?php
//chatting pelanggan
$chatting = $this->db->query("SELECT * FROM `chatting` JOIN pelanggan ON pelanggan.id_pelanggan=chatting.id_pelanggan GROUP BY pelanggan.id_pelanggan")->result();
?>
<div id="sidebar" class="p-fixed header-users showChat">
	<div class="had-container">
		<div class="card card_main header-users-main">
			<div class="card-content user-box">
				<div class="md-group-add-on p-20">
					<span class="md-add-on">
						<i class="icofont icofont-search-alt-2 chat-search"></i>
					</span>
					<div class="md-input-wrapper">
						<input type="text" class="md-form-control" name="username" id="search-friends">
						<label>Search</label>
					</div>

				</div>
				<div class="media friendlist-main">

					<h6>Friend List</h6>

				</div>
				<div class="main-friend-list">
					<?php
					foreach ($chatting as $key => $value) {
					?>
						<div class="media friendlist-box" data-id="1" data-status="online" data-username="<?= $value->nama_pelanggan ?>" data-toggle="tooltip" data-placement="left" title="<?= $value->nama_pelanggan ?>">

							<a class="media-left" href="<?= base_url('Admin/cChatting/chat/' . $value->id_pelanggan) ?>">
								<img class="media-object img-circle" src="<?= base_url('asset/quantam-lite/') ?>assets/images/avatar-1.png" alt="Generic placeholder image">
								<div class="live-status bg-success"></div>
							</a>
							<div class="media-body">
								<div class="friend-header"><?= $value->nama_pelanggan ?></div>
								<span><?= $value->time ?></span>
							</div>
						</div>
					<?php
					}
					?>


				</div>
			</div>
		</div>
	</div>

</div>