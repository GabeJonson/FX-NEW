<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

<link rel="stylesheet" href="libs/IntlTelInput/css/intlTelInput.css">

</head>

<body id="regitstration_s3">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/registration/bg.jpg)">
		<h2>registration</h2>
	</section>

	<section id="regitstration_s2" class="pad">
		<div class="wrapper">
			<form method="POST" class="form-inline" action="javascript:void(null);">
				<div class="registration_s2__wrap">
					<span class="registration_s2__h2">Register Account</span>
					<span class="registration_s2__h2">Personal information</span>
				</div>
				<div class="regitstration_s3__wrap">
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Login:" />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Full name of contact person:" title="The minimum login length is 7 symbols. Use letters and digits only." />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Password:" />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<select id="country" name ="country" class="regitstration_s3__select"></select>
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Repeat password:" title="Enter the partnership ID number of the person who told you about FX Manager. That person will receive partnership commission." />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Mobile phone number" />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*E-mail" title="Enter the verification code that was sent to your mobile phone via SMS." />
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Number of fixed phone" />
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
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Partnership ID:" title="The minimum secret answer length is 5 symbols." />
						</span>
					</div>
				</div>		
				<span class="registration_s2__h2_last">Information Security</span>
				<span class="registration_s2__h2_right">*minimum length is 5 characters</span>
				<div class="regitstration_s3__wrap regitstration_s3__wrap_last">
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Secret answer:" title="The minimum secret answer length is 5 symbols." />
						</span>
					</div>
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<select name="question" id="country2" class="regitstration_s3__select regitstration_s3__select_last">
								<option selected="">What is the name of your favorite book?</option>
								<option>What is your passport number?</option>
								<option>What was the make of your first car?</option>
								<option>What was the name of your first pet?</option>
								<option>What was your childhood nickname?</option>
								<option>What was your favorite food as a child?</option>
								<option>Who is your favorite author?</option>
							</select>
							<!-- <input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Секретный вопрос" title="The minimum secret answer length is 5 symbols." /> -->
						</span>
					</div>
				</div>
				<div class="registration_s1__wrap_input">
					<input type="checkbox" class="regitstration_s3__check" id="regitstration_s3__check1"><label class="regitstration_s3__label" for="regitstration_s3__check1">Я желаю получать ежемесячные финансовые отчёты на свой электронный почтовый адрес.</label>
				</div>
				<div class="registration_s1__wrap_input">
					<input type="checkbox" class="regitstration_s3__check" id="regitstration_s3__check2"><label class="regitstration_s3__label" for="regitstration_s3__check2">Я подтверждаю, что я внимательно прочёл Клиентское Соглашение и согласен с ним</label>
				</div>
				<div class="clear"></div>
				<div class="cb tc">
					<button type="submit" class="btn btn-block registration_s2__button registration_s3__button" name="send">Register Account</button>
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
	<script src="libs/countries/countries.js"></script>
	<script>
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
			//ListCountry
			populateCountries("country");
		});
	</script>
	<!-- REGISTRATION -->

</body>
</html>