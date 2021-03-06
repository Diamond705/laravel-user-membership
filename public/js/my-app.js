(function($){

	/* ---------------------------------------------- /*
	 * Preloader
	/* ---------------------------------------------- */

	$(window).load(function() {
		$('.status').fadeOut();
		$('.preloader').delay(350).fadeOut('slow');
	});

	$(document).ready(function() {

		/* ---------------------------------------------- /*
		 * Animated scrolling / Scroll Up
		/* ---------------------------------------------- */

		$('a[href*=#]').bind("click", function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
			}, 1000);
			e.preventDefault();
		});

		

		$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
		});

		/* =======================================
		 * Video Embed Async Load
		 * =======================================
		 */
		$( window ).on( 'load', function() {
			$( '.video-async' ).each( function( i, el ) {
				var $el = $( el ),
				    source = $el.data( 'source' ),
				    video = $el.data( 'video' ),
				    color = $el.data( 'color' );

				if ( source == 'vimeo' ) {
					$el.attr( 'src', '//player.vimeo.com/video/' + video + ( color ? '?color=' + color : '' ) );
				} else if ( source == 'youtube' ) {
					$el.attr( 'src', '//www.youtube.com/embed/' + video + '?rel=0' );
				}

			});
		});


		

		//-------Appearence of navigation----------
		  
		  $(window).scroll(function() {
			  
			//if (winWidth > 767) {
			  var $scrollHeight = $(window).scrollTop();
			  if ($scrollHeight > 600) {
				$('#header').slideDown(400);
			  } else{
				$('#header').slideUp(400);
			  }
			//}
			
			  //got o top
			  if ($(this).scrollTop() > 200) {
					$('#go-to-top a').fadeIn('slow');
				  } else {
					$('#go-to-top a').fadeOut('slow');
			  }  
  });
  
  

		/* ---------------------------------------------- /*
		 * WOW Animation When You Scroll
		/* ---------------------------------------------- */

		wow = new WOW({
			mobile: false
		});
		wow.init();

	});

/* =======================================
		 * Video Embed Async Load
		 * =======================================
		 */
		$( window ).on( 'load', function() {
			$( '.video-async' ).each( function( i, el ) {
				var $el = $( el ),
				    source = $el.data( 'source' ),
				    video = $el.data( 'video' ),
				    color = $el.data( 'color' );

				if ( source == 'vimeo' ) {
					$el.attr( 'src', '//player.vimeo.com/video/' + video + ( color ? '?color=' + color : '' ) );
				} else if ( source == 'youtube' ) {
					$el.attr( 'src', '//www.youtube.com/embed/' + video + '?rel=0' );
				}

			});
		});


/* Newsletter */
	$('.newsletter_wrapper .newsletter_form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'email':$('input[name="nf_email"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p.newsletter_success_box').show();
					});
				});
				e.preventDefault();
			}
		});
	});	

})(jQuery);




