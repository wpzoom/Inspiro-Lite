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

add_filter( 'inspiro/dynamic_theme_css/selectors', 'inspiro_selector_hero_header_title' );

if ( ! function_exists( 'inspiro_selector_hero_header_title' ) ) {
	/**
	 * Set HTML selector for Hero Header Title
	 *
	 * @param array $selectors HTML selectors.
	 * @return array The array with HTML selectors.
	 */
	function inspiro_selector_hero_header_title( $selectors ) {
		$selectors['typo-slider-title']            = '.site-title';
		$selectors['slider-title-font-size-media'] = '@media screen and (min-width: 782px)';
		return $selectors;
	}
}

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_dynamic_theme_css_hero_header_title' );

/**
 * Typography -> Homepage Hero Header -> Header Title
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Header Title.
 */
function inspiro_dynamic_theme_css_hero_header_title( $dynamic_css ) {
	$hero_header_title_font_family    = get_theme_mod( 'slider-title-font-family', "'Inter', sans-serif" );
	$hero_header_title_font_size      = get_theme_mod( 'slider-title-font-size', '80' );
	$hero_header_title_font_weight    = get_theme_mod( 'slider-title-font-weight', '700' );
	$hero_header_title_text_transform = get_theme_mod( 'slider-title-text-transform', '' );
	$hero_header_title_line_height    = get_theme_mod( 'slider-title-line-height', '1.25' );

	$selectors   = apply_filters( 'inspiro/dynamic_theme_css/selectors', array() );
	$selector    = inspiro_get_prop( $selectors, 'typo-slider-title' );
	$media_query = inspiro_get_prop( $selectors, 'slider-title-font-size-media' );

	$dynamic_css .= "{$selector} {\n";
	if ( ! empty( $hero_header_title_font_family ) && 'inherit' !== $hero_header_title_font_family ) {
		$dynamic_css .= "font-family: {$hero_header_title_font_family};\n";
	}
	if ( ! empty( $hero_header_title_font_weight ) && 'inherit' !== $hero_header_title_font_weight ) {
		$dynamic_css .= "font-weight: {$hero_header_title_font_weight};\n";
	}
	if ( ! empty( $hero_header_title_text_transform ) && 'inherit' !== $hero_header_title_text_transform ) {
		$dynamic_css .= "text-transform: {$hero_header_title_text_transform};\n";
	}
	$dynamic_css .= "}\n";

	$dynamic_css .= "{$media_query} {\n";
	$dynamic_css .= "{$selector} {\n";
	if ( absint( $hero_header_title_font_size ) >= 56 && absint( $hero_header_title_font_size ) <= 120 ) {
		$dynamic_css .= "font-size: {$hero_header_title_font_size}px;\n";
	}
	if ( ! empty( $hero_header_title_line_height ) && 'inherit' !== $hero_header_title_line_height ) {
		$dynamic_css .= "line-height: {$hero_header_title_line_height};\n";
	}
	$dynamic_css .= "} }\n";

	return $dynamic_css;
}
