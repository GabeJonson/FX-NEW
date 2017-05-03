<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/money_withdrawal/bg.jpg)">
		<h2>DEMO MONEY WITHDRAWAL</h2>
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
				<form method="POST" class="form-inline" action="javascript:void(null);">
					<input type="text" class="form-control name" name="name" required="" placeholder="Withdrawal method: bank transfer" disabled="" />
					<input type="text" class="form-control" name="number" required="" placeholder="Current Account balance (EUR): 0" />
					<input type="number" min="3000" class="form-control" name="number" required="" placeholder="Withdrawal amount (EUR): 0" />
					<button type="submit" class="btn btn-block button" name="send">Withdraw Money</button>
				</form>
			</div>
			<div class="partnership2_s2__right">
				<?php include "account_login.php"; ?>
				<p class="partnership2_s2__p_right">
					The minimum amount of withdrawal is 3000 EUR.
					<br><br>
					Money withdrawal is processed within 24 hours on business days.
					<br><br>
					Money withdrawal via bank transfer usually takes up to 5 business days, depending on the bank.
				</p>
			</div>
		</div>
			<span class="money_withdrawal__s1">ACTIVE MONEY WITHDFRAWAL REQUESTS:</span>
			<table class="money_withdrawal__table">
				<tr class="money_withdrawal__table_tr_first">
					<td>Withdrawal method:</td>
					<td>Requested amount:</td>
					<td>Request time:</td>
				</tr>
				<tr>
					<td>Bank transfer</td>
					<td>€5000</td>
					<td>Jan 7, 2017, 17:13:47</td>
				</tr>
			</table>
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