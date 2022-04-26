<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>AUTOBURG</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <style>body{opacity: 0;}</style> -->
	<!-- <link rel="stylesheet" href="css/style.min.css?_v=20220416214011"> -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/logo.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<?php wp_head(''); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__top">
					<a href="#" class="header__image-ibg" target="_blank"><picture><source srcset="<?php the_field ('black-logo-h')?>" type="image/webp"><img src="<?php the_field ('black-logo-h')?>" alt="logo"></picture></a>
					<h1 class="header__title"><?php the_field ('titl-header')?></h1>
					<a class="header__tel-number" href="tel:<?php the_field ('phone-number')?>"> <?php the_field ('phone')?> </a>

					<ul class="header__socials socials">
						<li><a class="socials__tg" href="<?php the_field ('wp-telegram-link')?>" target="_blank"></a></li>
						<li><a class="socials__wa" href="<?php the_field ('wp-wp-link')?>" target="_blank"></a></li>
						<li><a class="socials__inst" href="<?php the_field ('wp-insta-link')?>" target="_blank"></a></li>
						<li><a class="socials__fb" href="<?php the_field ('wp-fb-link')?>" target="_blank"></a></li>
						<li><a class="socials__yt" href="<?php the_field ('wp-yt-link')?>" target="_blank"></a></li>
					</ul>
				</div>
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item"><a href="#" data-goto=".header__top" class="menu__link"> <?php the_field ('1-punct')?></a></li>
							<li class="menu__item"><a data-goto=".steps" href="#" class="menu__link"> <?php the_field ('2-punct')?></a></li>
							<li class="menu__item"><a data-goto=".about-us" href="#" class="menu__link"><?php the_field ('3-punct')?></a></li>
							<li class="menu__item"><a data-goto=".about-us" href="#" class="menu__link"><?php the_field ('4-punct')?></a></li>
							<li class="menu__item"><a href="#" data-goto=".page__cards" class="menu__link"><?php the_field ('5-punct')?></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>