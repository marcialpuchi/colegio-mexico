$(window).load(function(e){

	collage();

    var resizeTimer = null;
	$(window).bind('resize', function() {
	    // hide all the images until we resize them
	    $('.collage .Image_Wrapper').css("opacity", 0);
	    // set a timer to re-apply the plugin
	    if (resizeTimer) clearTimeout(resizeTimer);
	    resizeTimer = setTimeout(collage(), 200);
	});

});

var collage = function(){
	$('.collage').removeWhitespace().collagePlus({
		'effect': 'effect-2',
		'fadeSpeed': 2000,
		'targetSize': 200
	});
};