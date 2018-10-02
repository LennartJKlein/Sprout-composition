<button class="shareToggle"><i aria-hidden="true" class="fa fa-share-alt"></i></button>
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