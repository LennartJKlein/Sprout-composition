<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-quote.php">Quote</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Quote</h1>
		<div class="main-intro">Dit component wordt gebruikt om de &lt;blockquote&gt;'s vorm te geven en een quote van iemand te laten zien.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<blockquote class="quote">De concurrentie is er keihard, waardoor veel retailers weer stenen winkels beginnen.</blockquote>
		<blockquote class="quote">
			<p class="quote-text">When something is important enough, you do it even if the odds are not in your favor</p>
			<p class="quote-writer">Elon Musk</p>
		</blockquote>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<blockquote class="quote">De concurrentie is er keihard, waardoor veel retailers weer stenen winkels beginnen.</blockquote>
			<blockquote class="quote">
			    <p class="quote-text">When something is important enough, you do it even if the odds are not in your favor</p>
			    <p class="quote-writer">Elon Musk</p>
			</blockquote>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--big</h2>
		<div class="quote quote--big">
			<h4 class="quote-title">Quote van een topondernemer</h4>
			<p class="quote-text">When something is important enough, you do it even if the odds are not in your favor</p>
			<p class="quote-writer">Elon Musk</p>
			<img src="/images/uploads/quote-elon-musk.png" class="quote-image" />
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="quote quote--big">
			    <h4 class="quote-title">Quote van een topondernemer</h4>
			    <p class="quote-text">When something is important enough, you do it even if the odds are not in your favor</p>
			    <p class="quote-writer">Elon Musk</p>
			    <img src="/images/uploads/quote-elon-musk.png" class="quote-image" />
			</div>
		'))) ?></code></pre>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>