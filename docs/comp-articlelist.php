<?php include '../templates/header.php'; ?>

	<a href="https://github.com/LennartJKlein/Sprout-composition" target="_new" class="button button--right"><i class="fa fa-external-link" aria-hidden="true"></i>Github repository</a>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/components.php">Components</a>
		<a href="/docs/comp-articlelist.php">articleList</a>
	</div>

	<header class="main__header">
		<h1 class="main__title">articleList</h1>
		<div class="main__intro">Dit component wordt gebruikt om post van het type 'artikel' met lijst-items te laten zien, in plaats van de gebruikelijke <a href="comp-card.php">card</a>.</div>
	</header>

	<div class="main__body">
		<h2>Default</h2>
		<div class="articleList">
			<a href="#" class="articleList__article">
				<div class="articleList__figurecontainer">
					<div class="articleList__figure">
						<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
					</div>
				</div>
				<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			</a>
			<a href="#" class="articleList__article">
				<div class="articleList__figurecontainer">
					<div class="articleList__figure">
						<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
					</div>
				</div>
				<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			</a>
			<a href="#" class="articleList__article">
				<div class="articleList__figurecontainer">
					<div class="articleList__figure">
						<img src="/images/uploads/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList__image" />
					</div>
				</div>
				<h3 class="articleList__article-title">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
			</a>
		</div>
		<a href="#" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleList">
			    <a href="#" class="articleList__article">
			        <div class="articleList__figurecontainer">
			            <div class="articleList__figure">
			                <img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
			            </div>
			        </div>
			        <h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			    </a>
			    <a href="#" class="articleList__article">
			        <div class="articleList__figurecontainer">
			            <div class="articleList__figure">
			                <img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
			            </div>
			        </div>
			        <h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			    </a>
			    <a href="#" class="articleList__article">
			        <div class="articleList__figurecontainer">
			            <div class="articleList__figure">
			                <img src="/images/uploads/articles/schermafbeelding_2017-08-15_om_17.10.42.png" class="articleList__image" />
			            </div>
			        </div>
			        <h3 class="articleList__article-title">Deze ondernemer helpt game-ontwikkelaars aan een investeerder</h3>
			    </a>
			</div>
			<a href="#" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		'))) ?></code></pre>

		<h2>Modifiers</h2>
		<h3>--wide</h3>
		<div class="articleList articleList--wide">
			<div class="articleList-list">
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
				</a>
			</div>
			<a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		</div>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleList articleList--wide">
			    <div class="articleList-list">
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Oud-ondernemer Netflix: Voor 10 dollar onbeperkt naar de bios</h3>
			        </a>
			    </div>
			    <a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>

		<h3>--highlighticon</h3>
		<div class="articleList articleList--highlighticon">
			<h2 class="articleList__title"><a href="tag.php" class="articleList__title-link"><i class="fa fa-flash" aria-hidden="true"></i> Trending</a></h2>
			<div class="articleList-list">
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
				</a>
			</div>
			<a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		</div>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleList articleList--highlighticon">
			    <h2 class="articleList__title"><a href="tag.php" class="articleList__title-link"><i class="fa fa-flash" aria-hidden="true"></i> Trending</a></h2>
			    <div class="articleList-list">
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Oud-ondernemer Netflix: Voor 10 dollar onbeperkt naar de bios</h3>
			        </a>
			    </div>
			    <a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>
		<h3>--negative</h3>
		<div class="articleList articleList--negative">
			<div class="articleList-list">
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
				</a>
			</div>
			<a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		</div>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleList articleList--negative">
			    <div class="articleList-list">
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Oud-ondernemer Netflix: Voor 10 dollar onbeperkt naar de bios</h3>
			        </a>
			    </div>
			    <a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
			    </div>
			</div>
		'))) ?></code></pre>
		<br/><br/>

		<h3>--highlightfirst</h3>
		<div class="articleList articleList--highlightfirst">
			<h2 class="articleList__title"><a href="tag.php" class="articleList__title-link"><i class="fa fa-flash" aria-hidden="true"></i> Trending</a></h2>
			<div class="articleList-list">
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
				</a>
				<a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
					<div class="articleList__figurecontainer">
						<div class="articleList__figure">
							<img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
						</div>
					</div>
					<h3 class="articleList__article-title">Oud-ondernemer Netflix: 'Voor 10 dollar onbeperkt naar de bios'</h3>
				</a>
			</div>
			<a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
		</div>
		<br/>
		<pre class="codeBlock"><code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
			<div class="articleList articleList--highlightfirst">
			    <h2 class="articleList__title"><a href="tag.php" class="articleList__title-link"><i class="fa fa-flash" aria-hidden="true"></i> Trending</a></h2>
			    <div class="articleList-list">
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/daan-reijnder-instantmagazine-profielfoto-sprout.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hij verhuist met zijn gezin naar NY en deelt zijn ervaringen uit de Big Apple</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/bill_gates.png" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Hierom kan Bill Gates miljarden weggeven (infographic)</h3>
			        </a>
			        <a href="artikel/hoe-overleef-je-tegenwoordig-als-winkel.php" class="articleList__article">
			            <div class="articleList__figurecontainer">
			                <div class="articleList__figure">
			                    <img src="/images/uploads/articles/pexels-photo-436413.jpg" class="articleList__image" />
			                </div>
			            </div>
			            <h3 class="articleList__article-title">Oud-ondernemer Netflix: Voor 10 dollar onbeperkt naar de bios</h3>
			        </a>
			    </div>
			    <a href="#.php" class="button button--arrow button--clean articleList-button"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meer artikelen</a>
			    </div>
			</div>
		'))) ?></code></pre>
	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>