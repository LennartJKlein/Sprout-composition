<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-event.php">event</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">event</h1>
		<div class="main__intro">Dit component geeft vorm aan posts met het type 'event'.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<a href="/evenement/the-next-web-conference-2018.php" target="_new">Default event voorbeeld</a>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<article class="event">
			    <header class="event__header">
			        <h1 class="event__title">The Next Web Conference 2018</h1>
			        <div class="event__intro">Op 24 en 25 mei vindt in Amsterdam de grootste techconferentie van Europa plaats: TNW Conference 2018. Tienduizend bezoekers vanuit de hele wereld komen hier luisteren naar sprekers als Constantijn van Oranje Nassau (StartupDelta), Anjali Sud (Vimeo), Mike Curtis (Airbnb), John Collison (Stripe) Rich Pierson (Headspace), Alex Le (Reddit) en vele anderen!</div>
			        <div class="event__hero figure">
			            <img src="/images/uploads/events/the_next_web.jpg" class="figure__image" />
			        </div>
			        <div class="event__info">
			            <div class="event__infoItem" name="location">
			                <i class="event__icon fa fa-map-marker"></i>
			                <div><a href="https://goo.gl/maps/ZTBrAnb34aU2" target="_blank">Westergasfabriek Amsterdam</a></div>
			            </div>
			            <div class="event__infoItem" name="date time">
			                <i class="event__icon fa fa-clock-o"></i>
			                <div>24 en 25 mei - 09:00 tot 18:00</div>
			            </div>
			            <div class="event__infoItem" name="price">
			                <i class="event__icon fa fa-euro"></i>
			                <div>515,- (excl BTW)</div>
			            /div>
			            <div class="event__infoItem" name="discount">
			                <i class="event__icon fa fa-star"></i>
			                <div>10% korting</div>
			            </div>
			        </div>
			    </header>

			    <main class="event__body">
			        <p>Met honderd side-events, 200 investeringsfondsen, 1500 startups en een epische hack battle is dit een event dat je als techliefhebber niet mag missen. Bekijk op de website het hele programma en sprekersoverzicht.</p>
			        <p>Als partner van dit evenement is Sprout aanwezig en publiceert met regelmaat over sprekers en het programma.</p>
			    </main>

			     <div class="event__signup">
			        <h3 class="event__signupTitle">Deelnemen</h3>
			        <p>Speciaal voor Sprout Members mogen wij een exclusieve korting aanbieden. Members krijgen voor het Super Early Bird-tarief 10% korting. hiermee krijg je toegang tot de volledige tweedaagse conferentie, het openings én eindfeest en inzicht in de gastenlijst.</p>
			        <div class="event__options">
			            <div class="event__externallink">
			                <a href="http://www.google.com/" target="_new" class="button button--secondary"><i class="fa fa-external-link" aria-hidden="true"></i> aanmelden</a>
			            </div>
			            <div class="event__coupon">
			                <span class="event__couponLabel">Kortingscode:</span>
			                <span class="event__couponCode">TR03DBI2</span>
			            </div>
			        </div>

			        <!-- include premiumTeaser--events -->
			    </div>
			</article>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>