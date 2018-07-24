<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-topic.php">topic</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">topic</h1>
		<div class="main-intro">Dit component geeft vorm aan posts met het type 'topic'.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<a href="/topic/persberichten.php" target="_new">Default topic voorbeeld</a>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<section class="topic">

			    <header class="topic-header">
			        <div class="topic-description">
			            <h1 class="topic-title">Persberichten van partners</h1>
			            <div class="topic-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet egestas tortor, sit amet auctor sapien venenatis quis.</div>
			        </div>
			    </header>

			    <main class="topic-content">

			        <div class="topic-news">

			            <div class="grid grid--mobile-12 grid--tabletlandscape-6">
			                <div class="grid-cell grid-cell--wide">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell grid-cell--wide">
			                    <!-- include pagination -->
			                </div>
			            </div>
			        </div>

			        <div class="topic-summary">
			            <h4>In het kort</h4>
			            <p>Direct marketing is een vorm van marketing waarbij een bedrijf direct in contact treedt met individuele (potentiële) klanten. Bijvoorbeeld door het inzetten van post (direct mail), telefoon (telemarketing), e-mail, mobiele platformen en kortingsbonnen. Dit wordt ook wel <em>below the line</em> genoemd.</p>
			            <p>In een bredere definitie omvat direct marketing ook communicatie door adverteren in kranten, tijdschriften, websites, zoekmachines, radio en televisie. Doordat er bij direct marketing een direct contact is met de klant, wordt het ook wel dialoogmarketing genoemd.</p>
			        </div>

			    </main>
			</section>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--extensive</h3>
		<a href="/topic/direct-marketing.php" target="_new">Extensive topic voorbeeld</a>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<section class="topic topic--extensive">
			        
			    <header class="topic-header">
			        <div class="topic-description">
			            <h1 class="topic-title">Direct marketing</h1>
			            <div class="topic-intro">Vind nieuwe klanten met deze tips, trucs en voorbeelden voor direct marketing.</div>
			        </div>
			        <div class="topic-spotlight">
			            <!-- include card -->
			        </div>
			    </header>

			    <main class="topic-content">

			        <div class="topic-news">

			            <h2 class="topic-subtitle"><i class="fa fa-flash" aria-hidden="true"></i> Het laatste nieuws over direct marketing...</h2>

			            <div class="grid grid--tablet-6">
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include card -->
			                </div>
			                <div class="grid-cell grid-cell--wide">
			                    <!-- include pagination load more -->
			                </div>
			            </div>
			        </div>

			        <div class="topic-subjects">
			            <div class="grid grid--subjects grid--tablet-6 grid--tabletlandscape-4">
			                <div class="grid-cell">
			                    <!-- include articleList -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include articleList -->
			                </div>
			                <div class="grid-cell">
			                    <!-- include articleList -->
			                </div>
			            </div>
			        </div>

			        <div class="topic-summary">
			            <h4>In het kort</h4>
			            <p>Direct marketing is een vorm van marketing waarbij een bedrijf direct in contact treedt met individuele (potentiële) klanten. Bijvoorbeeld door het inzetten van post (direct mail), telefoon (telemarketing), e-mail, mobiele platformen en kortingsbonnen. Dit wordt ook wel <em>below the line</em> genoemd.</p>
			            <p>In een bredere definitie omvat direct marketing ook communicatie door adverteren in kranten, tijdschriften, websites, zoekmachines, radio en televisie. Doordat er bij direct marketing een direct contact is met de klant, wordt het ook wel dialoogmarketing genoemd.</p>
			        </div>

			        <div class="topic-partners">
			            <h2 class="topic-subtitle">Dit topic wordt gesponsord door:</h2>
			            <div class="grid grid--tablet-6">
			                <div class="grid-cell">
			                    <!-- include card to partner profile -->
			                </div>
			            </div>                
			        </div>

			    </main>

			</section>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>