<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page" id="live_trade_2">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/partnership/bg.jpg)">
		<h2>Торги в режиме реального времени</h2>
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
				<img src="img/live_trade/left_img.png" alt="left_img">
			</div>
			<div class="partnership2_s2__right">
				<div class="partnership__login">
					<a href="#" class=" partnership_span partnership__four">
						<svg id="loguot-icon" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14"><title>logout_icon</title><path d="M174.88,252.55l-2.56-2.68a.39.39,0,0,0-.56,0,.41.41,0,0,0,0,.57l1.7,1.74h-7a.42.42,0,0,0,0,.84h7.35l-2.05,2.19a.48.48,0,0,0,0,.63.39.39,0,0,0,.56,0l2.56-2.68a.44.44,0,0,0,0-.59Zm-3.5,5a.41.41,0,0,0-.4.42v0c0,.55-.39,1.16-.91,1.16h-5.19A1.25,1.25,0,0,1,163.8,258V247.61c0-.59.61-.78,1.09-.78h5.19c.5,0,.91.21.91.78v0a.4.4,0,1,0,.8,0v0a1.57,1.57,0,0,0-1.7-1.61h-5.19a1.73,1.73,0,0,0-1.89,1.61V258a2.06,2.06,0,0,0,1.89,2h5.19a1.91,1.91,0,0,0,1.7-2v0A.41.41,0,0,0,171.38,257.56Z" transform="translate(-163 -246)"/></svg>Logout</a>
					<span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class="partnership__tested">[Validated]</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
				</div>
				<span class="partnership2_s2__h2">торги в режиме<br> реального времени</span>
				<p class="partnership2_s2__p_right">
					Верхний график – это стандартный свечной график, показывающий динамику курса валютной пары.
					<br><br>
					На вертикальной оси координат Y отображается изменение цены валютной пары, а на горизонтальной оси координат
					X отображается время.
					<br><br>
					На графике показана цена bid валютной пары при помощи коричневой (цвет произвольный на усмотрение дизайнера) горизонтальной линии “entry” («вход»), показывающую наш
					вход на рынок, а бирюзовая горизонтальная линия “current” («текущий») отображает текущую стоимость.
					<br><br>
					Нижний график показывает суммы нашей прибыли и убытков. Верхние столбики на этом графике отображают нашу прибыль,
					а нижние столбики отображают наши убытки.
					<br><br>
					На вертикальной оси координат Y можно увидеть значения прибыли или убытков в процентном выражении, а по горизонтальной оси координат X - время.
					<br><br>
					Здесь Вы можете прочитать инструкцию о том, как читать графики Форекс.
				</p>
			</div>
		</div>
	</section>

	<section id="s6" class="pad">
		<div class="wrapper">
			<ul>
				<li id="first" class="active">eur/usd</li>
				<li id="two">gbp/usd</li>
				<li id="three">usd/chf</li>
				<li id="four">usd/jpy</li>
			</ul>
			<div class="wrap">
				<div class="wrapi"></div>
				<!-- <img src="img/s6/bg.png" alt="bg"> -->
				<!-- TradingView Widget BEGIN -->
				<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
				<script type="text/javascript">
				new TradingView.widget({
				  "width": 1142,
				  "height": 584,
				  "symbol": "OANDA:EURUSD",
				  "interval": "1",
				  "timezone": "Etc/UTC",
				  "theme": "White",
				  "style": "1",
				  "locale": "ru",
				  "toolbar_bg": "rgba(255, 255, 255, 1)",
				  "enable_publishing": false,
				  "allow_symbol_change": true,
				  "hideideas": true
				});
				</script>
				<!-- TradingView Widget END -->
			</div>
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
