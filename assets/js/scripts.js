jQuery(function ($) {
	function closeSearch() {
		var $form = $('.navbar-collapse form[role="search"].active')
		$form.find('input').val('');
		$form.removeClass('active');
	}

	// Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
	$(document).on('hover', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
		event.preventDefault();
		var $form = $(this).closest('form'),
		$input = $form.find('input');
		$form.addClass('active');
		$input.focus();
	});
	
	$(document).on('click', '.navbar-collapse form[role="search"].active span.cross-btn', function(event) {
		event.preventDefault();
		var $form = $(this).closest('form');
		$input = $form.find('input');
		$input.val('');
		$form.removeClass('active');
	});
	// ONLY FOR DEMO // Please use $('form').submit(function(event)) to track from submission
	// if your form is ajax remember to call `closeSearch()` to close the search container
	
	
	$('#hero-carousel').carousel({
		interval: 4000
	}); 
	
	$('.play-video').on('click', function (e) {
		var $src= $(this).next().find('iframe')[0].src;
		if($src.indexOf('autoplay=1') > -1) {
			
			$(this).next().find('iframe')[0].src = $src.split('?')[0]+"?autoplay=0";
		} else {
			$(this).next().find('iframe')[0].src = $src.split('?')[0]+"?autoplay=1";
		}
    	$("#hero-carousel").carousel('pause');
	});
	
	$('#cat-carousel').carousel({
		interval: 4000
	});
	
	$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
	});
	$('.navbar .dropdown > a .caret').on('touchstart click', function() {
		jQuery(this).parent('a').next('ul').toggle();
		return false;
	});
	
});

jQuery(window).load(function() {
	jQuery('.categories-sec .container').css('display', 'block');
});

