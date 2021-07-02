<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * PHP Class for Registering Customizer Confugration
 *
 * @since 1.3.0
 */
class Inspiro_Header_Button_Color_Config {
	/**
	 * Configurations
	 *
	 * @since 1.4.0 Store configurations to class method.
	 * @return array
	 */
	public static function config() {
		return array(
			'setting' => array(
				array(
					'id'   => 'header_button_textcolor',
					'args' => array(
						'theme_supports'       => array( 'custom-header', 'header-text' ),
						'default'              => '#ffffff',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'header_button_textcolor_hover',
					'args' => array(
						'theme_supports'       => array( 'custom-header', 'header-text' ),
						'default'              => '#ffffff',
						'transport'            => 'refresh',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'header_button_bgcolor_hover',
					'args' => array(
						'theme_supports'       => array( 'custom-header', 'header-text' ),
						'default'              => '#0bb4aa',
						'transport'            => 'refresh',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
			),
			'control' => array(
				array(
					'id'           => 'header_button_textcolor',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'   => esc_html__( 'Header Button Text Color', 'inspiro' ),
						'section' => 'colors',
					),
				),
				array(
					'id'           => 'header_button_textcolor_hover',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'   => esc_html__( 'Header Button Text Color Hover', 'inspiro' ),
						'section' => 'colors',
					),
				),
				array(
					'id'           => 'header_button_bgcolor_hover',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'   => esc_html__( 'Header Button Background Color Hover', 'inspiro' ),
						'section' => 'colors',
					),
				),
			),
		);
	}
}
