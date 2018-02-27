jQuery(document).ready(function($){

	var articlesWrapper = $('.articles'),
		scrollWindow = $('#page');

	if (articlesWrapper.length > 0 && $(window).width() > 800) {

		// cache jQuery objects
		var windowHeight = $(scrollWindow).height(),
			articles = articlesWrapper.find('.article'),
			panel = $('.progressPanel'),
			articleSidebarLinks = panel.find('.progressPanel-item');

		// initialize variables
		var	scrolling = false,
			sidebarAnimation = false,
			resizing = false,
			mq = checkMQ(),
			svgCircleLength = parseInt(Math.PI*(articleSidebarLinks.eq(0).find('circle').attr('r')*2));
		
		// set scroll listeners
		$(scrollWindow).on('scroll', checkRead);
		$(scrollWindow).on('scroll', checkSidebar);
		$(scrollWindow).on('resize', resetScroll);

		updateArticle();

		// set progress panel
		panel.on('click', 'a', function(event){
			var scrollTop = $(scrollWindow).scrollTop();
			event.preventDefault();
			var selectedArticle = articles.eq($(this).parent('.progressPanel-item').index()),
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
	}

	function checkRead() {
		if (!scrolling) {
			scrolling = true;
			(!window.requestAnimationFrame) ? setTimeout(updateArticle, 300) : window.requestAnimationFrame(updateArticle);
		}
	}

	function checkSidebar() {
		if (!sidebarAnimation) {
			sidebarAnimation = true;
			(!window.requestAnimationFrame) ? setTimeout(updateSidebarPosition, 300) : window.requestAnimationFrame(updateSidebarPosition);
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
		$(scrollWindow).off('scroll', checkSidebar);
		
		$(scrollWindow).on('scroll', checkRead);
		$(scrollWindow).on('scroll', checkSidebar);
		resizing = false;
	}

	function updateArticle() {
		var scrollTop = $(scrollWindow).scrollTop();

		articles.each(function(){
			var article = $(this),
				articleTop = article.offset().top + scrollTop,
				articleHeight = article.outerHeight(),
				articleSidebarLink = articleSidebarLinks.eq(article.index()).children('a');

			if (article.is(':last-of-type') ) {
				articleHeight = articleHeight - windowHeight;
			}

			if (articleTop > scrollTop) {
				articleSidebarLink.removeClass('read reading');

			} else if (scrollTop >= articleTop && articleTop + articleHeight > scrollTop) {
				var dashoffsetValue = svgCircleLength*( 1 - (scrollTop - articleTop) / articleHeight);
				articleSidebarLink.addClass('reading').removeClass('read').find('circle').attr({ 'stroke-dashoffset': dashoffsetValue });
				
				if ($(window).width() > 800) {
					changeUrl(articleSidebarLink.attr('href'));
				}

			} else {
				articleSidebarLink.removeClass('reading').addClass('read');

				if (article.is(':last-of-type')) {
					panel.stop().fadeTo(100, 0);
					panel.css("display","");
				} else {
					panel.stop().fadeTo(200, 1);
					panel.css("display","");
				}
			}

		});
		scrolling = false;
	}

	function changeUrl(link) {
		var pageArray = location.pathname.split('/'),
        	actualPage = pageArray[pageArray.length - 1];

        if (actualPage != link && history.pushState ) window.history.pushState({path: link},'',link);
	}

	function checkMQ() {
		return window.getComputedStyle($('body').get(0), ':before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});