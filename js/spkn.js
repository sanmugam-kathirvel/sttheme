function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
jQuery(document).ready(function() {
	$('.search-foss li').click(function(){
		$('#search-home-tutorials-foss').val($(this).text());
		//alert($(this).text());
		$('.search-foss li div.selected').css({'display': 'none'});
		$(this).children('div').css({'display': 'block'});
	});
	$('.search-lang li').click(function(){
		$('#search-home-tutorials-language').val($(this).text());
		//alert($(this).text());
		$('.search-lang li div.selected').css({'display': 'none'});
		$(this).children('div').css({'display': 'block'});
	});
	// side nav bar drop down
	$('#main-menu li a').hover(function(){
		$(this).addClass('hover');
	}, function(){
		$(this).removeClass('hover');
	});
    $('.jcarousel').jcarousel({
    	   "wrap" : "circular",
         "auto": 3,
         "animation" : "slow",
         "scroll": 3,
         "initCallback": mycarousel_initCallback
    });
   
   /*
    Placeholder.init({
	    classFocus: "normal",
	    classBlur:  "placeholder",
	});
 */
 
	$ ('.block .content ul li:even, .pre-request tr:even').addClass('even');
	$ ('.block .content ul li:odd, .pre-request tr:odd').addClass('odd');
});

/* add menu hover state */

// side nav bar drop down
   $('#main-menu li a').hover(function(){
     $(this).addClass('hover');
   }, function(){
     $(this).removeClass('hover');
   });
