<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/page-types.php">Page types</a>
		<a href="/docs/page-topic.php">Topic</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Topic</h1>

		<div class="main-intro">
			<p>Elke category in de site (direct marketing, mobiliteit, investeerders, funding, persbericht, etc.) heeft een topicpagina. Een topicpagina is een soort dossier van die category. Voor de topicpagina zijn er 2 templates: een eenvoudige en een uitgebreide.</p>
		</div>
	</header>

	<div class="main-body">

		<div class="panel">
			<h3 class="panel-title">Demo's</h3>
			<ul class="linkList">
				<li class="linkList-item">
					<a class="linkList-link" href="/topic/direct-marketing.php" target="_new">Topic: 'Direct Marketing' (uitgebreid)</a>
				</li>
				<li class="linkList-item">
					<a class="linkList-link" href="/topic/persberichten.php" target="_new">Topic: 'Persberichten' (eenvoudig)</a>
				</li>
			</ul>
		</div>

		<div class="notification">De PHP pagina van bovenstaande demo's kan worden gebruikt om beide templates voor dit page type te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een topicpagina bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een pagina, als wat extra velden. Hieronder staan de velden die in ieder geval via het CMS moeten kunnen worden ingevoerd:</p>
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>Veldnaam</th>
					<th>Template</th>
					<th>Element class</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Title</td>
					<td><em>Eenvoudig / uitgebreid</em></td>
					<td><code>.topic-title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Inleiding</td>
					<td><em>Eenvoudig / uitgebreid</em></td>
					<td><code>.topic-intro</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Uitgelichte post</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.topic-spotlight</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: kop eerste kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: posts in eerste kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-list</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: kop tweede kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: posts in tweede kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-list</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: kop derde kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>How-to: posts in derde kolom</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.articleList-list</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Body</td>
					<td><em>Eenvoudig / uitgebreid</em></td>
					<td><code>.topic-summary</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Gesponsorde partner</td>
					<td><em>Uitgebreid</em></td>
					<td><code>.topic-partners</code></td>
				</tr>
			</tbody>
		</table>

		<h2>Permalink</h2>
		<p>De permalink van een topicpagina moet de volgende structuur hebben:
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			https://www.sprout.nl/topic/naam-van-het-topic
		'))) ?></code></pre>
		De subdirectory 'topic' is ter bevordering van de SEO.</p>

		<h2>Sidebar</h2>
		<p>Een topicpagina krijgt de <a href="widgets.php">widgets</a> waarvan is aangegeven dat ze bij dit topic horen.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>