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
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

	/**
	 * Configurations
	 *
	 * @since x.x.x Store configurations to class method.
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
					'id'   => 'header_button_textcolor',
					'args' => array(
						'label'   => esc_html__( 'Header Button Text Color', 'inspiro' ),
						'section' => 'colors',
					),
				),
				array(
					'id'   => 'header_button_textcolor_hover',
					'args' => array(
						'label'   => esc_html__( 'Header Button Text Color Hover', 'inspiro' ),
						'section' => 'colors',
					),
				),
				array(
					'id'   => 'header_button_bgcolor_hover',
					'args' => array(
						'label'   => esc_html__( 'Header Button Background Color Hover', 'inspiro' ),
						'section' => 'colors',
					),
				),
			),
		);
	}

	/**
	 * Register configurations
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @return void
	 */
	public function register_configuration( $wp_customize ) {
		$configs = self::config();

		$wp_customize->add_setting(
			$configs['setting'][0]['id'],
			$configs['setting'][0]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][1]['id'],
			$configs['setting'][1]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][2]['id'],
			$configs['setting'][2]['args']
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$configs['control'][0]['id'],
				$configs['control'][0]['args']
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$configs['control'][1]['id'],
				$configs['control'][1]['args']
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$configs['control'][2]['id'],
				$configs['control'][2]['args']
			)
		);
	}
}

new Inspiro_Header_Button_Color_Config();
