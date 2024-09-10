<?php

/**
 * My Theme functions and definitions
 *
 * @package My_Theme
 */

// Dołącz pliki z folderu inc
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/customizer.php';

// Rejestracja menu
function my_theme_setup()
{
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu', 'my-theme'),
		)
	);
}
add_action('after_setup_theme', 'my_theme_setup');
