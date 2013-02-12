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
		alert($(this).text());
	});
	$('.search-lang li').click(function(){
		$('#search-home-tutorials-language').val($(this).text());
		alert($(this).text());
	});
    $('.jcarousel').jcarousel({
        //auto: 3,
        //wrap: 'last',
        //initCallback: mycarousel_initCallback
    });
   
   /*
    Placeholder.init({
	    classFocus: "normal",
	    classBlur:  "placeholder",
	});
 */
});

/* add menu hover state */

// side nav bar drop down
   $('#main-menu li a').hover(function(){
     $(this).addClass('hover');
   }, function(){
     $(this).removeClass('hover');
   });
