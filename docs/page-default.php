<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/page-types.php">Page types</a>
		<a href="/docs/page-article.php">Default page</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Default page</h1>
		<div class="main__intro">
			<p>De standaard voor een pagina is vrij eenvoudig en heeft alle variabelen van een standaard Wordpress pagina. Daarbij kunnen er 2 templates worden gebruikt: met of zonder sidebar.</p>
		</div>
	</header>

	<div class="main__body">

		<div class="panel">
			<h3 class="panel__title">Demo</h3>
			<ul class="linkList">
				<li class="linkList-item">
					<a class="linkList__link" href="/page.php" target="_new">Default page</a>
					<a class="linkList__link" href="/page-sidebar.php" target="_new">Default page (sidebar)</a>
				</li>
			</ul>
		</div>

		<div class="notification">De PHP pagina van bovenstaande demo's kan worden gebruikt om de wp-templates voor de default page te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een standaardpagina bestaat uit zowel de velden die Wordpress meegeeft aan een pagina, als wat twee extra velden. Hieronder staan de velden die in ieder geval via het CMS moeten kunnen worden ingevoerd:</p>
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
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Featured Image</td>
					<td><code>.main__hero</code></td>
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
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category</td>
					<td>-</td>
				</tr>
				<tr>
					<td></td>
					<td>CTA-tekst naar deze pagina <em>(voor de button in een card)</em></td>
					<td><code>.card__button</code></td>
				</tr>
			</tbody>
		</table>

		<h2>Sidebar</h2>
		<p>De pagina krijgt dus wél of geen sidebar. Als er wel een sidebar is, dan krijgt deze de widgets die horen bij de category onder welke de pagina wordt gezet.</p>

		<h2>Permalink</h2>
		<p>De permalink van een default pagina moet de volgende structuur hebben:
			<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				https://www.sprout.nl/titel-van-de-pagina
			'))) ?></code></pre>
		</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>