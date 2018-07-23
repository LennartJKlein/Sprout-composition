<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/premium.php">Premium</a>
	</div>

	<header class="main-header">
		<h1 class="main-title"><img src="/images/premium-logo.svg" style="height:1em;"/></h1>

		<div class="main-intro">
			<p>Om een exclusieve ervaring te bieden aan sommige bezoekers van de website, is het premium-systeem ontworpen. Bezoekers die premium hebben aangeschaft krijgen toegang to exclusieve artikelen, nieuwsbrieven, korting op evenementen, etc.</p>
		</div>
	</header>

	<div class="main-body">
		<h2>Flow</h2>
		<p>1. Een bezoeker komt op de website en ziet de openbare content die Sprout aanbiedt. Daarnaast ziet hij teasers die hem verleiden om Premium aan te schaffen en in te schakelen. <em>(<a href="/index.php">demo</a>)</em></p>
		<p>2. Nadat de bezoeker via een formulierpagina zijn gegevens heeft gedeeld en toestemming heeft gegeven tot acceptgiro, ontvangt hij per mail een unieke toegangscode. <em>(niet ontworpen)</em></p>
		<p>3. Op de website kan de bezoeker deze toegangscode invoeren. De website checkt of de code klopt. Zo ja? Dan schakelt de Sprout site een cookie in dat de bezoeker premium is. <em>(zie menu, linksonderin)</em></p>
		<p>4. De bezoeker krijgt nu premium content te zien en ontvangt een uitgebreidere nieuwsbrief in zijn mailbox.</p>

		<h2>Randvoorwaarden</h2>
		<p>Wanneer de bezoeker op een ander apparaat de site bezoekt, moet deze uiteraard zijn toegangscode opnieuw invoeren.</p>
		<p>De cookie met de toegangscode moet maximaal 30 dagen in de browser opgeslagen worden.</p>
		<p>De cookie met toegangscode moet bij elk bezoek worden geverifieerd.</p>

		<h2>Vormgeving</h2>
		<p>Op de website is alles wat met Premium te maken heeft te herkennen aan het blauw-roze verloop. Daarnaast heeft premium een eigen logo:<br/><br/>
		<img src="/images/premium-logo.svg" width="200"></p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>