<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu posadka">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="posadka_s1" class="pad" style="background-image: url(img/posadka/<?php
	$posadka_s1 = rand(1, 8);
	switch ($posadka_s1) {
		case 1:
			echo "bg";
		break;
		case 2:
			echo "bg_s2";
		break;
		case 3:
			echo "bg_s3";
		break;
		case 4:
			echo "bg_s4";
		break;
		case 5:
			echo "bg_s5";
		break;
		case 6:
			echo "bg_s6";
		break;
		case 7:
			echo "bg_s7";
		break;
		case 8:
			echo "bg_s8";
		break;
}?>.jpg);">
		<div class="wrapper">
			<span class="posadka_s1__h1">GET STABLE LONG-TERM PROFIT ON <span>FOREX</span></span>
			<span class="posadka_s1__h2">Fill out the fields below and get “The Guide For Successful Copy Trading On Forex” absolutely FREE OF CHARGE</span>
			<form method="POST" class="form-inline form" action="javascript:void(null);">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="">
				<input type="hidden" name="admin_email" value="">
				<input type="hidden" name="form_subject" value="">
				<!-- END Hidden Required Fields -->
				<div class="form_input">
					<span class="field label_field">
						<input type="text" class="form-control name" name="name" required="" id="mini_landing_text_1" />
						<label for="mini_landing_text_1" class="label_form">Your name</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field">
						<input type="email" id="mini_landing_text_2" class="form-control" name="email" required=""/>
						<label for="mini_landing_text_2" class="label_form">Your e-mail</label>
					</span>
				</div>
				<div class="form_input">
					<span class="field label_field" style="overflow: inherit" id='registration_s1__form_tel'>
						<input required="required" id="mini_landing_text_3" class="phone_call" type="tel" name="custom_tel">
						<label for="mini_landing_text_3" class="label_form label_form_active_tel label_form_active_tel_callBack">Your mobile phone number</label>
					</span>
				</div>	
				<!-- Просто любое дополнительное поле -->
				<input type="hidden" name="other_data" value="" />
				<!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
				<input type="hidden" class="pacet" name="form_pacet" value="">
				<!-- GET RESPONCE INPUTS -->
				<input type="hidden" name="start_day" value=""/>
				<!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token --> 
				<input type="hidden" name="campaign_token" value=""/>
				<!-- GET RESPONCE INPUTS -->								
				<div class="clear"></div>
				<div class="cb tc">
					<button type="submit" class="btn btn-block" name="send">Get The Guide</button>
				</div>
			</form>
			<span class="posadka_s1__h3">Make your money work and multiply your capital</span>
			<img src="img/header/center.png" alt="center" class="posadka_s1__center">
		</div>
	</section>

	<section id="posadka_s2" class="pad">
		<div class="wrapper">
			<span class="posadka_s2__h2">YOU WILL LEARN HOW TO:</span>
			<ul class="posadka_s2__ul">
				<li><img src="img/posadka/1.png" alt="1_img"><span>Easily follow profitable Forex trading online</span></li>
				<li><img src="img/posadka/4.png" alt="4_img"><span>Make money with minimum efforts</span></li>
				<li><img src="img/posadka/2.png" alt="2_img"><span>Smartly manage your capital</span></li>
				<li><img src="img/posadka/3.png" alt="3_img"><span>Safely trade your money</span></li>
			</ul>
			<span class="posadka_s2__h3">… and many more useful advice</span>
		</div>
	</section>

	<section id="posadka_s3" class="pad">
		<div class="wrapper">
			<span class="posadka_s3__h1">DO YOU WANT TO LEARN</span>
			<span class="posadka_s3__h2">how to safely invest your money with maximum profit?</span>
			<span class="posadka_s3__h3">It is just a step forward to this:</span>
			<a href="#" class="posadka_s3__button button3">Get The Guide FREE OF CHARGE</a>
		</div>
	</section>

	<!-- <section id="bottom_menu">
		<div class="wrapper">
			<div class="bottom_menu__left">
				<img src="img/bottom_menu/fx.png" alt="logo" class="bottom_menu__first">
				<img src="img/bottom_menu/comodo.png" alt="comodo" class="bottom_menu__two">
				<ul class="pjax-container">
					<?php include "menu_header.php"; ?>
				</ul>
			</div>
		</div>
	</section> -->

	<!-- <section id="bottom_menu__after">
		<div class="top">
			<ul class="animsition pjax-container">
				<?php include "menu_fx.php"; ?>
			</ul>
		</div>
	</section> -->

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

</body>
</html>