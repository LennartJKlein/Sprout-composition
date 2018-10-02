<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/post-types.php">Post types</a>
		<a href="/docs/post-article.php">Artikel</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Artikel</h1>

		<div class="main__intro">
			<p>Een artikel is het basistype voor een Wordpress-post. De onderstaande informatie vestigt de aandacht op een aantal zaken van deze post type.</p>
		</div>
	</header>

	<div class="main__body">

		<div class="panel">
			<h3 class="panel__title">Demo's</h3>
			<ul class="linkList">
				<li class="linkList-item">
					<a class="linkList__link" href="/artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" target="_new">Artikel: 'Hoe overleef je tegenwoordig als winkel?'</a>
				</li>
				<li class="linkList-item">
					<a class="linkList__link" href="/artikel/7-redenen-waarom-klanten-je-winkel-de-rug-toekeren.php" target="_new">Artikel: '7 redenen waarom je klanten je winkel de rug toekeren'</a>
				</li>
				<li class="linkList-item">
					<a class="linkList__link" href="/artikel/waarom-retailers-het-contact-met-jongeren-kwijt-zijn-geraakt.php" target="_new">Artikel: 'Waarom retailers het contact met jongeren kwijt zijn geraakt'</a>
				</li>
				<li class="linkList-item">
					<a class="linkList__link" href="/artikel/premium-artikel.php" target="_new">Premium artikel: 'Vooral premium members houden van informatieve artikelen'</a>
				</li>
			</ul>
		</div>

		<div class="notification">Alle JavaScript van de artikelpagina is te vinden in het bestand <code>article.js</code></div>

		<div class="notification">De PHP pagina's van bovenstaande demo's kunnen worden gebruikt om de wp-templates voor deze post type te maken.</div>

		<h2>Wordpress velden</h2>
		<p>Een artikel bestaat uit zowel de standaardvelden die Wordpress meegeeft aan een post, als wat extra velden. Hieronder staan de velden die  via het CMS moeten kunnen worden ingevoerd:</p>
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
					<td><code>.article__title</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Featured Image</td>
					<td><code>.article__hero</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Inleiding</td>
					<td><code>.article__intro</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Body</td>
					<td><code>.article__content</code></td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Category <em>(in de frontend: topic)</em></td>
					<td>(onderdeel van <code>.article__tags</code>)</td>
				</tr>
				<tr>
					<td><i class="fa fa-wordpress text--primary"></i></td>
					<td>Tags</td>
					<td><code>.article__tags</code></td>
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
					<td><code>.articleMeta__readtime</code></td>
				</tr>
				<tr>
					<td></td>
					<td>CTA-tekst naar dit artikel <em>(voor de button in een card)</em></td>
					<td><code>.card__button</code></td>
				</tr>
				<tr>
					<td></td>
					<td>Premium artikel? <em>(checkbox)</em></td>
					<td>-</td>
				</tr>
				<tr>
					<td></td>
					<td>Instant additional articles? <em>(checkbox)</em></td>
					<td>-</td>
				</tr>
				<tr>
					<td></td>
					<td>Selectiemethode instant additional articles <em>(default, chronologisch, topic)</em></td>
					<td>-</td>
				</tr>
			</tbody>
		</table>

		<h2>Premium</h2>
		<p>Wanneer de checkbox 'Premium artikel?' is aangevinkt, maakt de post gebruik van een andere template file, namelijk die van een <a href="/artikel/premium-artikel.php" target="_new">premium-artikel</a>. Daarmee is die post enkel nog leesbaar voor mensen die hun premium-toegangscode in de website hebben geactiveerd (meer hierover op de pagina <a href="premium.php">Premium</a>).</p>
		<p>Deze template is in een aantal opzichten anders: de sidebar <code>&lt;aside&gt;</code> is weggelaten en daarnaast wordt de feature <a href="#instant-additional-article">instant additional article</a> niet gebruikt; alleen dit artikel wordt laten zien.</p>

		<h2>Permalink</h2>
		<p>De permalink van de artikelen moet de volgende structuur hebben:
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			https://www.sprout.nl/artikel/titel-van-het-artikel
		'))) ?></code></pre>
		De subdirectory 'artikel' is ter bevordering van de SEO.</p>

		<h2>Sidebar</h2>
		<p>Zoals beschreven op de pagina <a href="widgets.php">widgets</a>, kan er per <a href="topic.php">topic</a> (in Wordpress: <em>category</em>) worden ingesteld welke widgets in de sidebar verschijnen. Op de artikelpagina wordt dus op basis van de eerste category bepaald welke widgets in de sidebar verschijnen.</p>

		<h2 id="social-sharing">Social sharing</h2>
		<p>Een artikel moet gedeeld kunnen worden op sociale media. Op kleine schermen zitten deze knoppen verscholen achter een floating button. Hiervoor wordt de component <code>shareModal</code> gebruikt. Deze is als volgt in de header te vinden:</p>
		<pre class="codeBlock" id="shareModal"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<header id="header" ...>

			    <div class="head__container">
			        ...
			    </div>

			    <button class="shareToggle"><i aria-hidden="true" class="fa fa-share-alt"></i></button>
			    <div id="shareModal">
			        <ul class="shareList shareList--modal">
			            <li class="shareList__item">
			                <a class="shareList__link shareList__link--whatsapp" href="whatsapp://send?text=https://www.sprout.nl/artikel/titel-van-het-artikel.php" data-action="share/whatsapp/share">
			                    <i class="fa fa-whatsapp"></i><span class="shareList__label"><strong>Delen</strong></span>
			                </a>
			            </li>
			            <li class="shareList__item">
			                <a class="shareList__link shareList__link--facebook" href="#">
			                    <i class="fa fa-facebook"></i><span class="shareList__label"><strong>Delen</strong></span>
			                </a>
			            </li>
			            <li class="shareList__item">
			                <a class="shareList__link shareList__link--twitter" href="#">
			                    <i class="fa fa-twitter"></i><span class="shareList__label"><strong>Tweeten</strong></span>
			                </a>
			            </li>
			        </ul>
			    </div>

			    <nav class="nav">
			        ...
			    </nav>

			</header>
		'))) ?></code></pre>
		<div class="notification">De code van het component shareModal is ook te vinden in <a href="https://github.com/LennartJKlein/Sprout-composition/blob/master/templates/modals/sharemodal.php" target="_new"><code>sharemodal.php</code></a></div>
		<p>Op grote schermen zijn de deelknoppen daarentegen te vinden boven en onder het artikel. Hiervoor wordt de component <a href="shareactions.php"><code>shareActions</code></a> gebruikt. De knoppen boven het artikel hebben daarin de <code>shareActions--wide</code> variant en zijn als volgt in de code te vinden:</p>
		<pre class="codeBlock" id="shareActions><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<article class="article">

			    <header class="article__header">

			        <div class="article__tags">...</div>
			        <h1 class="article__title">...</h1>
			        <div class="article__intro">...</div>
			        
			        <div class="shareActions shareActions--wide">
			            <ul class="shareList shareList--row">
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--facebook" href="#">
			                        <i class="fa fa-facebook"></i><span class="shareList__label">share</span>
			                    </a>
			                </li>
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--linkedin" href="#">
			                        <i class="fa fa-linkedin"></i><span class="shareList__label">share</span>
			                    </a>
			                </li>
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--twitter" href="#">
			                        <i class="fa fa-twitter"></i><span class="shareList__label">tweet</span>
			                    </a>
			                </li>
			            </ul>
			        </div>

			        <div class="article__hero figure">...</div>
			        <div class="article__info">...</div>

			    </header>

			    <main class="article__content">
			        ...
			    </main>

			    ...

			</article>
		'))) ?></code></pre>
		<div class="notification">Deze code is ook te vinden in <a href="https://github.com/LennartJKlein/Sprout-composition/blob/master/templates/shareactions--wide.php" target="_new"><code>shareactions--wide.php</code></a></div>
		<p>De knoppen onder het artikel zijn in de browser composition als volgt in de code te vinden:</p>
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<article class="article">
			    ...

			    <main class="article__content">
			        ...
			    </main>

			    <footer class="article__footer">

			        <div class="shareActions">
			            <ul class="shareList shareList--row">
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--facebook" href="#">
			                        <i class="fa fa-facebook"></i><span class="shareList__label">share</span>
			                    </a>
			                </li>
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--linkedin" href="#">
			                        <i class="fa fa-linkedin"></i><span class="shareList__label">share</span>
			                    </a>
			                </li>
			                <li class="shareList__item">
			                    <a class="shareList__link shareList__link--twitter" href="#">
			                        <i class="fa fa-twitter"></i><span class="shareList__label">tweet</span>
			                    </a>
			                </li>
			            </ul>
			        </div>

			        <div class="articleAuthor articleAuthor--bottom">
			            ...
			        </div>

			    </footer>

			</article>
		'))) ?></code></pre>
		<div class="notification">Deze code is ook te vinden in <a href="https://github.com/LennartJKlein/Sprout-composition/blob/master/templates/shareactions.php" target="_new"><code>shareactions.php</code></a></div>

		<h2 id="instant-additional-article">Instant additional article</h2>
		<div class="figure card"><img src="../images/uploads/instant-additional-article.gif" class="figure__image" /></div>
		<p>De browser composition heeft een feature om lezers te verleiden n&oacute;g een artikel te lezen. Wanneer hij de onderkant van een artikel bereikt, laat de pagina een gerelateerd volgend artikel daaronder invliegen. <em>(Dit gebeurt enkel op grote schermen).</em></p>
		<p>Per artikel kan in het CMS worden ingesteld of deze feature wordt gebruikt en welke selectiemethode plaatsvindt:
			<ul class="list">
				<li>Default. Het eerste relevante artikel volgens titel en body.</li>
				<li>Chronologisch. Het eerstvolgende artikel op datum (terug in de tijd).</li>
				<li>Topic. Ander artikel uit het topic inladen.</li>
			</ul>
		</p>

		<div class="notification">De feature 'instant additional article' maakt gebruik van de bibliotheek <a href="https://maximzhurkin.github.io/jquery-scrolla/" target="_new">Scrolla</a>. Meer daarover op de pagina '<a href="animations.php">animaties</a>'.</div>
		
		<h3 id="progresspanel">Progress panel</h3>
		<p>Om de lezer overzicht te geven over de ingeladen artikelen, is op grote schermen in de rechter bovenhoek het progressPanel te zien. Dit is een lijst met de artikelen die op de pagina zijn ingeladen. Daarbij wordt aangegeven welke gelezen zijn en hoe ver de lezer is. De volgende HTML code is daarvoor bovenaan de artikelpagina geplaatst:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="progressPanel"> <!-- Voor grote schermen -->
			    <button class="progressPanel__close button button--small button--clean"><i class="fa fa-close"></i></button>

			    <ul class="progressPanel__list">
			        <li class="progressPanel__item">
			            <a href="/url-article-one" class="progressPanel__link">
			                <span class="progressPanel__title">The title of the first article</span>
			                <span class="progressPanel__author">Author One</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel__svg">
			                    <circle class="progressPanel__circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			        <li class="progressPanel__item"> <!-- Dit item is lazy load ingeladen -->
			            <a href="/url-article-two" class="progressPanel__link">
			                <span class="progressPanel__title">The title of the second article</span>
			                <span class="progressPanel__author">Author Two</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel__svg">
			                    <circle class="progressPanel__circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			        <li class="progressPanel__item"> <!-- Dit item is lazy load ingeladen -->
			            <a href="/url-article-three" class="progressPanel__link">
			                <span class="progressPanel__title">The title of the third article</span>
			                <span class="progressPanel__author">Author Three</span>
			                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" class="progressPanel__svg">
			                    <circle class="progressPanel__circle" fill="none" stroke="#2a76e8" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
			                </svg>
			            </a>
			        </li>
			    </ul>
			</div>
		'))) ?></code></pre>

		<h3 id="progressline">Progress line</h3>
		<p>Om de lezer op kleine schermen een leestijdindicatie te geven, is bovenin het scherm een progress line te zien.  De volgende HTML code is daarvoor bovenaan de artikelpagina geplaatst, net onder het progressPanel:</p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="progressLine"></div> <!-- Voor kleine schermen -->
		'))) ?></code></pre>

		<h3>URL reload</h3>
		<p>Met behulp van het volgende script wordt de URL van het artikel dat de gebruiker leest in de adresbalk ingeladen. Deze functie wordt getriggerd op basis van de waarde van <code class="prettyprint">&nbsp;$('#page').scrollTop()&nbsp;</code></p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities("
			function changeUrl(link) {
			    var pageArray = location.pathname.split('/'),
			        actualPage = pageArray[pageArray.length - 1];

			    if (actualPage != link && history.pushState ) window.history.pushState({path: link}, '', link);
			}
		"))) ?></code></pre>

		<h3>Sidebar widgets</h3>
		<p>Zoals aangegeven, is per artikel in te stellen welke widgets in de sidebar staan. Omdat de artikelpagina nieuwe artikelen onder elkaar inlaadt, moeten die widgets verticaal verschuiven.</p>

		<h2>Todo</h2>
		<h3>1. Template files</h3>
		<p>Er zullen 2 template files moeten komen voor deze post type, namelijk: 'artikel' en 'premium artikel'. Afhankelijk van de checkbox 'Premium artikel'?' moet het ene of andere template worden gebruikt. De demopagina's kunnen als basis dienen voor die templates.</p>
		<h3>2. Lazy load</h3>
		<p>Op dit moment zijn er al 3 artikelen opgenomen in de PHP-code van de artikelpagina. Het tweede en derde artikel worden vervolgens weergegeven zodra ze in beeld komen. Desondanks moet in de uiteindelijk website de HTML van het volgende artikel moet pas worden opgehaald en ingeladen zodra de onderkant van het voorgaande artikel is bereikt. Dit in verband met trage verbindingen en SEO.</p>
		<h3>3. Meta data</h3>
		<p>De (sociale) meta data van het artikel, <code class="prettyprint">&nbsp;&lt;meta property="og:..."&gt;&nbsp;</code>, <code class="prettyprint">&nbsp;&lt;meta name="description"&gt;&nbsp;</code>, <code class="prettyprint">&nbsp;&lt;meta name="thumbnail"&gt;&nbsp;</code>, etc.) moet nog worden ingeladen in de header met behulp van de Yoast plugin.</p>
		<h3>4. Share buttons</h3>
		<p>De share buttons moeten op eniger wijze werkbaar worden. Dit kan met een Wordpress plugin. Daarbij is het enkel van belang om classes van de componenten, zoals eerder op deze pagina beschreven, aan te houden. <strong>Let wel:</strong> per artikel zijn er dus 3 plaatsen waar de social sharing knoppen staan: bovenaan een artikel, onderaan een artikel én voor mobiel in de #header van de pagina.</p>
		<h3>5. Gerelateerde artikelen</h3>
		<p>Onderaan de artikelpagina is er ruimte voor het laten zien van gerelateerde artikelen uit dezelfde category (<em>topic</em>). Deze moeten door het systeem worden uitgekozen en geladen.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>