<?php
/**
 * Load WP Pointer for creating custom messages
 *
 * The constant POINTER_HEADER_TEXT defines the header text displayed during the theme onboarding process.
 *
 * This text will be used as the main heading in the pointer interface to greet users or provide initial
 * guidance when they start using a new theme. It aims to enhance the first-time user experience by
 * offering a clear and welcoming introduction.
 *
 * @package Inspiro
 * @since   Inspiro 1.9.x
 * @var string $POINTER_HEADER_TEXT The onboarding header text.
 */

const POINTER_HEADER_TEXT  = 'Inspiro Lite';
const POINTER_CONTENT_TEXT = 'Visit the <a href="admin.php?page=inspiro"><strong>Inspiro Dashboard</strong></a> to get your site set up with just a few clicks. Head over there to get started!';

/**
 * Add Conditional Logic to Show the Pointer Once
 */
function inspiro_show_custom_pointer() {
	// Check if the current user has dismissed the pointer.
	$dismissed = get_user_meta( get_current_user_id(), 'inspiro_theme_admin_custom_pointer_show_status', true );

	if ( !$dismissed ) {
		add_action( 'admin_enqueue_scripts', 'enqueue_custom_pointer_scripts' );
	}
}
add_action( 'admin_init', 'inspiro_show_custom_pointer' );

/**
 * Enqueue scripts and styles pointer option
 */
//add_action( 'admin_enqueue_scripts', 'enqueue_custom_wp_pointer_scripts' );
function enqueue_custom_pointer_scripts() {
	// Check if WP Pointer is supported in the current WordPress version.
	if ( ! wp_script_is( 'wp-pointer', 'registered' ) ) {
		return;
	}

	// Enqueue WP Pointer scripts and styles.
	wp_enqueue_style( 'wp-pointer' );
	wp_enqueue_script( 'wp-pointer' );

	$pointer_text   = create_pointer_text( POINTER_HEADER_TEXT, POINTER_CONTENT_TEXT );
	$pointer_target = '#toplevel_page_inspiro';

	// Enqueue the custom script that triggers the WP Pointer.
	wp_enqueue_script(
		'inspiro-lite-custom-admin-pointer',
		inspiro_get_assets_uri( 'custom-admin-pointer', 'js' ),
		array( 'jquery', 'wp-pointer' ),
		INSPIRO_THEME_VERSION,
		true
	);

	$localized_data = [
		'pointer_text'   => $pointer_text,
		'pointer_target' => $pointer_target,
	];


	// Localize the script with necessary data.
	wp_localize_script(
		'inspiro-lite-custom-admin-pointer',
		'customAdminPointer',
		$localized_data
	);
}

// Create pointer text and markup.
function create_pointer_text( $header_text, $content_text ) {
	return '<h3>' . __( POINTER_HEADER_TEXT, 'inspiro' ) . '</h3><p>' . __( POINTER_CONTENT_TEXT, 'inspiro' ) . '</p>';
}


// Mark the pointer as dismissed when closed.
function inspiro_dismiss_pointer_status() {
//	if ( isset( $_POST['pointer'] ) && 'custom_admin_pointer' === $_POST['pointer'] ) {
//		update_user_meta( get_current_user_id(), 'inspiro_theme_admin_custom_pointer_show_status', true );
//		echo 'Updated';
//	}
	wp_die();
}
add_action( 'wp_ajax_dismiss_wp_pointer', 'inspiro_dismiss_pointer_status' );

