<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-figure.php">Figure</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Figure</h1>
		<div class="main-intro">Dit component wordt gebruikt voor alle afbeeldingen in de site. Dit component zorgt er onder andere voor dat de container met de afbeelding meeschaalt, maar de afbeelding ook altijd netjes tot de randen van de container wordt geknipt.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<div class="figure">
			<img src="../images/uploads/articles/article-figure1.jpg" class="figure-image" />
			<div class="figure-credit">
				Boris Blijham en Danny ten Nijenhuis van ThePhoneLab.
			</div>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="figure">
			    <img src="../images/uploads/articles/article-figure1.jpg" class="figure-image" />
			    <div class="figure-credit">
			        Boris Blijham en Danny ten Nijenhuis van ThePhoneLab.
			    </div>
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