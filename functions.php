<?php
add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_enqueue_styles' );
function hwcoe_ufl_child_enqueue_styles() {
	
	$parent_style = 'parent-style'; //This is hwcoe-ufl style referrence for the hwcoe-ufl theme.
	 
	//enqueue parent styles
	
    // Bootstrap
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js');
		
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	
	//enqueue child styles
	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_enqueue_styles' );

?>