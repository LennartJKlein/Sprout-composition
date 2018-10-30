<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
		<a href="/docs/post-partnerevent.php">Partner event</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Partner event</h1>

		<div class="main__intro">
			<p>Een partner event is een post type dat gebruikt wordt om een verwijzing te maken naar een evenement buiten Sprout. Voor dit post type is g&eacute;&eacute;n template nodig. Wanneer een partner event als card in een overzicht verschijnt, moet deze direct doorlinken naar de bijbehorende externe URL.</p>
		</div>
	</header>

	<div class="main__body">

		<div class="panel">
			<h3 class="panel__title">Demo's</h3>
			<ul class="linkList">
				<li class="linkList__item">
					<a class="linkList__link" href="/events.php" target="_new">Events (zie sidebar)</a>
				</li>
			</ul>
		</div>

		<div class="notification">In bovenstaande demo wordt het component <a href="comp-eventcard.php">eventCard</a> gebruikt.</div>

		<h2>Wordpress velden</h2>
		<p>Een partner event bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een post, als wat extra velden. Hieronder staan de velden die via het CMS moeten kunnen worden ingevoerd:</p>
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
					<td><code>.eventCard__title</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Locatie</td>
					<td>-</td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Date</td>
					<td><code>.eventCard__date</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Starttijd</td>
					<td><code>.event__infoItem (date time)</code></td>
				</tr>
				<tr>
					<td></td>
					<td>URL meer informatie / aanmelden</td>
					<td><code>.eventCard__link</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category <em>(onveranderbare default: partner event)</em></td>
					<td>-</td>
				</tr>
			</tbody>
		</table>

		<h2>Widget</h2>
		<p>Partner events komen eigenlijk alleen voor in lijsten. Zo'n lijst is in deze browser composition terug te vinden in de widget <a href="widgets-demo.php#eventspartners">Partner events</a>.</p>

		<h2>Sidebar</h2>
		<p>Voor elk event kan worden ingesteld welke widgets in de sidebar verschijnen. Is dit niets, dan toont de sidebar niet.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>