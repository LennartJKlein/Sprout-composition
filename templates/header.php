<?php
	$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!doctype html>
<html>
<head>
	<title>Sprout - Wordpress composition</title>
	<!-- Todo: create variable description -->
	<meta name="description" content="Sprout composition for Wordpress">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>
	<script src="/js/modernizr.js"></script>
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/jquery-ui.touch-punch.min.js"></script>
	<script src="/js/jquery-cookie.js"></script>
	<script src="/js/scrolla.min.js"></script>
	<script src="/js/script.js"></script>
	<script src="/js/article.js"></script>

	<!-- Favicon and theme -->
	<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png?v=Km2rlPWvGK">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png?v=Km2rlPWvGK">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png?v=Km2rlPWvGK">
	<link rel="manifest" href="/manifests/site.webmanifest?v=Km2rlPWvGK">
	<link rel="mask-icon" href="/images/safari-pinned-tab.svg?v=Km2rlPWvGK" color="#de6e40">
	<link rel="shortcut icon" href="/images/favicon.ico?v=Km2rlPWvGK">
	<meta name="apple-mobile-web-app-title" content="Sprout">
	<meta name="application-name" content="Sprout">
	<meta name="msapplication-TileColor" content="#de6e40">
	<meta name="theme-color" content="#2e5266">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

	<!-- Google Open Search (omnibox 'tab') -->
    <link rel="search" type="application/opensearchdescription+xml" title="Sprout" href="/manifests/opensearch.xml" />

</head>
<body class="<?php if(!isset($_COOKIE['sprout-role'])){ $_COOKIE['sprout-role'] = 'unknown';} echo 'role-'.$_COOKIE['sprout-role'];?>">

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/modals/premiumsettings.php'; ?>

<header 
	id="header" 
	style="<?php if(isset($_COOKIE['sprout-nav-width'])){ echo 'width:'.$_COOKIE['sprout-nav-width'].'px"';}?>" 
	class="<?php if(isset($_COOKIE['sprout-nav-width']) && $_COOKIE['sprout-nav-width'] <= 115) { echo 'minimum';}?>">

	<div class="head__container">
		<button class="navToggle"><i aria-hidden="true" class="fa fa-bars"></i></button>
	</div>

	<?php 
		// Logica om in deze browser composition de deelknoppen alleen op bepaalde pagina's in te laden in de header.
		// Todo: betere oplossing zoeken
		if (strpos($url,'artikel') !== false || strpos($url,'lijst') !== false) {
			include $_SERVER['DOCUMENT_ROOT'].'/templates/modals/sharemodal.php';
		}
	?>

	<nav class="nav">
		<div class="nav__head">
			<a href="/index.php" class="logo logo--desktop">
				<img src="/images/sprout-logo.png" class="logo__image" />
				<img src="/images/sprout-logo-s.png" class="logo__image-s" />
			</a>
			<form id="search" class="search">
				<input type="text" placeholder="Zoeken..." class="search__field" />
				<div class="search__placeholder">.</div>
				<button type="submit" class="search__submit"><i aria-hidden="true" class="fa fa-search"></i></button>
			</form>
			<div class="search__resultscontainer">
				<!-- Todo: zoekveld en zoekresultaten implementeren -->
				<div class="grid">
					<div class="grid__cell">
						<div class="articleList">
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
								<div class="articleList__figurecontainer">
									<div class="articleList__figure">
										<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
									</div>
								</div>
								<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
								<div class="articleList__figurecontainer">
									<div class="articleList__figure">
										<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
									</div>
								</div>
								<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
								<div class="articleList__figurecontainer">
									<div class="articleList__figure">
										<img src="/images/uploads/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList__image" />
									</div>
								</div>
								<h3 class="articleList__article-title">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
								<div class="articleList__figurecontainer">
									<div class="articleList__figure">
										<img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
									</div>
								</div>
								<h3 class="articleList__article-title">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
								<div class="articleList__figurecontainer">
									<div class="articleList__figure">
										<img src="/images/uploads/articles/schermafbeelding_2017-08-16_om_10.48.45.png" class="articleList__image" />
									</div>
								</div>
								<h3 class="articleList__article-title">Zo verklaart Uber de liefde aan managers</h3>
							</a>
						</div>
					</div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
					<div class="grid__cell"></div>
				</div>
			</div>
			<ul class="menu menu--main">
				<!-- Todo: load real menu items -->
				<li class="menu__item current-menu__item" hint="Nieuws"><a href="/index.php" class="menu__link"><i aria-hidden="true" class="fa fa-newspaper-o"></i><span class="menu__label">Nieuws</span></a></li>
				<li class="menu__item" hint="Events"><a href="/events.php" class="menu__link"><i aria-hidden="true" class="fa fa-calendar-o"></i><span class="menu__label">Events</span><span class="menu__link-notification">2</span></a></li>
				<li class="menu__item" hint="Nieuwsbrief"><a href="#" class="menu__link"><i aria-hidden="true" class="fa fa-paper-plane"></i><span class="menu__label">Nieuwsbrief</span></a></li>
				<li class="menu__item" hint="Shop"><a href="#" class="menu__link"><i aria-hidden="true" class="fa fa-book"></i><span class="menu__label">Shop</span></a></li>
			</ul>
		</div>
		<div class="nav__footer">
			<ul class="menu menu--tools">
				<li class="menu__item" hint="Contact"><a href="#" class="menu__link"><i aria-hidden="true" class="fa fa-question-circle"></i><span class="menu__label">Contact</span></a></li>
			</ul>

			<ul class="menu menu--premium">
				<li class="menu__item" hint="Premium">
					<div class="menu__link open-premiumModal">
						<i class="fa 
						<?php
							if($_COOKIE['sprout-role'] == "premium"){
								echo 'fa-toggle-on';
							} else {
								echo 'fa-toggle-off';
							}
						?>" aria-hidden="true"></i>
						<span class="menu__label"><img src="/images/premium-logo-white.svg" class="menu__label-image" /></span>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>

<section id="page" tabindex="1">
	<div class="head__container head__container--mobile">
		<a href="/index.php" class="logo">
			<img src="/images/sprout-logo-black.png" class="logo__image" />
			<img src="/images/sprout-logo-s.png" class="logo__image-s" />
		</a>
		<div class="navToggle__placeholder"></div>
	</div>

	<main id="content">

		<section id="main">