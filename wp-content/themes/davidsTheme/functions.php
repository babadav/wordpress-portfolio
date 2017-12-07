<?php

function davids_scripts() {
	wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true);
	 // wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	  wp_enqueue_style( 'css/style.css', get_stylesheet_uri() );
	  wp_enqueue_style( 'main-stylesheet', get_template_directory_uri().'/assets/css/style.css' );
	 wp_enqueue_script('script-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0' , true );
}
add_action( 'wp_enqueue_scripts', 'davids_scripts' );

add_theme_support('menus');

