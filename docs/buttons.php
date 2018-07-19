<?php include '../templates/header.php'; ?>

	<div class="breadcrumb">
		<a href="/index.php">Sprout.nl</a>
		<a href="/docs/index.php">Documentatie</a>
		<a href="/docs/buttons.php">Buttons</a>
	</div>

	<h1 class="main-title">Buttons</h1>

	<div class="main-intro">
		<p>Onderstaand zijn de verschillende varianten van een button te vinden.</p>
	</div>

	<div class="main-body">
	
		<h2>Standaardkleuren</h2>
		<button class="button">Primary</button>
		<button class="button button--secondary">Secondary</button>
		<button class="button button--premium">Premium</button>
		<button class="button button--premium-primary">Premium primary</button>
		<button class="button button--premium-secondary">Premium secondary</button>
		<button class="button button--black">Black</button>
		<button class="button button--grey">Grey</button>
		<button class="button button--white">White</button>
		<pre class="codeBlock">
			<code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				<button class="button">Primary</button>
				<button class="button button--secondary">Secondary</button>
				<button class="button button--premium">Premium</button>
				<button class="button button--premium-primary">Premium primary</button>
				<button class="button button--premium-secondary">Premium secondary</button>
				<button class="button button--black">Black</button>
				<button class="button button--grey">Grey</button>
				<button class="button button--white">White</button>
			'))) ?></code>
		</pre>
	
		<h2>Gevulde buttons</h2>
		<button class="button button--solid">Primary</button>
		<button class="button button--solid button--secondary">Secondary</button>
		<button class="button button--solid button--premium">Premium</button>
		<button class="button button--solid button--premium-primary">Premium primary</button>
		<button class="button button--solid button--premium-secondary">Premium secondary</button>
		<button class="button button--solid button--black">Black</button>
		<button class="button button--solid button--grey">Grey</button>
		<button class="button button--solid button--white">White</button>
		<pre class="codeBlock">
			<code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				<button class="button button--solid">Primary</button>
				<button class="button button--solid button--secondary">Secondary</button>
				<button class="button button--solid button--premium">Premium</button>
				<button class="button button--solid button--premium-primary">Premium primary</button>
				<button class="button button--solid button--premium-secondary">Premium secondary</button>
				<button class="button button--solid button--black">Black</button>
				<button class="button button--solid button--grey">Grey</button>
				<button class="button button--solid button--white">White</button>
			'))) ?></code>
		</pre>

		<h2>Link als button</h2>
		<button class="button button--clean">Primary</button>
		<button class="button button--clean button--secondary">Secondary</button>
		<button class="button button--clean button--premium">Premium</button>
		<button class="button button--clean button--premium-primary">Premium primary</button>
		<button class="button button--clean button--premium-secondary">Premium secondary</button>
		<button class="button button--clean button--black">Black</button>
		<button class="button button--clean button--grey">Grey</button>
		<button class="button button--clean button--white">White</button>
		<pre class="codeBlock">
			<code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				<button class="button button--clean">Primary</button>
		        <button class="button button--clean button--secondary">Secondary</button>
		        <button class="button button--clean button--premium">Premium</button>
		        <button class="button button--clean button--premium-primary">Premium primary</button>
		        <button class="button button--clean button--premium-secondary">Premium secondary</button>
		        <button class="button button--clean button--black">Black</button>
		        <button class="button button--clean button--grey">Grey</button>
		        <button class="button button--clean button--white">White</button>
			'))) ?></code>
		</pre>

		<h2>Groottes</h2>
		<button class="button button--small">Small</button>
		<button class="button">Default</button>
		<button class="button button--big">Big</button>
		<pre class="codeBlock">
			<code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				<button class="button button--small">Small</button>
				<button class="button">Default</button>
				<button class="button button--big">Big</button>
			'))) ?></code>
		</pre>

		<h2>Positie</h2>
		<div class="buttonContainer">
			<button class="button button--center">Centered</button>
		</div>
		<div class="buttonContainer">
			<button class="button button--right">Right</button>
		</div>
		<div class="buttonContainer">
			<button class="button button--block">Block</button>
		</div>
		<pre class="codeBlock">
			<code class="prettyprint"><?php echo trim(preg_replace('/\t+/', '', htmlentities('
				<div class="buttonContainer">
				    <button class="button button--center">Centered</button>
				</div>
				<div class="buttonContainer">
				    <button class="button button--right">Right</button>
				</div>
				<div class="buttonContainer">
				    <button class="button button--block">Block</button>
				</div>
			'))) ?></code>
		</pre>
		<div class="notification"><code>buttonContainer</code> wordt gebruikt om de buttons op een eigen regel te zetten.</div>

	</div>

</section>

<aside id="aside">

	<?php include 'contents.php'; ?>

</aside>

<?php include '../templates/footer.php'; ?>