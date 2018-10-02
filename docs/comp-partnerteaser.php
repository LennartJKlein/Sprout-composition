<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-partnerteaser.php">partnerTeaser</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">partnerTeaser</h1>
		<div class="main__intro">Dit component is .</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div class="panel partnerTeaser">
			<div class="partnerTeaser__figure"><img src="/images/uploads/25-onder-de-25-2017.jpg" class="partnerTeaser__image" /></div>
			<h3 class="partnerTeaser__title">Koppel jouw onderneming aan Sprout</h3>
			<ul class="list list--icons">
				<li class="list__item"><i class="list__item-icon fa fa-newspaper-o"></i><span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span></li>
				<li class="list__item"><i class="list__item-icon fa fa-tag"></i><span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span></li>
				<li class="list__item"><i class="list__item-icon fa fa-handshake-o"></i><span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span></li>
			</ul>
			<a href="word-partner.php" class="button button--partner">Partner worden</a>
		</div>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="panel partnerTeaser">
			    <div class="partnerTeaser__figure"><img src="/images/uploads/25-onder-de-25-2017.jpg" class="partnerTeaser__image" /></div>
			    <h3 class="partnerTeaser__title">Koppel jouw onderneming aan Sprout</h3>
			    <ul class="list list--icons">
			        <li class="list__item"><i class="list__item-icon fa fa-newspaper-o"></i><span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span></li>
			        <li class="list__item"><i class="list__item-icon fa fa-tag"></i><span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span></li>
			        <li class="list__item"><i class="list__item-icon fa fa-handshake-o"></i><span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span></li>
			    </ul>
			    <a href="word-partner.php" class="button button--partner">Partner worden</a>
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