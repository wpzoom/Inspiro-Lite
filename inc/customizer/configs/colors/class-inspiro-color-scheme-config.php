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
class Inspiro_Color_Scheme_Config {
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
			'colorscheme',
			array(
				'default'           => 'light',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_colorscheme',
			)
		);

		$wp_customize->add_setting(
			'colorscheme_hex',
			array(
				'default'           => '#0bb4aa',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			'colorscheme',
			array(
				'type'     => 'radio',
				'label'    => esc_html__( 'Color Scheme', 'inspiro' ),
				'choices'  => array(
					'light'  => esc_html__( 'Light', 'inspiro' ),
					'dark'   => esc_html__( 'Dark', 'inspiro' ),
					'custom' => esc_html__( 'Custom', 'inspiro' ),
				),
				'section'  => 'colors',
				'priority' => 5,
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'colorscheme_hex',
				array(
					'section'  => 'colors',
					'priority' => 6,
				)
			)
		);
	}
}

new Inspiro_Color_Scheme_Config();
