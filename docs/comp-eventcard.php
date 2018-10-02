<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-eventcard.php">eventCard</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">eventCard</h1>
		<div class="main__intro">Naast de modifider --event op het normale <a href="comp-card.php">card component</a>, bestaat eventCard. Deze card heeft een wat meer eigen unieke vormgeving speciaal voor events.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div class="eventCard">
			<a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
				<div class="eventCard__description">
					<span class="eventCard__heading">Binnenkort</span>
					<h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
				</div>
				<span class="eventCard__date">8 okt</span>
			</a>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="eventCard">
			    <a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
			        <div class="eventCard__description">
			            <span class="eventCard__heading">Binnenkort</span>
			            <h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
			        </div>
			        <span class="eventCard__date">8 okt</span>
			    </a>
			</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--partner</h3>
		<div class="eventCard eventCard--partner">
			<a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
				<div class="eventCard__description">
					<span class="eventCard__heading">Binnenkort</span>
					<h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
				</div>
				<span class="eventCard__date">8 okt</span>
			</a>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="eventCard eventCard--partner">
			    <a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
			        <div class="eventCard__description">
			            <span class="eventCard__heading">Binnenkort</span>
			            <h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
			        </div>
			        <span class="eventCard__date">8 okt</span>
			    </a>
			</div>
		'))) ?></code></pre>

		<h3>--minimal</h3>
		<div class="eventCard eventCard--minimal">
			<a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
				<div class="eventCard__description">
					<span class="eventCard__heading">Binnenkort</span>
					<h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
				</div>
				<span class="eventCard__date">8 okt</span>
			</a>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="eventCard eventCard--minimal">
			    <a class="eventCard__link" href="evenement/the-next-web-conference-2018.php">
			        <div class="eventCard__description">
			            <span class="eventCard__heading">Binnenkort</span>
			            <h4 class="eventCard__title">Amsterdam talks tech - smart cities &amp; mobility</h4>
			        </div>
			        <span class="eventCard__date">8 okt</span>
			    </a>
			</div>
		'))) ?></code></pre>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>