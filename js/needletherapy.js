$(function () {
	var startDelay = 1000;
	$( ".header" ).delay(startDelay).animate({
		height: "200px",
		paddingTop: "25px",
	}, 1000, function() {
	    // Animation complete.
	});
	var serviceBoxOffset = $('.service-box').offset();
	console.log(serviceBoxOffset.top);
	$(document).on("scroll",function(serviceBoxOffset){
		console.log($(document).scrollTop());
	    if($(document).scrollTop()>100){
			$( ".navbar" ).animate({
				height: "50px",
				paddingTop: "0px",
			}, { 
				duration: 1000, 
			    step: function() {
			      $( ".navbar").css("overflow","visible");
			    }
			}
			    // Animation complete.
			);
			$( ".navbar-brand" ).animate({
				fontSize: "24px",
			}, 1000, function() {
			    // Animation complete.
			});
		}
		if($(document).scrollTop() < serviceBoxOffset.top) {
			console.log("GO!");
			$('.service-box').fadeOut();
		}
	});
});