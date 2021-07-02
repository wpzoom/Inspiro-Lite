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
class Inspiro_Custom_Logo_Text_Config {
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
				'id'   => 'custom_logo_text',
				'args' => array(
					'default'           => get_bloginfo( 'name' ),
					'transport'         => 'postMessage',
					'sanitize_callback' => 'sanitize_text_field',
				),
			),
			'control' => array(
				'id'   => 'custom_logo_text',
				'args' => array(
					'type'     => 'text',
					'label'    => esc_html__( 'Custom Logo Text', 'inspiro' ),
					'section'  => 'title_tagline',
					'priority' => 5,
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
			$configs['setting']['id'],
			$configs['setting']['args']
		);

		$wp_customize->add_control(
			$configs['control']['id'],
			$configs['control']['args']
		);
	}
}

new Inspiro_Custom_Logo_Text_Config();
