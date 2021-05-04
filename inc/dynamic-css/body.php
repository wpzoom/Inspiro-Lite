<?php
/**
 * Generate inline css based on Customizer settings value
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'inspiro/dynamic_theme_css/selectors', 'inspiro_selector_body' );

if ( ! function_exists( 'inspiro_selector_body' ) ) {
	/**
	 * Set HTML selector for Body
	 *
	 * @param array $selectors HTML selectors.
	 * @return array The array with HTML selectors.
	 */
	function inspiro_selector_body( $selectors ) {
		$selectors['typo-body'] = 'body, button, input, select, textarea';
		return $selectors;
	}
}

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_dynamic_theme_css_body' );

/**
 * Typography -> Body
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Body.
 */
function inspiro_dynamic_theme_css_body( $dynamic_css ) {
	$body_font_family    = get_theme_mod( 'body-font-family', "'Inter', sans-serif" );
	$body_font_size      = get_theme_mod( 'body-font-size', '16' );
	$body_font_weight    = get_theme_mod( 'body-font-weight', '400' );
	$body_text_transform = get_theme_mod( 'body-text-transform', '' );
	$body_line_height    = get_theme_mod( 'body-line-height', '1.8' );

	$selectors = apply_filters( 'inspiro/dynamic_theme_css/selectors', array() );
	$selector  = inspiro_get_prop( $selectors, 'typo-body' );

	$dynamic_css .= "{$selector} {\n";
	if ( ! empty( $body_font_family ) && 'inherit' !== $body_font_family ) {
		$dynamic_css .= "font-family: {$body_font_family};\n";
	}
	if ( absint( $body_font_size ) >= 14 && absint( $body_font_size ) <= 18 ) {
		$dynamic_css .= "font-size: {$body_font_size}px;\n";
	}
	if ( ! empty( $body_font_weight ) && 'inherit' !== $body_font_weight ) {
		$dynamic_css .= "font-weight: {$body_font_weight};\n";
	}
	if ( ! empty( $body_text_transform ) && 'inherit' !== $body_text_transform ) {
		$dynamic_css .= "text-transform: {$body_text_transform};\n";
	}
	if ( ! empty( $body_line_height ) && 'inherit' !== $body_line_height ) {
		$dynamic_css .= "line-height: {$body_line_height};\n";
	}
	$dynamic_css .= "}\n";

	return $dynamic_css;
}
