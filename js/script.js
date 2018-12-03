var tooltipNeeded = true;
var cookieWidth = null;
var url = null;

// On page load
$(function() {

	// Global variables
	var screenWidth = $(window).width(),
		scrollWindow = $("#page"),
		windowHeight = $(scrollWindow).height(),
		windowHeightHalf = windowHeight / 2,
		scrollPosition = 0;
	
	$(scrollWindow).on("scroll", function(e){	
		scrollPosition = $(scrollWindow).scrollTop();
		checkFloaters();
	});
	
	// Resizes the navigation
	initiateNavigationWidth();

	// Shows search field when navigation minimized
	if (checkMQ() == "tablet-landscape" || checkMQ() == "desktop") {
		$(document).on("focus",".minimum .search__field", function(){
			var inputOffset = $(".search__field").offset();
			$(".search__field").css({"top": - inputOffset.top.toFixed() + "px"});
			$(".search__placeholder").show();
			var inputHeight = $(".search__field").outerHeight();
			$(".search__resultscontainer").addClass("open").css({"top": inputHeight + "px"}).slideDown();
		});
		$(document).on("blur",".minimum .search__field", function(){
			$(".search__field").css("top","0");
			$(".search__placeholder").hide();
			$(".search__resultscontainer").removeClass("open").slideUp();
		});
	}

	// Navigation on mobile
	$(".navToggle").on("click", function(){
		toggleNavigation();
	});
	function toggleNavigation() {
		$(".navToggle").toggleClass("open");
		$(".nav").toggleClass("open");
	}
	function openNavigation() {
		$(".navToggle").addClass("open");
		$(".nav").addClass("open");
	}
	function closeNavigation() {
		$(".navToggle").removeClass("open");
		$(".nav").removeClass("open");
	}

	// Toggles extra info on author
	$(".articleAuthor__summary").on("click", function(){
		var authorInfo = $(this).parent().parent().find(".articleAuthor__expand"),
			infoToggle = $(this).parent().find(".articleAuthor__toggle");
		infoToggle.toggleClass("fa-chevron-down");
		infoToggle.toggleClass("fa-chevron-up");
		authorInfo.slideToggle(400);
		authorInfo.toggleClass("open");
	});

	function initiateNavigationWidth() {
		cookieWidth = $.cookie("sprout-nav-width");
		var minWidth = 100;
		var maxWidth = 500;

		$(window).bind("resize", function(e) {
			screenWidth = $(window).width();
			if (!$(e.target).hasClass("ui-resizable")) {
				resetHeaderWidth(screenWidth);
			}
		});

		resetHeaderWidth(screenWidth);

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

		// Shows tooltip for resizing the navigation
		if (checkMQ() == "tablet-landscape" || checkMQ() == "desktop") {
			if (cookieWidth == null) {
				var shake;

				setTimeout(function(){
					$("#header").append("<div class=\"header__resize-tip\"><i class=\"fa fa-arrows-h\"></i></div>");
					shake = setInterval(shakeTooltip, 2000);
					$(".header__resize-tip").click(function() {
						hideTooltip(shake);
					});

					setTimeout(function(){
						hideTooltip(shake);
					}, 8000);
				}, 1500);
			} else {
				tooltipNeeded = false;
			}
		}
	}

	function resetHeaderWidth(screenWidth) {
		if (checkMQ() == "mobile" || checkMQ() == "tablet" || cookieWidth == null) {
			// No resizing
			$("#header").css("width", "");

		} else if (checkMQ() == "tablet-landscape") {
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

	// Tooltip for resizing the navigation
	function shakeTooltip() {
		if (tooltipNeeded) {
			$(".header__resize-tip").addClass("pulse");
			$("#header .ui-resizable-e").addClass("pulse");
			$(".header__resize-tip").effect("shake", {distance:3, times:4}, 2000);
			$("#header .ui-resizable-e").show();
		}
	}
	function hideTooltip(loop) {
		tooltipNeeded = false;
		$(".header__resize-tip").removeClass("pulse");
		$("#header .ui-resizable-e").removeClass("pulse");
		$(".header__resize-tip").fadeOut(600);
		clearInterval(loop);
	}

	// Functions for modals
	$(".modal__button[role=cancel]").on("click", function(){
		$(this).parentsUntil('modal').removeClass("modal--active");
	});

	// Premium modal
	$(".open-premiumModal").on("click", function(){
		openPremiumModal();
	});

	function openPremiumModal() {
		closeNavigation();
		$(".premiumModal").addClass("modal--active");
	}

	function closePremiumModal() {
		$(".premiumModal").removeClass("modal--active");
	}

	$(".premiumModal .modal__button[role=activate]").on("click", function(){
		activatePremium();
		$(this).find(".fa").removeClass("fa-toggle-off").addClass("fa-toggle-on");

		setTimeout(function(){
			$(".premiumModal__body:first").fadeOut(function(){
				$(".premiumModal__body:first").empty();
				$(".premiumModal__body:first").html('<div class="premiumModal__success"> <i class="fa fa-toggle-off"></i> </div>');

				$(".premiumModal__body:first").fadeIn(function(){
					setTimeout(function(){
						$(".premiumModal__body:first .premiumModal__success .fa").removeClass("fa-toggle-off").addClass("fa-toggle-on");
						location.reload();
					}, 800);
				});	
			});

		}, 600);
	});

	function activatePremium() {
		$.cookie("sprout-role", "premium", { path: "/" });
	}

	$(".premiumModal .modal__button[role=deactivate]").on("click", function(){
		deactivatePremium();
		$(this).find(".fa").removeClass("fa-toggle-on").addClass("fa-toggle-off");
		closePremiumModal();
		location.reload();
	});

	function deactivatePremium() {
		$.cookie("sprout-role", "unknown", { path: "/" });
	}

	// Banner actions
	$(".banner__close").on("click", function(){
		$(this).parents(".banner").slideUp(function(){
			$(this).remove();
		});
	});

	// Check floating objects
	function checkFloaters() {
		if (checkMQ() != "tablet-landscape" && checkMQ() != "desktop") {
			$(".panel--mobilefloat").each(function(){
				if (scrollPosition >= windowHeightHalf && !$(this).hasClass("revealed")) {
					$(this).addClass('visible').addClass("revealed");
					$(this).find(".panel__toggle .fa").removeClass("fa-chevron-up").addClass("fa-chevron-down");
				}
			});
		}
	}

	// Toggle a floating panel
	$(".panel--mobilefloat .panel__toggle").on("click", function(){
		$(this).find(".fa").toggleClass("fa-chevron-down").toggleClass("fa-chevron-up").addClass("revealed");
		$(this).parents(".panel").toggleClass("visible");
	});

	// Pagination functions
	$(".pagination__item, .pagination__button").on("click", function(){
		var pagination = $(this).parents(".pagination"),
			action = $(this).attr("action");

		navigatePagination(pagination, action);

		abortInvestmentLooper();
	});
	function navigatePagination(pagination, action) {
		var allData = $(pagination.attr("dataset")).children();

		if (allData != null) {

			var activeData = $(pagination.attr("dataset")).children(".active"),
				itemsList = pagination.find(".pagination__list"),
				items = itemsList.children(),
				activeItem = itemsList.find(".active"),
				activeIndex = activeItem.index(),
				item = null;

			if ($.isNumeric(action)) {
				item = items.eq(action);
			}

			if (action == "previous") {
				item = activeItem.prev();
			}

			if (action == "next") {
				item = activeItem.next();
			}

			if (item.length) {
				activeItem.removeClass("active");
				item.addClass("active");
					
				activeData.removeClass("active");
				allData.eq(item.index()).addClass("active");
			} else {
				abortInvestmentLooper();
			}
		}
	}

	// Automatic looper through pagination
	var investmentLooper = setInterval(function(){
		var pagination = $(".pagination[dataset='#investmentList']");
		navigatePagination(pagination, "next");
	}, 3000);
	function abortInvestmentLooper() {
		clearInterval(investmentLooper);
	}

	// Add media query reference to body
	function checkMQ() {
		return window.getComputedStyle($("body").get(0), ":before").getPropertyValue("content").replace(/"/g, "").replace(/"/g, "");
	}

});