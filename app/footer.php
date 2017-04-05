	<section id="s14" class="pad">
		<div class="wrapper">
			<div class="left">
				<img src="img/logo_footer.png" alt="left" class="s14_logo">
				<img src="img/s14/comodo.png" alt="left" class="s14_comodo">
				<p>All rights reserved. © 2015-2017 FX Manager</p>
			</div>
			<div class="center" style="display: none">
				<h2>Site Map</h2>
				<ul>
				<?php include "menu_footer.php"; ?>
				</ul>
			</div>
			<div class="right">
				<ul class="pjax-container">
					<?php include "menu_footer.php"; ?>
				</ul>
				<ol>
					<li class="soc_seti_li">
						<div class="g-plusone" data-size="medium" data-annotation="none" data-width="300"></div>
					</li>
					<li class="soc_seti_li">
						<div class="g-plus" data-action="share" data-annotation="none"></div>
					</li>
					<li class="soc_seti_li">
						<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</li>
					<li>
						<div class="fb-like" data-href="http://yurvov.com.ua/mndev/fx/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</li>
					<li class="last_li_soc">
						<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="small" data-count="hidden"></div>
					</li>
				</ol>
			</div>
			<div class="right" style="display: none">
				<h2>contacts</h2>
				<ul>
					<li class="first">
						<a href="tel:+380961234567">+3 8096 123 45 67</a>
						<a href="tel:+380961234567">+3 8096 123 45 67</a>
						<a href="tel:+380961234567">+3 8096 123 45 67</a>
					</li>
					<li class="two"><a href="mailto:info@mail.ru">info@mail.ru</a></li>
					<li class="three"><a href="https://www.google.com.ua/maps/place/%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%A8%D0%90/@40.6976637,-74.1197636,11z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127837!4d-74.0059413?hl=ru" target="_blank">Kiev, Street 1, House 1</a></li>
				</ul>
				<ol>
					<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
				</ol>
			</div>
		</div>
		<div class="top">
			<ul class="animsition pjax-container">
				<?php include "menu_fx.php"; ?>
			</ul>
		</div>
	</section>

	<footer style="display: none">
		<div class="wrapper">
			<h3>All rights reserved. © 2015-2017 FX Manager</h3>
			<ul>
				<li><a class="modal" data-fancybox-type="iframe" href="doc/1.html">Delivery policy</a></li>
				<li><a class="modal" data-fancybox-type="iframe" href="doc/2.html">Terms of Payment</a></li>
				<li><a class="modal" data-fancybox-type="iframe" href="doc/3.html">User Agreement</a></li>
				<li><a class="modal" data-fancybox-type="iframe" href="doc/3.html">Гарантия возврата</a></li>
			</ul>
		</div>
	</footer>

	<div class="hidden">
		<div id="modal_login" class="popap">
			<span class="modal_login__name">Account login</span>
			<form method="POST" class="form-inline" action="javascript:void(null);">
				<div class="form_input">
					<span class="field">
						<input type="text" class="form-control name" name="name" required="" placeholder="*Login:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input type="password" class="form-control" name="pass" required=""  placeholder="*Password:" />
					</span>
				</div>
				<div class="form_input">
					<span class="field">
						<input type="text" class="form-control" name="code" required=""  placeholder="*Type the code shown:" />
					</span>
				</div>
				<div class="form_input soc_seti_span">
					<span class="registration_s2__span3 popap_registration_s2">*Required fields</span>
				</div>
				<div class="modal_login__bottom">
					<a href="registration.php" class="modal_login__reg">Register</a>
					<a href="callback.php" class="modal_login__parol">Password reminder</a>
					<button type="submit" class="btn btn-block" name="send">Login</button>
				</div>
			</form>
		</div>
	</div>