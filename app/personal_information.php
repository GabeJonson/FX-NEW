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
					<a href="#" class=" partnership_span partnership__four">
						<svg id="loguot-icon" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14"><title>logout_icon</title><path d="M174.88,252.55l-2.56-2.68a.39.39,0,0,0-.56,0,.41.41,0,0,0,0,.57l1.7,1.74h-7a.42.42,0,0,0,0,.84h7.35l-2.05,2.19a.48.48,0,0,0,0,.63.39.39,0,0,0,.56,0l2.56-2.68a.44.44,0,0,0,0-.59Zm-3.5,5a.41.41,0,0,0-.4.42v0c0,.55-.39,1.16-.91,1.16h-5.19A1.25,1.25,0,0,1,163.8,258V247.61c0-.59.61-.78,1.09-.78h5.19c.5,0,.91.21.91.78v0a.4.4,0,1,0,.8,0v0a1.57,1.57,0,0,0-1.7-1.61h-5.19a1.73,1.73,0,0,0-1.89,1.61V258a2.06,2.06,0,0,0,1.89,2h5.19a1.91,1.91,0,0,0,1.7-2v0A.41.41,0,0,0,171.38,257.56Z" transform="translate(-163 -246)"/></svg>Logout</a>
					<span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class="partnership__tested">[Validated]</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
				</div>
			</div>
		</div>
	</section>

	<section id="account_validation_s2" class="pad">
		<div class="wrapper">
			<form class="account_validation_s2__form">
				<span class="account_validation_s2__h1_cap">Информация о банковском счете:</span>
				<div class="account_validation_s2__form_wrap overflow_inherit">
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text">
						<label for="pers_input_text" class="label_form label_field_pay">ФИО:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_2">
						<label for="pers_input_text_2" class="label_form label_field_pay">Почтовый индекс:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_3">
						<label for="pers_input_text_3" class="label_form label_field_pay">Название компании: (если счёт корпоративный)</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_4">
						<label for="pers_input_text_4" class="label_form label_field_pay">Номер наземного телефона:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_5">
						<label for="pers_input_text_5" class="label_form label_field_pay">Адрес вебсайта: (если счёт корпоративный)</label>
					</div>
					<span class="field label_field label_field_payment" style="overflow: inherit" id='registration_s1__form_tel'>
						<input required="required" id="pers_input_text_51" class="phone_call account_validation_s2__form2_input" type="tel" name="custom_tel">
						<label for="pers_input_text_51" class="label_form_active_tel label_form label_field_pay pers_tel_pay_info">Your mobile phone number</label>
					</span>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_6" class="account_validation_s2__input_top">
						<label for="pers_input_text_6" class="label_form label_field_pay">Город:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_7" class="account_validation_s2__input_top">
						<label for="pers_input_text_7" class="label_form label_field_pay">E-mail:</label>
					</div>
				</div>
				<span class="account_validation_s2__h1_cap">Смена пароля:</span>
				<div class="account_validation_s2__form_wrap">
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_8">
						<label for="pers_input_text_8" class="label_form label_field_pay">Новый пароль:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_9">
						<label for="pers_input_text_9" class="label_form label_field_pay">Повторите новый пароль:</label>
					</div>
				</div>
				<span class="account_validation_s2__h1_cap">Финансовые отчеты по E-Mail:</span>
				<div class="account_validation_s2__form_wrap label_field">
					<input type="checkbox" id="personal_information_input_check" class="account_validation_s2__input_check_mini">
					<label for="personal_information_input_check">Я согласен получать ежемесячные и ежегодные финансовые отчеты на свой E-Mail.</label>
					<label for="personal_information_input_check" class="label_form label_field_pay">Текущий Bitcoin счета:</label>
				</div>
				<span class="account_validation_s2__h1_cap">Информационная безопасность:</span>
				<div class="account_validation_s2__form_wrap">
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_10">
						<label for="pers_input_text_10" class="label_form label_field_pay">*Секретный вопрос:</label>
					</div>
					<div class="label_field label_field_payment">
						<input type="text" id="pers_input_text_11">
						<label for="pers_input_text_11" class="label_form label_field_pay">*Секретный ответ:</label>
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
