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

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_typo_headings_dynamic_theme_css' );

/**
 * Typography -> Headings
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Headings typography.
 */
function inspiro_typo_headings_dynamic_theme_css( $dynamic_css ) {
	$headings_font_family    = get_theme_mod( 'headings-font-family', "'Montserrat', sans-serif" );
	$headings_font_weight    = get_theme_mod( 'headings-font-weight', '700' );
	$headings_text_transform = get_theme_mod( 'headings-text-transform', '' );
	$headings_line_height    = get_theme_mod( 'headings-line-height', '1.4' );

	$dynamic_css .= 'h1, h2, h3, h4, h5, h6 {';
	if ( ! empty( $headings_font_family ) ) {
		$dynamic_css .= "font-family: {$headings_font_family};\n";
	}
	if ( ! empty( $headings_font_weight ) ) {
		$dynamic_css .= "font-weight: {$headings_font_weight};\n";
	}
	if ( ! empty( $headings_text_transform ) ) {
		$dynamic_css .= "text-transform: {$headings_text_transform};\n";
	}
	if ( ! empty( $headings_line_height ) ) {
		$dynamic_css .= "line-height: {$headings_line_height};\n";
	}
	$dynamic_css .= '}';

	return $dynamic_css;
}
