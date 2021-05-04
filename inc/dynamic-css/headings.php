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

add_filter( 'inspiro/dynamic_theme_css/selectors', 'inspiro_selector_headings' );

if ( ! function_exists( 'inspiro_selector_headings' ) ) {
	/**
	 * Set HTML selector for Headings
	 *
	 * @param array $selectors HTML selectors.
	 * @return array The array with HTML selectors.
	 */
	function inspiro_selector_headings( $selectors ) {
		$selectors['typo-headings'] = 'h1, h2, h3, h4, h5, h6';
		return $selectors;
	}
}

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_dynamic_theme_css_headings' );

/**
 * Typography -> Headings
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Headings.
 */
function inspiro_dynamic_theme_css_headings( $dynamic_css ) {
	$headings_font_family    = get_theme_mod( 'headings-font-family', 'inherit' );
	$headings_font_weight    = get_theme_mod( 'headings-font-weight', '700' );
	$headings_text_transform = get_theme_mod( 'headings-text-transform', '' );
	$headings_line_height    = get_theme_mod( 'headings-line-height', '1.4' );

	$selectors = apply_filters( 'inspiro/dynamic_theme_css/selectors', array() );
	$selector  = inspiro_get_prop( $selectors, 'typo-headings' );

	$dynamic_css .= "{$selector} {\n";
	if ( ! empty( $headings_font_family ) && 'inherit' !== $headings_font_family ) {
		$dynamic_css .= "font-family: {$headings_font_family};\n";
	}
	if ( ! empty( $headings_font_weight ) && 'inherit' !== $headings_font_weight ) {
		$dynamic_css .= "font-weight: {$headings_font_weight};\n";
	}
	if ( ! empty( $headings_text_transform ) && 'inherit' !== $headings_text_transform ) {
		$dynamic_css .= "text-transform: {$headings_text_transform};\n";
	}
	if ( ! empty( $headings_line_height ) && 'inherit' !== $headings_line_height ) {
		$dynamic_css .= "line-height: {$headings_line_height};\n";
	}
	$dynamic_css .= "}\n";

	return $dynamic_css;
}
