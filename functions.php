<?php

/*** Custom Post Types & Custom Taxonomies */
require get_template_directory() . '/inc/post-types-taxonomies.php';

function school_enqueues()
{
	// LOAD NORMALIZE.CSS (OR OTHER CSS FILES)
	wp_enqueue_style(
		'school-normalize',
		'https://unpkg.com/@csstools/normalize.css',
		array(),
		'12.1.0'
	);
	// LOAD STYLE.CSS ON FRONT-END
	wp_enqueue_style(
		'school-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get('Version'),
		'all'
	);

	// LightGallery enqueues on front page
	if (is_front_page()) {

		// Script
		wp_enqueue_script(
			'light-gallery',
			get_theme_file_uri('assets/js/lightgallery.umd.js'),
			array(),
			'2.9.0',
			array('strategy' => 'defer')
		);

		// Settings
		wp_enqueue_script(
			'light-gallery-settings',
			get_theme_file_uri('assets/js/lightgallerySettings.js'),
			array(),
			'2.9.0',
			array('strategy' => 'defer')
		);

		// CSS

		wp_enqueue_style(
			'light-gallery-style',
			get_theme_file_uri('assets/css/lightgallery.css'),
			array(),
			'2.9.0',
			'all'
		);
	}
}
add_action('wp_enqueue_scripts', 'school_enqueues');


// LOAD STYLE.CSS ON BACK-END
function school_setup()
{
	add_editor_style(get_stylesheet_uri());
}
add_action('after_setup_theme', 'school_setup');
