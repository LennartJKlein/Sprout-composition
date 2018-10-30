<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">Components</h1>
		<div class="main__intro">De CSS voor de verschillende componenten is opgezet volgens de <a href="http://getbem.com/introduction/" target="_new">BEM-conventie</a>.</div>
	</header>

	<div class="main__body">

		<h4><i class="headingIcon fa fa-file-text"></i>Artikel</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-article.php">article</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-articleauthor.php">articleAuthor</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-articlemeta.php">articleMeta</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-progressline.php">progressLine</a></li>
			<li class="linkList__item"><a class="linkList__link" href="post-article.php#progresspanel">progressPanel</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-shareactions.php">shareActions</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-sharelist.php">shareList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-sharemodal.php">shareModal</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-align-left"></i>Content</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-banner.php">banner</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-buttons.php">button</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-figure.php">figure</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-notification.php">notification</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-quote.php">quote</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-square"></i>Cards / teasers</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-card.php">card</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-eventcard.php">eventCard</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-forumpostswidget.php">forumpostsWidget</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-newsletterteaser.php">newsletterTeaser</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-partnerteaser.php">partnerTeaser</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-premiumteaser.php">premiumTeaser</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-calendar-o"></i>Event</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-event.php">event</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-tag"></i>Topic</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-topic.php">topic</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-list-ul"></i>Lijsten</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-list.php">list</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-articlelist.php">articleList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-eventlist.php">eventList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-investmentlist.php">investmentList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-linklist.php">linkList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-posterlist.php">posterList</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-relatedarticles.php">relatedArticles</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-star"></i>Premium</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-premiummessage.php">premiumMessage</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-premiumunlock.php">premiumUnlock</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-premiummodal.php">premiumModal</a></li>
		</ul>
		<h4><i class="headingIcon fa fa-paint-brush"></i>Layout</h4>
		<ul class="linkList linkList--spaced">
			<li class="linkList__item"><a class="linkList__link" href="comp-gridHeader.php">gridHeader</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-headingicon.php">headingIcon</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-pagination.php">pagination</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-search.php">search</a></li>
			<li class="linkList__item"><a class="linkList__link" href="comp-spinner.php">spinner</a></li>
		</ul>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>