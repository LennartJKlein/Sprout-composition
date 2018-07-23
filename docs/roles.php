<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/roles.php">Rollen</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Rollen</h1>

		<div class="main-intro">
			<p>Deze browser composition is opgezet met <em>in ieder geval</em> onderstaande rollen in gedachte.</p>
		</div>
	</header>

	<div class="main-body">
		<h2>Wordpress users</h2>

		<h3 id="admin">1. Admin</h3>
		<p>Dit is een user die <em>alles in het CMS kan beheren.</em> Deze user heeft daarnaast een openbaar <a href="profile-person.php">gebruikersprofiel</a>.</p>

		<h3 id="redacteur">2. Redacteur</h3>
		<p>Dit is een user die <em>alle redactionele functies heeft: posts en pages publiceren, bewerken, etc.</em> Deze user heeft daarnaast een openbaar <a href="profile-person.php">gebruikersprofiel</a>.</p>

		<h3 id="ondersteuner">3. Ondersteuner</h3>
		<p>Dit is een user die <em>beperkte redactionele functies heeft (nader te bepalen).</em> Deze user heeft daarnaast een openbaar <a href="profile-person.php">gebruikersprofiel</a>.</p>

		<h3 id="expert">4. Expert</h3>
		<p>Dit is een user die <em>slechts concepten kan schrijven.</em> Deze user heeft daarnaast een openbaar <a href="profile-person.php">gebruikersprofiel</a>.</p>

		<h3 id="partner">5. Partner</h3>
		<p>Dit is een user die <em>slechts concepten van het type '<a href="post-partnerarticle.php">persbericht</a>' kan schrijven.</em>  Deze user heeft daarnaast een openbaar <a href="profile-company.php">bedrijfsprofiel</a>.</p>

		<h3 id="onderneming">6. Onderneming</h3>
		<p>Dit is een user die <em>slechts een openbaar <a href="profile-company.php">bedrijfsprofiel</a> heeft.</em></p>


		<h2 id="bezoekers">Bezoekers</h2>
		<p>Bezoekers kunnen <em>unknown</em> zijn, &oacute;f wanneer ze hun toegangscode hebben ingevoerd op de site; <em>premium</em>. Welke rol de bezoeker heeft, wordt opgeslagen en uitgelezen via een cookie genaamd: <code>sprout-role</code>. Op basis van die rol worden bepaalde elementen verborgen of weergegeven.</p>
		<div class="notification">Wordpress-users zijn automatisch 'premium'.</div>
		<h3 id="unknown">1. Unknown</h3>
		<p>Dit is elke ongeregistreerde bezoeker van de website. In de browser composition krijgt de <code>&lt;body&gt;</code> in dat geval de class:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
		<body class="role-unknown">
		'))) ?></code></pre>
		<div class="notification">Het toevoegen van de class <code>.role-unknown</code> aan een ander element dan <code>body</code>, maakt dat het element enkel zichtbaar is voor unknown-bezoekers.</div>

		<h3 id="premium">2. Premium</h3>
		<p>Dit is de bezoeker die Premium heeft aangeschaft en zijn toegangscode in de website heeft ingevuld. In de browser composition krijgt de <code>&lt;body&gt;</code> in dat geval de class:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<body class="role-premium">
		'))) ?></code></pre>
		<div class="notification">Het toevoegen van de class <code>.role-premium</code> aan een ander element dan <code>body</code>, maakt dat het element enkel zichtbaar is voor premium-bezoekers.</div>
		<br/>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>