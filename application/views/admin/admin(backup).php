<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
	<?php include('header.php'); ?>

</head>

<body onload="checkPage()">

	<h1>Admin Login Form</h1>

	<div class="w3layoutscontaineragileits" style="border-radius: 10px;">
		<h2>Login Here</h2>

		<form action="<?php echo base_url(''); ?>admin/login" method="post" enctype="multipart/form-data">

			<input type="text" Name="Username" placeholder="Username" required="" value="" style="border-radius: 10px;">
			<input type="password" Name="Password" placeholder="Password" required="" value="" style="border-radius: 10px;">
			<!-- <ul class="agileinfotickwthree">
					<input type="checkbox" id="brand1" name="brand1">
					<label for="brand1" class="brand1"><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul> -->
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN" style="border-radius: 10px;">
				
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
		<p> &copy; 2022 | Design by <a href="https://www.fb.com/danpv.socson" target="_blank">DanPV</a></p>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>