<?php

function toms_setup_theme() {
	add_theme_support( 'menus' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'toms_setup_theme' );

function toms_load_assets() {
	wp_enqueue_script( 'toms-bundle', get_template_directory_uri() . '/assets/bundle.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'toms_load_assets' );
