$(function() {

	//NProgress
	$(document).pjax("a", '.pjax-container');
	$(document).on('pjax:start', function() { NProgress.start(); });
	$(document).on('pjax:end',   function() { NProgress.done();  });

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	//fancybox
	$("a.modal").fancybox();
	$("a.modall_pad").fancybox({
		padding: 0,
		margin: 0,
		title: false
	});

	//PageScroll2id
	$("a.scroll").mPageScroll2id({
		scrollSpeed: 500
	});

	//youtube
	"use strict";
	$(function() {
		$(".youtube").each(function() {
        // Based on the YouTube ID, we can easily find the thumbnail image
        $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

        // Overlay the Play icon to make it look like a video player
        $(this).append($('<div/>', {'class': 'play'}));

        $(document).delegate('#'+this.id, 'click', function() {
            // Create an iFrame with autoplay set to true
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?rel=0&autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url+='&'+$(this).data('params');

            // The height and width of the iFrame should be the same as parent
            var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

            // Replace the YouTube thumbnail with YouTube HTML5 Player
            $(this).replaceWith(iframe);
        });
    });
	});
	
	$('#otz').slick({
		dots: true,
		infinite: false,
		speed: 500,
		arrows: false,
		cssEase: 'linear',
		pauseOnHover: false,
		autoplay: true,
		//fade: true,
		autoplaySpeed: 5000,
		dots: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
		  {
		    breakpoint: 1250,
		    settings: {
		      slidesToShow: 1,
		      slidesToScroll: 1,
		      dots: true
		    }
		  }
		]
	});
	$('#s12 .right').click(function(){
	    $("#otz").slick('slickNext');
	});	
	$('#s12 .left').click(function(){
	    $("#otz").slick('slickPrev');
	});
	$("#otz").slick('slickNext');
	$("#otz").slick('slickPrev');

	$('#otz_text').slick({
		dots: true,
		infinite: true,
		speed: 500,
		arrows: false,
		cssEase: 'linear',
		pauseOnHover: false,
		autoplay: true,
		//fade: true,
		autoplaySpeed: 5000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		  {
		    breakpoint: 1250,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1,
		      dots: true
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 1,
		      slidesToScroll: 1,
		      dots: true
		    }
		  },
		]
	});
	$('#s12 .right_otz_text').click(function(){
	    $("#otz_text").slick('slickNext');
	});	
	$('#s12 .left_otz_text').click(function(){
	    $("#otz_text").slick('slickPrev');
	});
	$("#otz_text").slick('slickNext');
	$("#otz_text").slick('slickPrev');

	$('#s4 .text').slick({
		dots: true,
		infinite: true,
		speed: 500,
		arrows: false,
		cssEase: 'linear',
		pauseOnHover: false,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.right_slick',
		fade: true
	});
	$('#s4 .right_otz_text').click(function(){
	    $("#s4 .text").slick('slickNext');
	});	
	$('#s4 .left_otz_text').click(function(){
	    $("#s4 .text").slick('slickPrev');
	});

	$('#s4 .right_slick').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows: false,
		cssEase: 'linear',
		pauseOnHover: false,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '#s4 .text',
		fade: true
	});

	//tabs
	$('#s1 ul li').click(function(){
		$('#s1 ul li').removeClass('active');
		$(this).addClass('active');
		$('#s1 ol').css('display', 'none');
		switch($(this).attr("id")) {
			case 'first':
				$('#s1 .first').css('display', 'block');
				$('#s1 h3').html("History of recent profit for EUR/USD:");
			break;

			case 'two':
				$('#s1 .two').css('display', 'block');
				$('#s1 h3').html("History of recent profit for GBP/USD:");
			break;

			case 'three':
				$('#s1 .three').css('display', 'block');
				$('#s1 h3').html("History of recent profit for USD/CHF:");
			break;

			case 'four':
				$('#s1 .four').css('display', 'block');
				$('#s1 h3').html("History of recent profit for USD/JPY:");
			break;
		}
	});

	//select
	$('header .li_two a').click(function(){
	    $("header select").toggleClass('active');
	});
	$('#hmt').click(function(){
	    $("header .menu").toggleClass('active_menu');
	});

	//table
	$("#right_i").click(function(){
		var x = $("#s5 .wrap").scrollLeft();
		$("#s5 .wrap").scrollLeft(x+100);
	});
	$("#left_i").click(function(){
		var x = $("#s5 .wrap").scrollLeft();
		$("#s5 .wrap").scrollLeft(x-100);
	});

	//menu header overflow
	$('#hmt').click(function(){
		if($("header").hasClass('header_active')){
			function func() {
			  $("header").removeClass('header_active');
			}
			setTimeout(func, 500);
		}else{
			$("header").addClass('header_active');
		}
	});

	//terms_of_service
	$('.terms_of_service__s2_ul li').click(function(){
		if($(this).hasClass('visib')){
			$(this).children('.plus').text('+');
		}
		else{
			$(this).children('.plus').text('-');
		}
		$(this).toggleClass('visib');
		$(this).children('p').slideToggle();
	});

	//country
	$( "#country" ).click(function() {
		$(this).css('color','#000');
	});
	$( "#country2" ).click(function() {
		$(this).css('color','#000');
	});

	//news
	$( ".newsroom_s2__news" ).click(function() {
	  $(this).closest(".wrapi").find(".text-poster").slideToggle( "slow", function() {});
	});

	//registration_step_2
	$( "#regitstration_s2 .registration_s2__span2" ).click(function() {
		$('#regitstration_s2_sms').toggleClass('hidden');
		$('#regitstration_s2_email').toggleClass('hidden');
		if($(this).hasClass('click')){
			$(this).removeClass('click');
			$(this).html("I haven't received the verification code via e-mail. Send SMS to my mobile phone number.");
		}else{
			$(this).addClass('click');
			$(this).html("I haven't received the verification code via SMS. Send it via email.");
		}
	});

	$("#registration_s2__input__partnership").focusout(function() {
		if($(this).val() != 0){
			$("#regitstration_s2 .registration_s1__mobile2").fadeOut();
		}
	});

	//wrapi - forex-trading
	$('#s6 .wrap .wrapi').click(function(){
		$(this).remove();
	});

});