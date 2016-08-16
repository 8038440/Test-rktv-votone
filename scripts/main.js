jQuery(document).ready(function($){
	
// back to top button script
	var offset = 300,
		scroll_top_duration = 700,
		$back_to_top = $('.s-btn-top');

	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('btn-visible') : $back_to_top.removeClass('btn-visible');
	});

	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

// input customize script
	$(".npt").focus(function() {
	  $(this).prev().addClass("focus-input");
	});
	$("label").click(function() {
	  $(this).addClass("focus-input");
	});	
	
// ajax form submission

		
	
	
});

