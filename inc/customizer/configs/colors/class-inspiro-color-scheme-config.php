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
class Inspiro_Color_Scheme_Config {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

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
					'id'   => 'colorscheme',
					'args' => array(
						'default'           => 'light',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_colorscheme',
					),
				),
				array(
					'id'   => 'colorscheme_hex',
					'args' => array(
						'default'           => '#0bb4aa',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_hex_color',
					),
				),
			),
			'control' => array(
				array(
					'id'   => 'colorscheme',
					'args' => array(
						'type'     => 'radio',
						'label'    => esc_html__( 'Color Scheme', 'inspiro' ),
						'choices'  => array(
							'light'  => esc_html__( 'Light', 'inspiro' ),
							'dark'   => esc_html__( 'Dark', 'inspiro' ),
							'custom' => esc_html__( 'Custom', 'inspiro' ),
						),
						'section'  => 'colors',
						'priority' => 5,
					),
				),
				array(
					'id'   => 'colorscheme_hex',
					'args' => array(
						'section'  => 'colors',
						'priority' => 6,
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

		$wp_customize->add_control(
			$configs['control'][0]['id'],
			$configs['control'][0]['args']
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$configs['control'][1]['id'],
				$configs['control'][1]['args']
			)
		);
	}
}

new Inspiro_Color_Scheme_Config();
