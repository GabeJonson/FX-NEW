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
			<div class="wrap"></div>
			<form method="POST" class="form-inline form" action="javascript:void(null);">
				<div class="form_input">
					<span class="field label_field">
						<input type="text" class="form-control name" name="name" required="" id="reg_input_text" />
						<label for="reg_input_text" class="label_form reg_label">Your name</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input type="email" class="form-control" name="email" required="" id="reg_input_email" />
						<label for="reg_input_email" class="label_form reg_label">Your e-mail</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field" id="s13_formm">
						<input required="required" class="phone_call" type="tel" name="custom_tel" style="background-image:none;" id="reg_input_phone">
						<label for="reg_input_phone" class="label_form reg_label label_form_active_tel">Your mobile phone number</label>
					</span>
				</div>
				<div class="cb tc">
					<button type="submit" class="btn btn-block" name="send">Continue Registration</button>
					<div class="registration_s1__wrap">
						<span class="registration_s1__pola2">You will be sent an SMS message with a verification code that should be entered in the next step.</span>
						<span class="registration_s1__pola">*Required field</span>
						<a href="#modal_login" class="registration_s1__yze modall_pad button_hover">Already registered?</a>
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