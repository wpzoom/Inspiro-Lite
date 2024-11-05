<?php
/**
 * Inspiro Lite: WC Plugin Customs
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * PHP Class for Registering Customizer Configuration
 *
 * @since 1.3.0
 */
class Inspiro_WC_Customs_Config {
	public static function config( $wp_customize ) {
		return array(
			'section' => array(
				'id'   => 'product_image_zoom_option',
				'args' => array(
					'title' => __( 'Single Product Pages', 'inspiro' ),
					'panel' => 'woocommerce',
				),
			),
			'setting' => array(
				array(
					'id'   => 'inspiro_wc_custom_product_image_zoom_option',
					'args' => array(
						'default'   => true,
						'type'      => 'theme_mod',
						'transport' => 'refresh',
					),
				),
			),
			'control' => array(
				array(
					'id'           => 'my_custom_setting',
					'args'         => array(
						'type'     => 'checkbox',
						'label'    => __( 'Enable Product Image Zoom', 'inspiro' ),
						'section'  => 'product_image_zoom_option',
						'settings' => 'inspiro_wc_custom_product_image_zoom_option',
					),
				),
			)
		);
	}
}
