/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */



if ($('body').hasClass('index')) {
	google.maps.event.addDomListener(window, 'load', initialize);
}

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

function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	return pattern.test(emailAddress);
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

function validateForm() {
	$("#contact-form").validate({
		rules: {
			cname: {
				required: true
			},
			cmail: {
				required: true,
				email: true
			},
			cmess: {
				required: true
			}
		},

		messages: {
			cname: {
				required: "You must enter a name"
			},
			cmail: {
				required: "You must enter an e-mail",
				email: "Enter a valid e-mail"
			},
			cmess: {
				required: "You must enter a message"
			}
		},

		submitHandler: function(form) {
			$(form).ajaxSubmit({
				type: "POST",
				url: "contactForm.php",
				data: $(form).serialize(),
				beforeSend: function() {
							$('#contact-form button').empty();
							$('#contact-form button').removeClass('btn-success');
							$('#contact-form button').addClass('btn-warning');
							$('#contact-form button').append('<i class="fa fa-cog fa-spin"></i> Wait...');
						},
				success: function(response) {

					$('#contact-form').fadeOut(200);
					$('.ajax-response').html("Thank you for contacting!");
					$('.ajax-response').fadeIn(500);
					console.log("success");
				},
	                    
	            error: function() {
	                   console.log("error"); 
	            }
			})
		}
	});
};