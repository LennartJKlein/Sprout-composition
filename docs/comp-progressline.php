<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-progressline.php">progressLine</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">progresLine</h1>
		<div class="main__intro">Dit component is een lijn aan de bovenkant van smartphones die de huidige scrollpositie op de pagina laat zien. Hiermee krijgt de lezer een leestijdindicatie van het artikel / de pagina.</div>
	</header>

	<div class="main__body">
		<h2>Default <em>(bekijk op mobiel scherm)</em></h2>
		<div class="progressLine"></div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="progressLine"></div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>