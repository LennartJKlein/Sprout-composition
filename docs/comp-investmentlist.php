<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-.php">investmentList</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">investmentList</h1>
		<div class="main-intro">Dit component wordt enkel gebruik in de bijbehorende widget '<a href="widgets-demo.php#investments">investments</a>'.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<ul class="investmentList" id="investmentList">
			<li class="investmentList-item active">
				<div class="investmentList-logo">
					<a class="investmentList-link" href="https://index.co/investments"><img src="/images/uploads/avatars/influence4you.jpg" /></a>
				</div>
				<div class="investmentList-description">
					<a href="https://www.callrail.com/" class="investmentList-company">Influence4You</a>
					<div class="investmentList-value">&euro;2.0M</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList-details"><i class="fa fa-handshake-o"></i>Bpifrance, Fa Diese, Benoit Sillard</a>
					<a href="#" class="investmentList-details"><i class="fa fa-tag"></i>marketing</a>
				</div>
			</li>
			<li class="investmentList-item">
				<div class="investmentList-logo">
					<a class="investmentList-link" href="https://index.co/investments"><img src="/images/uploads/avatars/case-on-it.jpg" /></a>
				</div>
				<div class="investmentList-description">
					<a href="https://www.callrail.com/" class="investmentList-company">Case on IT</a>
					<div class="investmentList-value">N/A</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList-details"><i class="fa fa-handshake-o"></i>Sageview Capital</a>
					<a href="#" class="investmentList-details"><i class="fa fa-tag"></i>telecom</a>
				</div>
			</li>
			<li class="investmentList-item">
				<div class="investmentList-logo">
					<a class="investmentList-link" href="https://index.co/investments"><img src="/images/uploads/avatars/emoov.png" /></a>
				</div>
				<div class="investmentList-description">
					<a href="https://www.callrail.com/" class="investmentList-company">emoov</a>
					<div class="investmentList-value">£1.0M</div>
					<a href="http://www.sageviewcapital.com/" class="investmentList-details"><i class="fa fa-handshake-o"></i>-</a>
					<a href="#" class="investmentList-details"><i class="fa fa-tag"></i>real estate</a>
				</div>
			</li>
		</ul>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="investmentList">
			    <li class="investmentList-item active">
			        <div class="investmentList-logo">
			            <a class="investmentList-link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/influence4you.jpg" />
			            </a>
			        </div>
			        <div class="investmentList-description">
			            <a href="https://www.callrail.com/" class="investmentList-company">Influence4You</a>
			            <div class="investmentList-value">&euro;2.0M</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList-details">
			                <i class="fa fa-handshake-o"></i>Bpifrance, Fa Diese, Benoit Sillard
			                </a>
			            <a href="#" class="investmentList-details">
			                <i class="fa fa-tag"></i>marketing
			            </a>
			        </div>
			    </li>
			    <li class="investmentList-item">
			        <div class="investmentList-logo">
			            <a class="investmentList-link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/case-on-it.jpg" />
			            </a>
			        </div>
			        <div class="investmentList-description">
			            <a href="https://www.callrail.com/" class="investmentList-company">Case on IT</a>
			            <div class="investmentList-value">N/A</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList-details">
			                <i class="fa fa-handshake-o"></i>Sageview Capital
			            </a>
			            <a href="#" class="investmentList-details">
			                <i class="fa fa-tag"></i>telecom
			            </a>
			        </div>
			    </li>
			    <li class="investmentList-item">
			        <div class="investmentList-logo">
			            <a class="investmentList-link" href="https://index.co/investments">
			                <img src="/images/uploads/avatars/emoov.png" />
			            </a>
			        </div>
			        <div class="investmentList-description">
			            <a href="https://www.callrail.com/" class="investmentList-company">emoov</a>
			            <div class="investmentList-value">£1.0M</div>
			            <a href="http://www.sageviewcapital.com/" class="investmentList-details">
			                <i class="fa fa-handshake-o"></i>-
			            </a>
			            <a href="#" class="investmentList-details">
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