<?php include '../templates/header.php'; ?>

	<?php include '../templates/banners/banner--billboard.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/banners.php">Banner</a>
	</div>

	<h1 class="main-title">Banner</h1>

	<div class="main-intro">
		<p>Op deze pagina staan de verschillende varianten van het banner-component.</p>
	</div>

	<div class="main-body">
		
		<h3>Billboard</h3>
		<p><em>Bovenaan deze pagina</em></p>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="banner banner--billboard">
			    <div class="banner-close"><span class="fa fa-close"></span></div>
			    <div class="banner-container">
			        <img src="http://via.placeholder.com/970x250" class="banner-image" />
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>
		
		<h3>Rectangle</h3>
		<?php include '../templates/banners/banner--rectangle.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="banner banner--rectangle">
			    <div class="banner-container">
			        <img src="http://via.placeholder.com/300x250" class="banner-image" />
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>
		
		<h3>Leaderboard</h3>
		<?php include '../templates/banners/banner--leaderboard.php'; ?>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="banner banner--leaderboard">
			    <div class="banner-container">
			        <img src="http://via.placeholder.com/728x90" class="banner-image" />
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>

	</div>

</section>

<aside id="aside">
		
	<h3>Rectangle</h3>
	<?php include '../templates/banners/banner--rectangle.php'; ?>
	<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
		<div class="banner banner--rectangle">
		    <div class="banner-container">
		        <img src="http://via.placeholder.com/300x250" class="banner-image" />
		    </div>
		</div>
	'))) ?></code></pre>
	<br/><br/>
	
		
	<h3>Filmstrip</h3>
	<?php include '../templates/banners/banner--filmstrip.php'; ?>
	<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
		<div class="banner banner--filmstrip">
		    <div class="banner-container">
		        <img src="http://via.placeholder.com/300x600" class="banner-image" />
		    </div>
		</div>
	'))) ?></code></pre>
	<br/><br/>
	
</aside>

<?php include '../templates/footer.php'; ?>