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

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_typo_hero_header_desc_dynamic_theme_css' );

/**
 * Typography -> Homepage Hero Header -> Header Description
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Header Description typography.
 */
function inspiro_typo_hero_header_desc_dynamic_theme_css( $dynamic_css ) {
	$hero_header_desc_font_family    = get_theme_mod( 'slider-text-font-family', 'inherit' );
	$hero_header_desc_font_size      = get_theme_mod( 'slider-text-font-size', '20' );
	$hero_header_desc_font_weight    = get_theme_mod( 'slider-text-font-weight', '400' );
	$hero_header_desc_text_transform = get_theme_mod( 'slider-text-text-transform', '' );
	$hero_header_desc_line_height    = get_theme_mod( 'slider-text-line-height', '1.8' );

	$dynamic_css .= '.site-description {';
	if ( ! empty( $hero_header_desc_font_family ) ) {
		$dynamic_css .= "font-family: {$hero_header_desc_font_family};\n";
	}
	if ( absint( $hero_header_desc_font_size ) >= 16 && absint( $hero_header_desc_font_size ) <= 42 ) {
		$dynamic_css .= "font-size: {$hero_header_desc_font_size}px;\n";
	}
	if ( ! empty( $hero_header_desc_font_weight ) ) {
		$dynamic_css .= "font-weight: {$hero_header_desc_font_weight};\n";
	}
	if ( ! empty( $hero_header_desc_text_transform ) ) {
		$dynamic_css .= "text-transform: {$hero_header_desc_text_transform};\n";
	}
	if ( ! empty( $hero_header_desc_line_height ) ) {
		$dynamic_css .= "line-height: {$hero_header_desc_line_height};\n";
	}
	$dynamic_css .= '}';

	return $dynamic_css;
}
