<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-articlemeta.php">articleMeta</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">articleMeta</h1>
		<div class="main-intro">Dit component bevat meta-informatie van een post.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<div class="articleMeta">
			<date class="articleMeta-date">3 mei 2017 - 15:26</date>
			<span class="articleMeta-readtime">7 min.</span>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleMeta">
			    <date class="articleMeta-date">3 mei 2017 - 15:26</date>
			    <span class="articleMeta-readtime">7 min.</span>
			</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>