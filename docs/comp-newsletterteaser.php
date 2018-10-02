<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-newsletterteaser.php">newsletterTeaser</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">newsletterTeaser</h1>
		<div class="main__intro">Dit component is een aansporing om je emailadres op te geven voor de nieuwsbrief.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div class="newsletterTeaser">
			<div class="newsletterTeaser__cell">
				<h3 class="newsletterTeaser__title">Mis geen enkel ondernemersnieuws</h3>
				<p class="newsletterTeaser__description">Altijd op de hoogte van het laatste nieuws en achtergronden voor startups, scaleups en investeerders? Laat je e-mailadres achter en mis niks!</p>
			</div>
			<div class="newsletterTeaser__cell">
				<form id="newsletterSignup" class="newsletterTeaser__form">
					<label class="newsletterTeaser__label"><i class="fa fa-envelope"></i></label>
					<input type="text" placeholder="E-mailadres..." class="newsletterTeaser__field newsletterTeaser__field--icon" />
					<button type="submit" class="newsletterTeaser__submit">Aanmelden</button>
				</form>
			</div>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="newsletterTeaser">
			    <div class="newsletterTeaser__cell">
			        <h3 class="newsletterTeaser__title">Mis geen enkel ondernemersnieuws</h3>
			        <p class="newsletterTeaser__description">Altijd op de hoogte van het laatste nieuws en achtergronden voor startups, scaleups en investeerders? Laat je e-mailadres achter en mis niks!</p>
			    </div>
			    <div class="newsletterTeaser__cell">
			        <form id="newsletterSignup" class="newsletterTeaser__form">
			            <label class="newsletterTeaser__label"><i class="fa fa-envelope"></i></label>
			            <input type="text" placeholder="E-mailadres..." class="newsletterTeaser__field newsletterTeaser__field--icon" />
			            <button type="submit" class="newsletterTeaser__submit">Aanmelden</button>
			        </form>
			    </div>
			</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>