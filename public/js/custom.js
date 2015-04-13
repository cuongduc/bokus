/**
 * custom.js
 */

/* Change image of header buttons when hovered */
$(function() {
	$('.head-btn').hover(function() {
		var img = $(this).attr('data-img');
		$(this).children('.btn-img').attr('src', 'img/icon/' + img + '.active.png');
	}, function() {
		var img = $(this).attr('data-img');
		$(this).children('.btn-img').attr('src', 'img/icon/' + img + '.png');
	});

	$('button.add-to-cart').click(function() {
		showAlert($(this));
	});

	$('div.close').click(function() {
		var pe = $(this).parent();
		closeAlert(pe);
	});

	// Show alert message correspond to 'Add to Cart' button
	var showAlert = function(e) {
		var grandparent = $(e).parent().parent();
		var m = grandparent.find('p.title a').text();
		var alert = $('.ui-alert');
		var text = alert.find('p').text();
		var message = '\'' + m + '\'' + ' has been added to your shopping cart';
		alert.children('p').text(message);

		var wWidth = window.innerWidth;
		var eWidth = alert.width();

		alert.css('margin-left', parseFloat(wWidth/2 - eWidth/2));
		alert.fadeIn().delay(3000).fadeOut();
	}

	var closeAlert = function(e) {
		$(e).hide();
	}

	// Add slideup & fadein animation to dropdown
	$('.dropdown').on('show.bs.dropdown', function(e){
		var $dropdown = $(this).find('.dropdown-menu');
		var orig_margin_top = parseInt($dropdown.css('margin-top'));
		$dropdown.css({'margin-top': (orig_margin_top - 10) + 'px', opacity: 0}).animate({'margin-top': orig_margin_top + 'px', opacity: 1}, 150, function(){
			$(this).css({'margin-top':''});
		});
	});

   // Add slidedown & fadeout animation to dropdown
	$('.dropdown').on('hide.bs.dropdown', function(e){
		var $dropdown = $(this).find('.dropdown-menu');
		var orig_margin_top = parseInt($dropdown.css('margin-top'));
		$dropdown.css({'margin-top': orig_margin_top + 'px', opacity: 1, display: 'block'}).animate({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}, 150, function(){
			$(this).css({'margin-top':'', display:''});
	  	});
	});
});

// Flyout
+function($) {
	'use strict';

	var Flyout = function(element, option) {
		this.init(element, option);
	}

	Flyout.TRANSITION_DURATION = 150;

	Flyout.DEFAULT = {
		animation: true,
		placement: 'top',
	}

	Flyout.prototype.constructor = Flyout;

}(jQuery);