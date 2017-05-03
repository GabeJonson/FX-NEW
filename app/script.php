<script>var scr = {"scripts":[
	{"src" : "js/libs.js", "async" : false},
	{"src" : "js/common.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="libs/IntlTelInput/js/intlTelInput.min.js"></script>
<script src="libs/countries/countries.js"></script>
<script>
	$(function() {
		$(".phone_call").intlTelInput({
			utilsScript:'libs/IntlTelInput/js/utils.js',
			defaultCountry: 'auto',
			preferredCountries: ['us'],
			customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
			  return "+"+selectedCountryData.dialCode+" " + selectedCountryPlaceholder;
			}
		});
	});
</script>