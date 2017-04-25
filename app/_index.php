<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/partnership/bg.jpg)">
		<h2>Детали партнерства</h2>
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