<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-notification.php">Notification</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Notification</h1>
		<div class="main__intro">Dit component wordt gebruikt om noten op een pagina te laten zien.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div class="notification">Dit is een tekst die de bezoeker in ieder geval moet <a href="#" target="_new">lezen</a>.</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="notification">Dit is een tekst die de bezoeker in ieder geval moet <a href="#" target="_new">lezen</a>.</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>