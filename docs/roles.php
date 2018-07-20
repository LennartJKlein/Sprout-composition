<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/roles.php">Rollen</a>
	</div>

	<h1 class="main-title">Rollen</h1>

	<div class="main-intro">
		<p>Deze browser composition is opgezet met <em>in ieder geval</em> onderstaande bezoekerrollen in gedachte. Op basis van die rol worden bepaalde elementen in de browser composition verborgen of weergegeven.</p>
	</div>

	<div class="main-body">
		<h2 id="bezoekers">1. Bezoekers</h2>
		<h3 id="unknown">Unknown</h3>
		<p>Dit is elke ongeregistreerde bezoeker van de website. In de browser composition krijgt de <code>&lt;body&gt;</code> in dat geval de class:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
		<body class="role-unknown">
		'))) ?></code></pre>
		<div class="notification">Het toevoegen van de class <code>.role-unknown</code> aan een element, maakt dat deze enkel zichtbaar is voor die bezoekers. Dit geldt niet voor de body.</div>
		<br/>

		<h3 id="premium">Premium</h3>
		<p>Dit is de bezoeker die Premium heeft aangeschaft en zijn toegangscode in de website heeft ingevuld. In de browser composition krijgt de <code>&lt;body&gt;</code> in dat geval de class:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<body class="role-premium">
		'))) ?></code></pre>
		<div class="notification">Het toevoegen van de class <code>.role-premium</code> aan een element, maakt dat deze enkel zichtbaar is voor bezoekers die Premium hebben ingeschakeld. Dit geldt niet voor de body.</div>

		<h2 id="auteur">2. Auteur</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en posts en pages kan publiceren. Een auteur heeft een eigen gebruikerspagina.</p>

		<h2 id="partner">3. Partner</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en slechts posts van het type 'persbericht' kan plaatsen. Een partner heeft een eigen gebruikerspagina.</p>

		<h2 id="admin">4. Admin</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en alles daarvan kan beheren. Een admin heeft een eigen gebruikerspagina.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>