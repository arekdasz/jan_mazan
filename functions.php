<?php

function my_theme_setup()
{
	add_theme_support('editor-styles');
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
	add_editor_style('style-editor.css');
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu', 'my-theme'),
		)
	);
}
add_action('after_setup_theme', 'my_theme_setup');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Global Contact Info',
		'menu_title'    => 'Contact Info',
		'menu_slug'     => 'global-contact-info',
		'capability'    => 'edit_posts',
		'redirect'      => false,
	));
	acf_add_options_page(array(
		'page_title'    => 'Global Button Settings',
		'menu_title'    => 'Button Settings',
		'menu_slug'     => 'global-button-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false,
	));
}

function get_button_template_part()
{
	ob_start();
	get_template_part('template-parts/button');
	return ob_get_clean();
}
function set_default_template_for_oplaty($post_id, $post, $update)
{
	if ($post->post_type == 'page' && $post->post_title == 'Opłaty') {
		update_post_meta($post_id, '_wp_page_template', 'page-oplaty.php');
	}
}
add_action('save_post', 'set_default_template_for_oplaty', 10, 3);

function my_theme_enqueue_styles()
{
	wp_enqueue_style('my-theme-style', get_stylesheet_uri());
	wp_enqueue_style('about-me-style', get_template_directory_uri() . '/dist/bundle.css');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/style/style.css');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
}

require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/shortcodes.php';
