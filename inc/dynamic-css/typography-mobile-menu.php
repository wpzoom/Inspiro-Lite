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

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_typo_mobilemenu_dynamic_theme_css' );

/**
 * Typography -> Menu -> Mobile Menu
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Mobile Menu typography.
 */
function inspiro_typo_mobilemenu_dynamic_theme_css( $dynamic_css ) {
	$mobilemenu_font_family    = get_theme_mod( 'mobilemenu-font-family', 'inherit' );
	$mobilemenu_font_size      = get_theme_mod( 'mobilemenu-font-size', '16' );
	$mobilemenu_font_weight    = get_theme_mod( 'mobilemenu-font-weight', '600' );
	$mobilemenu_text_transform = get_theme_mod( 'mobilemenu-text-transform', 'uppercase' );
	$mobilemenu_line_height    = get_theme_mod( 'mobilemenu-line-height', '1.8' );

	$dynamic_css .= "@media screen and (max-width: 64em) {\n";
	$dynamic_css .= '.navbar-nav li a {';
	if ( ! empty( $mobilemenu_font_family ) ) {
		$dynamic_css .= "font-family: {$mobilemenu_font_family};\n";
	}
	if ( absint( $mobilemenu_font_size ) >= 14 && absint( $mobilemenu_font_size ) <= 18 ) {
		$dynamic_css .= "font-size: {$mobilemenu_font_size}px;\n";
	}
	if ( ! empty( $mobilemenu_font_weight ) ) {
		$dynamic_css .= "font-weight: {$mobilemenu_font_weight};\n";
	}
	if ( ! empty( $mobilemenu_text_transform ) ) {
		$dynamic_css .= "text-transform: {$mobilemenu_text_transform};\n";
	}
	if ( ! empty( $mobilemenu_line_height ) ) {
		$dynamic_css .= "line-height: {$mobilemenu_line_height};\n";
	}
	$dynamic_css .= "}\n}";

	return $dynamic_css;
}
