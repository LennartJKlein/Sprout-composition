<?php include '../templates/header.php'; ?>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
		<a href="/docs/post-article.php">Artikel</a>
	</div>

	<h1 class="main-title">Artikel</h1>

	<div class="main-intro">
		<p>Een artikel is het basistype voor een Wordpress-post. Het bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een post, als wat extra velden.</p>
	</div>

	<div class="main-body">
		<h2>Velden</h2>
		<p>Een artikel bestaat uit een aantal variabelen die via het CMS moeten worden ingevoerd:</p>

		<h2>Sidebar</h2>
		<p>Voor elk artikel is het mogelijk om in te stellen welke widgets in de sidebar komen te staan.</p>

		<h2>Premium</h2>
		<p></p>

		<h2>Additional live load</h2>
		<div class="figure card">
			<img src="../images/uploads/additional-live-load.gif" class="figure-image" />
		</div>
		<p>De browser composition heeft een feature om lezers te verleiden om n&oacute;g een artikel te lezen; wanneer hij de onderkant van een artikel bereikt, laat de pagina een gerelateerd volgend artikel daaronder invliegen. (Dit gebeurt enkel op grote schermen).</p>
		<div class="notification">Deze feature maakt gebruik van de bibliotheek <a href="https://maximzhurkin.github.io/jquery-scrolla/" target="_new">Scrolla</a>. Meer daarover op de pagina '<a href="animations.php">animaties</a>'.</div>
		<h4>Progresspanel</h4>
		<p>Om de lezer overzicht te geven over de ingeladen artikelen, is op grote schermen in de rechter bovenhoek het progressPanel te zien. Dit is een lijst met de artikelen die op de pagina zijn ingeladen. Daarbij wordt aangegeven welke gelezen zijn en hoe ver de lezer is. De volgende HTML code wordt daarvoor bovenaan de artikelpagina geplaatst:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="progressPanel"> <!-- Voor grote schermen -->
			    <button class="progressPanel-close button button--small button--clean"><i class="fa fa-close"></i></button>

			    <ul class="progressPanel-list">
			        <li class="progressPanel-item">
			            <a href="/url-article-one" class="progressPanel-link">
			                <span class="progressPanel-title">The title of the first article</span>
			                <span class="progressPanel-author">Author One</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel-svg">
			                    <circle class="progressPanel-circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			        <li class="progressPanel-item">
			            <a href="/url-article-two" class="progressPanel-link">
			                <span class="progressPanel-title">The title of the second article</span>
			                <span class="progressPanel-author">Author Two</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel-svg">
			                    <circle class="progressPanel-circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			        <li class="progressPanel-item">
			            <a href="/url-article-three" class="progressPanel-link">
			                <span class="progressPanel-title">The title of the third article</span>
			                <span class="progressPanel-author">Author Three</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel-svg">
			                    <circle class="progressPanel-circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			    </ul>

			</div>

			<div class="progressLine"></div> <!-- Voor kleine schermen -->
		'))) ?></code></pre>
	
		<h4>Lazy load</h4>
		<p>Op dit moment is deze feature volledig afhankelijk van jQuery; de 3 artikelen zijn vanaf het begin in de HTML van de pagina opgenomen en worden op het juiste moment weergegeven. <strong>Dit moet veranderen (todo):</strong> de HTML van het volgende artikel moet pas worden ingeladen zodra de onderkant van het voorgaande artikel is bereikt. Dit in verband met trage verbindingen en SEO.</p>
		<h4>URL reload</h4>
		<p>Met behulp van het volgende script wordt de URL van het artikel dat de gebruiker leest in de adresbalk ingeladen. Deze functie wordt getriggerd op basis van de waarde van <code class="prettyprint">$('#page').scrollTop()</code></p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities("
			function changeUrl(link) {
			    var pageArray = location.pathname.split('/'),
			        actualPage = pageArray[pageArray.length - 1];

			    if (actualPage != link && history.pushState ) window.history.pushState({path: link}, '', link);
			}
		"))) ?></code></pre>
		<h4>Sidebar widgets</h4>
		<p>Zoals aangegeven, is per artikel in te stellen welke widgets in de sidebar staan. Omdat de artikelpagina nieuwe artikelen onder elkaar inlaadt, moeten die widgets verticaal verschuiven. </p>

		<h2>Demo's</h2>
		<p>Een artikel</p>

		<h3>Premium</h3>
		<p>Dit is de bezoeker die Premium heeft aangeschaft en zijn toegangscode in de website heeft ingevuld. In de browser composition krijgt de <code>&lt;body&gt;</code> in dat geval de class:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<body class="role-premium">
		'))) ?></code></pre>
		<div class="notification">Het toevoegen van de class <code>.role-premium</code> aan een element, maakt dat deze enkel zichtbaar is voor bezoekers die Premium hebben ingeschakeld. Dit geldt niet voor de body.</div>

		<h2>2. Auteur</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en posts en pages kan publiceren. Een auteur heeft een eigen gebruikerspagina.</p>

		<h2>3. Partner</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en slechts posts van het type 'persbericht' kan plaatsen. Een partner heeft een eigen gebruikerspagina.</p>

		<h2>4. Admin</h2>
		<p>Een <strong>WP user. </strong>Dit is de bezoeker die toegang heeft tot het Wordpress-systeem en alles daarvan kan beheren. Een admin heeft een eigen gebruikerspagina.</p>

		<li class="linkList-item"><a class="linkList-link" href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" target="_new">Artikel</a></li>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>