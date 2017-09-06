/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */


var speed = 1000;
var topOffset = 50;

$(document).ready(function() {

	var hash = window.location.hash;
    if($(hash).length) scrollToID(hash);

	closeMenu();
	pageScrolling();
	changeNavbarColor();
	collapseNavbar();
	validateForm();
	$('#intro').backstretch(['img/background.jpg']);
});

function scrollToID(id) {
    $('html,body').stop().animate({ scrollTop: $(id).offset().top - topOffset}, speed, 'easeInOutExpo');
};

// Closes the Responsive Menu on Menu Item Click
function closeMenu() {
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});
};

// jQuery for page scrolling feature - requires jQuery Easing plugin
function pageScrolling() {
	$('a[href*=#]').bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - topOffset
		}, speed, 'easeInOutExpo');
		e.preventDefault();
	});
};

function initialize() {
	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
	  center: new google.maps.LatLng(41.389753, 2.112786),
	  zoom: 17,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var myPlace = new google.maps.LatLng(41.389753, 2.112786);

	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({
	      position: myPlace,
	      map: map,
	      title: 'UPC D6 Building'
	  });
};

function changeNavbarColor() {
	var navbar = $('.navbar');
	var navHeight = navbar.height();

	$(window).scroll(function() {
		if($(window).scrollTop() >= navHeight) {
			navbar.addClass('navbar-color');
		}
		else {
			navbar.removeClass('navbar-color');
		}
	});
};

function collapseNavbar() {
	var navbar = $('.navbar');
	var widthLimit = 767;

	if($(window).width() <= widthLimit) {
		navbar.addClass('custom-collapse');
	}

	$(window).resize(function() {
		if($(this).width() <= widthLimit) {
			navbar.addClass('custom-collapse');
		}
		else {
			navbar.removeClass('custom-collapse');
		}
	});
};