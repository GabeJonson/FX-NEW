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

	<section id="header2" style="background-image: url(img/callback/bg.png)">
		<h2>REQUEST A CALLBACK</h2>
	</section>

	<section class="pad" id="callback_s1">
		<div class="wrapper overflow_inherit">
			<div class="callback_s1__left overflow_inherit">
				<form method="POST" class="form-inline" action="javascript:void(null);">
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Your name:" />
						</span>
					</div>
					<div class="form_input" style="height: 70px">
						<span class="field" style="overflow: inherit" id='registration_s1__form_tel'>
							<input required="required" id="phone" type="tel" name="custom_tel" class="callback_input">
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<select class="registration_s2__input callback_select" type="text" class="form-control name" name="name" required="" />
								<option>Preferred contact time</option>
								<option>9:00 a.m. - 11:00 a.m.</option>
								<option>11:01 a.m. - 2:00 p.m.</option>
								<option>2:01 p.m. - 5:00 p.m.</option>
							</select>
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*E-mail:" />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<textarea class="callback_textarea registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Please briefly describe your question:" /></textarea>
						</span>
					</div>	
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<input type="text" disabled class="regitstration_s3__secret_code" placeholder="W6 8HP">
							<!-- <ul class="regitstration_s3__ul">
								<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
								<li><a href="#">?</a></li>
							</ul> -->
							<input class="registration_s2__input regitstration_s3__cod form-control callbakc_input2" type="text" name="name" required="" placeholder="*Type the code shown:" title="The minimum secret answer length is 5 symbols." />
						</span>
					</div>
					<span class="callback_s1__span_bottom">*Required fields</span>
					<div class="clear"></div>
					<div class="cb tc">
						<button type="submit" class="btn btn-block registration_s2__button" name="send">Request</button>
					</div>
				</form>
				<div class="clear"></div>
			</div>
			<div class="callback_s1__right">
				<img src="img/callback/phone.png" alt="callback">
				<p>Please fill out the information below. FX Manager customer support will contact you in the shortest time possible.
				<br><br>
				Please note that our phone customer support is available in English Monday - Friday 9:00 a.m. to 5:00 p.m. GMT time zone.
				<br><br>
				Right now we propose you to contact our 24/7 customer support using <a href="#" class="button_hover">Live Chat.</a></p>
			</div>
			<div class="clear"></div>
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
			$("#registration_s1__form_tel #phone").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['us'],
				customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
				  return "+"+selectedCountryData.dialCode+" " + selectedCountryPlaceholder;
				}
			});
		});
	</script>
	<!-- REGISTRATION -->

</body>
</html>