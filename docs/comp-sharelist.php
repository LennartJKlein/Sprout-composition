<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-sharelist.php">shareList</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">shareList</h1>
		<div class="main-intro">Dit component is een lijst van social sharing opties.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<ul class="shareList">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--row</h3>
		<ul class="shareList shareList--row">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList shareList--row">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h3>--small</h3>
		<ul class="shareList shareList--row shareList--small">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList shareList--row shareList--small">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h3>--center</h3>
		<ul class="shareList shareList--center">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList shareList--center">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h3>--right</h3>
		<ul class="shareList shareList--right">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList shareList--right">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>

		<h3>--modal <em>(voor de <a href="comp-sharemodal.php">shareModal</a> op smartphones)</em></h3>
		<ul class="shareList shareList--modal">
			<li class="shareList-item">
				<a class="shareList-link shareList-link--facebook" href="#">
					<i class="fa fa-facebook"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--linkedin" href="#">
					<i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
				</a>
			</li>
			<li class="shareList-item">
				<a class="shareList-link shareList-link--twitter" href="#">
					<i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
				</a>
			</li>
		</ul>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="shareList shareList--modal">
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--facebook" href="#">
			            <i class="fa fa-facebook"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--linkedin" href="#">
			            <i class="fa fa-linkedin"></i><span class="shareList-label">share</span>
			        </a>
			    </li>
			    <li class="shareList-item">
			        <a class="shareList-link shareList-link--twitter" href="#">
			            <i class="fa fa-twitter"></i><span class="shareList-label">tweet</span>
			        </a>
			    </li>
			</ul>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>