<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
		<a href="/docs/post-event.php">Event</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Event</h1>

		<div class="main__intro">
			<p>Een event is een post type dat gebruikt wordt om een evenement te laten zien. Voor dit post type is &eacute;&eacute;n template nodig, waarin elementen zichtbaar / verborgen worden wanneer een event in het verleden ligt.</p>
		</div>
	</header>

	<div class="main__body">

		<div class="panel">
			<h3 class="panel__title">Demo's</h3>
			<ul class="linkList">
				<li class="linkList__item">
					<a class="linkList__link" href="/evenement/the-next-web-conference-2018.php" target="_new">Event (aankomend)</a>
				</li>
				<li class="linkList__item">
					<a class="linkList__link" href="/evenement/nk-pitchen-2018.php" target="_new">Event (afgelopen)</a></li>
				</li>
			</ul>
		</div>

		<div class="notification">De PHP pagina's van bovenstaande demo's kunnen worden gebruikt om de wp-template voor dit post type te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een event bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een post, als wat extra velden. Hieronder staan de velden die via het CMS moeten kunnen worden ingevoerd:</p>
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
					<td><code>.event__title</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Featured Image</td>
					<td><code>.event__hero</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Inleiding</td>
					<td><code>.event__intro</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Body</td>
					<td><code>.event__body</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Locatie</td>
					<td><code>.event__infoItem (location)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Startdatum</td>
					<td><code>.event__infoItem (date time)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Einddatum</td>
					<td><code>.event__infoItem (date time)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Starttijd</td>
					<td><code>.event__infoItem (date time)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Eindtijd</td>
					<td><code>.event__infoItem (date time)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Prijs</td>
					<td><code>.event__infoItem (price)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Kortingsactie</td>
					<td><code>.event__infoItem (discount)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Kortingscode</td>
					<td><code>.event__couponCode</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Toelichting op deelnemen</td>
					<td><code>.event__signup</code></td>
				</tr>
				<tr>
					<td></td>
					<td>URL meer informatie / aanmelden</td>
					<td><code>.event__externallink</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category <em>(onveranderbare default: event)</em></td>
					<td>-</td>
				</tr>
				<tr>
					<td></td>
					<td>CTA-tekst naar dit event <em>(voor de button in een card)</em></td>
					<td><code>.card__button</code></td>
				</tr>
			</tbody>
		</table>

		<h2>Event reeds geweest</h2>
		<p>Wanneer een event al heeft plaatsgevonden, verschijnen/verdwijnen een aantal elementen op de pagina. Dit is te zien in de <a href="/evenement/nk-pitchen-2018.php" target="_new">demo</a>. Zo komt er een notificatie onder de titel, een tag in de hero afbeelding en een notificatie in het panel met informatie over aanmelden.</p>

		<h2>Permalink</h2>
		<p>De permalink van een event moet de volgende structuur hebben:
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			https://www.sprout.nl/evenement/titel-van-het-event
		'))) ?></code></pre>
		De subdirectory 'evenement' is ter bevordering van de SEO.</p>

		<h2>Sidebar</h2>
		<p>Voor elk event kan worden ingesteld welke widgets in de sidebar verschijnen. Is dit niets, dan toont de sidebar niet.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>