<?php

function school_enqueues() {
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
		wp_get_theme()->get( 'Version' ),
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'school_enqueues' );


// LOAD STYLE.CSS ON BACK-END
function school_setup() {
	add_editor_style( get_stylesheet_uri() );
}
add_action( 'after_setup_theme', 'school_setup' );
?>