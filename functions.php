<?php

function register_theme_support() {

		// Register primary and footer menus

		// register_nav_menus( array(
		// 	'primary'	=> __( 'Primary Menu', 'ubiz' ),
		// 	'footer'	=> __( 'Footer', 'ubiz' )
		// ));

		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Add menu functionality within wp-admin
		add_theme_support( 'menus' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

	}

	add_action( 'after_setup_theme', 'register_theme_support' );

?>