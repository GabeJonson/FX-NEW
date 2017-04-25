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
					<span class="partnership__tested">[tested]</span><span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
					<span class=" partnership_span partnership__four"><i class="fa fa-chevron-left" aria-hidden="true"></i>Logout</span>
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

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Load Scripts End -->

</body>
</html>