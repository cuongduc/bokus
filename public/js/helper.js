/**
 * helper.js: set of small utilities for ui
 *
 * cuongdd
 */

function showCalloutOnFocus(e){
	$(e).focus(function() {
		$(this).next().fadeIn(300);
	});
	$(e).focusout(function() {
		$(this).next().fadeOut(300);
	});
}