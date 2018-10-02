<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-list.php">list</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">list</h1>
		<div class="main__intro">Dit component wordt gebruikt om lijsten in de pagina vorm te geven.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<ul class="list">
			<li class="list__item">
				<span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			</li>
			<li class="list__item">
				<span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			</li>
			<li class="list__item">
				<span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			</li>
		</ul>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="list">
			    <li class="list__item">
			        <span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			    </li>
			    <li class="list__item">
			        <span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			    </li>
			    <li class="list__item">
			        <span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			    </li>
			</ul>
		'))) ?></code></pre>
		<br/><br/>
		<ol class="list">
			<li class="list__item">
				<span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			</li>
			<li class="list__item">
				<span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			</li>
			<li class="list__item">
				<span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			</li>
		</ol>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="list">
			    <li class="list__item">
			        <span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			    </li>
			    <li class="list__item">
			        <span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			    </li>
			    <li class="list__item">
			        <span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--icons</h3>
		<ul class="list list--icons">
			<li class="list__item">
				<i class="list__item-icon fa fa-newspaper-o"></i>
				<span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			</li>
			<li class="list__item">
				<i class="list__item-icon fa fa-tag"></i>
				<span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			</li>
			<li class="list__item">
				<i class="list__item-icon fa fa-handshake-o"></i>
				<span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="list list--icons">
			    <li class="list__item">
			        <i class="list__item-icon fa fa-newspaper-o"></i>
			        <span>Plaats tot wel <strong>6 persberichten per jaar</strong> op de site.</span>
			    </li>
			    <li class="list__item">
			        <i class="list__item-icon fa fa-tag"></i>
			        <span>Sponsor een onderwerp en <strong>adverteer met jouw content</strong>.</span>
			    </li>
			    <li class="list__item">
			        <i class="list__item-icon fa fa-handshake-o"></i>
			        <span>Een partnerschap met Sprout is <strong>op maat gemaakt</strong> voor jouw organisatie.</span>
			    </li>
			</ul>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>