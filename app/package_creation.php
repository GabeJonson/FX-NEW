<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/package_creation/bg.jpg)">
		<h2>PACKAGE CREATION</h2>
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
					<input type="text" class="form-control name" name="name" required="" placeholder="Payment method: bank transfer" disabled="" />
					<select name="">
						<option value="" selected="">eur/usd</option>
						<option value="">gbp/usd</option>
						<option value="">usd/chf</option>
						<option value="">usd/jpy</option>
					</select>
					<div class="label_field">
						<input type="text" class="form-control" name="number" required="" id="funding_s1_input_text" />
						<label for="funding_s1_input_text" class="funding_s1_label label_form">Current Account balance (EUR): 0</label>
					</div>
					<div class="label_field">
						<input type="number" min="7000" class="form-control" name="number" required="" id="funding_s1_input_eur" />
						<label for="funding_s1_input_eur" class="funding_s1_label label_form">Package amount (EUR):</label>
					</div>
					<button type="submit" class="btn btn-block button" name="send">Fund Current Account</button>
				</form>
			</div>
			<div class="partnership2_s2__right">
				<?php include "account_login.php"; ?>
				<p class="partnership2_s2__p_right">
					To create a package you need to select a currency pair and enter a package amount.
					<br><br>
					Your Current Account balance can be funded at <a href="account_funding.php" class="a button_hover">Account Funding.</a>
				</p>
			</div>
		</div>
		<section id="deposit_types__s1" class="pad">
			<div class="wrapper">
				<h2>AVAILABLE PACKAGES:</h2>
				<div class="wrap">
					<table>
						<tr>
							<td>Package title</td>
							<td>Package amount (EUR)</td>
							<td>Term (trading days)</td>
							<td>Performance fee (%)</td>
						</tr>
						<tr class="name">
							<td>Trial</td>
							<td>7,000 - 10,000</td>
							<td>60</td>
							<td>57</td>
						</tr>
						<tr class="name">
							<td>Beginner</td>
							<td>10,001 - 20,000</td>
							<td>240</td>
							<td>55</td>
						</tr>
						<tr class="name">
							<td>Standard</td>
							<td>20,001 - 30,000</td>
							<td>240</td>
							<td>50</td>
						</tr>
						<tr class="name">
							<td>Medium</td>
							<td>30,001 - 40,000</td>
							<td>240</td>
							<td>45</td>
						</tr>
						<tr class="name">
							<td>Advanced</td>
							<td>40,001 - 50,000</td>
							<td>240</td>
							<td>40</td>
						</tr>
						<tr class="name">
							<td>Professional</td>
							<td>50,001 - 60,000</td>
							<td>240</td>
							<td>35</td>
						</tr>
						<tr class="name">
							<td>Expert</td>
							<td>60,001 - 70,000</td>
							<td>240</td>
							<td>30</td>
						</tr>
						<tr class="name">
							<td>VIP</td>
							<td>70,001 - UNLIMITED</td>
							<td>240</td>
							<td>27</td>
						</tr>
					</table>
					<a href="registration.php" class="button button2">Create Your Package</a>
				</div>
			</div>
		</section>
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