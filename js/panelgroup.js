jQuery(document).ready(function($){

	var articlesWrapper = $('.articles'),
		aside = $('#aside'),
		scrollWindow = $('#page'),
		panelGroups = null,
		articles = null;

	window.onload = function() {
		if ($(window).width() > 769) {
			checkPanelgroups();
		}
	}
	
	if ($(window).width() > 769) {
		$(window).resize(checkPanelgroups());
	}
	
	function checkPanelgroups() {
		if (articlesWrapper.length > 0) {
			articles = articlesWrapper.find('article');
			panelGroups = aside.find('.aside-panelgroup');

			if (articles.length > 1) {
				relocatePanelgroups();
			}
		}
	}

	function checkProgressPanel() {
		if ($('.progressPanel').css("display") == "block") {
			return true;
		}
		else {
			return false;
		}
	}

	function relocatePanelgroups() {

		// Lower sidebar panels when page has multiple articles
		if (checkProgressPanel()) {
			$('#aside').css("padding-top", $('.progressPanel').outerHeight() + "px");
		}

		panelGroups.each(function(i, panelGroup){
			var scrollTop = $(scrollWindow).scrollTop(),
				articleTop = articles.eq(i).offset().top;

			if (articleTop > 0) {
				$(panelGroup).css({
					'top': 'calc(2em + ' + articleTop + 'px)'
				});
			}
		});
	}

	function checkMQ() {
		var result = window.getComputedStyle($('body').get(0), ':before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
		return result;
	}
});