<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'my-theme'); ?></a>
		<section>
			<ul class="header-contact">
				<li class="header-contact-item"><span class="header-contact-title">TELEFON:</span> <?php the_field('phone_number'); ?></li>
				<li class="header-contact-item"><span class="header-contact-title">KOMÓRKA:</span> <?php the_field('mobile_number'); ?></li>
				<li class="header-contact-item"><span class="header-contact-title">E-MAIL:</span> <?php the_field('email_address'); ?></li>
			</ul>
		</section>
		<header id="masthead" class="site-header">
			<div class="site-branding-navigation">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$my_theme_description = get_bloginfo('description', 'display');
					if ($my_theme_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $my_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
													?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'my-theme'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary-menu',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu',
							'container'      => 'ul',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .site-branding-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">