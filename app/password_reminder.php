<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/passwordreminder/bg.jpg)">
		<h2>PASSWORD REMINDER</h2>
	</section>

	<section id="passwordreminder_s1" class="pad">
		<div class="wrapper">
			<div class="passwordreminder_s1__left">
				<form method="POST" class="form-inline" action="javascript:void(null);">
					<div class="regitstration_s3__wrap">
						<div class="form_input">
							<span class="field">
								<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Login:" />
							</span>
						</div>
						<div class="form_input">
							<span class="field">
								<input class="registration_s2__input" type="email" class="form-control name" name="name" required="" placeholder="*E-mail:" />
							</span>
						</div>
						<div class="form_input registration_s2__input_last">
							<span class="field">
								<input type="text" disabled class="regitstration_s3__secret_code" placeholder="W6 8HP">
								<ul class="regitstration_s3__ul">
									<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
									<li><a href="#">?</a></li>
								</ul>
								<input class="registration_s2__input regitstration_s3__cod form-control" type="text" name="name" required="" placeholder="*Enter the code from the image" title="The minimum secret answer length is 5 symbols." />
							</span>
						</div>
					<div class="clear"></div>
					<div class="cb tc">
						<button type="submit" class="btn btn-block registration_s2__button registration_s3__button" name="send">PASSWORD REMINDER</button>
					</div>
					</div>
				</form>
			</div>
			<div class="passwordreminder_s1__right">
				<p>In order to recover your password, enter your login and e-mail.
				<br><br>
				New password will be sent to the e-mail that is linked to your FX Manager account.
				<br><br>
				Please contact our <a href="#" class="button_hover">Customer Support</a> if you do not remember the required information.</p>
			</div>
		</div>
	</section>

<?php include "footer.php"; ?>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Load Scripts End -->

</body>
</html>