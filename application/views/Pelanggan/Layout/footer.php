<!-- Footer Section Begin -->
<footer class="footer">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<div class="footer__copyright__text">
					<p>RFSTORE</p>
				</div>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
	<div class="h-100 d-flex align-items-center justify-content-center">
		<div class="search-close-switch">+</div>
		<form class="search-model-form">
			<input type="text" id="search-input" placeholder="Search here.....">
		</form>
	</div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/mixitup.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('asset/ashion-master/') ?>js/main.js"></script>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 3000)
</script>
<script>
	function highlightStar(obj, id) {
		removeHighlight(id);
		$('#rate-' + id + ' li').each(function(index) {
			$(this).addClass('highlight');
			if (index == $('#rate-' + id + ' li').index(obj)) {
				return false;
			}
		});
	}

	// event yang terjadi pada saat kita mengarahkan kursor kita ke sebuah object
	function removeHighlight(id) {
		$('#rate-' + id + ' li').removeClass('selected');
		$('#rate-' + id + ' li').removeClass('highlight');
	}

	function addRating(obj, id) {
		$('#rate-' + id + ' li').each(function(index) {
			$(this).addClass('selected');
			$('#rate-' + id + ' #rating').val((index + 1));
			if (index == $('#rate-' + id + ' li').index(obj)) {
				return false;
			}
		});
		$.ajax({
			url: "<?php echo base_url('berita/tambah_rating'); ?>",
			data: 'id=' + id + '&rating=' + $('#rate-' + id + ' #rating').val(),
			type: "POST"
		});
	}

	function resetRating(id) {
		if ($('#rate-' + id + ' #rating').val() != 0) {
			$('#rate-' + id + ' li').each(function(index) {
				$(this).addClass('selected');
				if ((index + 1) == $('#rate-' + id + ' #rating').val()) {
					return false;
				}
			});
		}
	}
</script>
</body>

</html>
