<?php

// add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_scripts' );

function hwcoe_ufl_child_scripts() {
	
	//enqueue parent stylesheet
	$parent_style = 'hwcoe-ufl-style'; 

	wp_enqueue_style( $parent_style, 
		get_template_directory_uri() . '/style.css', 
		['bootstrap', 'prettyPhoto'],
		get_theme_version() 
	);
	
	wp_enqueue_style( 'hwcoe-ufl-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);

    wp_enqueue_script('hwcoe-ufl-child-scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), get_theme_version(), true);
	
}
add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_scripts' );

?>