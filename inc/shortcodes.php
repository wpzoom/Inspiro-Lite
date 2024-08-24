<?php
/**
 * Additional shortcode features to allow include necesary elements in content.
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.0
 */

// Add necessary init hook for shortcode registering.
function inspiro_register_shortcodes() {
	add_shortcode( 'current_year', 'inspiro_custom_shortcode' );

	function inspiro_custom_shortcode( $atts ) {
		// Start output buffering
		ob_start();

		echo '<span>' . date('Y') . '</span>';

		return ob_get_clean();
	}

}
add_action( 'init', 'inspiro_register_shortcodes' );

