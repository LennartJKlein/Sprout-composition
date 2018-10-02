<div class="modal premiumModal" role="dialog" aria-hidden="true">
	<div class="modal__dialog">
		<div class="modal__content premiumModal__content">
		
			<button class="modal__close modal__button" role="cancel"><i class="fa fa-close"></i></button>

			<?php if ($_COOKIE['sprout-role'] == 'unknown') { ?>

				<div class="premiumModal__body">
					<div class="premiumModal__figure"><img src="/images/premium-logo.svg" class="premiumModal__image" /></div>
					<h3 class="premiumModal__title"><i class="fa fa-unlock"></i> Tijd voor de volledige Sprout-beleving.</h3>
					<p class="premiumModal__description">Heb je Premium aangeschaft? Dan heb je van ons een toegangscode gekregen. Vul die code hieronder in om toegang te krijgen tot alle content op de site.</p>
					<div class="premiumModal__form">
						<input type="text" class="premiumModal__field" placeholder="Toegangscode">
						<button class="modal__button button button--premium-secondary" role="activate"><i class="fa fa-toggle-off"></i> Inschakelen</button>
					</div>
					<a href="toegangscode-kwijt.php" class="premiumModal__link">Toegangscode kwijt?</a>
				</div>

			<?php } else if ($_COOKIE['sprout-role'] == 'premium') { ?>

				<div class="premiumModal__body">
					<div class="premiumModal__figure"><img src="/images/premium-logo.svg" class="premiumModal__image" /></div>
					<h3 class="premiumModal__title">Premium is ingeschakeld.</h3>
					<p class="premiumModal__detail">E-mailadres:<span class="premiumModal__data">john@multiverse.nl</span></p>
					<br>
					<p class="premiumModal__detail">Startdatum:<span class="premiumModal__data">2 februari 2018</span></p>
					<p class="premiumModal__detail">Einddatum:<span class="premiumModal__data">-</span></p>
					<br>
					<p class="premiumModal__detail">Betalingswijze:<span class="premiumModal__data">Jaarlijks automatisch incasso</span></p>
					<p class="premiumModal__detail">Rekeningnummer:<span class="premiumModal__data">NL00 ABNA 0000 0000 00</span></p>
					<p class="premiumModal__detail">Volgende betaling:<span class="premiumModal__data">2 februari 2019</span></p>
					<a href="mailto:premium@sprout.nl?SUBJECT=Wijziging%20Premium-gegevens" class="premiumModal__link"><i class="fa fa-edit"></i> Wijziging doorgeven</a>
					<div class="modal__actions premiumModal__actions">
						<a href="stop-premium.php" class="modal__button button button--premium-secondary button--clean" role="stop"><i class="fa fa-ban"></i> Stopzetten</a>
						<button class="modal__button button button--premium-secondary" role="deactivate"><i class="fa fa-toggle-on"></i> Uitschakelen</button>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</div>