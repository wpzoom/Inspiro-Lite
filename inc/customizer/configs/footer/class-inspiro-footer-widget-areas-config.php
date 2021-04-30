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
class Inspiro_Footer_Widget_Areas_Config {
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
		$wp_customize->add_section(
			'footer-area',
			array(
				'title'    => esc_html__( 'Footer', 'inspiro' ),
				'priority' => 130, // Before Additional CSS.
			)
		);

		$wp_customize->add_setting(
			'footer-widget-areas',
			array(
				'default'           => 3,
				'sanitize_callback' => 'absint',
				'transport'         => 'refresh',
			)
		);

		$wp_customize->add_control(
			'footer-widget-areas',
			array(
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
			)
		);
	}
}

new Inspiro_Footer_Widget_Areas_Config();
