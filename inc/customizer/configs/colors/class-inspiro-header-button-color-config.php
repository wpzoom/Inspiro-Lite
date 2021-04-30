<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * PHP Class for Registering Customizer Confugration
 *
 * @since x.x.x
 */
class Inspiro_Header_Button_Color_Config {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

	/**
	 * Register configurations
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @return void
	 */
	public function register_configuration( $wp_customize ) {
		$wp_customize->add_setting(
			'header_button_textcolor',
			array(
				'theme_supports'       => array( 'custom-header', 'header-text' ),
				'default'              => 'ffffff',
				'transport'            => 'postMessage',
				'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			)
		);

		$wp_customize->add_setting(
			'header_button_textcolor_hover',
			array(
				'theme_supports'       => array( 'custom-header', 'header-text' ),
				'default'              => 'ffffff',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			)
		);

		$wp_customize->add_setting(
			'header_button_bgcolor_hover',
			array(
				'theme_supports'       => array( 'custom-header', 'header-text' ),
				'default'              => '0bb4aa',
				'transport'            => 'refresh',
				'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_button_textcolor',
				array(
					'label'   => esc_html__( 'Header Button Text Color', 'inspiro' ),
					'section' => 'colors',
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_button_textcolor_hover',
				array(
					'label'   => esc_html__( 'Header Button Text Color Hover', 'inspiro' ),
					'section' => 'colors',
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_button_bgcolor_hover',
				array(
					'label'   => esc_html__( 'Header Button Background Color Hover', 'inspiro' ),
					'section' => 'colors',
				)
			)
		);
	}
}

new Inspiro_Header_Button_Color_Config();
