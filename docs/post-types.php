<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Post types</h1>

		<div class="main__intro">
			<p>Er zijn 3 post types in de browser composition: een <strong>artikel</strong> (of premium artikel), een <strong>persbericht</strong> (geplaatst door / toegeschreven aan een <a href="roles.php#partner">partner</a>) en een <strong>event</strong>.</p>
		</div>
	</header>

	<div class="main__body">

		<ul class="linkList">
			<li class="linkList__item">
				<a class="linkList__link" href="post-article.php">1. Artikel (incl. premium artikel)</a>
			</li>
			<li class="linkList__item">
				<a class="linkList__link" href="post-partnerarticle.php">2. Persbericht</a>
			</li>
			<li class="linkList__item">
				<a class="linkList__link" href="post-event.php">3. Event</a>
			</li>
		</ul>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>