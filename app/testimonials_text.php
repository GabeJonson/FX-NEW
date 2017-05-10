<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body id="testimonials">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" class="header2_big" style="background-image: url(img/testimonials/bg.png)">
		<h2>TESTIMONIALS</h2>
		<ul>
			<li><a href="testimonials.php">Video Testimonials</a></li>
			<!-- <li class="center_li"><a href="javascript:void(0);">|</a></li> -->
			<li><a href="testimonials_text.php" class="active">Text Testimonials</a></li>
		</ul>
	</section>

	<section id="testimonials_s1" class="pad testimonialstext">
		<div class="wrapper">
			<h2 class="h2">WHAT DO THOSE WHO ALREADY<br> ACHIEVED THE SUCCESS THINK OF FX MANAGER?</h2>
			<h3>We are immeasurably happy to receive the great reviews of our clients daily.</h3>
			<h4>In their own voices they share their experiences and impressions of FX Manager. Their testimonials speak for themselves. Make sure yourself!</h4>
		</div>
		<ol class="testimonialstext_s1_ol">
			<li>
				<div class="wrapper">
					<p>I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses. After my reasonable question, they pointed me to that website. You know, I am amazed! I make good money almost every day! This is a great passive income. All I need to do is to change the currency pairs of my packages from time to time. Thank you very much. You changed my life!</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Gabriel Campbell, USA</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<p>I am quite literally amazed at your accuracy of currency predictions day after day. I admire reading your reports at the end of trading days and watching my profits grow. I&#39;m planning to deposit a good portion of funds from my prime business as Forex copy trading seems to be much more profitable. Keep up the good job, guys!</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Robert Hamilton, New Zealand</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<p>Even though I have been trading for almost 5 years myself, I have found you copy trading system indeed very helpful. I recommend your services to those who cannot trade well but want to get the most from the Forex market.</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Stephen Thompson, UK</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<p>I was pleasantly surprised by the returns flowing into my bank account. First, I was skeptical about the idea of copying trades as I used to be far away from Forex trading. I created a Trial package and finally understood how everything works. Then I created the bigger package and my profit increased significantly and keeps growing. That&#39;s the right place to maximize your capital.</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Luke Carter, Canada</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<p>I worked hard all my life and I consider myself a financially successful person but I am not young anymore and started to think of my retirement. The greatest thing is that I do not require much time to control the process of copy trading. FXM team does its best to feel myself comfortable and confident for my money. You know, I&#39;m absolutely satisfied with the returns from my five packages I opened here.</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Adrien Droit, France</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<p>I never heard of Forex copy trading before. I visited local Forex classes in the past and even traded on Forex myself. I should admit it&#39;s an extremely risky business, especially when a trader is not a pro. Now all of us have an opportunity to join successful professionals by copying their Forex trades. I chose FX Manager because of better transparency and less hassle. All my friends keep thanking me for referring them to this company. FX Manager has set the golden standard for copy trading.</p>
					<div class="testimonialstext_s1_wrap">
						<span class="testimonialstext_s1_wrap_span_first"><img src="img/testimonials/en.png" alt="">Bram Haas, Nederland</span>
						<!-- <span class="testimonialstext_s1_wrap_span_two">16.08.2016</span> -->
					</div>
				</div>
			</li>
		</ol>
		<div class="wrapper">
			<ul class="pagi">
				<li><a href="#" class="pagi_a"><</a></li>
				<li><a href="#" class="pagi_a">1</a></li>
				<li><a href="#" class="pagi_a">2</a></li>
				<li><a href="javascript:void(0);" class="pagi_third">........</a></li>
				<li><a href="#" class="pagi_a">12</a></li>
				<li><a href="#" class="pagi_a">></a></li>
			</ul>
			<span class="testimonials_right button_hover" onclick="submitStory()">Submit your own success story!</span>
		</div>
	</section>

	<section class="pad testimonialstext_s2 hidden">
		<div class="wrapper">
		<span class="testimonialstext_s2__span">Submit your own success story!</span>
			<form method="POST" class="form-inline" action="javascript:void(null);">
				<div class="regitstration_s3__wrap">				
					<div class="form_input">
						<span class="field label_field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" id="testimonial_input_text" required="" title="The minimum login length is 7 symbols. Use letters and digits only." />
							<label for="testimonial_input_text" class="label_form label_form_left_5 label_form_fz_12">*Full name:</label>
						</span>
					</div>
					<div class="form_input">
						<span class="field label_field">
							<select id="country" name ="country" class="regitstration_s3__select"></select>
						</span>
					</div>
					<div class="form_input">
						<span class="field label_field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" id="testimonial_input_link" title="Link to your video testimonial:" />
							<label for="testimonial_input_link" class="label_form label_form_left_5 label_form_fz_12">Link to your video testimonial:</label>
						</span>
					</div>
					<div class="form_input registration_s2__input_last">
						<span class="field label_field">
							<input type="text" disabled class="regitstration_s3__secret_code" placeholder="W6 8HP">
							<input class="registration_s2__input regitstration_s3__cod form-control" type="text" name="name" required="" id="testimonial_input_code" title="The minimum secret answer length is 5 symbols." />
							<label for="testimonial_input_code" class="label_form label_form_left_5 label_form_fz_12">*Type the code shown:</label>
						</span>
					</div>
					<div class="form_input registration_s2__input_last">
						<span class="field label_field label_field_block">
							<textarea class="registration_s2__input testimonialstext_s2__textarea" id="testimonial_input_textarea" type="text" class="form-control name" name="name" placeholder="Your success story or comment:" required=""></textarea>
						</span>
					</div>
					<span class="required_f">*Required field label_fields</span>
					<div class="clear"></div>
					<div class="cb tc">
						<button type="submit" class="btn btn-block registration_s2__button registration_s3__button" name="send">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

	<script>
		function submitStory(){
			$('.testimonialstext_s2').toggleClass('hidden');
		}
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
			populateCountries("country");
		});
	</script>

</body>
</html>