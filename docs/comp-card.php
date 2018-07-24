<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-card.php">Card</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">Card</h1>
		<div class="main-intro">Dit component is een belangrijke sleutel in deze browser composition. De card is soort een samenvatting van een pagina of post die als link doorverwijst naar die content. De vormgeving en idee&euml;n hierover zijn afgeleid van Google's Material Design.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		
				<br/><h2>Modifiers</h2>
		<h3>--horizontal</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tablet-horizontal</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-horizontal" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-horizontal" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tablet-vertical</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-vertical" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-vertical" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tabletlandscape-horizontal</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-horizontal" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-horizontal" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tabletlandscape-vertical</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-vertical" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-vertical" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--desktop-horizontal</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-horizontal" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-horizontal" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--desktop-vertical</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-vertical" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-vertical" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--textfirst</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--textfirst" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--textfirst" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tablet-textfirst</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--tablet-textfirst" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--tablet-textfirst" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tabletlandscape-textfirst</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--tabletlandscape-textfirst" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--tabletlandscape-textfirst" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--desktop-textfirst</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--desktop-textfirst" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--desktop-textfirst" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--big</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--big" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--big" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tablet-big</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-big" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tablet-big" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--tabletlandscape-big</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-big" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--tabletlandscape-big" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--desktop-big</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-big" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--desktop-big" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--overlay</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--overlay" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--overlay" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--premium</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--premium" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--premium" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--partner</h3>
		<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--partner" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-tags">
					<div class="card-tag">retail</div>
				</div>
				<div class="card-figure">
					<img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
				<p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="hoe-overleef-je-tegenwoordig-als-winkel.php" class="card card--horizontal card--partner" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-tags">
			            <div class="card-tag">retail</div>
			        </div>
			        <div class="card-figure">
			            <img src="/images/uploads/articles/paul-efmorfidis-coco-mat-bed.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <h3 class="card-title">Hoe Coco-Mat vijftien landen verovert met duurzame producten</h3>
			        <p class="card-excerpt">Megasuccessen met duurzame bedden en linnengoed, het lukte de Griekse ondernemer Paul Efmorfidis (60). Vanuit Amsterdam bouwde hij zijn bedrijf Coco-Mat uit tot een wereldmerk, met winkels in New York en China.</p>
			    </div>
			</a>
		'))) ?></code></pre>

		<br/>
		<h3>--event</h3>
		<a href="/evenement/the-next-web-conference-2018.php" class="card card--horizontal card--event" tag="retail">
			<div class="card-figurecontainer">
				<div class="card-figure">
					<img src="/images/uploads/events/31117510996_761d4bdc26_k.jpg" class="card-image" />
				</div>
			</div>
			<div class="card-content">
				<span class="card-heading">27 Maart 2018</span>
				<h3 class="card-title">Workshop Backup jouw Mac</h3>
				<p class="card-excerpt">Op 19 april is Gelderland het epicentrum van iedereen die bouwt aan de toekomst van Nederland. Een toekomst waarin innovaties in Nederland een vruchtbare voedingsbodem hebben. Een toekomst waarin innovaties succesvol bijdragen aan het oplossen van grote uitdagingen.</p>
			</div>
		</a>
		
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<a href="/evenement/the-next-web-conference-2018.php" class="card card--horizontal card--event" tag="retail">
			    <div class="card-figurecontainer">
			        <div class="card-figure">
			            <img src="/images/uploads/events/31117510996_761d4bdc26_k.jpg" class="card-image" />
			        </div>
			    </div>
			    <div class="card-content">
			        <span class="card-heading">27 Maart 2018</span>
			        <h3 class="card-title">Workshop Backup jouw Mac</h3>
			        <p class="card-excerpt">Op 19 april is Gelderland het epicentrum van iedereen die bouwt aan de toekomst van Nederland. Een toekomst waarin innovaties in Nederland een vruchtbare voedingsbodem hebben. Een toekomst waarin innovaties succesvol bijdragen aan het oplossen van grote uitdagingen.</p>
			    </div>
			</a>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>