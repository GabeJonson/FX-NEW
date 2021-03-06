<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header class="hidden">
<?php include "header.php"; ?>
	</header>

	<section id="invoices_print" class="pad">
		<div class="wrapper">
			<span class="invoices_print__span_top">BANK TRANSFER INVOICE</span>
			<div class="invoices_print__a_wrap">
				<a href="invoices.php" class="invoices_print__a_back a button_hover">Back to Invoices</a>
				<span>|</span>
				<a href="javascript:window.print()" class="invoices_print__a_print"><i class="fa fa-print" aria-hidden="true"></i></a>
			</div>
			<hr>
			<span class="invoices_print__span_middle">BANK TRANSFER INVOICE ID 72530/3</span>
			<p class="invoices_print__p">
				<span class="invoices_print__span_bold">Invoice ID:</span> <span class="invoices_print__span_content">72530/3</span>

				<br><span class="invoices_print__span_bold">Invoice date:</span> <span class="invoices_print__span_content">01/27/2017</span>

				<br><span class="invoices_print__span_bold">Amount (EUR):</span> <span class="invoices_print__span_content">7000</span>


				<br><br><span class="invoices_print__p_content">Transfer money to the bank information below. Take into consideration that a bank transfer may take up to 5 business days.</span><br>


				<br><span class="invoices_print__span_bold">Bank name:</span> <span class="invoices_print__span_content">Barclays</span>

				<br><span class="invoices_print__span_bold">Bank address:</span> <span class="invoices_print__span_content">NY, USA</span>

				<br><span class="invoices_print__span_bold">Bank SWIFT:</span> <span class="invoices_print__span_content">BAR2USAX</span>

				<br><span class="invoices_print__span_bold">Bank account number (EUR):</span>
				 <span class="invoices_print__span_content">049948984858769970</span>

				<br><span class="invoices_print__span_bold">Bank account name:</span> <span class="invoices_print__span_content">Company Name</span>

				<br><span class="invoices_print__span_bold">Beneficiary address:</span> <span class="invoices_print__span_content">NY, USA</span>

				<br><span class="invoices_print__span_bold">Correspondent bank:</span> <span class="invoices_print__span_content">CHASE NYC</span>

				<br><span class="invoices_print__span_bold">Correspondent bank SWIFT:</span> <span class="invoices_print__span_content">XABAC32</span>

				<br><span class="invoices_print__span_bold">Amount (EUR):</span> <span class="invoices_print__span_content">7000 USD</span>

				<br><span class="invoices_print__span_bold">Details of payment:</span> <span class="invoices_print__span_content">Invoice 72530/3 dated 01/27/2017
			</p>
		</div>
	</section>
	
	<div class="hidden">
<?php include "footer.php"; ?>
	</div>

<?php include "script.php"; ?>

</body>
</html>