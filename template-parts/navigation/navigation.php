<!-- Kontener dla nagłówka i kontaktu -->
<header id="masthead" class="site-header">
	<div class="header-contact">
		<ul class="header-contact-item">
			<li><span class="header-contact-title">TELEFON:</span> <?php the_field('phone_number'); ?></li>
			<li><span class="header-contact-title">KOMÓRKA:</span> <?php the_field('mobile_number'); ?></li>
			<li><span class="header-contact-title">E-MAIL:</span> <?php the_field('email_address'); ?></li>
		</ul>
	</div>

	<div class="site-branding-navigation">
		<div class="site-branding">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo('name'); ?> logo" class="site-logo">
			</a>
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