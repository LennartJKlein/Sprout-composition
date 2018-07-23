<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
		<a href="/docs/post-partnerarticle.php">Persbericht</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Persbericht</h1>

		<div class="main-intro">
			<p>Een persbericht is een post type dat gebruikt wordt om nieuws van partners te publiceren. De onderstaande informatie vestigt de aandacht op een aantal zaken van deze post type.</p>
		</div>
	</header>

	<div class="main-body">

		<div class="panel">
			<h3 class="panel-title">Demo</h3>
			<ul class="linkList">
				<li class="linkList-item">
					<a class="linkList-link" href="/persbericht/intershop-nieuwe-hoofdsponsor-van-ecommercerun.php" target="_new">Persbericht: 'Intershop nieuwe hoofdsponsor van Ecommercerun'</a>
				</li>
			</ul>
		</div>

		<div class="notification">De PHP pagina van bovenstaande demo kan worden gebruikt om de wp-template voor deze post type te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een persbericht bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een post, als wat extra velden. Hieronder staan de velden die  via het CMS moeten kunnen worden ingevoerd:</p>
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>Veldnaam</th>
					<th>Element class</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Title</td>
					<td><code>.article-title</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Featured Image</td>
					<td><code>.article-hero</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Inleiding</td>
					<td><code>.article-intro</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Body</td>
					<td><code>.article-content</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category <em>(onveranderbare default: persbericht)</em></td>
					<td>(onderdeel van <code>.article-tags</code>)</td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Tags</td>
					<td><code>.article-tags</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Author</td>
					<td><code>.articleAuthor</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Date</td>
					<td><code>.articleMeta-date</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Leestijd (in minuten)</em></td>
					<td><code>.articleMeta-readtime</code></td>
				</tr>
				<tr>
					<td></td>
					<td>CTA-tekst naar dit artikel <em>(voor de button in een card)</em></td>
					<td><code>.card-button</code></td>
				</tr>
			</tbody>
		</table>

		<h2>Permalink</h2>
		<p>De permalink van de persberichten moet de volgende structuur hebben:
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			https://www.sprout.nl/persbericht/titel-van-het-persbericht
		'))) ?></code></pre>
		De subdirectory 'persbericht' is ter bevordering van de SEO.</p>

		<h2>Sidebar</h2>
		<p>Zoals beschreven op de pagina <a href="widgets.php">widgets</a>, kan er per <a href="topic.php">topic</a> (in Wordpress: <em>category</em>) worden ingesteld welke widgets in de sidebar verschijnen. Op de pagina van een persbericht wordt dus op basis van die category (='persbericht') bepaald welke widgets in de sidebar verschijnen.</p>

		<h2 id="social-sharing">Social sharing</h2>
		<p>Een persbericht moet gedeeld kunnen worden op sociale media. In deze browser composition is de techniek daarvoor hetzelfde als bij het post type '<a href="post-article.php#social-sharing">artikel</a>'.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>