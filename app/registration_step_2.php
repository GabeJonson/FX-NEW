<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

<link rel="stylesheet" href="libs/IntlTelInput/css/intlTelInput.css">

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/registration/bg.jpg)">
		<h2>registration</h2>
	</section>

	<section id="regitstration_s2" class="pad">
		<div class="wrapper">
			<form method="POST" class="form-inline" action="javascript:void(null);">
				<!-- <input type="checkbox" id="check1"><label for="check1" class="registration_s2__input_check">Personal</label> -->
				<!-- <input type="checkbox" id="check2" class="registration_s2__check2"><label for="check2" class="registration_s2__input_check">Corporate</label> -->
				<div class="registration_s2__wrap">
					<span class="registration_s2__h2">Client information</span>
					<span class="registration_s2__h2">Account security</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Full name:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Login:" title="The minimum login length is 7 symbols. Use letters and digits only." />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Company name:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Password:" title="The minimum password length is 7 symbols. Do not use a simple password." />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*E-mail:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Repeat password:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input class="registration_s2__input" id="registration_s2__input__partnership" type="text" class="form-control name" name="name" required="" placeholder="Partnership ID:"/>
						<span class="registration_s1__mobile2" data-title="Enter the partnership ID number of the person who told you about FX Manager. That person will receive partnership commission.">?</span>
					</span>
				</div>
				<div class="form_input" id="regitstration_s2_sms">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*SMS verification code:" title="Enter the verification code that was sent to your mobile phone via SMS." />
					</span>
				</div>
				<div class="form_input hidden" id="regitstration_s2_email">
					<span class="field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*E-mail verification code:" title="Enter the verification code that was sent to your E-mail." />
					</span>
				</div>
				<div class="clear"></div>
				<span class="registration_s2__span3">*Required fields</span>
				<span class="registration_s2__span1">By clicking the Register Account button, I agree to the <a href="terms_of_service.php" class="button_hover">Terms of Service.</a></span>
				<a href="javascript:void(0);" class="registration_s2__span2 click button_hover">I haven't received the verification code via SMS. Send it via email.</a>
				<div class="cb tc">
					<button type="submit" class="btn btn-block registration_s2__button" name="send">Register Account</button>
					<a href="#modal_login" class="registration_s2__span4 modall_pad button_hover">Already registered?</a>
				</div>
			</form>
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

	<!-- REGISTRATION -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="libs/IntlTelInput/js/intlTelInput.min.js"></script>
	<script>
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
		});
	</script>
	<!-- REGISTRATION -->

</body>
</html>