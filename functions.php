<?php

/**
 * My Theme functions and definitions
 *
 * @package My_Theme
 */

// Include required files from the `inc` folder
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/shortcodes.php'; // Include shortcodes

// Theme setup function
function my_theme_setup()
{
	// Add theme support for block editor features
	add_theme_support('editor-styles');
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');

	// Add editor styles
	add_editor_style('style-editor.css');

	// Register navigation menus
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu', 'my-theme'),
		)
	);
}
add_action('after_setup_theme', 'my_theme_setup');

// Advanced Custom Fields (ACF) Options Pages
if (function_exists('acf_add_options_page')) {
	// Global contact information
	acf_add_options_page(array(
		'page_title'    => 'Global Contact Info',
		'menu_title'    => 'Contact Info',
		'menu_slug'     => 'global-contact-info',
		'capability'    => 'edit_posts',
		'redirect'      => false,
	));

	// Global button settings
	acf_add_options_page(array(
		'page_title'    => 'Global Button Settings',
		'menu_title'    => 'Button Settings',
		'menu_slug'     => 'global-button-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false,
	));
}

// Function to get template part as a string
function get_button_template_part()
{
	ob_start();
	get_template_part('template-parts/button');
	return ob_get_clean();
}

// Enqueue styles and scripts
function my_theme_enqueue_styles()
{
	// Enqueue main stylesheet (style.css)
	wp_enqueue_style('my-theme-style', get_stylesheet_uri());

	// Enqueue additional styles (dist/bundle.css)
	wp_enqueue_style('about-me-style', get_template_directory_uri() . '/dist/bundle.css');

	// Enqueue custom styles from `styles` folder
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/style.css');

	// Enqueue Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
