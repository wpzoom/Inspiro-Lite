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
}
