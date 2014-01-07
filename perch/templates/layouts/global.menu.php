
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
//variable to hold current window state - small, medium or large
var windowState = 'large';

//check initial width of the screen and respond with appropriate menu
$(document).ready(function(){
	var sw = document.body.clientWidth;
	if (sw < 768) {
		smMenu();
	} else {
		lgMenu();
	}
});


//take care of resizing the window

$(window).resize(function(){
	var sw=document.body.clientWidth;
	if(sw < 768 && windowState !='small'){
		smMenu();
	}

	if (sw > 750 && windowState != 'large') {
		lgMenu();
	}

});

//handle menus for small screen
function smMenu(){
	//create the menu toggle
    $('.topMenu').before('<div class="menuToggle"><a href="#">menu<span class="indicator">+</span></a></div>');


    // wire up clicks and changing the various menu states
	//we'll use clicks instead of touch in case a smaller screen has a pointer device
	//first, let's deal with the menu toggle
	$('.menuToggle a').click(function() {
		//expand the menu
		$('.topMenu').toggleClass('expand');
		// figure out whether the indicator should be changed to + or -
		var newValue = $(this).find('span.indicator').text() == '+' ? '-' : '+';
		// set the new value of the indicator
		$(this).find('span.indicator').text(newValue);
});
//indicate current window state
windowState = 'small';
}

//handle menu for large screens
function lgMenu() {
	// unbind click and touch events
  $('menuToggle a').off('click');
  $('.topMenu h3').off('click touchstart');
  $('html').off('touchstart');
  $('#mainNav').off('touchstart');

  //remove span tags inside the menu
  $('topMenu h3').find('ulindicator').remove();

  //remove menu toggle
  $('.menuToggle').remove();

  //indicate current window state
  windowState='large';
}


</script>