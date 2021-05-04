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

add_filter( 'inspiro/dynamic_theme_css/selectors', 'inspiro_selector_hero_header_button' );

if ( ! function_exists( 'inspiro_selector_hero_header_button' ) ) {
	/**
	 * Set HTML selector for Hero Header Button
	 *
	 * @param array $selectors HTML selectors.
	 * @return array The array with HTML selectors.
	 */
	function inspiro_selector_hero_header_button( $selectors ) {
		$selectors['typo-slider-button'] = '.custom-header-button';
		return $selectors;
	}
}

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_dynamic_theme_css_hero_header_button' );

/**
 * Typography -> Homepage Hero Header -> Header Button
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Header Button.
 */
function inspiro_dynamic_theme_css_hero_header_button( $dynamic_css ) {
	$hero_header_button_font_family    = get_theme_mod( 'slider-button-font-family', 'inherit' );
	$hero_header_button_font_size      = get_theme_mod( 'slider-button-font-size', '16' );
	$hero_header_button_font_weight    = get_theme_mod( 'slider-button-font-weight', '400' );
	$hero_header_button_text_transform = get_theme_mod( 'slider-button-text-transform', '' );
	$hero_header_button_line_height    = get_theme_mod( 'slider-button-line-height', '1.8' );

	$selectors = apply_filters( 'inspiro/dynamic_theme_css/selectors', array() );
	$selector  = inspiro_get_prop( $selectors, 'typo-slider-button' );

	$dynamic_css .= "{$selector} {\n";
	if ( ! empty( $hero_header_button_font_family ) ) {
		$dynamic_css .= "font-family: {$hero_header_button_font_family};\n";
	}
	if ( absint( $hero_header_button_font_size ) >= 14 && absint( $hero_header_button_font_size ) <= 18 ) {
		$dynamic_css .= "font-size: {$hero_header_button_font_size}px;\n";
	}
	if ( ! empty( $hero_header_button_font_weight ) ) {
		$dynamic_css .= "font-weight: {$hero_header_button_font_weight};\n";
	}
	if ( ! empty( $hero_header_button_text_transform ) ) {
		$dynamic_css .= "text-transform: {$hero_header_button_text_transform};\n";
	}
	if ( ! empty( $hero_header_button_line_height ) ) {
		$dynamic_css .= "line-height: {$hero_header_button_line_height};\n";
	}
	$dynamic_css .= "}\n";

	return $dynamic_css;
}
