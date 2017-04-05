<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/trading/bg.jpg)">
		<h2>Ежедневный торговый демо отчёт</h2>
	</section>

	<section id="trading_s1" class="pad">
		<div class="wrapper">
			<img src="img/trading/left.png" alt="left" class="trading_s1__left">
			<p class="trading_s1__right"><span>Ежедневный отчет торгов за 27 мая 2016 года</span>
			<br><br>
			Номер счёта: <span>0000000001</span>
			<br>
			Имя клиента: <span>Mark Jacobs</span>
			<br>
			ID депозита: <span>0000002</span>
			<br>
			Валютная пара депозита: <span>EUR/USD</span>
			<br>
			Дата отчета: <span>27 мая 2016</span>
			<br><br>
			<a href="#" class="button_hover">Назад к Календарю Торгов</a>
			<a href="#" class="trading_s1__a_right trading_s1__a_right_last"><img src="img/trading/2.png" alt="2"></a>
			<a href="#" class="trading_s1__a_right"><img src="img/trading/1.png" alt="1"></a></p>
		</div>
		<div class="wrapper">
			<div class="trading_s1__wrap">
				<table class="trading_s1__table">
					<tr class="trading_s1__table_first">
						<td>Дата открытия</td>
						<td>Дата закрытия</td>
						<td>Валюта</td>
						<td>Действие</td>
						<td>Цена открытия</td>
						<td>Цена закрытия</td>
						<td>Пипсы</td>
						<td>Прибыль (%)</td>
					</tr>
					<tr>
						<td>2016-01-24<br> 01:00:00</td>
						<td>2016-01-24<br> 01:03:50</td>
						<td>EUR/USD</td>
						<td>Покупка</td>
						<td>1.163900</td>
						<td>1.163905</td>
						<td>2.00</td>
						<td>+0.01</td>
					</tr>
					<tr>
						<td>2016-01-24<br> 01:00:00</td>
						<td>2016-01-24<br> 01:03:50</td>
						<td>EUR/USD</td>
						<td>Покупка</td>
						<td>1.163900</td>
						<td>1.163905</td>
						<td>2.00</td>
						<td>+0.01</td>
					</tr>
					<tr>
						<td>2016-01-24<br> 01:00:00</td>
						<td>2016-01-24<br> 01:03:50</td>
						<td>EUR/USD</td>
						<td>Покупка</td>
						<td>1.163900</td>
						<td>1.163905</td>
						<td>2.00</td>
						<td>+0.01</td>
					</tr>
					<tr>
						<td>2016-01-24<br> 01:00:00</td>
						<td>2016-01-24<br> 01:03:50</td>
						<td>EUR/USD</td>
						<td>Покупка</td>
						<td>1.163900</td>
						<td>1.163905</td>
						<td>2.00</td>
						<td>+0.01</td>
					</tr>
				</table>
			</div>
			<img src="img/trading/left_bottom.png" alt="left_bottom" class="trading_s1__left_bottom">
			<div class="trading_s1__right_bottom">
				<span class="trading_s1__span_first">Краткий отчет:</span>
				<p class="trading_s1__p">Общее количество торговых операций:<br>
				Количество положительных (числом и в %): <span>XX (XX%)</span><br>
				Количество отрицательных (числом и в %): <span>XX (XX%)</span><br>
				Общая прибыль (в пипсах): <span></span><br>
				Общая прибыль (в %): <span></span><br>
				Комиссия компании (в %): <span>XX% (название депозита)</span><br>
				Общая прибыль после вычета комиссии компании (%): <span>XX</span><br>
				Общая прибыль после вычета комиссии компании (EUR): <span>XXX.XX</span></p>
			</div>
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

</body>
</html>