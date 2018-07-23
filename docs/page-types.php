<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/page-types.php">Page types</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Page types</h1>

		<div class="main-intro">
			<p>Er zijn 4 page types in de browser composition: een <strong>standaard pagina</strong>, een <strong>lijst</strong> en een <strong>topic</strong>.</p>
		</div>
	</header>
	
	<div class="main-body">

		<ul class="linkList">
			<li class="linkList-item">
				<a class="linkList-link" href="page-default.php">1. Default page</a>
			</li>
			<li class="linkList-item">
				<a class="linkList-link" href="page-list.php">2. Lijst</a>
			</li>
			<li class="linkList-item">
				<a class="linkList-link" href="page-topic.php">3. Topic</a>
			</li>
		</ul>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>