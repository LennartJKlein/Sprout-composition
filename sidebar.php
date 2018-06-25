<?php include 'templates/header.php'; ?>

	<h1>Op deze pagina staan alle mogelijke widgets voor de sidebar</h1>

</section>
<aside id="aside">
	<div class="panel loginTeaser">
		<div class="loginTeaser-figure"><img src="images/25-onder-de-25-2017.jpg" class="loginTeaser-image" /></div>
		<h3 class="loginTeaser-title">Sluit je aan bij ons ondernemersnetwerk</h3>
		<ul class="list list--icons">
			<li class="list-item"><i class="list-item-icon fa fa-users"></i><span>Lid van de meest ambitieuze ondernemers<a href="#">community</a> van Nederland</span></li>
			<li class="list-item"><i class="list-item-icon fa fa-unlock-alt"></i><span>Toegang tot alle premium <a href="#">artikelen</a></span></li>
			<li class="list-item"><i class="list-item-icon fa fa-book"></i><span>4x per jaar het <a href="#">Sprout Bookazine</a></span></li>
		</ul>
		<a href="#" class="button button--secondary" onClick="openForm('register')">Sprout Member worden</a>
		<p class="loginTeaser-link">Al een Sprout member? <a href="#" onClick="openForm('login')">Log in</a></p>
	</div>
	
	<div class="panel">
		<h3 class="panel-title panel-title--tertiary"><i class="panel-title-icon fa fa-bolt" aria-hidden="true"></i>Trending now</h3>
		<div class="articleList-list articleList-list--panel">
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/pexels-photo-436413.jpeg" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/schermafbeelding_2017-08-16_om_10.48.45.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Zo verklaart Uber de liefde aan managers</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/bill_gates.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			</a>
		</div>
	</div>

	<div class="panel premiumTeaser loggedIn-hide">
		<div class="premiumTeaser-figure"><img src="images/premium-logo-white.svg" class="premiumTeaser-image" /></div>
		<h3 class="premiumTeaser-title">Ongelimiteerd de beste verhalen. <br/>Wordt premium member.</h3>
		<p class="premiumTeaser-description">1 maand gratis uitproberen. Daarna &euro;00,- per maand.</p>
		<a href="#" class="button button--white" onClick="openForm('register')">1 maand uitproberen</a>
	</div>

	<div class="panel panel--clean">
		<ul class="eventList">
			<li class="eventTeaser eventTeaser--minimal"><a class="eventTeaser-link" href="/events.php">
				<div class="eventTeaser-description">
					<span class="eventTeaser-heading">Binnenkort</span>
					<h4 class="eventTeaser-title">Amsterdam talks tech - smart cities &amp; mobility</h4>
				</div>
				<span class="eventTeaser-date">8 okt</span>
			</a></li>
			<li class="eventTeaser eventTeaser--minimal"><a class="eventTeaser-link" href="/events.php">
				<div class="eventTeaser-description">
					<span class="eventTeaser-heading">Volgende maand</span>
					<h4 class="eventTeaser-title">Scaleup summit 2017</h4>
				</div>
				<span class="eventTeaser-date">24 nov</span>
			</a></li>
		</ul>
		<div class="text--center">
			<a href="#" class="button button--secondary button--clean">Meer events</a>
			<a href="#" class="button button--secondary button--small"><i class="fa fa-plus" aria-hidden="true"></i> event toevoegen</a>
		</div>
	</div>

	<div class="panel">
		<h3 class="panel-title"><i class="panel-title-icon fa fa-bullhorn" aria-hidden="true"></i> Persberichten</h3>
		<div class="articleList-list articleList-list--panel">
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/pexels-photo-436413.jpeg" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/schermafbeelding_2017-08-16_om_10.48.45.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Zo verklaart Uber de liefde aan managers</h3>
			</a>
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article articleList-article--panel">
				<div class="articleList-figurecontainer">
					<div class="articleList-figure">
						<img src="images/articles/bill_gates.png" class="articleList-image" />
					</div>
				</div>
				<h3 class="articleList-articleTitle">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			</a>
		</div>
		<div>
			<a href="#" class="button button--center button--small button--secondary"><i class="fa fa-plus" aria-hidden="true"></i> persbericht plaatsen</a>
		</div>
		<div>
			<a href="#" class="button button--center button--secondary button--clean">Alle persberichten</a>
		</div>
	</div>

	<div class="panel">
		<h3 class="panel-title"><i class="panel-title-icon fa fa-folder"></i>Alles over...</h3>
		<ul class="linkList">
			<li class="linkList-item"><a class="linkList-link" href="/topic/direct-marketing.php">Direct Marketing</a></li>
			<li class="linkList-item"><a class="linkList-link" href="/topic/direct-marketing.php">Crowdfunding</a></li>
			<li class="linkList-item"><a class="linkList-link" href="/topic/direct-marketing.php">Zeker voor de zaak</a></li>
		</ul>
	</div>

	<div class="panel">
		<h3 class="panel-title">Custom HTML activatie...</h3>
		<div class="panel-content">
			<p class="p--compact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante nibh, accumsan in vehicula ut, pretium consequat elit. Integer a elit neque. Aliquam erat volutpat. Sed at scelerisque augue. Ut ac leo at dolor aliquet imperdiet. Praesent interdum porttitor dolor, quis maximus nisl. Nullam ligula nunc, efficitur vitae posuere et, efficitur sit amet lacus.</p>
			<a href="#" class="button button--center button--small button--secondary"><i class="fa fa-bell" aria-hidden="true"></i> call to action</a>
		</div>
	</div>

	<div class="panel panel--primary">
		<h3 class="panel-title">Verleid je toekomstige investeerder</h3>
		<div class="panel-content">
			<p class="p--compact"><img src="/images/fund_cover.png" /></p>
			<a href="#" class="button button--center button--small button--white"><i class="fa fa-shopping-cart" aria-hidden="true"></i> pre-order nu</a>
		</div>
	</div>

	<div class="panel panel--headed panel--headed-big panel--headed-tertiary">
		<h3 class="panel-title">
			Whitepaper 'Zo bereik je je doelgroep via Facebook'
			<img src="images/whitepaper-image.jpg" class="panel-title-image" />
		</h3>
		<div class="panel-content">
			<p class="p--compact">Facebook is groot en veruit het goedkoopste advertentiekanaal.  90 procent van de Nederlanders is actief op sociale media en 9,6 miljoen hebben een Facebookaccount. Ideaal dus om voor je bedrijf in te zetten. In de whitepaper ‘Adverteren via Facebook’ ontdek je hoe je dit aanpakt en je je doelgroep optimaal bereikt. Laat je inspireren.</p>
			<a href="#" class="button button--center button--small">gratis aanvragen</a>
		</div>
	</div>

	<div class="panel panel--headed panel--headed-overflow panel--headed-secondary">
		<h3 class="panel-title">
			<i class="panel-title-icon fa fa-comment"></i>Hot forum topics
			<img src="images/background-panel-title-social.png" class="panel-title-image" />
		</h3>
		<ul class="forumpostsTeaser">
			<li class="forumpostsTeaser-item active">
				<div class="forumpostsTeaser-title">
					<a href="/forum/post/13103958" class="forumpostsTeaser-link">
						Hoe vind ik een goed jong commercieel talent?
					</a>
				</div>
				<a class="forumpostsTeaser-stats" href="/forum/post/13103958">
					<span class="forumpostsTeaser-views">1,044 <i class="fa fa-eye"></i></span>
					<span class="forumpostsTeaser-posts">6 <i class="fa fa-comment"></i></span>
				</a>
			</li>
		</ul>
		<div class="pagination pagination--block">
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			<ul class="pagination-list">
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item active"><a href="#" class="pagination-link"></a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
			</ul>
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
		<a href="investeringen" class="button button--center button--small">naar het forum</a>
	</div>

	<div class="panel panel--headed panel--headed-overflow panel--headed-secondary">
		<h3 class="panel-title">
			<i class="panel-title-icon fa fa-comment"></i>Hot forum posts
			<img src="images/background-panel-title-social.png" class="panel-title-image" />
		</h3>
		<ul class="forumpostsTeaser">
			<li class="forumpostsTeaser-item active">
				<div class="forumpostsTeaser-content">
					<a href="/forum/post/13103958" class="forumpostsTeaser-link">
						Het klopt allemaal wat hierboven staat beschreven. Start bij het begin; waarom is er behoefte aan een nieuwe medewerker en wie heeft de organisatie nodig.<br/>Op het momente dat je het juiste talent hebt gevonden is het ook van belang of deze past binnen het team en de organisatie.<br/>Mochten jullie hulp willen gebruiken in het sollicitatieproces (of een deel hiervan) mag je altijd een beroep op mij doen.<br/>Gr, Rebecca<br/>rebecca@purposematching.nl
					</a>
				</div>
				<a class="forumpostsTeaser-author" href="/member/rebecca-roggeveen">
					<span class="forumpostsTeaser-name">Rebecca Roggeveen</span>
					<img class="forumpostsTeaser-avatar" src="images/avatars/rebecca-roggeveen.jpg" />
				</a>
			</li>
		</ul>
		<div class="pagination pagination--block">
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			<ul class="pagination-list">
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item active"><a href="#" class="pagination-link"></a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
			</ul>
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
		<a href="investeringen" class="button button--center button--small">naar het forum</a>
	</div>
	
	<div class="banner banner--rectangle">
		<img src="http://via.placeholder.com/285x140" class="banner-image" />
	</div>

	<div class="panel panel--headed panel--headed-overflow">
		<h3 class="panel-title">Recente investeringen</h3>
		<ul class="investmentList">
			<li class="investmentList-item active">
				<div class="investmentList-logo">
					<a class="investmentList-link" href="https://index.co/investments"><img src="images/avatars/callrail.png" /></a>
				</div>
				<div class="investmentList-description">
					<a href="https://www.callrail.com/" class="investmentList-company">CallRail</a>
					<a href="#" class="investmentList-value">$75M</a>
					<a href="http://www.sageviewcapital.com/" class="investmentList-details"><i class="fa fa-handshake-o"></i>Sageview Capital</a>
					<a href="#" class="investmentList-details"><i class="fa fa-tag"></i>advertising</a>
				</div>
			</li>
		</ul>
		<div class="pagination pagination--block">
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			<ul class="pagination-list">
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item active"><a href="#" class="pagination-link">CallRail</a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
			</ul>
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
		<a href="investeringen" class="button button--center button--small">meer investeringen</a>
	</div>

	<div class="panel">
		<h3 class="panel-title"><i class="panel-title-icon fa fa-globe"></i>Around the web</h3>
		<ul class="linkList">
			<li class="linkList-item"><a class="linkList-link" href="https://www.businessinsider.nl/de-17-opmerkelijkste-uitspraken-trump/">De 14 meest briljante (of waanzinnige) uitspraken van Donald Trump tijdens de Amerikaanse verkiezingscampagne<span class="linkList-source">Business Insider</span></a></li>
			<li class="linkList-item"><a class="linkList-link" href="https://thenextweb.com/contributors/2017/09/05/august-africa-bad-elections-good-drones-ebay/#.tnw_j83D6kMu">August in Africa: Bad elections, good drones, and eBay<span class="linkList-source">The Next Web</span></a></li>
			<li class="linkList-item"><a class="linkList-link" href="https://oristand.co/product/oristand-stand-up-desk/">Portable Stand Up Desk<span class="linkList-source">ORISTAND</span></a></li>
		</ul>
	</div>

	<div class="panel panel--headed panel--headed-overflow panel--headed-secondary">
		<h3 class="panel-title">
			Netwerk advertenties
			<img src="images/background-panel-title-social.png" class="panel-title-image" />
		</h3>
		<ul class="posterList">
			<li class="posterList-item active">
				<a class="posterList-poster" href="https://www.appelit.com/">
					<img class="posterList-image" src="images/network-poster.jpg" />
				</a>
				<a class="posterList-author" href="/member/rebecca-roggeveen">
					<img class="posterList-avatar" src="images/avatars/rebecca-roggeveen.jpg" />
					<span class="posterList-name">Rebecca Roggeveen</span>
				</a>
			</li>
		</ul>
		<div class="pagination pagination--block">
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			<ul class="pagination-list">
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item active"><a href="#" class="pagination-link">AppElit</a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
				<li class="pagination-item"><a href="#" class="pagination-link"> </a></li>
			</ul>
			<a href="#" class="button button--clean pagination-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
		<a href="#" class="button button--center button--small button--secondary"><i class="fa fa-plus" aria-hidden="true"></i> advertentie plaatsen</a>
	</div>

	<div class="panel quote">
		<h4 class="quote-title">Quote van een topondernemer</h4>
		<p class="quote-text">When something is important enough, you do it even if the odds are not in your favor</p>
		<p class="quote-writer">Elon Musk</p>
		<img src="images/quote-elon-musk.png" class="quote-image" />
	</div>

	<div class="panel panel--headed panel--headed-big panel--headed-tertiary">
		<h3 class="panel-title newsletterTeaser-title">
			Mis geen enkel ondernemersnieuws
			<img src="images/newsletter-background.jpg" class="panel-title-image" />
		</h3>
		<div class="panel-content">
			<p class="p--compact">Altijd op de hoogte van het laatste nieuws en achtergronden voor startups, scaleups en investeerders? Laat je e-mailadres achter en mis niks!</p>
			<form id="newsletterSignup" class="newsletterTeaser-form">
				<input type="text" placeholder="E-mailadres" class="newsletterTeaser-field newsletterTeaser-field--inverse" placeholder="Mailadres..." />
				<button type="submit" class="newsletterTeaser-submit">Aanmelden</button>
			</form>
			<a href="http://www.sprout.nl/nieuwsbrief/laatste" class="button button--center button--secondary">Voorbeeld</a>
		</div>
	</div>

</aside>

<?php include 'templates/footer.php'; ?>