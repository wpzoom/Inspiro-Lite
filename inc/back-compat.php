<?php
/**
 * Inspiro back compat functionality
 *
 * Prevents Inspiro from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @since Inspiro 1.0.0
 */

/**
 * Prevent switching to Inspiro on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Inspiro 1.0.0
 */
function inspiro_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'inspiro_upgrade_notice' );
}
add_action( 'after_switch_theme', 'inspiro_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Inspiro on WordPress versions prior to 4.7.
 *
 * @since Inspiro 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function inspiro_upgrade_notice() {
	/* translators: %s: The current WordPress version. */
	$message = sprintf( __( 'Inspiro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'inspiro' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Inspiro 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function inspiro_customize() {
	wp_die(
		/* translators: %s: The current WordPress version. */
		sprintf( __( 'Inspiro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'inspiro' ), $GLOBALS['wp_version'] ),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'inspiro_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Inspiro 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function inspiro_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: The current WordPress version. */
		wp_die( sprintf( __( 'Inspiro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'inspiro' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'inspiro_preview' );
