<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/animations.php">Animaties</a>
	</div>
	<header class="main-header">
		<h1 class="main-title">Animaties</h1>

		<div class="main-intro">
			<p>Voor het animeren van elementen (nadat ze door te scrollen de viewport binnenkomen) wordt <a href="https://maximzhurkin.github.io/jquery-scrolla/" target="_new">Scrolla</a> gebruikt.</p>
		</div>
	</header>
	<div class="main-body">
		<div class="notification">Op de site van Scrolla is onderaan de <a href="https://maximzhurkin.github.io/jquery-scrolla/" target="_new">volledige documentatie</a> te lezen.</div>
		<p>In deze browser composition wordt Scrolla enkel gebruikt bij posts met het type 'artikel'. Elementen zoals <strong>quotes</strong> of <strong>afbeeldingen</strong> worden daarmee ingevlogen.</p>
		<p>Daarnaast wordt Scrolla gebruikt om een <strong>volgend artikel</strong> onderaan het huidige artikel in te laten vliegen. Meer daarover is te lezen op de pagina '<a href="post-article.php#instant-additional-article">Artikel</a>'.</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>