<?php
/*This file is part of MUTaskFinal, twentytwentyone child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/



if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function MUTaskFinal_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parent-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parent-style' );
	    // loading child style
	    wp_register_style(
	      'child-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'child-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'MUTaskFinal_enqueue_child_styles' );

/*Write here your own functions */

