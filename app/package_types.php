<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/deposit_types/bg.png)">
		<h2>PACKAGE TYPES</h2>
	</section>

	<section id="deposit_types__s1" class="pad">
		<div class="wrapper">
			<h2>TRADE YOUR MONEY WISELY<br> WITH FX MANAGER </h2>
			<h3>Choose the desired package type to copy the trades of FX Manager</h3>
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

	<section id="deposit_types__s2" class="pad">
		<div class="wrapper">
			<h2>PROFIT CALCULATOR</h2>
			<div class="deposit_types__s2__calc">
				<div class="deposit_types__s2__left_span">
					<span class="span">Enter the desired amount (EUR): <img class="znakvoprosa" src="img/1.png" alt="1"><span class="hidden deposit_types__s2_hidden">The minimum package amount is EUR 7,000. The maximum amount is not limited.</span></span>
				</div>
				<input type="text" class="deposit_types__s2_input">
				<button class="deposit_types__s2_button">Estimate Profit</button>
			</div>
			<div class="deposit_types__s2__after_calc">
				<div class="deposit_types__s2__after_calc__left">
					<span class="deposit_types__s2__after_calc_span">Package conditions:</span>

					<span class="deposit_types__s2__after_calc_p">Package type: <span>Trial</span></span>
					<span class="deposit_types__s2__after_calc_p">Package duration: <span>60 trading days</span></span>
					<span class="deposit_types__s2__after_calc_p">Performance fee: <span>57%</span></span>
				</div>
				<div class="deposit_types__s2__after_calc__right">
					<span class="deposit_types__s2__after_calc_span">Estimated profit:</span>

					<span class="deposit_types__s2__after_calc_p">Average profit for a trading day: <img class="znakvoprosa" src="img/1.png" alt="1"><span class="hidden deposit_types__s2_hidden">The value is calculated as an arithmetic mean profit based on FX Manager trading history for all currency pairs. The performance fee is not subtracted.</span> <span>0,00%</span></span>
					<span class="deposit_types__s2__after_calc_p">Estimated daily profit: <img class="znakvoprosa" src="img/1.png" alt="1"> <span class="hidden deposit_types__s2_hidden">FX Manager performance fee is subtracted from these values.</span> <span>0,00% / 00000,00 EUR</span></span>
					<span class="deposit_types__s2__after_calc_p">Estimated return on investment (ROI): <img class="znakvoprosa" src="img/1.png" alt="1"><span class="hidden deposit_types__s2_hidden">FX Manager performance fee is subtracted from these values.</span> <span>00000,00 EUR</span></span>
					<span class="deposit_types__s2__after_calc_p">Estimated closing balance: <img class="znakvoprosa" src="img/1.png" alt="1"><span class="hidden deposit_types__s2_hidden">This value includes the initial amount of the package and all the profit during the package term.</span> <span>00000,00 EUR</span></span>
				</div>
			</div>
			<p class="deposit_types__s2__after_calc_p_last">Due to the nature of Forex trading the exact profit cannot be predicted. The above calculation is an estimate. The calculation of estimated profit is based on <a href="profit_history.php" class="a button_hover">Profit History</a>. Actual profit may be higher or lower than the estimated amounts. You can gain more profit and pay less performance fee by increasing the amount of your package.</p>
		</div>
	</section>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

</body>
</html>