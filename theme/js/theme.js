jQuery(document).ready(function($) {
function toggleTopBar() {
  viewportHeight = $( window ).height() -60;
if ($(this).scrollTop() > viewportHeight) {
    $("header").fadeIn();
  } else {
    $("header").fadeOut();
  }
}

$(window).scroll( toggleTopBar );

$(toggleTopBar);


/*jQuery('header').on('click','a',function(e){
  if(e.target.href.indexOf('#') !== -1 ){
    e.preventDefault();
    jQuery('html,body').animate(
      {scrollTop: jQuery('#'+e.target.href.split('#')[1]).offset().top -50},
      600
    );
  }
  return true;
});*/

$(document).ready(function() {
jQuery('header').on('click','a',function(e){
  if(e.target.href.indexOf('#') !== -1 ){
    e.preventDefault();
    jQuery('html,body').animate(
      {scrollTop: jQuery('#'+e.target.href.split('#')[1]).offset().top -50},
      600
    );
  }
  return true;
		});
});

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop() +320;
	
		// Assign active class to nav links while scolling
		$('section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.nav-1 a.active').removeClass('active');
						$('.nav-1 a').eq(i).addClass('active');
				}
		});
        $('section').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('.nav-2 a.active').removeClass('active');
            $('.nav-2 a').eq(i).addClass('active');
        }
    });
}).scroll();

$.stellar({
  horizontalScrolling: false
});

$.fn.autoscroll = function(selector) {
        $('html, body').animate({
            scrollTop: jQuery(this).offset().top -50
        }, 900);
    }

    $('.scroll-down').on('click', function() {
        $('#about-me').autoscroll();
    });


    /* Modal */
$('.show').click(function(e){
        $(e.currentTarget).siblings('.modal-overlay').addClass('active').find('.modal').addClass('active');
    });

    $('.close-modal, .modal-overlay').click(function(e){
        $('.modal, .modal-overlay').removeClass('active');
    });

});