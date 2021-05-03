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

add_filter( 'inspiro/dynamic_theme_css', 'inspiro_typo_mainmenu_dynamic_theme_css' );

/**
 * Typography -> Menu -> Main Menu
 *
 * @param string $dynamic_css Dynamic CSS from Customizer.
 * @return string Generated dynamic CSS for Main Menu typography.
 */
function inspiro_typo_mainmenu_dynamic_theme_css( $dynamic_css ) {
	$mainmenu_font_family    = get_theme_mod( 'mainmenu-font-family', 'inherit' );
	$mainmenu_font_size      = get_theme_mod( 'mainmenu-font-size', '16' );
	$mainmenu_font_weight    = get_theme_mod( 'mainmenu-font-weight', '400' );
	$mainmenu_text_transform = get_theme_mod( 'mainmenu-text-transform', '' );
	$mainmenu_line_height    = get_theme_mod( 'mainmenu-line-height', '1.8' );

	$dynamic_css .= '.navbar-nav a {';
	if ( ! empty( $mainmenu_font_family ) ) {
		$dynamic_css .= "font-family: {$mainmenu_font_family};\n";
	}
	if ( absint( $mainmenu_font_size ) >= 14 && absint( $mainmenu_font_size ) <= 18 ) {
		$dynamic_css .= "font-size: {$mainmenu_font_size}px;\n";
	}
	if ( ! empty( $mainmenu_font_weight ) ) {
		$dynamic_css .= "font-weight: {$mainmenu_font_weight};\n";
	}
	if ( ! empty( $mainmenu_text_transform ) ) {
		$dynamic_css .= "text-transform: {$mainmenu_text_transform};\n";
	}
	if ( ! empty( $mainmenu_line_height ) ) {
		$dynamic_css .= "line-height: {$mainmenu_line_height};\n";
	}
	$dynamic_css .= '}';

	return $dynamic_css;
}
