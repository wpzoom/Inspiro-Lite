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

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_typo_hero_header_title_dynamic_theme_css' );

/**
 * Typography -> Homepage Hero Header -> Header Title
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Header Title typography.
 */
function inspiro_typo_hero_header_title_dynamic_theme_css( $dynamic_css ) {
	$hero_header_title_font_family    = get_theme_mod( 'slider-title-font-family', "'Inter', sans-serif" );
	$hero_header_title_font_size      = get_theme_mod( 'slider-title-font-size', '80' );
	$hero_header_title_font_weight    = get_theme_mod( 'slider-title-font-weight', '700' );
	$hero_header_title_text_transform = get_theme_mod( 'slider-title-text-transform', '' );
	$hero_header_title_line_height    = get_theme_mod( 'slider-title-line-height', '1.25' );

	$dynamic_css .= '.site-title {';
	if ( ! empty( $hero_header_title_font_family ) ) {
		$dynamic_css .= "font-family: {$hero_header_title_font_family};\n";
	}
	if ( absint( $hero_header_title_font_size ) >= 56 && absint( $hero_header_title_font_size ) <= 120 ) {
		$dynamic_css .= "font-size: {$hero_header_title_font_size}px;\n";
	}
	if ( ! empty( $hero_header_title_font_weight ) ) {
		$dynamic_css .= "font-weight: {$hero_header_title_font_weight};\n";
	}
	if ( ! empty( $hero_header_title_text_transform ) ) {
		$dynamic_css .= "text-transform: {$hero_header_title_text_transform};\n";
	}
	if ( ! empty( $hero_header_title_line_height ) ) {
		$dynamic_css .= "line-height: {$hero_header_title_line_height};\n";
	}
	$dynamic_css .= '}';

	return $dynamic_css;
}
