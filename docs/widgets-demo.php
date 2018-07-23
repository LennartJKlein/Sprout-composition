<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/widgets.php">Alle widgets</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Alle widgets</h1>

		<div class="main-intro">
			<p>Op deze pagina staan voorbeelden van verschillende widgets, samengesteld uit &eacute;&eacute;n of meerdere componenten. Deze widgets kunnen zowel in de sidebar als in de pagina geplaatst worden.</p>
		</div>
	</header>

	<div class="main-body">

		<h3>Investeringen <em class="text--grey-dark">(investments)</em></h3>
		<?php include '../templates/widgets/investments.php'; ?>
		<br/><br/>

		<h3>Recente forumposts <em class="text--grey-dark">(forumpostsWidget)</em></h3>
		<?php include '../templates/widgets/forumposts.php'; ?>
		<br/><br/>
		
		<h3>Bericht voor PREMIUM-bezoekers <em class="text--grey-dark">(premiumMessage)</em></h3>
		<?php include '../templates/widgets/premiummessage.php'; ?>
		<br/><br/>

		<h3>Teasing PREMIUM <em class="text--grey-dark">(<a href="premiumteaser.php" class="text--grey-dark">premiumTeaser</a>)</em></h3>
		<?php include '../templates/widgets/premiumteaser.php'; ?>
		<br/><br/>
		
		<h3>Teasing partnerschap <em class="text--grey-dark">(partnerTeaser)</em></h3>
		<?php include '../templates/widgets/partnerteaser.php'; ?>
		<br/><br/>
		
		<h3>Trending artikelen <em class="text--grey-dark">(articlesList)</em></h3>
		<?php include '../templates/widgets/articles--trending.php'; ?>
		<br/><br/>

		<h3>Persberichten <em class="text--grey-dark">(articlesList)</em></h3>
		<?php include '../templates/widgets/articles--partners.php'; ?>
		<br/><br/>

		<h3>Aankomende events <em class="text--grey-dark">(eventsList)</em></h3>
		<?php include '../templates/widgets/events.php'; ?>
		<br/><br/>

		<h3>Uitgelichte topics <em class="text--grey-dark">(panel + linkList)</em></h3>
		<?php include '../templates/widgets/topics.php'; ?>
		<br/><br/>

		<h3>Custom HTML <em class="text--grey-dark">(panel)</em></h3>
		<?php include '../templates/widgets/customhtml.php'; ?>
		<br/><br/>

		<h3>Custom HTML, gekleurd <em class="text--grey-dark">(panel)</em></h3>
		<?php include '../templates/widgets/customhtml--negative.php'; ?>
		<br/><br/>

		<h3>Custom HTML, kopafbeelding <em class="text--grey-dark">(panel)</em></h3>
		<?php include '../templates/widgets/customhtml--headed.php'; ?>
		<br/><br/>

		<h3>Externe links <em class="text--grey-dark">(panel + linkList)</em></h3>
		<?php include '../templates/widgets/externallinks.php'; ?>
		<br/><br/>

		<h3>Aanmelden voor nieuwsbrief <em class="text--grey-dark">(newsletterTeaser--wide)</em></h3>
		<?php include '../templates/widgets/newsletterteaser--wide.php'; ?>
		<br/><br/>

		<h3>Quote <em class="text--grey-dark">(quote--big)</em></h3>
		<?php include '../templates/widgets/quote.php'; ?>
		<br/><br/>

		<?php //include '../templates/widgets/userads.php'; ?>

	</div>

</section>

<aside id="aside">

	<h3>Recente forumposts <em class="text--grey-dark">(forumpostsWidget)</em></h3>
	<?php include '../templates/widgets/forumposts.php'; ?>
	<br/><br/>
		
	<h3>Bericht voor PREMIUM-bezoekers <em class="text--grey-dark">(premiumMessage)</em></h3>
	<?php include '../templates/widgets/premiummessage.php'; ?>
	<br/><br/>

	<h3>Teasing PREMIUM <em class="text--grey-dark">(<a href="premiumteaser.php" class="text--grey-dark">premiumTeaser</a>)</em></h3>
	<?php include '../templates/widgets/premiumteaser.php'; ?>
	<br/><br/>
		
	<h3>Teasing partnerschap <em class="text--grey-dark">(partnerTeaser)</em></h3>
	<?php include '../templates/widgets/partnerteaser.php'; ?>
	<br/><br/>
		
	<h3>Trending artikelen <em class="text--grey-dark">(articlesList)</em></h3>
	<?php include '../templates/widgets/articles--trending.php'; ?>
	<br/><br/>

	<h3>Persberichten <em class="text--grey-dark">(articlesList)</em></h3>
	<?php include '../templates/widgets/articles--partners.php'; ?>
	<br/><br/>

	<h3>Aankomende events <em class="text--grey-dark">(eventsList)</em></h3>
	<?php include '../templates/widgets/events.php'; ?>
	<br/><br/>

	<h3>Uitgelichte topics <em class="text--grey-dark">(panel + linkList)</em></h3>
	<?php include '../templates/widgets/topics.php'; ?>
	<br/><br/>

	<h3>Custom HTML <em class="text--grey-dark">(panel)</em></h3>
	<?php include '../templates/widgets/customhtml.php'; ?>
	<br/><br/>

	<h3>Custom HTML, gekleurd <em class="text--grey-dark">(panel)</em></h3>
	<?php include '../templates/widgets/customhtml--negative.php'; ?>
	<br/><br/>

	<h3>Custom HTML, kopafbeelding <em class="text--grey-dark">(panel)</em></h3>
	<?php include '../templates/widgets/customhtml--headed.php'; ?>
	<br/><br/>

	<h3>Externe links <em class="text--grey-dark">(panel + linkList)</em></h3>
	<?php include '../templates/widgets/externallinks.php'; ?>
	<br/><br/>

	<h3>Aanmelden voor nieuwsbrief <em class="text--grey-dark">(newsletterTeaser)</em></h3>
	<?php include '../templates/widgets/newsletterteaser.php'; ?>
	<br/><br/>

	<h3>Quote <em class="text--grey-dark">(quote--big)</em></h3>
	<?php include '../templates/widgets/quote.php'; ?>
	<br/><br/>

	<?php //include '../templates/widgets/userads.php'; ?>
	
</aside>

<?php include '../templates/footer.php'; ?>