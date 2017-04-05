<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

<link rel="stylesheet" href="libs/IntlTelInput/css/intlTelInput.css">

</head>

<body class="hidden_menu internal_page" id="account_validation">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/account_validation/bg.jpg)">
		<h2>Проверка учетной записи</h2>
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
			<div class="partnership2_s2__left">
				<img src="img/account_validation/left.png" alt="left">
			</div>
			<div class="partnership2_s2__right">
				<div class="partnership__login">
					<span class="partnership__tested">[tested]</span><span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
					<span class=" partnership_span partnership__four"><i class="fa fa-chevron-left" aria-hidden="true"></i>Logout</span>
				</div>
				<span class="partnership2_s2__h2">Проверка учетной записи</span>
				<p class="partnership2_s2__p_right">
					<span>FX-менеджер обязан проверить личность всех клиентов, которые хотят пополнять свои счета через банковский перевод.</span>
					<br><br>
					Для проверки Вашего корпоративного счета необходимо представить в Департамент финансов FX Manager, отсканированные копии двух различных документов, удостоверяющих компанию и адрес, представить банковские реквизиты компании и валидировать свой мобильный номер телефона.
					После того, как Вы представили необходимые документы и информацию о банковском счете, Ваша учетная запись будет подтверждена (как правило, в течение 48 часов). После этого Вы будете иметь возможность создавать счета по вкладам банковских переводов. Подтверждение проверки будет отправлено Вам по электронной почте.
				</p>
			</div>
		</div>
	</section>

	<section id="account_validation_s1" class="pad">
		<div class="wrapper">
			<table class="account_validation__table">
				<tr>
					<td class="account_validation__td_cap">
						<span class="account_validation__h1">ПРОВЕРКА КОМПАНИИ</span>
						<p class="account_validation__p">
							Бизнес-Лицензию, выданную государственным органом (Сертификат) / Учредительный договор.
						</p>
						<a href="#" class="account_validation__a a a_hover">Выбрать файл</a>
						<span class="account_validation__span_left">Статус файла: <span class="account_validation__span_right">Документ на рассмотрении</span></span>
					</td>
					<td class="account_validation__td_cap_right" rowspan="2">
						<span class="account_validation__span_right_uploader">Все копии документов должны быть действительными и чёткими.</span>
						<p class="account_validation__p_right_uploader">
							<br>
							Принимаются файлы в форматах .pdf, .jpg, .bmp или .doc.
							<br><br>
							Размер одного файла не должен превышать 10 Mb.
						</p>
					</td>
				</tr>
				<tr>
					<td class="account_validation__td_cap">
						<span class="account_validation__h1">ПРОВЕРКА АДРЕСА</span>
						<p class="account_validation__p">
							Копия недавнего счета за коммунальные услуги компании (т.е. счета за электроэнергию, счета за воду, телефонные счета и т.д.) / Копия недавней выписки по банковскому счёту компании (Вы можете закрасить номер счета и сумму).
							<br>
							Документ должен содержать адрес компании.
						</p>
						<a href="#" class="account_validation__a a a_hover">Выбрать файл</a>
						<span class="account_validation__span_left">Статус файла: <span class="account_validation__span_right">Документ на рассмотрении</span></span>
					</td>
					<td></td>
				</tr>
			</table>
		</div>
	</section>

	<section id="account_validation_s2" class="pad">
		<div class="wrapper">
			<span class="account_validation_s2__h1_cap">3. ИНФОРМАЦИЯ О КОРПОРАТИВНОМ БАНКОВСКОМ СЧЁТЕ:</span>
			<p class="account_validation_s2__p">«Ваша банковская информация получена. Вы можете её просмотреть или отредактировать в разделе <a href="#" class="a a_hover">Редактировать профиль</a><a href="#" class="a a_hover">/Платёжная информация.</a>»</p>
			<form class="account_validation_s2__form">
				<div class="account_validation_s2__form_wrap">
					<input type="text" placeholder="*Имя владельца счета:">
					<input type="text" placeholder="*Адрес владельца счета">
					<input type="text" placeholder="*Номер счета / IBAN:">
					<input type="text" placeholder="*Название банка:">
					<input type="text" placeholder="*Адрес банка:">
					<input type="text" placeholder="*Банк SWIFT / BIC:">
					<span class="account_validation_s2__form_span">*Обязательные поля</span>
					<button class="button button_hover">Разместить информацию</button>
				</div>
			</form>
		</div>
		<div class="wrapper account_validation_wrapper_bottom overflow_inherit">
			<div class="account_validation_s2__left">
				<span class="account_validation_s2__h1_cap">4. ПРОВЕРКА/ИЗМЕНЕНИЕ МОБИЛЬНОГО НОМЕРА ТЕЛЕФОНА</span>
				<p class="account_validation_s2__p">*Введите номер мобильного телефона: <span class="account_statistics_s1__table_img" data-title="Your mobile phone number helps us to maintain the security of your account. FX Manager will never share your number with any third parties. You will be sent an SMS message with a verification code that should be entered in the next step."><img class="znakvoprosa" src="img/1.png" alt="1"></span></p>
				<form class="account_validation_s2__form2">
					<div class="form_input">
						<span class="field" style="overflow: inherit" id='registration_s1__form_tel'>
							<input required="required" id="phone" class="account_validation_s2__form2_input" type="tel" name="custom_tel">
						</span>
					</div>
					<button class="account_validation_s2__form2_button button button_hover">Отправить код</button>
					<input type="text" class="account_validation_s2__form2_sms" placeholder="Проверочный код из SMS:">
				</form>	
			</div>
			<div class="account_validation_s2__right">
				<span class="account_validation_s2__right_span">
					Номер Вашего телефона необходим для обеспечения дополнительной безопасности Вашего счёта в FX Manager
				</span>
			</div>
			<span class="account_validation_s2__span_bottom">Статус: <span class="account_validation_s2__span_bottom_content">проверен</span></span>
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

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

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