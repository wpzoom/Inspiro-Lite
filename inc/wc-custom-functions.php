<?php
/**
 * Additional Custom Template WC functions
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Disable WooCommerce Product Zoom
 */
$get_wc_custom_product_image_zoom_option_value =  get_theme_mod('inspiro_wc_custom_product_image_zoom_option', true);
if ( $get_wc_custom_product_image_zoom_option_value === false ) {
	remove_theme_support( 'wc-product-gallery-zoom' );
}

// add_action( 'wp', 'remove_image_zoom_support', 100 );
// function remove_image_zoom_support() {
//	remove_theme_support( 'wc-product-gallery-zoom' );
// }
