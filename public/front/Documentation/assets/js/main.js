
// Select all links with hashes
	var headerHeight = $(".header_wrap").height() - $('body').data('offset');
    $('a.page-scroll').on('click', function(event) {
        // On-page links
		$('a.page-scroll.active').removeClass('active');
		$(this).closest('.page-scroll').addClass('active');
        if ( location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname ) {
          // Figure out element to scroll to
          var target = $(this.hash),
              speed= $(this).data("speed") || 800;
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - headerHeight
            }, speed);
          }
        }
    });	
	
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 150) {
			$('#scroll_top').fadeIn();
		} else {
			$('#scroll_top').fadeOut();
		}
	});
	
	$("#scroll_top").on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 600);
		return false;
	});


