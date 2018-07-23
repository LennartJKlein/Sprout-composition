<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/animations.php">Grid</a>
	</div>
	
	<header class="main-header">
		<h1 class="main-title">Grid</h1>

		<div class="main-intro">
			<p>Voor deze browser composition is een eigen grid ontwikkeld (vanuit het Bootstrap-gedachtegoed).</p>
		</div>
	</header>

	<div class="main-body">
		<div class="notification">Dit grid is mobile-first ontworpen.</div>
		<div class="notification">Mocht dit grid niet aansluiten bij de techniek van Wordpress, dan kan het eenvoudig worden vervangen met een ander gridsysteem of pagebuilder.</div>

		<h2>Kolommen en breedte</h2>
		<p>Het grid gaat uit van 12 kolommen, welke samen een breedte van 100% hebben. In een grid plaats je cellen met de class <code>grid-cell</code>, welke een bepaald aantal kolommen breed zijn. Standaard is elke cel 12 kolommen breed.</p>
		<div class="notification">Alle cellen in een grid krijgen dezelfde breedte, tenzij een cell de class <code>.grid-cell--wide</code> heeft. In dat geval is de cell altijd 12 kolommen breed.</div>
		<p>Om de breedte van de cellen te bepalen, krijgt het grid-element een extra class die dat aangeeft.</p>

		<h3>Voorbeeld: 3 kolommen breed</h3>
		<div class="grid grid--3">
			<div class="grid-cell">
				<div class="panel">Cell 1</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 2</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 3</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 4</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 5</div>
			</div>
		</div>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="grid grid--3">
			    <div class="grid-cell">
			        <div class="panel">Cell 1</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 2</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 3</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 4</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 5</div>
			    </div>
			</div>
		'))) ?></code></pre>

		<br>

		<h3>Voorbeeld: brede cell</h3>
		<div class="grid grid--4">
			<div class="grid-cell">
				<div class="panel">Cell 1</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 2</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 3</div>
			</div>
			<div class="grid-cell grid-cell--wide">
				<div class="panel">Cell 4 op volledige breedte</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 5</div>
			</div>
		</div>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="grid grid--4">
			    <div class="grid-cell">
			        <div class="panel">Cell 1</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 2</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 3</div>
			    </div>
			    <div class="grid-cell grid-cell--wide">
			        <div class="panel">Cell 4 op volledige breedte</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 5</div>
			    </div>
			</div>
		'))) ?></code></pre>

		<h2>Schermbreedtes</h2>
		<p>De breedte van cellen kan responsive worden ingesteld. Mobiel is default, daarna zijn er 3 opeenvolgende media queries: <em>tablet</em>, <em>tabletlandscape</em> en <em>desktop</em>.</p>

		<h3>Voorbeeld: responsive grid</h3>
		<div class="grid grid--12 grid--tablet-6 grid--tabletlandscape-4 grid--desktop-3">
			<div class="grid-cell">
				<div class="panel">Cell 1</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 2</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 3</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 4</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 5</div>
			</div>
			<div class="grid-cell">
				<div class="panel">Cell 6</div>
			</div>
		</div>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="grid grid--12 grid--tablet-6 grid--tabletlandscape-4 grid--desktop-3">
			    <div class="grid-cell">
			        <div class="panel">Cell 1</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 2</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 3</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 4</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 5</div>
			    </div>
			    <div class="grid-cell">
			        <div class="panel">Cell 6</div>
			    </div>
			</div>
		'))) ?></code></pre>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>