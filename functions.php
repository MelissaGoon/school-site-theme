<?php

/*** Custom Post Types & Custom Taxonomies */
require get_template_directory() . '/inc/post-types-taxonomies.php';

// Load custom blocks.
require get_theme_file_path() . '/school-site-blocks/school-site-blocks.php';


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

	// Load Animate on Scroll JS and CSS
	wp_enqueue_script(
		'aos-script',
		'https://unpkg.com/aos@2.3.1/dist/aos.js',
		array(),
		'2.3.1',
		array('strategy' => 'defer')
	);

	wp_enqueue_script(
		'aos-settings',
		get_theme_file_uri('assets/js/aosSettings.js'),
		array(),
		'2.3.1',
		array('strategy' => 'defer')
	);

	wp_enqueue_style(
		'aos-css',
		'https://unpkg.com/aos@2.3.1/dist/aos.css',
		array(),
		'2.3.1'
	);
}
add_action('wp_enqueue_scripts', 'school_enqueues');


// LOAD STYLE.CSS ON BACK-END
function school_setup()
{
	add_editor_style(get_stylesheet_uri());
}
add_action('after_setup_theme', 'school_setup');


// Changing staff CPT title placeholder text
// Adapted from: https://imtiazrayhan.com/how-to-replace-add-title-placeholder-text-in-wordpress/ 
function replace_title_placeholder($title)
{
	$screen = get_current_screen();

	if ("fwd-school-staff" == $screen->post_type) {
		$title = "Add Staff Name";
	}

	return $title;
}
add_filter("enter_title_here", "replace_title_placeholder");

// Restrict locking/ unlocking blocks to those with theme editing privelleges 
add_filter('block_editor_settings_all', function ($settings) {
	$settings['canLockBlocks'] = current_user_can('edit_theme_options');
	return $settings;
});
