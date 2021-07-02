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
class Inspiro_Footer_Widget_Areas_Config {
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
			'section' => array(
				'id'   => 'footer-area',
				'args' => array(
					'title'    => esc_html__( 'Footer', 'inspiro' ),
					'priority' => 130, // Before Additional CSS.
				),
			),
			'setting' => array(
				'id'   => 'footer-widget-areas',
				'args' => array(
					'default'           => 3,
					'sanitize_callback' => 'absint',
					'transport'         => 'refresh',
				),
			),
			'control' => array(
				'id'   => 'footer-widget-areas',
				'args' => array(
					'label'   => esc_html__( 'Number of Widget Areas', 'inspiro' ),
					'section' => 'footer-area',
					'type'    => 'radio',
					'choices' => array(
						__( 'Don\'t display Widgets', 'inspiro' ),
						__( 'One Column', 'inspiro' ),
						__( 'Two Columns', 'inspiro' ),
						__( 'Three Columns', 'inspiro' ),
						__( 'Four Columns', 'inspiro' ),
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

		$wp_customize->add_section(
			$configs['section']['id'],
			$configs['section']['args']
		);

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

new Inspiro_Footer_Widget_Areas_Config();
