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

// Dołącz plik shortcodes.php
require get_template_directory() . '/inc/shortcodes.php';

// Rejestracja menu
function my_theme_setup()
{
	// Wsparcie dla edytora bloków
	add_theme_support('editor-styles');
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');

	// Dodaj style edytora
	add_editor_style('style-editor.css');

	// Rejestracja menu
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu', 'my-theme'),
		)
	);
}
add_action('after_setup_theme', 'my_theme_setup');

// Sprawdź, czy funkcja acf_add_options_page istnieje
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Global Contact Info',
		'menu_title'    => 'Contact Info',
		'menu_slug'     => 'global-contact-info',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	// Dodaj stronę opcji dla przycisku
	acf_add_options_page(array(
		'page_title'    => 'Global Button Settings',
		'menu_title'    => 'Button Settings',
		'menu_slug'     => 'global-button-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

// Funkcja do zwracania zawartości template part jako string
function get_button_template_part()
{
	ob_start();
	get_template_part('template-parts/button');
	return ob_get_clean();
}

// Enqueue styles
function my_theme_enqueue_styles()
{
	// Załaduj główny plik CSS (style.css)
	wp_enqueue_style('my-theme-style', get_stylesheet_uri());

	// Załaduj dodatkowy plik CSS (dist/bundle.css)
	wp_enqueue_style('about-me-style', get_template_directory_uri() . '/dist/bundle.css');

	// Załaduj style z folderu styles/style.css
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/style.css');

	// Załaduj Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
