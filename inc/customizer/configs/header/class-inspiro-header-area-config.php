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
class Inspiro_Header_Area_Config {
	/**
	 * Configurations
	 *
	 * @since 1.4.0 Store configurations to class method.
	 * @return array
	 */
	public static function config() {
		return array(
			'section' => array(
				'id'   => 'header-area',
				'args' => array(
					'title'    => esc_html__( 'Header Settings', 'inspiro' ),
					'priority' => 70,
				),
			),
			'setting' => array(
                'id'   => 'header_search_show',
                'args' => array(
                    'capability'        => 'edit_theme_options',
                    'default'           => true,
                    'sanitize_callback' => 'inspiro_sanitize_checkbox',
                ),
			),

			'control' => array(
                'id'   => 'header_search_show',
                'args' => array(
                    'type'    => 'checkbox',
                    'section' => 'header-area',
                    'label'   => esc_html__( 'Show Seach Icon', 'inspiro' ),
                ),
			),
		);
	}
}
