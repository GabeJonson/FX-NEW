<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page" id="account_statistics">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/account_statistics/bg.jpg)">
		<h2>ACCOUNT MANAGEMENT/STATISTICS</h2>
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
				<img src="img/account_statistics/left.png" alt="left_img">
			</div>
			<div class="partnership2_s2__right">
				<div class="partnership__login">
					<span class="partnership__tested">[tested]</span><span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
					<a href="#" class=" partnership_span partnership__four"><i class="fa fa-chevron-left" aria-hidden="true"></i>Logout</a>
				</div>
				<p class="partnership2_s2__p_right">
					At this page you can view detailed statistics, select package type, view active and expired packages, and change currency pairs of your active packages.
				</p>
			</div>
		</div>
	</section>

	<section id="account_statistics_s1">
		<div class="wrapper">
			<table class="account_statistics_s1__table">
				<tr class="account_statistics_s1__table_caption">
					<td class="account_statistics_s1__table_tr_first_td"></td>
					<td>Bank transfer:</td>
					<td>Total:</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first account_statistics_s1__table_tr_first_big">Current Account balance: <div class="account_statistics_s1__table_img" data-title="This money does not participate in copy trading"><img class="znakvoprosa" src="img/1.png" alt="1"></div></td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first">Deposit Account balance: <div class="account_statistics_s1__table_img" data-title="This money participates in copy trading"><img class="znakvoprosa" src="img/1.png" alt="1"></div></td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first">Withdrawn from Current Account: </td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first">Partnership commission:</td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first">Bonus profit accrual to Current Account (2.5% per annum) <div class="account_statistics_s1__table_img" data-title="The bonus profit is accrued on every calendar day"><img class="znakvoprosa" src="img/1.png" alt="1"></div></td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
				<tr>
					<td class="account_statistics_s1__table_tr_first">Total profit:</td>
					<td>€0.00</td>
					<td>€0.00</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="account_statistics_s2">
		<div class="wrapper">
			<span class="account_statistics_s2__h2">ACTIVE PACKAGES:</span>
			<table class="account_statistics_s2__table">
				<form>
					<tr class="account_statistics_s2__table_caption">
						<td>ID:</td>
						<td>Package type:</td>
						<td>Amount:</td>
						<td>Profit:</td>
						<td>Creation date:</td>
						<td>Trading days left:</td>
						<td>Current currency pair:</td>
						<td>Performance fee (%):</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="id" value=""> 005284</td>
						<td>Advanced</td>
						<td>€10000.57</td>
						<td>€10000.57</td>
						<td>Jan 17, 2017</td>
						<td>150</td>
						<td>[EUR/USD]</td>
						<td>50%</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="id" value=""> 005284</td>
						<td>Advanced</td>
						<td>€10000.57</td>
						<td>€10000.57</td>
						<td>Jan 17, 2017</td>
						<td>150</td>
						<td>[EUR/USD]</td>
						<td>50%</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="id" value=""> 005284</td>
						<td>Advanced</td>
						<td>€10000.57</td>
						<td>€10000.57</td>
						<td>Jan 17, 2017</td>
						<td>150</td>
						<td>[EUR/USD]</td>
						<td>50%</td>
					</tr>
				</form>
			</table>
			<div class="account_statistics_s2_wrap">
				<select class="account_statistics_s2__select">
					<option value="" selected="">eur/usd</option>
					<option value="">gbp/usd</option>
					<option value="">usd/chf</option>
					<option value="">usd/jpy</option>
				</select>
				<button class="button button_hover account_statistics_s2__button">Change currency pair for the selected packages</button>
				<a href="#" class="account_statistics_s2__a a button_hover">View expired packages</a>		
			</div>
		</div>
	</section>

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
			<h4>*You can create an unlimited number of packages.</h4>
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