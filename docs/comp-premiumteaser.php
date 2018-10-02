<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/premiumteaser.php">premiumTeaser</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">premiumTeaser</h1>

		<div class="main__intro">
			<p>De premiumTeasers zijn bedoeld om bezoekers over te halen PREMIUM aan te schaffen. De teasers zijn zowel te gebruiken in de sidebar, als in de pagina. Op deze pagina staan de verschillende varianten van deze widget.</p>
		</div>
	</header>

	<div class="main__body">
	
		<h2>Default</h2>
		<?php include '../templates/widgets/premiumteaser.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="panel premiumTeaser role-unknown">
			    <div class="premiumTeaser__figure">
			        <img src="/images/premium-logo-white.svg" class="premiumTeaser__image" />
			    </div>
			    <h3 class="premiumTeaser__title">Ongelimiteerd de beste verhalen en events.</h3>
			    <p class="premiumTeaser__description">
			        De volledige Sprout-beleving kun je 1 maand gratis uitproberen. Daarna voor &euro;00,- per maand.
			    </p>
			    <a href="/word-member.php" class="button button--white">1 maand uitproberen</a>
			    <p class="premiumTeaser__link">
			        Al een toegangscode?<br><a href="#" class="open-premiumModal">Premium inschakelen</a>
			    </p>
			</div>
		'))) ?></code></pre>
		<br/><br/>
	
		<h2>Modifiers</h2>
		<h3>--negative</h3>
		<?php include '../templates/widgets/premiumteaser--negative.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="panel premiumTeaser premiumTeaser--negative role-unknown">
			    <div class="premiumTeaser__figure">
			        <img src="/images/premium-logo.svg" class="premiumTeaser__image" />
			    </div>
			    <h3 class="premiumTeaser__title">Ongelimiteerd de beste verhalen en events.</h3>
			    <p class="premiumTeaser__description">
			        De volledige Sprout-beleving kun je 1 maand gratis uitproberen. Daarna voor &euro;00,- per maand.
			    </p>
			    <ul class="premiumTeaser__list">
			        <li>
			            <i class="fa fa-unlock-alt"></i>
			            <span>Toegang tot alle premium <strong>content</strong> op de website.</span>
			        </li>
			        <li>
			            <i class="fa fa-paper-plane"></i>
			            <span>Een <strong>uitgebreidere nieuwsbrief</strong> van het belangrijkste ondernemers-nieuws. 
			            Elke ochtend in je mailbox.</span>
			        </li>
			        <li>
			            <i class="fa fa-book"></i>
			            <span>4x per jaar het thematische <strong>Sprout Bookazine</strong> in je brievenbus.</span>
			        </li>
			    </ul>
			</div>
		'))) ?></code></pre>
		<br/><br/>
	
		<h3>--list</h3>
		<?php include '../templates/widgets/premiumteaser--list.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="panel premiumTeaser premiumTeaser--list role-unknown">
			    <div class="premiumTeaser__figure">
			        <img src="/images/premium-logo-white.svg" class="premiumTeaser__image" />
			    </div>
			    <h3 class="premiumTeaser__title">Ongelimiteerd de beste verhalen en events.</h3>
			    <p class="premiumTeaser__description">
			    De volledige Sprout-beleving kun je 1 maand gratis uitproberen. Daarna voor &euro;00,- per maand.
			    </p>
			    <ul class="premiumTeaser__list">
			        <li>
			            <i class="fa fa-unlock-alt"></i>
			            <span>Toegang tot alle premium <strong>content</strong> op de website.</span>
			        </li>
			        <li>
			            <i class="fa fa-paper-plane"></i>
			            <span>Een <strong>uitgebreidere nieuwsbrief</strong> van het belangrijkste ondernemers-nieuws. 
			            Elke ochtend in je mailbox.</span>
			        </li>
			        <li>
			            <i class="fa fa-book"></i>
			            <span>4x per jaar het thematische <strong>Sprout Bookazine</strong> in je brievenbus.</span>
			        </li>
			    </ul>
			</div>
		'))) ?></code></pre>
		<br/><br/>
	
		<h3>--events</h3>
		<?php include '../templates/widgets/premiumteaser--events.php'; ?>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="panel premiumTeaser premiumTeaser--events role-unknown">
			    <div class="premiumTeaser__figure"><img src="/images/premium-logo-white.svg" class="premiumTeaser__image" /></div>
			    <h3 class="premiumTeaser__title">Gratis of met korting naar alle events.</h3>
			    <p class="premiumTeaser__description">Schakel PREMIUM in en upgrade je Sprout-beleving.</p>
			    <a href="/word-member.php" class="button button--white">1 maand uitproberen</a>
			    <p class="premiumTeaser__link">Al een toegangscode?<br><a href="#" class="open-premiumModal">Premium inschakelen</a></p>
			</div>
		'))) ?></code></pre>
		<br/><br/>
	
		<h3>--modal</h3>
		<?php include '../templates/modals/premiumteaser.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="modal modal--active role-unknown" role="dialog" aria-hidden="true">
			    <div class="modal__dialog">
			        <div class="modal__content">
			            <div class="premiumTeaser premiumTeaser--negative premiumTeaser--modal">
			                <div class="premiumTeaser__figure"><img src="/images/premium-logo.svg" class="premiumTeaser__image" /></div>
			                <h3 class="premiumTeaser__title">Ongelimiteerd de beste verhalen en events.</h3>
			                <p class="premiumTeaser__description">De volledige Sprout-beleving kun je 1 maand gratis uitproberen. Daarna voor &euro;00,- per maand.</p>
			                <ul class="premiumTeaser__list">
			                    <li>
			                        <i class="fa fa-unlock-alt"></i><span>Toegang tot alle premium <strong>content</strong> op de website.</span>
			                    </li>
			                    <li>
			                        <i class="fa fa-paper-plane"></i><span>Een <strong>uitgebreidere nieuwsbrief</strong> van het belangrijkste ondernemers-nieuws. Elke ochtend in je mailbox.</span>
			                    </li>
			                    <li>
			                        <i class="fa fa-book"></i><span>4x per jaar het thematische <strong>Sprout Bookazine</strong> in je brievenbus.</span>
			                    </li>
			                </ul>
			            </div>
			            <div class="modal__actions">
			                <button class="modal__button button button--grey" role="cancel">Later</button>
			                <a href="/word-member.php" class="modal__button button button--premium-secondary">Uitproberen</a>
			            </div>
			        </div>
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>
	
</aside>

<?php include '../templates/footer.php'; ?>