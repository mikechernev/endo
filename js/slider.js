/**
 * Main page slider
 */
var spotlightSlider_timer,
	SLIDER_INTERVAL = 4000;

function spotlightSlider_setup() {
	var firstFrame = $("#spotlight-slider-0");

	//select nav
	firstFrame.find(".nav").addClass("selected");

	//show description
	firstFrame.find(".description").show();

	//bind events
	$("#spotlight-slider .nav").click(function() {
		if($("#spotlight-slider .spotlight-slider-image").queue().length == 0) {
			clearTimeout(window.spotlightSlider_timer);
			spotlightSlider_scroll($(this));
		}
	});

	window.spotlightSlider_timer = setTimeout(spotlightSlider_slideshow, SLIDER_INTERVAL);
}

function spotlightSlider_slideshow() {
	var current = $("#spotlight-slider .selected").parent().prevAll().length,
		length = $("#spotlight-slider .nav").length,
		next = (current+1) % length;

	spotlightSlider_scroll($("#spotlight-slider-" + next).find(".nav"), function() {
		// queue the next animation frame when the current one is finished
		window.spotlightSlider_timer = setTimeout(spotlightSlider_slideshow, SLIDER_INTERVAL);
	});
}

function spotlightSlider_scroll(nav, callback /* function to fire when animation is done */) {
	//setup variables
	var thumb_index = nav.parent().prevAll().length;
	var scroll_by = parseInt(nav.parent().find(".spotlight-slider-image").css("left"));
	//set "selected" class
	$("#spotlight-slider .nav").removeClass("selected");
	nav.addClass("selected");
	//hide description
	$("#spotlight-slider .description").clearQueue().hide();

	//scroll
	var images = $("#spotlight-slider .spotlight-slider-image"),
		completeCount = images.length;

	images.animate({
		left: "-=" + scroll_by
		
	},
	function() {
		$("#spotlight-slider-" + thumb_index).find(".description").fadeIn();

		// call the callback only once (when all animation is done, not per node)
		if(--completeCount == 0) {
			if (typeof callback == 'function') {
				callback();
			}
		}
	});
}

$(spotlightSlider_setup);

$(function(){
$("#HomepageFeature").mouseover(function(){
	clearTimeout(window.spotlightSlider_timer);
}).mouseout(function(){
	window.spotlightSlider_timer = setTimeout(spotlightSlider_slideshow, SLIDER_INTERVAL);
});

});