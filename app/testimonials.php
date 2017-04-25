<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body id="testimonials">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" class="header2_big" style="background-image: url(img/newsroom/bg.png)">
		<h2>TESTIMONIALS</h2>
		<ul>
			<li><a href="testimonials.php" class="active">Video Testimonials</a></li>
			<li class="center_li"><a href="javascript:void(0);">|</a></li>
			<li><a href="testimonials_text.php">Text Testimonials</a></li>
		</ul>
	</section>

	<section id="testimonials_s1" class="pad">
		<div class="wrapper">
			<h2 class="h2">WHAT DO THOSE WHO ALREADY<br> ACHIEVED THE SUCCESS THINK OF FX MANAGER?</h2>
			<h3>We are immeasurably happy to receive the great reviews of our clients daily.</h3>
			<h4>In their own voices they share their experiences and impressions of FX Manager. Their testimonials speak for themselves. Make sure yourself!</h4>
			<ul class="testimonials_ul">
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
				<li>
					<div class="frame">
						<div class="youtube" id="6v2L2UGZJAM" data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720" style="width:100%;height:100%;"></div>			
					</div>
					<span class="testimonials_country">I&#39;m not a Forex trader myself and I do not know how to trade. I heard of FX Manager from my friends who one day started to drive better cars and buy bigger houses.</span>
				</li>
			</ul>
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
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Full name:" title="The minimum login length is 7 symbols. Use letters and digits only." />
						</span>
					</div>
<!-- 					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="*Login:" />
						</span>
					</div> -->
					<div class="form_input">
						<span class="field">
							<select id="country" name ="country" class="regitstration_s3__select"></select>
						</span>
					</div>
					<div class="form_input">
						<span class="field">
							<input class="registration_s2__input" type="text" class="form-control name" name="name" required="" placeholder="Link to your video testimonial:" title="Link to your video testimonial:" />
						</span>
					</div>
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<input type="text" disabled class="regitstration_s3__secret_code" placeholder="W6 8HP">
							<!-- <ul class="regitstration_s3__ul">
								<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-music" aria-hidden="true"></i></a></li>
								<li><a href="#">?</a></li>
							</ul> -->
							<input class="registration_s2__input regitstration_s3__cod form-control" type="text" name="name" required="" placeholder="*Type the code shown" title="The minimum secret answer length is 5 symbols." />
						</span>
					</div>
					<div class="form_input registration_s2__input_last">
						<span class="field">
							<textarea class="registration_s2__input testimonialstext_s2__textarea" type="text" class="form-control name" name="name" required="" placeholder="Your success story or comment:"></textarea>
						</span>
					</div>
					<span class="required_f">*Required fields</span>
					<div class="clear"></div>
					<div class="cb tc">
						<button type="submit" class="btn btn-block registration_s2__button registration_s3__button" name="send">Submit</button>
					</div>
				</div>
			</form>
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

	<!-- REGISTRATION -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="libs/IntlTelInput/js/intlTelInput.min.js"></script>
	<script src="libs/countries/countries.js"></script>
	<script>
		//Submit your own success story!
		function submitStory(){
			$('.testimonialstext_s2').toggleClass('hidden');
		}
		$(function() {
			$("#registration_s1__form_tel").intlTelInput({
				utilsScript:'libs/IntlTelInput/js/utils.js',
				defaultCountry: 'auto',
				preferredCountries: ['ru']
			});
			//ListCountry
			populateCountries("country");
		});
	</script>
	<!-- REGISTRATION -->

</body>
</html>