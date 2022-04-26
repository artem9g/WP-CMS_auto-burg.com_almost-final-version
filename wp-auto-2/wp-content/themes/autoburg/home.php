<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>		


        <main class="page">
			<section class="page__hero hero">
				<div class="hero__container">
					<div class="hero__content">
						<div class="hero__top">
							<div class="hero__left">
								<div class="hero__image-ibg hero-logo"><picture><source srcset="<?php the_field ('white-logo-h')?>" type="image/webp"><img src="<?php the_field ('white-logo-h')?>" alt="logo"></picture></div>
								<a href="tel:<?php the_field ('phone-number')?>" type="tel" class="hero__tel"><?php the_field ('phone')?></a>
								<a href="#" class="hero__link" data-goto=".firts">
									Получить консультацию
								</a>
							</div>
							<div class="hero__right">
								<h2 class="hero__title"><?php the_field ('main-text')?></h2>
								<h3 class="hero__sub-title"><?php the_field ('sub-main-text')?></h3>
							</div>

						</div>

						<ul class="hero__bottom">
							<li>
								<div class="hero__image-ibg hero-specials"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/kachestvo.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/kachestvo.png" alt="картинка-качество"></picture></div>
								<p class="hero__specials-text">
									100% Качество
								</p>
							</li>
							<li>
								<div class="hero__image-ibg hero-specials"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/lupa.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/lupa.png" alt="картинка-ассортимент"></picture></div>
								<p class="hero__specials-text">
									Широкий Ассортимент
								</p>
							</li>
							<li>
								<div class="hero__image-ibg hero-specials"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/dostavka.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dostavka.png" alt="картинка-доставка"></picture></div>
								<p class="hero__specials-text">
									Оперативная Доставка
								</p>
							</li>
						</ul>

					</div>
				</div>
			</section>



			<section class="page__first firts">
				<div class="first__container">
					<h2 class="firts__title mod-title"> Заполните заявку прямо сейчас</h2>
					<p class="firts__sub-title">чтобы получить нужную вам деталь как можно скорее!</p>
					<?php echo do_shortcode('[wpforms id="81"]');?> 
					<!-- <form class="first__form" action="post"> -->
						<!--<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="имя*" class="input">
						<input autocomplete="off" type="number" name="form[]" data-error="Ошибка" placeholder="номер телефона*" class="input">
						<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="VIN и марка авто" class="input">
						<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Наименование запчасти" class="input">
						<button type="submit" class="button first__button">Получить консультацию</button>-->
					<!-- </form>   -->
				
				</div>
			</section>



			<section class="page__cards cards">

<div class="cards__container" data-showmore>
	<h2 class="cards__title">
	<?php the_field ('5-punct')?>
	</h2>
	<div class="cards__content" data-showmore-content="640">
		<div class="cards__items">

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="326"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-1')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-1')?></li>
											<li><?php the_field ('wheel-drive-1')?></li>
											<li><?php the_field ('car-color-wp-1')?></li>
											<li><?php the_field ('car-price-wp-1')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="334"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-2')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-2')?></li>
											<li><?php the_field ('wheel-drive-2')?></li>
											<li><?php the_field ('car-color-wp-2')?></li>
											<li><?php the_field ('car-price-wp-2')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="335"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-3')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-3')?></li>
											<li><?php the_field ('wheel-drive-3')?></li>
											<li><?php the_field ('car-color-wp-3')?></li>
											<li><?php the_field ('car-price-wp-3')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="336"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-4')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-4')?></li>
											<li><?php the_field ('wheel-drive-4')?></li>
											<li><?php the_field ('car-color-wp-4')?></li>
											<li><?php the_field ('car-price-wp-4')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="337"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-5')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-5')?></li>
											<li><?php the_field ('wheel-drive-5')?></li>
											<li><?php the_field ('car-color-wp-5')?></li>
											<li><?php the_field ('car-price-wp-5')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="338"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-6')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-6')?></li>
											<li><?php the_field ('wheel-drive-6')?></li>
											<li><?php the_field ('car-color-wp-6')?></li>
											<li><?php the_field ('car-price-wp-6')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="339"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-7')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-7')?></li>
											<li><?php the_field ('wheel-drive-7')?></li>
											<li><?php the_field ('car-color-wp-7')?></li>
											<li><?php the_field ('car-price-wp-7')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="340"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-8')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-8')?></li>
											<li><?php the_field ('wheel-drive-8')?></li>
											<li><?php the_field ('car-color-wp-8')?></li>
											<li><?php the_field ('car-price-wp-8')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			<div class="cards__item">
				<div class="item-card">
					<div class="item-card__image-ibg">	<?php echo do_shortcode('[foogallery id="341"]');?></div>
						<div class="item-card__title item-title"><?php the_field ('model-9')?></div>
							<div class="item-card__text item-text">
								<div class="item-text__row">
									<div class="item-text__left">
										<ul>
											<li>Двигатель:</li>
											<li>Привод:</li>
											<li>Цвет:</li>
											<li>Цена:</li>
										</ul>
									</div>
									<div class="item-text__right">
										<ul>
											<li><?php the_field ('engine-9')?></li>
											<li><?php the_field ('wheel-drive-9')?></li>
											<li><?php the_field ('car-color-wp-9')?></li>
											<li><?php the_field ('car-price-wp-9')?></li>
										</ul>
									</div>
								</div>
						</div>
						
					<a data-goto=".firts"  href="#" class="item-card__link">Оставить заявку</a>
				</div>
			</div>

			
		</div>

	</div>
	<div class="button-wrapper"><button hidden data-showmore-button type="button" class="block__more"><span>Показать ещё</span><span>Скыть</span></button></div>
