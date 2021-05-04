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

add_filter( 'inspiro/dynamic_theme_css/selectors', 'inspiro_selector_hero_header_desc' );

if ( ! function_exists( 'inspiro_selector_hero_header_desc' ) ) {
	/**
	 * Set HTML selector for Hero Header Description
	 *
	 * @param array $selectors HTML selectors.
	 * @return array The array with HTML selectors.
	 */
	function inspiro_selector_hero_header_desc( $selectors ) {
		$selectors['typo-slider-text']            = '.site-description';
		$selectors['slider-text-font-size-media'] = '@media screen and (min-width: 782px)';
		return $selectors;
	}
}

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_dynamic_theme_css_hero_header_desc' );

/**
 * Typography -> Homepage Hero Header -> Header Description
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Header Description.
 */
function inspiro_dynamic_theme_css_hero_header_desc( $dynamic_css ) {
	$hero_header_desc_font_family    = get_theme_mod( 'slider-text-font-family', "'Inter', sans-serif" );
	$hero_header_desc_font_size      = get_theme_mod( 'slider-text-font-size', '20' );
	$hero_header_desc_font_weight    = get_theme_mod( 'slider-text-font-weight', '400' );
	$hero_header_desc_text_transform = get_theme_mod( 'slider-text-text-transform', '' );
	$hero_header_desc_line_height    = get_theme_mod( 'slider-text-line-height', '1.8' );

	$selectors   = apply_filters( 'inspiro/dynamic_theme_css/selectors', array() );
	$selector    = inspiro_get_prop( $selectors, 'typo-slider-text' );
	$media_query = inspiro_get_prop( $selectors, 'slider-text-font-size-media' );

	$dynamic_css .= "{$selector} {\n";
	if ( ! empty( $hero_header_desc_font_family ) && 'inherit' !== $hero_header_desc_font_family ) {
		$dynamic_css .= "font-family: {$hero_header_desc_font_family};\n";
	}
	if ( ! empty( $hero_header_desc_font_weight ) && 'inherit' !== $hero_header_desc_font_weight ) {
		$dynamic_css .= "font-weight: {$hero_header_desc_font_weight};\n";
	}
	if ( ! empty( $hero_header_desc_text_transform ) && 'inherit' !== $hero_header_desc_text_transform ) {
		$dynamic_css .= "text-transform: {$hero_header_desc_text_transform};\n";
	}
	$dynamic_css .= "}\n";

	$dynamic_css .= "{$media_query} {\n";
	$dynamic_css .= "{$selector} {\n";
	if ( absint( $hero_header_desc_font_size ) >= 16 && absint( $hero_header_desc_font_size ) <= 42 ) {
		$dynamic_css .= "font-size: {$hero_header_desc_font_size}px;\n";
	}
	if ( ! empty( $hero_header_desc_line_height ) && 'inherit' !== $hero_header_desc_line_height ) {
		$dynamic_css .= "line-height: {$hero_header_desc_line_height};\n";
	}
	$dynamic_css .= "} }\n";

	return $dynamic_css;
}
