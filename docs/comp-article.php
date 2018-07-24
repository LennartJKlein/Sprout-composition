<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-article.php">article</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">article</h1>
		<div class="main-intro">Dit component geeft vorm aan posts met het type 'artikel'.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<a href="/artikel/7-redenen-waarom-klanten-je-winkel-de-rug-toekeren.php" target="_new">Default artikel voorbeeld</a>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<article class="article">
			    <header class="article-header">
			        <div class="article-tags">
			            <button class="button button--small button--grey" name="scaleups">Retail</button>
			            <button class="button button--small button--grey" name="investeren">Marketing</button>
			        </div>
			        <h1 class="article-title">7 redenen waarom klanten je winkel de rug toekeren</h1>
			        <div class="article-intro">Sprout-expert Fred Rutgers onderzocht waarom klanten een winkel de rug toekeren. De uitkomsten zullen voor menig winkelier best even schrikken zijn.</div>

			        <!-- include component shareActions -->

			        <div class="article-hero figure">
			            <img src="../images/uploads/articles/article-hero3.jpg" class="figure-image" />
			            <span class="figure-credit">&copy; Maikel Thijssen</span>
			        </div>
			        <div class="article-info">

			            <!-- include component articleMeta -->

			            <!-- include component articleAuthor -->

			        </div>
			    </header>
			    <main class="article-content">
			        <p>Veel winkeliers denken dat klanten niet meer naar hun winkel komen omdat webshops goedkoper zijn. Vreemd genoeg bleek dit uit onderzoek maar zelden het geval.</p>
			        <p>Klanten zoeken niet perse de laagste prijs, maar ze willen wél de beste deal! Daarbij speelt vooral de totale koopbeleving een belangrijke rol.</p>
			        <p>Voor dit onderzoek werden 2000 consumenten ondervraagd via een enquête, en werden 20 consumenten ondervraagd in een consumenten-panel. Hieronder lees je de 7 belangrijkste uitkomsten:</p>
			        <h2>1. Welkom voelen</h2>
			        <p>Consumenten willen zich welkom voelen in een winkel. Dat heeft te maken met sfeer, verlichting, uitstraling van de winkel, maar bovenal met hoe medewerkers ze verwelkomen in de winkel. Hoe voelt de begroeting door het personeel. Komt die begroeting oprecht gemeend over of is het een plichtmatige begroeting zonder gevoel en oprechte interesse. Gebrek aan de juiste begroeting bepaalt voor een groot deel of de klant je de omzet gunt!</p>
			        
			        <h2>2. Meer dan geld</h2>
			        <p>Zie je de klant als mens of als een portemonnee waar je omzet uit moet trekken? Klanten willen voelen dat je ze echt wilt helpen en niet het idee krijgen dat je alleen uit bent op hun geld. Een veel gehoorde opmerking was dat consumenten het gevoel hebben dat één seconde na het afrekenen de aandacht al niet meer bij de klant is. Dat is vaak reden om niet meer of minder bij die winkel te komen.</p>
			    </main>
			    <footer class="article-footer">

			        <!-- include component shareActions -->

			        <!-- include component articleAuthor--bottom -->

			    </footer>
			    
			    <!-- include component banner--leaderboard -->

			</article>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--premium <em>(voor premium artikelen)</em></h2>
		<p><a href="/artikel/premium-artikel.php" target="_new">Premium artikel voorbeeld</a></p>

		<h3>--partner <em>(voor persberichten)</em></h2>
		<p><a href="/persbericht/intershop-nieuwe-hoofdsponsor-van-ecommercerun.php" target="_new">Persbericht voorbeeld</a></p>
		
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>