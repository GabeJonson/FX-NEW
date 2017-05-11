<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page payment_information" id="account_validation">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/account_validation/bg.jpg)">
		<h2>Платёжная информация</h2>
	</section>

	<section id="menu_after_header" class="pad">
		<div class="wrapper overflow_inherit">
			<div class="menu">
				<div class="wrapper">
					<ul class="pjax-container">
						<?php include "menu_header.php"; ?>
					</ul>
				</div>
			</div>
			<hr color='#000'>
			<ul>
				<?php include "menu_internal.php"; ?>
			</ul>
		</div>
	</section>

	<section id="partnership2_s1" class="pad">
		<div class="wrapper">
			<div class="partnership2_s2__left"></div>
			<div class="partnership2_s2__right">
				<div class="partnership__login">
					<span class="partnership__tested">[tested]</span><span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
					<span class=" partnership_span partnership__four"><i class="fa fa-chevron-left" aria-hidden="true"></i>Logout</span>
				</div>
			</div>
		</div>
	</section>

	<section id="account_validation_s2" class="pad">
		<div class="wrapper">
			<form class="account_validation_s2__form">
				<span class="account_validation_s2__h1_cap">Информация о банковском счете:</span>
				<div class="account_validation_s2__form_wrap">
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_text">
						<label for="pay_input_text" class="label_form label_field_pay">Имя владельца счета:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_schet">
						<label for="pay_input_schet" class="label_form label_field_pay">Адрес владельца счета:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_IBAN">
						<label for="pay_input_IBAN" class="label_form label_field_pay">Номер счета / IBAN:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank">
						<label for="pay_input_bank" class="label_form label_field_pay">Название банка:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_address">
						<label for="pay_input_bank_address" class="label_form label_field_pay">Адрес банка:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_SWIFT">
						<label for="pay_input_bank_SWIFT" class="label_form label_field_pay">Банк SWIFT / BIC:</label>
					</div>
				</div>
				<span class="account_validation_s2__h1_cap">E-валютные счета:</span>
				<div class="account_validation_s2__form_wrap">
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_Bitcoin">
						<label for="pay_input_bank_Bitcoin" class="label_form label_field_pay">Текущий Bitcoin счета:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_Bitcoin_new">
						<label for="pay_input_bank_Bitcoin_new" class="label_form label_field_pay">Новый Bitcoin счета:</label>
					</div>
				</div>
				<span class="account_validation_s2__h1_cap">Информационная безопасность:</span>
				<div class="account_validation_s2__form_wrap">
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_secret">
						<label for="pay_input_bank_secret" class="label_form label_field_pay">*Секретный вопрос:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pay_input_bank_secret_answear">
						<label for="pay_input_bank_secret_answear" class="label_form label_field_pay">*Секретный ответ:</label>
					</div>
					<span class="account_validation_s2__form_span">*Обязательные поля</span>
					<button class="button button_hover">Изменить профиль</button>
				</div>
			</form>
		</div>
	</section>

	<section id="bottom_menu">
		<div class="wrapper">
			<div class="bottom_menu__left">
				<img src="img/bottom_menu/fx.png" alt="logo" class="bottom_menu__first">
				<img src="img/bottom_menu/comodo.png" alt="comodo" class="bottom_menu__two">
				<ul class="pjax-container">
					<?php include "menu_header.php"; ?>
				</ul>
			</div>
		</div>
	</section>

	<section id="bottom_menu__after">
		<div class="top">
			<ul class="animsition pjax-container">
				<?php include "menu_fx.php"; ?>
			</ul>
		</div>
	</section>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

</body>
</html>