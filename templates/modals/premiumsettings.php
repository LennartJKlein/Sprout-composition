<div class="modal premiumModal" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content premiumModal-content">
		
			<button class="modal-close modal-button" role="cancel"><i class="fa fa-close"></i></button>

			<?php if ($_COOKIE['sprout-role'] == 'unknown') { ?>

				<div class="premiumModal-body">
					<div class="premiumModal-figure"><img src="/images/premium-logo.svg" class="premiumModal-image" /></div>
					<h3 class="premiumModal-title"><i class="fa fa-unlock"></i> Tijd voor de volledige Sprout-beleving.</h3>
					<p class="premiumModal-description">Heb je Premium aangeschaft? Dan heb je van ons een toegangscode gekregen. Vul die code hieronder in om toegang te krijgen tot alle content op de site.</p>
					<div class="premiumModal-form">
						<input type="text" class="premiumModal-field" placeholder="Toegangscode">
						<button class="modal-button button button--premium-secondary" role="activate"><i class="fa fa-toggle-off"></i> Inschakelen</button>
					</div>
					<a href="toegangscode-kwijt.php" class="premiumModal-link">Toegangscode kwijt?</a>
				</div>

			<?php } else if ($_COOKIE['sprout-role'] == 'premium') { ?>

				<div class="premiumModal-body">
					<div class="premiumModal-figure"><img src="/images/premium-logo.svg" class="premiumModal-image" /></div>
					<h3 class="premiumModal-title">Premium is ingeschakeld.</h3>
					<p class="premiumModal-detail">E-mailadres:<span class="premiumModal-data">john@multiverse.nl</span></p>
					<br>
					<p class="premiumModal-detail">Startdatum:<span class="premiumModal-data">2 februari 2018</span></p>
					<p class="premiumModal-detail">Einddatum:<span class="premiumModal-data">-</span></p>
					<br>
					<p class="premiumModal-detail">Betalingswijze:<span class="premiumModal-data">Jaarlijks automatisch incasso</span></p>
					<p class="premiumModal-detail">Rekeningnummer:<span class="premiumModal-data">NL00 ABNA 0000 0000 00</span></p>
					<p class="premiumModal-detail">Volgende betaling:<span class="premiumModal-data">2 februari 2019</span></p>
					<a href="mailto:premium@sprout.nl?SUBJECT=Wijziging%20Premium-gegevens" class="premiumModal-link"><i class="fa fa-edit"></i> Wijziging doorgeven</a>
					<div class="modal-actions premiumModal-actions">
						<a href="stop-premium.php" class="modal-button button button--premium-secondary button--clean" role="stop"><i class="fa fa-ban"></i> Stopzetten</a>
						<button class="modal-button button button--premium-secondary" role="deactivate"><i class="fa fa-toggle-on"></i> Uitschakelen</button>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</div>