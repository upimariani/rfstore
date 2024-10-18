<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
	<section class="sidebar" id="sidebar-scroll">
		<!-- Sidebar Menu-->
		<ul class="sidebar-menu">
			<li class="nav-level">--- Navigation</li>
			<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cDashboard') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Pemilik/cDashboard') ?>">
					<i class="icon-speedometer"></i><span> Dashboard</span>
				</a>
			</li>
			<li class="nav-level">--- LAPORAN</li>


			<li class="<?php if ($this->uri->segment(1) == 'Pemilik' && $this->uri->segment(2) == 'cLapTransaksi') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Pemilik/cLapTransaksi') ?>">
					<i class="icon-tag"></i><span> Laporan Transaksi</span>
				</a>
			</li>


		</ul>
	</section>
</aside>
<!-- Sidebar chat start -->
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
					<div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

						<a class="media-left" href="#!">
							<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="friend-header">Josephin Doe</div>
							<span>20min ago</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

</div>
<div class="showChat_inner">
	<div class="media chat-inner-header">
		<a class="back_chatBox">
			<i class="icofont icofont-rounded-left"></i> Josephin Doe
		</a>
	</div>
	<div class="media chat-messages">
		<a class="media-left photo-table" href="#!">
			<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
			<div class="live-status bg-success"></div>
		</a>
		<div class="media-body chat-menu-content">
			<div class="">
				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
				<p class="chat-time">8:20 a.m.</p>
			</div>
		</div>
	</div>
	<div class="media chat-messages">
		<div class="media-body chat-menu-reply">
			<div class="">
				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
				<p class="chat-time">8:20 a.m.</p>
			</div>
		</div>
		<div class="media-right photo-table">
			<a href="#!">
				<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
				<div class="live-status bg-success"></div>
			</a>
		</div>
	</div>
	<div class="media chat-reply-box">
		<div class="md-input-wrapper">
			<input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
			<label>Share your thoughts</label>
			<span class="highlight"></span>
			<span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
				<i class="icofont icofont-location-arrow f-20 "></i>
			</button>

			<button type="button" class="chat-send waves-effect waves-light">
				<i class="icofont icofont-location-arrow f-20 "></i>
			</button>
		</div>

	</div>
</div>