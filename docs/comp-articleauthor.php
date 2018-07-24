<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-articleauthor.php">articleAuthor</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">articleAuthor</h1>
		<div class="main-intro">Dit component bevat informatie over de auteur van een post.</div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<div class="articleAuthor">
			<div class="articleAuthor-summary">
				<a href="profile-page.php" class="articleAuthor-link">
					<img src="/images/uploads/avatars/fred-rutgers.jpg" class="articleAuthor-image" />
					<span class="articleAuthor-name">Fred Rutgers</span>
					<span class="articleAuthor-company">SchrijvenVoorWeb</span>
				</a>
				<span class="articleAuthor-toggle fa fa-chevron-down"></span>
			</div>
			<div class="articleAuthor-expand">
				<p>Fred Rutgers is retailexpert en ondernemerscoach. Op basis van 30 jaar ervaring help ik retailers en ondernemers in de b2c sector om op een leuke manier en met minder stress te bouwen aan meer omzet...</p>
				<div class="articleAuthor-social">
					<a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank"><i class="fa fa-globe"></i>website</a>
					<a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank"><i class="fa fa-linkedin"></i>@fredrutgers</a>
					<a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank"><i class="fa fa-twitter"></i>fredrutgers</a>
				</div>
			</div>
		</div><br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleAuthor">
			    <div class="articleAuthor-summary">
			        <a href="profile-page.php" class="articleAuthor-link">
			            <img src="/images/uploads/avatars/fred-rutgers.jpg" class="articleAuthor-image" />
			            <span class="articleAuthor-name">Fred Rutgers</span>
			            <span class="articleAuthor-company">SchrijvenVoorWeb</span>
			        </a>
			        <span class="articleAuthor-toggle fa fa-chevron-down"></span>
			    </div>
			    <div class="articleAuthor-expand">
			        <p>Fred Rutgers is retailexpert en ondernemerscoach. Op basis van 30 jaar ervaring help ik retailers en ondernemers in de b2c sector om op een leuke manier en met minder stress te bouwen aan meer omzet...</p>
			        <div class="articleAuthor-social">
			            <a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank">
			                <i class="fa fa-globe"></i> website
			            </a>
			            <a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank">
			                <i class="fa fa-linkedin"></i> @fredrutgers
			            </a>
			            <a class="articleAuthor-sociallink button button--white button--small" href="#" target="_blank">
			                <i class="fa fa-twitter"></i> fredrutgers
			            </a>
			        </div>
			    </div>
			</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--bottom <em>(onderkant van een artikel)</em></h3>
		<div class="articleAuthor articleAuthor--bottom">
			<div class="articleAuthor-content">
				<a href="profile-page.php" class="articleAuthor-link">
					<img src="/images/uploads/avatars/fred-rutgers.jpg" class="articleAuthor-image" />
					<span class="articleAuthor-name">Fred Rutgers</span>
					<span class="articleAuthor-company">SchrijvenVoorWeb</span>
				</a>
				<p>Fred Rutgers is retailexpert en ondernemerscoach. 'Op basis van 30 jaar ervaring help ik retailers en ondernemers in de b2c sector om op een leuke manier en met minder stress te bouwen aan meer omzet...</p>
				<div class="articleAuthor-social">
					<a class="articleAuthor-sociallink button button--primary button--small" href="#" target="_blank"><i class="fa fa-globe"></i>website</a>
					<a class="articleAuthor-sociallink button button--primary button--small" href="http://nl.linkedin.com/in/fredrutgers" target="_blank"><i class="fa fa-linkedin"></i>@fredrutgers</a>
					<a class="articleAuthor-sociallink button button--primary button--small" href="http://www.twitter.com/fredrutgers" target="_blank"><i class="fa fa-twitter"></i>fredrutgers</a>
				</div>
			</div>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleAuthor articleAuthor--bottom">
			    <div class="articleAuthor-content">
			        <a href="profile-page.php" class="articleAuthor-link">
			            <img src="/images/uploads/avatars/fred-rutgers.jpg" class="articleAuthor-image" />
			            <span class="articleAuthor-name">Fred Rutgers</span>
			            <span class="articleAuthor-company">SchrijvenVoorWeb</span>
			        </a>
			        <p>Fred Rutgers is retailexpert en ondernemerscoach. Op basis van 30 jaar ervaring help ik retailers en ondernemers in de b2c sector om op een leuke manier en met minder stress te bouwen aan meer omzet...</p>
			        <div class="articleAuthor-social">
			            <a class="articleAuthor-sociallink button button--primary button--small" href="#" target="_blank">
			                <i class="fa fa-globe"></i> website
			            </a>
			            <a class="articleAuthor-sociallink button button--primary button--small" href="#" target="_blank">
			                <i class="fa fa-linkedin"></i> @fredrutgers
			            </a>
			            <a class="articleAuthor-sociallink button button--primary button--small" href="#" target="_blank">
			                <i class="fa fa-twitter"></i> fredrutgers
			            </a>
			        </div>
			    </div>
			</div>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>