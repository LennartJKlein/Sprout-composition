<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-sharemodal.php">shareModal</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">shareModal</h1>
		<div class="main__intro">Dit component is popup (een modal) met social sharing opties voor smartphones.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div id="shareModal">
			<ul class="shareList shareList--modal">
				<li class="shareList__item">
					<a class="shareList__link shareList__link--whatsapp" href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share">
						<i class="fa fa-whatsapp"></i><span class="shareList__label"><strong>Delen</strong></span>
					</a>
				</li>
				<li class="shareList__item">
					<a class="shareList__link shareList__link--facebook" href="#">
						<i class="fa fa-facebook"></i><span class="shareList__label"><strong>Delen</strong></span>
					</a>
				</li>
				<li class="shareList__item">
					<a class="shareList__link shareList__link--twitter" href="#">
						<i class="fa fa-twitter"></i><span class="shareList__label"><strong>Tweeten</strong></span>
					</a>
				</li>
			</ul>
		</div>
		<br/><br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div id="shareModal">
				<ul class="shareList shareList--modal">
				     <li class="shareList__item">
				          <a class="shareList__link shareList__link--whatsapp" href="whatsapp://send?text=#URL">
				               <i class="fa fa-whatsapp"></i><span class="shareList__label"><strong>Delen</strong></span>
				          </a>
				     </li>
				     <li class="shareList__item">
				          <a class="shareList__link shareList__link--facebook" href="#">
				               <i class="fa fa-facebook"></i><span class="shareList__label"><strong>Delen</strong></span>
				          </a>
				     </li>
				     <li class="shareList__item">
				          <a class="shareList__link shareList__link--twitter" href="#">
				               <i class="fa fa-twitter"></i><span class="shareList__label"><strong>Tweeten</strong></span>
				          </a>
				     </li>
				</ul>
			</div>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<p>Geen</p>
		
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>