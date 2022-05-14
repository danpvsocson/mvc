<?php
defined('BASEPATH') or exit('No direct script access allowed');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
	<?php include('header.php'); ?>
	<link rel="stylesheet" href="assets/css/admin.css">
	<link href="assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">

	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	
</head>

<body>

	<h1>Admin Login Form</h1>

	<div class="w3layoutscontaineragileits">
		<h2>Login Here</h2>

		<form action="<?php echo base_url(''); ?>admin/login" method="post" enctype="multipart/form-data">
			
			<input type="text" Name="Username" placeholder="Username" required="" value="">
			<input type="password" Name="Password" placeholder="Password" required="" value="">
			<!-- <ul class="agileinfotickwthree">
					<input type="checkbox" id="brand1" name="brand1">
					<label for="brand1" class="brand1"><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul> -->
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<!-- <p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p> -->
				<div class="clear"></div>
			</div>
		</form>
	</div>

	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Register Form</h3>
				<form action="#" method="post">
					<div class="form-sub-w3ls">
						<input placeholder="User Name" type="text" required="">
						<div class="icon-agile">
							<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
						</div>
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Email" class="mail" type="email" required="">
						<div class="icon-agile">
							<!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
						</div>
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Password" type="password" required="">
						<div class="icon-agile">
							<!-- <i class="fa fa-unlock-alt" aria-hidden="true"></i> -->
						</div>
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Confirm Password" type="password" required="">
						<div class="icon-agile">
							<!-- <i class="fa fa-unlock-alt" aria-hidden="true"></i> -->
						</div>
					</div>
					<div class="login-check">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Register">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //for register popup -->

	<div class="w3footeragile">
		<p> &copy; 2022 | Design by <a href="http://w3layouts.com" target="_blank">DanPV</a></p>
	</div>


	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->
	<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
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
	<script type="text/javascript" src="assets/js/admin.js"></script>
	<?php include('footer.php'); ?>
</body>

</html>