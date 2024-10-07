<?php
/**
 * Inspiro functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inspiro
 * @since   Inspiro 1.0.0
 */

add_action( 'admin_enqueue_scripts', 'enqueue_wp_pointer_scripts' );

/**
 * Enqueue scripts and styles pointer option
 */
function enqueue_wp_pointer_scripts( $hook ) {
	// Check if WP Pointer is supported in the current WordPress version.
	if ( ! wp_script_is( 'wp-pointer', 'registered' ) ) {
		return;
	}

	// Enqueue WP Pointer scripts and styles.
	wp_enqueue_style( 'wp-pointer' );
	wp_enqueue_script( 'wp-pointer' );

	$localized_data = [
		'pointer_text'   => '<h3>Welcome!</h3><p>Check out this new feature!</p>',
		'pointer_target' => '#menu-dashboard',
	];

	// Enqueue the custom script that triggers the WP Pointer.
	wp_enqueue_script( 'custom-admin-pointer', inspiro_get_assets_uri('custom-admin-pointer', 'js'), array( 'jquery','wp-pointer' ), INSPIRO_THEME_VERSION, true );

	// Localize the script with necessary data.
	wp_localize_script( 'custom-admin-pointer', 'customAdminPointer', $localized_data );
}
