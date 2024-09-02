<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package    Inspiro
 * @subpackage Inspiro_Lite
 * @since      Inspiro 1.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * PHP Class for Registering Customizer Configuration
 *
 * @since 1.3.0
 */
class Inspiro_Color_General_Config {
	/**
	 * Configurations
	 *
	 * @return array
	 * @since 1.4.0 Store configurations to class method.
	 */
	public static function config() {
		return array(
			// Settings init
			'setting' => array(
				array(
					'id'   => 'color_general_h_tags',
					'args' => array(
						'default'              => '',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'color_general_page_title',
					'args' => array(
						'default'              => '',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'color_general_entry_title',
					'args' => array(
						'default'              => '',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'color_general_entry_summary_text',
					'args' => array(
						'default'              => '',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id'   => 'color_general_entry_content_text',
					'args' => array(
						'default'              => '',
						'transport'            => 'postMessage',
						'sanitize_callback'    => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
			),
			// Controls init
			'control' => array(
				array(
					'id'           => 'for_general_color_options',
					'control_type' => 'Inspiro_Customize_Accordion_UI_Control',
					'args'         => array(
						'label'            => esc_html__( 'General', 'inspiro' ),
						'section'          => 'colors',
						'settings'         => array(),
						'priority'         => 11,
						'controls_to_wrap' => 5,
					),
				),
				array(
					'id'           => 'color_general_h_tags',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'       => esc_html__( 'Headings', 'inspiro' ),
						'description' => esc_html__('For raw header tags only. To return to the default option, please publish the changes first.', 'inspiro'),
						'section'     => 'colors',
						'priority'    => 11,
					),
				),
				array(
					'id'           => 'color_general_page_title',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'       => esc_html__( 'Page title', 'inspiro' ),
						'section'     => 'colors',
						'priority'    => 11,
					),
				),
				array(
					'id'           => 'color_general_entry_title',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'       => esc_html__( 'Entry title', 'inspiro' ),
						'section'     => 'colors',
						'priority'    => 11,
					),
				),
				array(
					'id'           => 'color_general_entry_summary_text',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'       => esc_html__( 'Summary text content', 'inspiro' ),
						'section'     => 'colors',
						'priority'    => 11,
					),
				),
				array(
					'id'           => 'color_general_entry_content_text',
					'control_type' => 'WP_Customize_Color_Control',
					'args'         => array(
						'label'       => esc_html__( 'Entry text content', 'inspiro' ),
						'section'     => 'colors',
						'priority'    => 11,
					),
				),
			)
		);
	}
}
