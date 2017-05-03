<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu posadka" id="posadka2">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="posadka_s1" class="pad">
		<div class="wrapper">
			<span class="posadka_s1__h1">INVEST AND WATCH YOUR <span>MONEY GROWING</span></span>
			<span class="posadka_s1__h2">Fill out the fields below and get “The Guide For Successful Copy Trading On Forex” absolutely FREE OF CHARGE</span>
			<form method="POST" class="form-inline form" action="javascript:void(null);">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="">
				<input type="hidden" name="admin_email" value="">
				<input type="hidden" name="form_subject" value="">
				<!-- END Hidden Required Fields -->
				<div class="form_input">
					<span class="field">
						<input type="text" class="form-control name" name="name" required="" placeholder="Your name" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input type="email" class="form-control" name="email" required=""  placeholder="Your e-mail" />
					</span>
				</div>
				<div class="form_input">
					<span class="field" style="overflow: inherit" id='registration_s1__form_tel'>
						<input required="required" class="phone_call" type="tel" name="custom_tel">
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
			<span class="posadka_s1__h3">Follow successful trades on Forex with minimum risk</span>
			<img src="img/header/center.png" alt="center" class="posadka_s1__center">
		</div>
	</section>

	<section id="posadka_s2" class="pad">
		<div class="wrapper">
			<span class="posadka_s2__h2">YOU WILL LEARN HOW TO:</span>
			<ul class="posadka_s2__ul">
				<li><img src="img/posadka/5.png" alt="5_img"><span>Make money with minimum efforts</span></li>
				<li><img src="img/posadka/6.png" alt="6_img"><span>Easily make money on Forex with no trading practice</span></li>
				<li><img src="img/posadka/7.png" alt="7_img"><span>Safely manage your money with maximum profit</span></li>
				<li><img src="img/posadka/8.png" alt="8_img"><span>Live a comfortable life on retirement</span></li>
			</ul>
			<span class="posadka_s2__h3">… and many more interesting advice</span>
			<span class="posadka_s2__h2 posadka_s2__h2__last">Successful traders invest their money with confidence</span>
			<span class="posadka_s2__h4">Do you want to be one of them?</span>
			<span class="posadka_s2__h5">Read about it in “The Guide For Successful Copy Trading On Forex”</span>
		</div>
	</section>

	<section id="posadka_s3" class="pad">
		<div class="wrapper">
			<span class="posadka_s3__h1">Start to easily make money right now</span>
			<a href="#" class="posadka_s3__button">Get The Guide FREE OF CHARGE</a>
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