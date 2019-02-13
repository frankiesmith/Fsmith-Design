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
		var scrollDistance = $(window).scrollTop() +120;
	
		// Assign active class to nav links while scolling
		$('section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.main-navigation a.active').removeClass('active');
						$('.main-navigation a').eq(i).addClass('active');
				}
		});
}).scroll();

});