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
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/modernizr.js"></script>
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/jquery-ui.touch-punch.min.js"></script>
	<script src="/js/jquery-cookie.js"></script>
	<script src="/js/scrolla.min.js"></script>
	<script src="/js/script.js"></script>
	<script src="/js/article.js"></script>

	<!-- Google Open Search (omnibox 'tab') -->
    <link rel="search" type="application/opensearchdescription+xml" title="Sprout" href="/manifests/opensearch.xml" />

    <?php
		if (strpos($url,'artikel') !== false) {
			// TODO: load article info for social sharing
			echo '<meta property="og:title" content="7 redenen waarom klanten je winkel de rug toekeren" />';
			echo '<meta property="og:url" content="'.$url.'" />';
			echo '<meta property="og:description" content="7 redenen waarom klanten je winkel de rug toekeren">';
			echo '<meta property="og:image" content="//sprout.lennartklein.nl/images/articles/article-hero3.jpg">';
			echo '<meta property="og:type" content="article" />';
			echo '<meta property="og:locale" content="nl_NL" />';
		}
    ?>

</head>
<!-- <body class="logged-in"> -->
<body>

<header id="header" 
		<?php
			if(isset($_COOKIE['sprout-nav-width'])){ 
				echo 'style="width:' . $_COOKIE['sprout-nav-width'] . 'px"';
			}
		?>
		class=" 
		<?php
			if(isset($_COOKIE['sprout-nav-width'])){ 
				if($_COOKIE['sprout-nav-width'] <= 115) {
					echo 'minimum';
				}
			}
		?>
		" >
	<div class="head-container">
		<button class="navToggle" onClick="toggleNav()"><i aria-hidden="true" class="fa fa-bars"></i></button>
	</div>

	<?php
		if (strpos($url,'artikel') !== false) {
			include 'sharepopup.php';
		}
	?>

	<nav id="nav">
		<div class="nav-head">
			<a href="/index.php" class="logo logo--desktop">
				<img src="/images/sprout-logo.png" class="logo-image" />
				<img src="/images/sprout-logo-s.png" class="logo-image-s" />
			</a>
			<form id="search">
				<input type="text" placeholder="Zoeken..." class="search-field" />
				<div class="search-placeholder">.</div>
				<button type="submit" class="search-submit"><i aria-hidden="true" class="fa fa-search"></i></button>
			</form>
			<div class="search-resultscontainer">
				<div class="grid">
					<div class="grid-cell">
						<div class="articleList">
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article">
								<div class="articleList-figurecontainer">
									<div class="articleList-figure">
										<img src="/images/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList-image" />
									</div>
								</div>
								<h3 class="articleList-articleTitle">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article">
								<div class="articleList-figurecontainer">
									<div class="articleList-figure">
										<img src="/images/articles/bill_gates.png" class="articleList-image" />
									</div>
								</div>
								<h3 class="articleList-articleTitle">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article">
								<div class="articleList-figurecontainer">
									<div class="articleList-figure">
										<img src="/images/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList-image" />
									</div>
								</div>
								<h3 class="articleList-articleTitle">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article">
								<div class="articleList-figurecontainer">
									<div class="articleList-figure">
										<img src="/images/articles/pexels-photo-436413.jpeg" class="articleList-image" />
									</div>
								</div>
								<h3 class="articleList-articleTitle">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
							</a>
							<a href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList-article">
								<div class="articleList-figurecontainer">
									<div class="articleList-figure">
										<img src="/images/articles/schermafbeelding_2017-08-16_om_10.48.45.png" class="articleList-image" />
									</div>
								</div>
								<h3 class="articleList-articleTitle">Zo verklaart Uber de liefde aan managers</h3>
							</a>
						</div>
					</div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
					<div class="grid-cell"></div>
				</div>
			</div>
			<ul class="menu menu-main">
				<li class="menu-item" hint="Nieuws"><a href="/index.php" class="menu-link active"><i aria-hidden="true" class="fa fa-newspaper-o"></i><span>Nieuws</span></a></li>
				<li class="menu-item" hint="Events"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-calendar-o"></i><span>Events</span><span class="menu-link-notification">2</span></a></li>
				<li class="menu-item" hint="Bookazine"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-book"></i><span>Bookazine</span></a></li>
				<li class="menu-item" hint="Nieuwsbrief"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-paper-plane"></i><span>Nieuwsbrief</span></a></li>
				<!--<li class="menu-item"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-heart"></i><span>Partners</span></a></li>-->
				<!--<li class="menu-item"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-users"></i><span>Netwerk</span><span class="menu-link-notification">2</span></a></li>-->
			</ul>
		</div>
		<div class="nav-footer">
			<ul class="menu menu-tools">
				<li class="menu-item" hint="Contact"><a href="#" class="menu-link"><i aria-hidden="true" class="fa fa-question-circle"></i><span>Contact</span></a></li>
			</ul>
			<ul class="menu menu-user loggedIn-hide">
				<li class="menu-item" hint="Inloggen">
					<div onClick="toggleForm()" class="menu-link"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span>INLOGGEN</span></div>
					<div class="login-forms">
						<div class="menu-register">
							<p>De members in onze ondernemerscommunity ontvangen <a href="#">vele voordelen</a>.</p>
							<form class="menu-register-form">
								<input type="text" class="login-field" placeholder="Naam">
								<input type="text" class="login-field" placeholder="Bedrijfsnaam">
								<input type="email" class="login-field" placeholder="E-mailadres">
								<button type="submit" class="login-submit">Aanmelden</button>
							</form>
							<a href="#" onClick="toggleLoginForm()" class="login-link">Ik heb al een account</a>
						</div>
						<div class="menu-login">
							<form class="menu-register-form">
								<input type="email" class="login-field" placeholder="E-mailadres">
								<input type="password" class="login-field" placeholder="Wachtwoord">
								<button type="submit" class="login-submit">Inloggen</button>
							</form>
							<a href="#" class="login-link">Wachtwoord vergeten?</a>
						</div>
					</div>
				</li>
			</ul>
			<ul class="menu menu-user loggedIn-show">
				<li><a href="#" class="menu-link">
					<img src="/images/aartjan_portret_studio_vierkant_klein_profielfoto.jpg" class="user-image" />
					<span>Aartjan van Erkel<span class="user-company">Schrijven voor Internet</span></span>
				</a></li>
			</ul>
		</div>
	</nav>
</header>

<section id="page" tabindex="1">
	<div class="head-container head-container--mobile">
		<a href="/index.php" class="logo">
			<img src="/images/sprout-logo-black.png" class="logo-image" />
			<img src="/images/sprout-logo-s.png" class="logo-image-s" />
		</a>
		<div class="navToggle-placeholder"></div>
	</div>

	<main id="content">

		<section id="main">