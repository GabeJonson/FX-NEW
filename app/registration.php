<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" class="registration_section" style="background-image: url(img/registration/bg.jpg)">
		<h2>registration<br><span class="registration_header_span">STEP 1 OF 2</span></h2>
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
						<input required="required" class="phone_call" type="tel" name="custom_tel">
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
<?php include "script.php"; ?>

	<script>
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
		});
	</script>

</body>
</html>