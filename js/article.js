// On page load
$(function() {	
	$('.reveal').scrolla({
		mobile: false,
		once: true,
		window: $('#page'),
	});

});

// On page ready for use
$(document).ready(function(){

	$(".shareToggle").on('click', function(){
		$(".shareToggle").toggleClass("open");
		$("#shareModal").toggleClass("open");
	});

	var articlesWrapper = $('.articles'),
		articles = articlesWrapper.find('.article'),
		aside = $('#aside'),
		scrollWindow = $('#page'),
		panelGroups = null,
		windowHeight = $(scrollWindow).height(),
		windowHeightHalf = windowHeight / 2,
		progressLine = $('.progressLine'),
		panel = $('.progressPanel');
		
	if (checkMQ() == "tablet-landscape" || checkMQ() == "desktop") {

		// Relocate panel groups
		checkPanelgroups();
		
		// Relocate panel grooups when screen width changes
		$(window).resize(checkPanelgroups());

		// Set the progress panel
		if (checkShowProgress()) {

			if (articles.length > 1) {

				// initialize variables
				var	articleSidebarLinks = panel.find('.progressPanel__item'),
					scrolling = false,
					sidebarAnimation = false,
					resizing = false,
					mq = checkMQ(),
					svgCircleLength = parseInt(Math.PI*(articleSidebarLinks.eq(0).find('circle').attr('r')*2));
				
				// set scroll listeners
				$(scrollWindow).on('scroll', checkRead);
				$(scrollWindow).on('resize', resetScroll);

				updateArticle();

				// set progress panel
				panel.on('click', 'a', function(event){
					var scrollTop = $(scrollWindow).scrollTop();
					event.preventDefault();
					var selectedArticle = articles.eq($(this).parent('.progressPanel__item').index()),
						selectedArticleTop = selectedArticle.offset().top + scrollTop;

					$(scrollWindow).off('scroll', checkRead);

					$(scrollWindow).animate(
						{'scrollTop': selectedArticleTop + 2}, 
						300, function(){
							checkRead();
							$(scrollWindow).on('scroll', checkRead);
						}
					); 
			    });

			    $(".progressPanel__close").on('click', function(){
					$.cookie("sprout-hide-progress", 1, { path: "/" });
					panel.fadeOut();
					panel.remove();
			    });
			}
		}

	} else {
		// On mobile
		$(scrollWindow).on('scroll', checkMobileReading);
	}

	function checkShowProgress() {
		if ($.cookie("sprout-hide-progress") == 1) {
			return false;
		} else {
			return true;
		}
	}

	function checkRead() {
		if (!scrolling) {
			scrolling = true;
			(!window.requestAnimationFrame) ? setTimeout(updateArticle, 300) : window.requestAnimationFrame(updateArticle);
		}
	}

	function checkMobileReading() {
		if (!scrolling) {
			scrolling = true;
			(!window.requestAnimationFrame) ? setTimeout(updateProgressLine, 300) : window.requestAnimationFrame(updateProgressLine);
		}
	}

	function resetScroll() {
		if (!resizing) {
			resizing = true;
			(!window.requestAnimationFrame) ? setTimeout(updateParams, 300) : window.requestAnimationFrame(updateParams);
		}
	}

	function updateParams() {
		windowHeight = $(scrollWindow).height();
		mq = checkMQ();
		$(scrollWindow).off('scroll', checkRead);		
		$(scrollWindow).on('scroll', checkRead);
		resizing = false;
	}

	function updateArticle() {
		var scrollTop = $(scrollWindow).scrollTop();

		articles.each(function(){
			var article = $(this),
				articleTop = article.offset().top + scrollTop,
				articleHeight = article.outerHeight(),
				articleSidebarItem = articleSidebarLinks.eq(article.index());
				articleSidebarLink = articleSidebarItem.children('a');

			if (article.is(':last-of-type') ) {
				articleHeight = articleHeight - windowHeight;
			}

			if (articleTop > scrollTop) {
				// Article not seen yet
				articleSidebarLink.removeClass('read reading');
				article.removeClass('read reading');

			} else if (scrollTop >= articleTop && articleTop + articleHeight > scrollTop) {
				// Article is being read
				var dashoffsetValue = svgCircleLength*( 1 - (scrollTop - articleTop) / articleHeight);
				articleSidebarLink.addClass('reading').removeClass('read').find('circle').attr({ 'stroke-dashoffset': dashoffsetValue });
				article.addClass('reading').removeClass('read');

				changeUrl(articleSidebarLink.attr('href'));

			} else {
				// Article has been read
				articleSidebarLink.removeClass('reading').addClass('read');
				article.removeClass('reading').addClass('read');

				if (article.is(':last-of-type')) {
					panel.stop().fadeTo(100, 0);
					panel.css("display","");

				} else {
					panel.stop().fadeTo(200, 1);
					panel.css("display","");
				}
			}

			if (!article.hasClass("loaded") && (scrollTop + windowHeight) >= (articleTop)) {
				// Article is shown for the first time
				article.addClass("loaded");

				if (!article.is(':first-of-type')) {
					setTimeout(function(){
						insertSpinner(articles.eq(article.index() - 1));
					}, 200);

					setTimeout(function(){
						removeSpinner(articles.eq(article.index() - 1));
					}, 2000);
				}

			}

			// Reveal the item in progresspanel when new article is shown
			if (article.hasClass("animated") && !article.is(':first-of-type')) {
				if (!articleSidebarItem.hasClass("animated") &&
					!articleSidebarLink.hasClass("read") && 
					!articleSidebarLink.hasClass("reading")) {

					articleSidebarItem.addClass("animated");
					articleSidebarItem.delay(1800).slideDown(800);
				}
			}

		});
		scrolling = false;
	}

	function updateProgressLine() {
		var scrollTop = $(scrollWindow).scrollTop();

		articles.each(function(){
			var article = $(this),
				articleTop = article.offset().top + scrollTop,
				articleHeight = article.outerHeight(),
				lineWidth = 100 * ((scrollTop - articleTop) / (articleHeight - windowHeightHalf));

			if (lineWidth > 0) {
				progressLine.css("width", lineWidth + "%");
			}

		});

		scrolling = false;
	}

	function changeUrl(link) {
		var pageArray = location.pathname.split('/'),
	    	actualPage = pageArray[pageArray.length - 1];

	    if (actualPage != link && history.pushState ) window.history.pushState({path: link},'',link);
	}

	function checkPanelgroups() {
		if (articlesWrapper.length > 0) {
			articles = articlesWrapper.find('article');
			panelGroups = aside.find('.aside__panelgroup');

			if (articles.length > 1) {
				relocatePanelgroups();
			}
		}
	}

	function progressPanelVisible() {
		if (!$('.progressPanel')) {
			return false;
		}

		if ($('.progressPanel').css("display") != "block") {
			return false;
		}

		return true;
	}

	function relocatePanelgroups() {

		// Lower sidebar panels when page has a progresspanel
		if (progressPanelVisible()) {
			$('#aside').css("padding-top", $('.progressPanel').outerHeight() + "px");
		}

		panelGroups.each(function(i, panelGroup){
			var scrollTop = $(scrollWindow).scrollTop(),
				article = articles.eq(i),
				articleTop = article.offset().top;

			if (articleTop > 0) {
				$(panelGroup).css({
					'top': 'calc(2em + ' + articleTop + 'px)'
				});
			}
		});
	}

	function insertSpinner(element) {
		$(element).append('<div class="spinner"></div>');
		$(element).find('.spinner').fadeIn(800);
	}

	function removeSpinner(element) {
		$(element).find('.spinner').fadeOut(300, function(){
			$(element).find('.spinner').remove();
		});
	}

	function checkMQ() {
		return window.getComputedStyle($('body').get(0), ':before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});