<?php

function register_theme_support() {

		// Register primary and footer menus

		// register_nav_menus( array(
		// 	'primary'	=> __( 'Primary Menu', 'vetparty' ),
		// 	'footer'	=> __( 'Footer', 'vetparty' )
		// ));

		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Add menu functionality within wp-admin
		add_theme_support( 'menus' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

	}

	add_action( 'after_setup_theme', 'register_theme_support' );

	// Disable XML RPC
	add_filter('xmlrpc_enabled', '__return_false');

	// Allow SVGs to be added to WP media folder
	function cc_mime_types( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

	add_filter( 'upload_mimes', 'cc_mime_types' );


	// Add Favicon to site head section
	function favicon_add() {
		// echo "<link rel='Shortcut Icon' type='image/x-icon' href='/wp-content/uploads/2016/11/favicon.ico' />";
	}
	add_action('wp_head', 'favicon_add');

?>