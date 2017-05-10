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
		<h2>registration<br><span class="registration_header_span">STEP 2 OF 2</span></h2>
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
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" id="reg2_input_text_2" />
						<label for="reg2_input_text_2" class="label_form reg_label_2">*Full name:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" id="reg2_input_text" name="name" required="" title="The minimum login length is 7 symbols. Use letters and digits only." />
						<label for="reg2_input_text" class="label_form reg_label_2">*Login:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" id="reg2_input_company" />
						<label for="reg2_input_company" class="label_form reg_label_2">Company name:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" id="reg2_input_pass" name="name" required="" title="The minimum password length is 7 symbols. Do not use a simple password." />
						<label for="reg2_input_pass" class="label_form reg_label_2">*Password:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" id="reg2_input_email" />
						<label for="reg2_input_email" class="label_form reg_label_2">*E-mail:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" id="reg2_input_pssr" name="name" required="" />
						<label for="reg2_input_pssr" class="label_form reg_label_2">*Repeat password:</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field registration_2_form_question">
						<input class="registration_s2__input" id="registration_s2__input__partnership" type="text" class="form-control name" name="name" required=""/>
						<span class="registration_s1__mobile2" data-title="Enter the partnership ID number of the person who told you about FX Manager. That person will receive partnership commission.">?</span>
						<label for="registration_s2__input__partnership" class="label_form reg_label_2">Partnership ID:</label>
					</span>
				</div>
				<div class="form_input" id="regitstration_s2_sms">
					<span class="field label_field">
						<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" id="reg2_input_sms" title="Enter the verification code that was sent to your mobile phone via SMS." />
						<label for="reg2_input_sms" class="label_form reg_label_2">*SMS verification code:</label>
					</span>
				</div>
				<div class="form_input hidden" id="regitstration_s2_email">
					<span class="field label_field">
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
<?php include "script.php"; ?>

</body>
</html>