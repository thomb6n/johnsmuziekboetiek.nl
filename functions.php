<?php

define( 'THEME_DIR', get_stylesheet_directory() );
define( 'IMAGEPATH', get_stylesheet_directory_uri() . '/assets/images/' );

include 'includes/bootstrap.php';
include 'includes/helpers.php';
include 'includes/cpts.php';
include 'includes/taxonomies.php';

if ( class_exists( 'acf' ) ) {
	include 'includes/acf.php';
}


