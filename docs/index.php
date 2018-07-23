<?php include '../templates/header.php'; ?>

	<!-- Deze directory bevat alle kennis en voorbeelden van dit Wordpress thema -->

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Documentatie</h1>

		<div class="main-intro">
			<p>Deze website is een <em>browser composition</em>. Het dient als basis voor het te ontwikkelen Wordpress-thema voor Sprout.nl.</p>
		</div>
	</header>

	<div class="main-body">

		<h2>Het doel van een browser composition</h2>
		<p>Deze <em>browser composition</em> is in feite een verzameling van HTML, SCSS en PHP dat het ontwerpen van het Wordpress-thema tastbaar en effici&euml;nt maakte. Anders dan een Photoshop-ontwerp, is zo'n <em>browser composition</em> direct te testen op verschillende apparaten, zodat de responsiveness en vormgeving voor elk apparaat geoptimaliseerd kon worden. Een optimale leeservaring staat immers bovenaan voor de nieuwe site van Sprout. Een <em>browser composition</em> is dus voor een grote applicaties zoals de nieuwe website van Sprout, een handige tool.</p>

		<h2>De basis voor een thema</h2>
		<p>Daarnaast vormt deze <em>composition</em> de basis voor het te ontwikkelen Wordpress-thema. De basis van elk thema &mdash; de SCSS en HTML &mdash; is immers tijdens het ontwerpproces al geoptimaliseerd om op elk apparaat en in elke browser goed te functioneren en de beste leeservaring te garanderen.</p>
		<p>Deze <em>composition</em> is daarentegen geen Wordpress-thema op zichzelf. Hoewel de algehele structuur van Wordpress in gedachte is gehouden tijdens het ontwerpen van de componenten en pagina's, zijn er geen pagina-templates gemaakt, is er slechts logica voor de frontend, zijn alle pagina's statisch, etc.</p>

		<div class="notification">Deze browser composition is op elke manier <em>mobile-first</em> ontworpen.</div>

		<br/>
		<br/>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>