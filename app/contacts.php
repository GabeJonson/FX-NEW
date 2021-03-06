<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body>
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2">
		<h2>CONTACTS</h2>
	</section>

	<section id="contacts_s1" class="pad">
		<div class="wrapper">
			<div class="left">
				<img src="img/contacts/left.jpeg" alt="left">
			</div>
			<div class="right">
				<h2 class="h2">FAST AND RELIABLE<br> 24/7 FX MANAGER<br> CUSTOMER SUPPORT</h2>
				<p>You can contact us at your convenience by phone, live chat, ticket system and e-mail. FX Manager employees will quickly reply to your request. Our customer support is currently provided in English only.</p>
				<ul>
					<li><a href="tel:+37167871851">Phone (International):<br> +371-678-71851</a></li>
					<li><a href="fax:+37167871852">Fax: +371-678-71852</a></li>
					<li><a href="tel:+18552357935">Toll Free (US/Canada):<br> +1-855-235-7935</a></li>
					<li><a href="mailto:support@fxmanager.org">E-mail:<br> support@fxmanager.org</a></li>
					<li><a href="javascript:void(0)" target="_blank">Address: 7th floor,<br>Dzirnavu iela 57a, Riga,<br>LV-1010, Latvia</a></li>
				</ul>
				<ol>
					<li><a href="#" class="button3 chat_ol">Start Live Chat</a></li>
					<li><a href="#reqACallBack" class="button3 spec_ol modall_pad">Submit A Ticket</a></li>
					<li><a href="#calllBack" class="button3 call_ol modall_pad">Request A Callback</a></li>
				</ol>
			</div>
		</div>
	</section>

	<div class="hidden">
		<div class="popap" id="reqACallBack">
			<span class="reqACallBack_span">Send a message</span>
			<form class="reqACallBack_form">
				<div class="label_field">
					<input class="reqACallBack_input" id="req_input_text" type="text">
					<label for="req_input_text" class="label_form label_field_fz_15_color_gray">*Full name:</label>
				</div>
				<div class="label_field">
					<input class="reqACallBack_input" id="req_input_email" type="emai">
					<label for="req_input_emai" class=" label_form label_field_fz_15_color_gray">*E-mail:</label>
				</div>
				<div class="label_field">
					<input class="reqACallBack_input" id="req_input_tema" type="text">
					<label for="req_input_tema" class="label_form label_field_fz_15_color_gray">*Subject:</label>
				</div>
				<textarea class="reqACallBack_input reqACallBack_input--text" type="text" placeholder="*Message:"></textarea>
				<div class="reqACallBack_wrap">
					<div class="label_field label_field_contacts_bottom">
						<input id="req_input_tema_11" class="reqACallBack_input reqACallBack_input--wrap" type="text">
						<label for="req_input_tema_11" class="label_form label_field_fz_15_color_gray">*Type the code shown:</label>
					</div>
					<input class="reqACallBack_input reqACallBack_input--wrap" type="text" placeholder="W6 8HP" disabled="">
				</div>
				<span class="reqACallBack_spanBottom">*Required fields</span>
				<button class="reqACallBack_button">Submit A Ticket</button>
			</form>
		</div>
		<div id="reqACallBackThanks" class="popap">
			<span class="calllBackThanks_span">Your ticket<br> was successfully submitted.</span>
		</div>
	</div>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

</body>
</html>