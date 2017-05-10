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
			<li><a href="testimonials.php" class="active">Video Testimonials</a></li>
			<!-- <li class="center_li"><a href="javascript:void(0);">|</a></li> -->
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