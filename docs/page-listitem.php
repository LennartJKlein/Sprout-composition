<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/page-types.php">Page types</a>
		<a href="/docs/page-listitem.php">Lijstitem</a>
	</div>

	<header class="main__header">

		<h1 class="main__title">Lijstitem</h1>

		<div class="main__intro">
			<p>Een lijstitem is een page type dat gebruikt wordt voor een item dat onderdeel is van een <a href="/docs/page-list.php">lijstpagina</a>. De onderstaande informatie vestigt de aandacht op een aantal zaken van zo'n lijstitem-pagina.</p>
		</div>
	</header>
	
	<div class="main__body">

		<div class="panel">
			<h3 class="panel__title">Demo</h3>
			<ul class="linkList">
				<li class="linkList-item">
					<a class="linkList__link" href="/lijst/item/ballin-amsterdam.php" target="_new">Lijstitem: 'Ballin Amsterdam'</a>
				</li>
			</ul>
		</div>

		<div class="notification">De PHP pagina van bovenstaande demo kan worden gebruikt om de wp-template voor dit page type te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een lijstpagina bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een pagina, als wat extra velden. Hieronder staan de velden die in ieder geval via het CMS moeten kunnen worden ingevoerd:</p>
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
					<td><code>.main__title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Inleiding</td>
					<td><code>.main__intro</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Body</td>
					<td><code>.main__body</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Selectie van WP-content (pages / posts)</td>
					<td><code>.grid</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Aantal kolommen mobiel <em class="text--secondary">(1, 2, 3, 4, 6)</em></td>
					<td><code>.grid--mobile-#</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Aantal kolommen tablet <em class="text--secondary">(1, 2, 3, 4, 6)</em></td>
					<td><code>.grid--tablet-#</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Aantal kolommen tablet landscape <em class="text--secondary">(1, 2, 3, 4, 6)</em></td>
					<td><code>.grid--tabletlandscape-#</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Aantal kolommen desktop <em class="text--secondary">(1, 2, 3, 4, 6)</em></td>
					<td><code>.grid--desktop-#</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category <em>(onveranderbare default: lijst)</em></td>
					<td>-</td>
				</tr>
				<tr>
					<td></td>
					<td>CTA-tekst naar deze lijst <em>(voor de button in een card)</em></td>
					<td><code>.card__button</code></td>
				</tr>
			</tbody>
		</table>

		<h2>Permalink</h2>
		<p>De permalink van een lijstitem-pagina moet de volgende structuur hebben:
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			https://www.sprout.nl/lijst/item/titel-van-de-pagina
		'))) ?></code></pre>
		De subdirectory 'lijst/item' is ter bevordering van de SEO.</p>

		<h2>Sidebar</h2>
		<p>Een lijstpagina heeft per definitie geen sidebar.</p>

		<h2 id="social-sharing">Social sharing</h2>
		<p>Een lijstitem moet gedeeld kunnen worden op sociale media. In deze browser composition is de techniek daarvoor hetzelfde als bij het post type '<a href="post-article.php#social-sharing">artikel</a>'.</p>

		<h2 id="todo">Todo</h2>
		<p>Onderaan deze pagina zijn de rest van de lijstitems in de bijbehorende lijst te zien en kan naar het volgende lijstitem worden genavigeerd. Deze linken moeten nog gaan werken.</p>


	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>