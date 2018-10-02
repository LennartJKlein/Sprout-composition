<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-.php">investmentList</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">investmentList</h1>
		<div class="main__intro">Dit component wordt enkel gebruik in de bijbehorende widget '<a href="widgets-demo.php#investments">investments</a>'.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<ul class="investmentList" id="investmentList">
			<li class="investmentList__item active">
				<div class="investmentList__logo">
					<a class="investmentList__link" href="https://index.co/investments"><img src="/images/uploads/avatars/influence4you.jpg" /></a>
				</div>
				<div class="investmentList__description">
					<a href="https://www.callrail.com/" class="investmentList__company">Influence4You</a>
					<div class="investmentList__value">&euro;2.0M</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList__details"><i class="fa fa-handshake-o"></i>Bpifrance, Fa Diese, Benoit Sillard</a>
					<a href="#" class="investmentList__details"><i class="fa fa-tag"></i>marketing</a>
				</div>
			</li>
			<li class="investmentList__item">
				<div class="investmentList__logo">
					<a class="investmentList__link" href="https://index.co/investments"><img src="/images/uploads/avatars/case-on-it.jpg" /></a>
				</div>
				<div class="investmentList__description">
					<a href="https://www.callrail.com/" class="investmentList__company">Case on IT</a>
					<div class="investmentList__value">N/A</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList__details"><i class="fa fa-handshake-o"></i>Sageview Capital</a>
					<a href="#" class="investmentList__details"><i class="fa fa-tag"></i>telecom</a>
				</div>
			</li>
			<li class="investmentList__item">
				<div class="investmentList__logo">
					<a class="investmentList__link" href="https://index.co/investments"><img src="/images/uploads/avatars/emoov.png" /></a>
				</div>
				<div class="investmentList__description">
					<a href="https://www.callrail.com/" class="investmentList__company">emoov</a>
					<div class="investmentList__value">£1.0M</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList__details"><i class="fa fa-handshake-o"></i>-</a>
					<a href="#" class="investmentList__details"><i class="fa fa-tag"></i>real estate</a>
				</div>
			</li>
		</ul>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="investmentList">
			    <li class="investmentList__item active">
			        <div class="investmentList__logo">
			            <a class="investmentList__link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/influence4you.jpg" />
			            </a>
			        </div>
			        <div class="investmentList__description">
			            <a href="https://www.callrail.com/" class="investmentList__company">Influence4You</a>
			            <div class="investmentList__value">&euro;2.0M</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList__details">
			                <i class="fa fa-handshake-o"></i>Bpifrance, Fa Diese, Benoit Sillard
			                </a>
			            <a href="#" class="investmentList__details">
			                <i class="fa fa-tag"></i>marketing
			            </a>
			        </div>
			    </li>
			    <li class="investmentList__item">
			        <div class="investmentList__logo">
			            <a class="investmentList__link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/case-on-it.jpg" />
			            </a>
			        </div>
			        <div class="investmentList__description">
			            <a href="https://www.callrail.com/" class="investmentList__company">Case on IT</a>
			            <div class="investmentList__value">N/A</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList__details">
			                <i class="fa fa-handshake-o"></i>Sageview Capital
			            </a>
			            <a href="#" class="investmentList__details">
			                <i class="fa fa-tag"></i>telecom
			            </a>
			        </div>
			    </li>
			    <li class="investmentList__item">
			        <div class="investmentList__logo">
			            <a class="investmentList__link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/emoov.png" />
			            </a>
			        </div>
			        <div class="investmentList__description">
			            <a href="https://www.callrail.com/" class="investmentList__company">emoov</a>
			            <div class="investmentList__value">£1.0M</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList__details">
			                <i class="fa fa-handshake-o"></i>-
			            </a>
			            <a href="#" class="investmentList__details">
			                <i class="fa fa-tag"></i>real estate
			            </a>
			        </div>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>