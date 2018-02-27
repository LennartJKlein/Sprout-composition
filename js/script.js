var tooltipNeeded = true;
var cookieWidth = null;

// Track window resizing
var screenWidth = $(window).width();
$(window).bind('resize', function(e) {
	screenWidth = $(window).width();
    if (!$(e.target).hasClass('ui-resizable')) {
		resetHeaderWidth(screenWidth);
    }
});

// Reveal elements on scroll
// TODO

// On page load
$(function() {

	resetHeaderWidth(screenWidth);

	// Resizing of navigation
	cookieWidth = $.cookie("sprout-nav-width");
	var minWidth = 100;
	var maxWidth = 500;
	$("#header").resizable({
		autoHide: true,
		containment: "document",
		handles: "e",
		minWidth: minWidth,
		maxWidth: maxWidth,
		resize: function(e,ui) {
			if (ui.size.width - minWidth <= 15) {
				$("header").addClass("minimum");
			} else {
				$("header").removeClass("minimum");
			}
		},
		stop: function(e,ui) {
			$.cookie("sprout-nav-width", ui.size.width, { path: "/" });
			cookieWidth = $.cookie("sprout-nav-width");
			if (shake != null) {
				hideTooltip(shake);
			}
		}
	});

	// Tooltip for resizing navigation
	if ($(window).width() > 768) {	
		if (cookieWidth == null && $(window).width() > 768) {
			$("#header").append("<div class=\"header-resize-tip\"><i class=\"fa fa-arrows-h\"></i></div>");
			var shake = setInterval(shakeTooltip, 2000);
			$('.header-resize-tip').click(function() {
				hideTooltip(shake);
			});
		} else {
			tooltipNeeded = false;
		}
	}

	// Show search field when navigation minimized
	$(document).on("focus",".minimum .search-field", function(){
		var inputOffset = $(".search-field").offset();
		$(".search-field").css({"top": - inputOffset.top.toFixed() + "px"});
		$(".search-placeholder").show();
		var inputHeight = $(".search-field").outerHeight();
		$(".search-resultscontainer").addClass("open").css({"top": inputHeight + "px"}).slideDown();
	});
	$(document).on("blur",".minimum .search-field", function(){
		$(".search-field").css("top","0");
		$(".search-placeholder").hide();
		$(".search-resultscontainer").removeClass("open").slideUp();
	});

	// Filter articles on homepage
	$(".articleFilter-button").on("click", function(){
		if (!$(this).hasClass("button--solid")) {
			var tag = $(this).attr("name");
			if (tag !== "") {
				$(".articleFilter-button").each(function(){
					$(this).removeClass("button--solid");
				});

				$(this).toggleClass("button--solid");

				$(".card").each(function(){
					$(this).show();
				});

				$(".card").not(".card[tag='"+ tag +"']").each(function(){
					$(this).hide();
				});
			}
		} else {
			$(".articleFilter-button").each(function(){
				$(this).removeClass("button--solid");
			});

			$(".card").each(function(){
				$(this).show();
			});
		}
	});

	$(".articleAuthor-toggle").on("click", function(){
		$(this).toggleClass("fa-chevron-down");
		$(this).toggleClass("fa-chevron-up");
		var authorInfo = $(this).parent().parent().find(".articleAuthor-expand");
		authorInfo.slideToggle(400);
		authorInfo.toggleClass("open");

	});

});

function resetHeaderWidth(screenWidth) {
	if (screenWidth <= 800 || cookieWidth == null) {
		// No resizing for mobile
		$("#header").css("width", "");

	} else if (screenWidth >= 800 && screenWidth <= 1000) {
    	$("#header").css("width", "115px");
    	$("#header").addClass("minimum");

    } else {

		$("#header").css("width", cookieWidth + "px");

		if (cookieWidth <= 115) {
			$("#header").addClass("minimum");
		} else {
			$("#header").removeClass("minimum");
		}
	}
}

function shakeTooltip() {
	if (tooltipNeeded) {
		$('.header-resize-tip').addClass("pulse");
		$('#header .ui-resizable-e').addClass("pulse");
		$('.header-resize-tip').effect('shake', {distance:3, times:4}, 2000);
		$('#header .ui-resizable-e').show();
	}
}

function hideTooltip(loop) {
	tooltipNeeded = false;
	$('.header-resize-tip').removeClass("pulse");
	$('#header .ui-resizable-e').removeClass("pulse");
	$('.header-resize-tip').fadeOut(600);
	clearInterval(loop);
}

function toggleNav() {
	$("#nav").toggleClass("open");
	$(".navToggle").toggleClass("open")
}

function toggleSharePopup() {
	$("#sharePopup").toggleClass("open");
	$(".shareToggle").toggleClass("open")
}

function loginToggle() {
	$("body").toggleClass("logged-in");
}

function toggleForm(e) {
	$(".login-forms").slideToggle();
	$(".menu-user.loggedIn-hide").toggleClass("open");
	$(".menu-register .login-field:first").focus();
}

function openForm(e) {
	if (e == "register") {
		$(".menu-login").hide();
		$(".menu-register").show();
	} else if (e == "login") {
		$(".menu-register").hide();
		$(".menu-login").show();
	}
	$(".login-forms").slideDown();
	$(".menu-user.loggedIn-hide").addClass("open");
}

function toggleLoginForm() {
	$(".menu-register").slideToggle();
	$(".menu-login").slideToggle();
}