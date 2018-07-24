<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-forumpostswidget.php">forumpostsWidget</a>
	</div>

	<header class="main-header">
		<h1 class="main-title">forumpostsWidget</h1>
		<div class="main-intro">Met oog op de toekomst, waarin Sprout eventueel een eigen forum krijgt, is dit component ontwikkeld. Het bevat de meest recente uitlatingen op het forum. Dit is onderdeel van de widget: <a href="widgets-demo.php#forumpostswidget">forumpostsWidget</a></div>
	</header>

	<div class="main-body">
		<h2>Default</h2>
		<ul class="forumpostsWidget">
			<li class="forumpostsWidget-item">
				<div class="forumpostsWidget-title">
					<a href="/forum/post/13103958" class="forumpostsWidget-link">
						Hoe vind ik een goed jong commercieel talent?
					</a>
				</div>
				<a class="forumpostsWidget-stats" href="/forum/post/13103958">
					<span class="forumpostsWidget-views">1,044 <i class="fa fa-eye"></i></span>
					<span class="forumpostsWidget-posts">6 <i class="fa fa-comment"></i></span>
				</a>
			</li>
		</ul>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<ul class="forumpostsWidget">
			    <li class="forumpostsWidget-item">
			        <div class="forumpostsWidget-title">
			            <a href="/forum/post/13103958" class="forumpostsWidget-link">
			                Hoe vind ik een goed jong commercieel talent?
			            </a>
			        </div>
			        <a class="forumpostsWidget-stats" href="/forum/post/13103958">
			            <span class="forumpostsWidget-views">1,044 <i class="fa fa-eye"></i></span>
			            <span class="forumpostsWidget-posts">6 <i class="fa fa-comment"></i></span>
			        </a>
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