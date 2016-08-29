$(function () {
	var firstPhaseAnimation = function () {
		var initialDelay = 2000;
		var secondDelay = initialDelay + 3000;
		//var thirdDelay = secondDelay + 3000;
		$('#site-title, #header-img-box > img').delay(initialDelay).fadeIn(3000);
		$('#site-sub-title').delay(secondDelay).fadeIn(3000,secondPhaseAnimation);
		$('.service-box').hide();
	}
	
	var secondPhaseAnimation = function(){
		var animateDuration = 2500;
		$('.navbar , main, footer').fadeIn(2500);
		$( '#page-header' ).animate({
			height: "250px",
			paddingTop: "25px",
		}, {
			duration :animateDuration,
			queue: false, 
			complete: function() {
				// restore scoll functionality on complete
				$('html, body').css({
				    'overflow': 'auto',
				    'height': 'auto'
				});
			}
		}
		);
		$( '#title-boxes' ).animate({
			marginTop: "75px",
		}, {
			duration :animateDuration,
			queue: false, 
			complete: function() {
			}
		}
		);
	}

	//Document setup

	// Disable scroll. Restored after secondPhaseAnimations.
	$('html, body').css({
	    'overflow': 'hidden',
	    'height': '100%'
	});
	var serviceBoxOffset = $('.service-box').offset();
	console.log(serviceBoxOffset);
	$('#page-header').height(  $( window ).height() );
	$('.navbar , main, footer').hide();
	// Get combined height of title and subtitile for vertical align
	var $titleBoxHeight = $('#site-title').outerHeight() + $('#site-sub-title').outerHeight();
	// MarginTop = screen 50% - combined title heights
	$('#title-boxes').css("marginTop", ($( window ).height() / 2) - $titleBoxHeight);
	// Hide all title box items individually so they can be displayed individually
	$('#site-title, #site-sub-title, #header-img-box > img').hide();

	// Prepare .servicebox's for fade in
	
	//
	
	// Trigger first phase animations

	firstPhaseAnimation(); // NB Second phase animations are triggered from with this function

	// Fade in Service boxes
	$(document).on("scroll", {top: serviceBoxOffset.top},function(event){
		if($(document).scrollTop() > (event.data.top - ( ($(window).height() * 2) - 350) ) ) {
			console.log("GO");
			$('.service-box').fadeIn(2000);
		}
	});
});