</div>
</section>




			<section class="page__steps steps">
				<div class="steps__container">
					<div class="steps__top">
						<h2 class="steps__top-title mod-title">
						<?php the_field ('auto-title-block')?> 
						</h2>
						<div class="steps__image-ibg">
							<picture><source srcset="<?php the_field ('img-auto-b')?>" type="image/webp"><img src="<?php the_field ('img-auto-b')?>" alt="картинка-мерседес"></picture>
						</div>
					</div>
					<div class="steps__bottom">
						<ul class="steps__wrap">
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 1 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-1-auto')?></h4>
									<p> <?php the_field ('text-auto-p-1')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 2</span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-2-auto')?></h4>
									<p><?php the_field ('text-auto-p-2')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 3 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-3-auto')?></h4>
									<p><?php the_field ('text-auto-p-3')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 4 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-4-auto')?></h4>
									<p><?php the_field ('text-auto-p-4')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 5 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-5-auto')?></h4>
									<p> <?php the_field ('text-auto-p-5')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 6 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-6-auto')?></h4>
									<p><?php the_field ('text-auto-p-6')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 7 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-7-auto')?></h4>
									<p><?php the_field ('text-auto-p-7')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 8 </span>
									</div>
									<h4 class="steps__item-title">
									<?php the_field ('title-p-8-auto')?>
									</h4>
									<p><?php the_field ('text-auto-p-8')?></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="page__steps steps steps_parts">
				<div class="steps__container">
					<div class="steps__top">
						<h2 class="steps__top-title steps__top-title-yellow mod-title">
						<?php the_field ('parts-title-block')?>
						</h2>
						<div class="steps__image-ibg steps-parts-image">
							<picture><source srcset="<?php the_field ('img-parts-b')?>" type="image/webp"><img src="<?php the_field ('img-parts-b')?>" alt="картинка-запчасти"></picture>
						</div>
					</div>
					<div class="steps__bottom">
						<ul class="steps__wrap">
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number steps__item-number-yellow">
										<span class="steps__item-number-text"> 1 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-1-parts')?></h4>
									<p> <?php the_field ('text-parts-p-1')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 2</span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-2-parts')?></h4>
									<p><?php the_field ('text-parts-p-2')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 3 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-3-parts')?></h4>
									<p><?php the_field ('text-parts-p-3')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 4 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-4-parts')?></h4>
									<p><?php the_field ('text-parts-p-4')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 5 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-5-parts')?></h4>
									<p> <?php the_field ('text-parts-p-5')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 6 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-6-parts')?></h4>
									<p><?php the_field ('text-parts-p-6')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 7 </span>
									</div>
									<h4 class="steps__item-title"><?php the_field ('title-p-7-parts')?></h4>
									<p><?php the_field ('text-parts-p-7')?></p>
								</div>
							</li>
							<li class="steps__column">
								<div class="steps__item">
									<div class="steps__item-number">
										<span class="steps__item-number-text"> 8 </span>
									</div>
									<h4 class="steps__item-title">
									<?php the_field ('title-p-8-parts')?>
									</h4>
									<p><?php the_field ('text-parts-p-8')?></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="popular-marks">
				<div class="popular-marks__row">
					<h2 class="popular-marks__title">Популярные марки авто</h2>
					<!-- Оболочка слайдера -->
					<div class="popular-marks__slider swiper-marks">
						<!-- Двигающееся часть слайдера -->
						<div class="swiper-wrapper popular-marks__ul-1 swiper-marks__move">

							<?php
							global $post;

							$myposts = get_posts([ 
								'numberposts' => 20,
								'category_name' => 'slider-marks',
							]);

							if( $myposts ){
								foreach( $myposts as $post ){
									setup_postdata( $post );
									?>
									<!-- Вывод постов, функции цикла: the_title и т.д. -->
									<!-- Слайд -->
									<div class="popular-marks__slide swiper-slide popular-marks-item">
										<div class="popular-marks__image-ibg">
											<?php the_post_thumbnail(); ?>
										</div>
										
									</div>

									<?php 
								}
							} 

							wp_reset_postdata(); // Сбрасываем $post
							?>
							</div>
						<!-- Если нужна навигация (влево/вправо) -->
						<button type="button" class="swiper-button-prev"></button>
						<button type="button" class="swiper-button-next"></button>

					</div>

				</div>

				<!-- <ul class="popular-marks__ul-1">
						<li>
							<div class="popular-marks__image-ibg"><picture><source srcset="img/content/marks/bmw.webp" type="image/webp"><img src="img/content/marks/bmw.png" alt="марка-бмв"></picture></div>
							<p>NO-CONTENT Прародителем текста-рыбы является известный "Lorem Ipsum" – латинский текст, ноги которого растут аж из 45 года до нашей эры. Сервисов по созданию случайного текста на основе Lorem Ipsum великое множество.</p>
						</li>
						<li>
							<div class="popular-marks__image-ibg"><picture><source srcset="img/content/marks/mb.webp" type="image/webp"><img src="img/content/marks/mb.png" alt="марка-мерседес"></picture></div>
							<p>NO-CONTENT Прародителем текста-рыбы является известный "Lorem Ipsum" – латинский текст, ноги которого растут аж из 45 года до нашей эры. Сервисов по созданию случайного текста на основе Lorem Ipsum великое множество.</p>
						</li>
						<li>
							<div class="popular-marks__image-ibg"><picture><source srcset="img/content/marks/toyota.webp" type="image/webp"><img src="img/content/marks/toyota.png" alt="марка-тойота"></picture></div>
							<p>NO-CONTENT Прародителем текста-рыбы является известный "Lorem Ipsum" – латинский текст, ноги которого растут аж из 45 года до нашей эры. Сервисов по созданию случайного текста на основе Lorem Ipsum великое множество.</p>
						</li>
						<li>
							<div class="popular-marks__image-ibg"><picture><source srcset="img/content/marks/ford.webp" type="image/webp"><img src="img/content/marks/ford.png" alt="марка-форд"></picture></div>
							<p>NO-CONTENT Прародителем текста-рыбы является известный "Lorem Ipsum" – латинский текст, ноги которого растут аж из 45 года до нашей эры. </p>
						</li>
					</ul> -->
			</section>



			<section class="page__about-us about-us">
				<div class="about-us__container">
					<div class="about-us__row">
						<div class="about-us__top top-about-us">
							<h2 class="top-about-us__title mod-title "><?php the_field ('about-titl')?></h2>
							<p class="top-about-us__sub-title"><?php the_field ('sub-about-titl')?></p>
						</div>
						<div class="about-us__middle middle-about-us">
							<div class="middle-about-us__row">
								<div class="middle-about-us__left">
									<div class="middle-about-us__title">
										<div class="middle-about-us__image-ibg"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/kachestvo-png.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/kachestvo-png.png" alt="картинка-качество"></picture>
										</div>
										<h2><?php the_field ('about-titl-left')?></h2>
									</div>
									<ul class="middle-about-us__list">
										<li><?php the_field ('about-titl-left-text-1')?></li>
										<li><?php the_field ('about-titl-left-text-2')?></li>
										<li><?php the_field ('about-titl-left-text-3')?></li>
									</ul>
								</div>
								<div class="middle-about-us__right">
									<div class="middle-about-us__title">
										<div class="middle-about-us__image-ibg"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/check.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/check.png"  alt="картинка-галочка"></picture>
										</div>
										<h2><?php the_field ('about-titl-right')?></h2>
									</div>
									<!-- Оболочка слайдера -->
									<div class="middle-about-us__slider swiper">
										<!-- Двигающееся часть слайдера -->
										<div class="middle-about-us__wrapper swiper-wrapper">
																					<?php
											global $post;

											$myposts = get_posts([ 
												'numberposts' => 20,
												'category_name' => 'slider-review',
											]);

											if( $myposts ){
												foreach( $myposts as $post ){
													setup_postdata( $post );
													?>
													<!-- Вывод постов, функции цикла: the_title() и т.д. -->
													<!-- Слайд -->
													<div class="middle-about-us__slide swiper-slide">
																							<div class="picture-slide__image-ibg"><?php the_post_thumbnail(); ?></div>
																							<p><?php the_content(); ?></p>
																						</div>
													<?php 
												}
											} 

											wp_reset_postdata(); // Сбрасываем $post
											?>
										</div>
										<!-- Если нужна навигация (влево/вправо) -->
										<button type="button" class="swiper-button-prev"></button>
										<button type="button" class="swiper-button-next"></button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			

			
		</main>
        
<?php 
get_footer(); 
?>
