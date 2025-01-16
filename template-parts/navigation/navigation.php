<header id="masthead" class="site-header">
	<div class="header-contact">
		<div class="container">
			<ul class="header-contact-item">
				<li><span class="header-contact-title">TELEFON:</span> <?php the_field('phone_number'); ?></li>
				<li><span class="header-contact-title">KOMÓRKA:</span> <?php the_field('mobile_number'); ?></li>
				<li><span class="header-contact-title">E-MAIL:</span> <?php the_field('email_address'); ?></li>
			</ul>
		</div>
	</div>


	<div class="container">
		<!-- Logo -->
		<div class="site-branding">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-link">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo('name'); ?> logo" class="site-logo">
			</a>
		</div>

		<!-- Nawigacja -->
		<nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'menu',
					'container'      => false,
				)
			);
			?>
		</nav>
	</div>
</header>