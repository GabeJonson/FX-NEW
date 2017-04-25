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

	<section id="regitstration_s1" class="pad">
		<div class="wrapper overflow_inherit">
			<div class="wrap">
				<span class="registration_s1__mobile">*Enter your mobile phone number: </span><span class="registration_s1__mobile2">?</span>
				<span class="registration_s1__mobile3">Your mobile phone number helps us to maintain the security of your account. FX Manager will never share your number with any third parties. You will be sent an SMS message with a verification code that should be entered in the next step.</span>
			</div>
			<form method="POST" class="form-inline" action="javascript:void(null);">
				<div class="form_input">
					<span class="field" style="overflow: inherit" id='registration_s1__form_tel'>
						<input required="required" id="phone" type="tel" name="custom_tel">
					</span>
				</div>							
				<div class="clear"></div>
				<div class="cb tc">
					<button type="submit" class="btn btn-block" name="send">Continue Registration</button>
					<div class="registration_s1__wrap">
						<a href="#modal_login" class="registration_s1__yze modall_pad button_hover">Already registered?</a>
						<span class="registration_s1__pola">*Required field</span>
					</div>
				</div>
			</form>
		</div>
	</section>

<?php include "footer.php"; ?>

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