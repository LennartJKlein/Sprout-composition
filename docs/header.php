<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/header.php">Header</a>
	</div>
	
	<header class="main__header">
		<h1 class="main__title">Header</h1>

		<div class="main__intro">
			<p>De header van de browser composition is de blauwe verticale balk aan de linkerzijde van het scherm.</p>
		</div>
	</header>

	<div class="main__body">
		<p>Met behulp van flex-box is deze altijd in balans met de pagina en de sidebar. Bezoekers hebben zelfs de mogelijkheid de breedte ervan aan te passen. Dit wordt opgeslagen in de cookie '<code>sprout-nav-width</code>', welke de breedte van de header is (in pixels, opgeslagen als integer).</p>
		<h2>Todo</h2>
		<h3>1. Zoeken</h3>
		<p>Het zoekveld (<code>.search__field</code>) en de container voor de zoekresultaten (<code>.search__resultscontainer</code>) zijn gebouwd, maar moeten nog gekoppeld worden aan een zoekfunctie van Wordpress zelf (of een plugin).</p>
		<h3>2. Custom menu's</h3>
		<p>Op dit moment zijn de 2 menu's in de header statisch. Deze moeten worden omgezet naar twee custom menu's: een hoofdmenu (<code>.menu--main</code>) en een secundair menu (<code>.menu--tools</code>). Het attribuut 'hint' wordt gebruikt om bij hover een tooltip te laten zien.</p>
		<p>Daarnaast is het belangrijk dat er een icoon uit de <a href="https://fontawesome.com/v4.7.0/icons/" target="_new">FontAwesome bibliotheek v4.7.0</a> toegevoegd kan worden aan de tekst in het menu__item.</p>
		<p>Hieronder een voorbeeld wat de structuur van het menu moet worden:</p>
		<pre class="codeBlock"><code class="prettyprint lang-html"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<nav class="nav">
			    <div class="nav__head">
			        <a href="/index.php" class="logo logo--desktop">...</a>
			        
			        <form id="search">...</form>
			        
			        <div class="search__resultscontainer">...</div>
			        
			        <ul class="menu menu--main">
			            <li class="menu__item current-menu__item" hint="Item 1">
			                <a href="#" class="menu__link">
			                    <i aria-hidden="true" class="fa fa-newspaper-o"></i>
			                    <span class="menu__label">Item 1</span>
			                </a>
			            </li>
			            <li class="menu__item" hint="Item 2">
			                <a href="#" class="menu__link">
			                    <i aria-hidden="true" class="fa fa-calendar-o"></i>
			                    <span class="menu__label">Item 2</span>
			                </a>
			            </li>
			            <li class="menu__item" hint="Item 3">
			                <a href="#" class="menu__link">
			                    <i aria-hidden="true" class="fa fa-paper-plane"></i>
			                    <span class="menu__label">Item 3</span>
			                </a>
			            </li>
			            <li class="menu__item" hint="Item 4">
			                <a href="#" class="menu__link">
			                    <i aria-hidden="true" class="fa fa-book"></i>
			                    <span class="menu__label">Item 4</span>
			                </a>
			            </li>
			        </ul>
			    </div>

			    <div class="nav__footer">

			        <ul class="menu menu--tools">
			            <li class="menu__item" hint="Item 5">
			                <a href="#" class="menu__link">
			                    <i aria-hidden="true" class="fa fa-question-circle"></i>
			                    <span class="menu__label">Item 5</span>
			                </a>
			            </li>
			        </ul>

			        <ul class="menu menu--premium">
			            ...
			        </ul>
			    </div>
			</nav>
		'))) ?></code></pre>
		<h3>3. Highlighten van huidige menu__item</h3>
		<p>Met behulp van de class <code>.current-menu__item</code> moet uiteindelijk de huidige pagina worden gearceerd. In deze statische browser composition is dat het item 'nieuws'.</p>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>