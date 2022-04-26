<footer class="footer">
			<div class="footer__container">
				<div class="footer__top">
					<a href="#" class="footer__image-ibg" target="_blank"><picture><source srcset="<?php the_field ('white-logo-f')?>" type="image/webp"><img src="<?php the_field ('white-logo-f')?>" alt="logo-white"></picture></a>
					<h1 class="footer__title"><?php the_field ('titl-footer')?></h1>
					<a class="footer__tel-number" href=" tel:<?php the_field ('phone-number')?>"> <?php the_field ('phone')?></a>
					<a href="#" data-goto=".header__top" class="footer__to-top-link button"></a>
					<ul class="footer__socials socials">
					<li><a class="socials__tg" href="<?php the_field ('wp-telegram-link')?>" target="_blank"></a></li>
						<li><a class="socials__wa" href="<?php the_field ('wp-wp-link')?>" target="_blank"></a></li>
						<li><a class="socials__inst" href="<?php the_field ('wp-insta-link')?>" target="_blank"></a></li>
						<li><a class="socials__fb" href="<?php the_field ('wp-fb-link')?>" target="_blank"></a></li>
						<li><a class="socials__yt" href="<?php the_field ('wp-yt-link')?>" target="_blank"></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<!-- <div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
				Text
			</div>
		</div>
	</div>
</div> -->
	<!-- <script src="js/app.min.js?_v=20220416214011"></script> -->
	<?php 
	wp_footer();
	?>
</body>

</html>