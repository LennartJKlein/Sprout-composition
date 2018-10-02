<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-eventlist.php">eventList</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">eventList</h1>
		<div class="main__intro">Dit component is de container voor <a href="comp-eventcard.php">eventCard</a>'s.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<ul class="eventList">
			<li class="eventCard eventCard--minimal">
				<a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
					<div class="eventCard__description">
						<span class="eventCard__heading">Binnenkort</span>
						<h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
					</div>
					<span class="eventCard__date">8 okt</span>
				</a>
			</li>
			<li class="eventCard eventCard--minimal">
				<a class="eventCard__link" href="evenement/nk-pitchen-2018.php">
					<div class="eventCard__description">
						<span class="eventCard__heading">Volgende maand</span>
						<h4 class="eventCard__title">Scaleup summit 2017</h4>
					</div>
					<span class="eventCard__date">24 nov</span>
				</a>
			</li>
		</ul>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="eventList">
			    <!-- include eventCard -->
			    <!-- include eventCard -->
			</ul>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>