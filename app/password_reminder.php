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
<?php include "script.php"; ?>

</body>
</html>