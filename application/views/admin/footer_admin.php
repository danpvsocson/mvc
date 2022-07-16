<div class="col-12 d-flex justify-content-center">
	<?php
	if ($this->session->flashdata("error")) {
		echo $this->session->flashdata("error");
	}
	if ($this->session->flashdata("success")) {
		echo $this->session->flashdata("success");
	}
	?>
</div>
</main>
<div id="thong_bao">
	<!-- <div class="thong_bao">
		<i class="fas fa-check-circle"></i>
		<span class="msg">Thành Công</span>
		<span class="countdown"></span>
	</div> -->
</div>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>

<!-- pop-up-box-js-file -->
<script src="assets/js/admin/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-js-file -->
<script>
	$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

	});
</script>
<script type="text/javascript" src="assets/css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="assets/css/aos-animasiton-scroll/dist/aos.js"></script>
<script>
	AOS.init({
		once: true
	});
</script>
<script type="text/javascript" src="assets/js/admin/main.js"></script>
<script>
	CKEDITOR.replace( 'chitiet', {
    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
} );
</script>
</body>

</html>