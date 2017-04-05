<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu invoices_s1_body internal_page">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/invoices/bg.jpg)">
		<h2>Invoices</h2>
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

	<section id="funding_s1" class="pad">
		<div class="wrapper">
			<div class="partnership2_s2__left funding_s1_left">
				<img src="img/invoices/left_img.png" alt="left_img">
			</div>
			<div class="partnership2_s2__right">
				<?php include "account_login.php"; ?>
				<p class="partnership2_s2__p_right">
					At this page you can manage your bank transfer invoices. You can view your invoices, confirm your transfer, print an invoice and cancel an invoice.
					<br><br>
					After you made a bank transfer, click on Confirm Transfer button and enter the transfer details.
				</p>
			</div>
		</div>
	</section>

	<section id="invoices_s1" class="pad">
		<div class="wrapper">
			<table class="invoices_s1__table">
				<tr class="invoices_s1__table_first">
					<td>Invoice Date:</td>
					<td>Invoice amount:</td>
					<td>Status:</td>
					<td>Management:</td>
				</tr>
				<tr>
					<td>Jan 14, 2017, 19:54:37</td>
					<td>EUR 7000</td>
					<td>Active</td>
					<td>
						<a href="invoices_print.php" class="a  button button_hover button2">View Invoice</a>
						<a href="#confirm_transfer" class="a  button button_hover button2 modall_pad">Confirm Transfer</a>
						<a href="#" class="a  button button_hover button2">Print</a>
						<a href="#" class="a  button button_hover button2">Cancel</a>
					</td>
				</tr>
				<tr>
					<td>Jan 10, 2017, 16:51:00</td>
					<td>EUR 7500</td>
					<td>Active</td>
					<td>
						<a href="invoices_print.php" class="a  button button_hover button2">View Invoice</a>
						<a href="#confirm_transfer" class="a  button button_hover button2 modall_pad">Confirm Transfer</a>
						<a href="#" class="a  button button_hover button2">Print</a>
						<a href="#" class="a  button button_hover button2">Cancel</a>
					</td>
				</tr>
				<tr>
					<td>Jan 14, 2017, 16:51:00</td>
					<td>EUR 7000</td>
					<td>Active</td>
					<td>
						<a href="invoices_print.php" class="a  button button_hover button2">View Invoice</a>
						<a href="#confirm_transfer" class="a  button button_hover button2 modall_pad">Confirm Transfer</a>
						<a href="#" class="a  button button_hover button2">Print</a>
						<a href="#" class="a  button button_hover button2">Cancel</a>
					</td>
				</tr>
			</table>
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

	<div class="hidden confirm_transfer" id="confirm_transfer">
		<span class="confirm_transfer__span">TRANSFER CONFIRMATION:</span>
		<br>
		<span class="confirm_transfer__span1">Invoice ID: <span class="confirm_transfer__span1__date">72530/3</span></span>
		<br>
		<span class="confirm_transfer__span1">Amount (EUR): <span class="confirm_transfer__span1__date">€XXXXX</span></span>
		<br>
		<span class="confirm_transfer__span1">Date of transfer: <span class="confirm_transfer__span1__date">XXXXXXX</span></span>
		<br>
		<span class="confirm_transfer__span1">Note: <span class="confirm_transfer__span1__date">10.10.2016</span></span>
		<br>
		<a href="#" class="a button_hover button">Confirm Transfer</a>
	</div>

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

</body>
</html>