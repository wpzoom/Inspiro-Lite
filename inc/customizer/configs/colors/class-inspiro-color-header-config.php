<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * PHP Class for Registering Customizer Configuration
 *
 * @since 1.3.0
 */
class Inspiro_Color_Header_Config
{
	/**
	 * Configurations
	 *
	 * @return array
	 * @since 1.4.0 Store configurations to class method.
	 */
	public static function config()
	{
		return array(
			// Settings init
			'setting' => array(
				// 1. header settings
				// 2. top menu settings
				array(
					'id' => 'color_menu_background',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => '#101010',
						'transport' => 'refresh',
						'sanitize_callback' => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id' => 'color-menu-background-scroll',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => 'rgba(0,0,0,0.9)',
						'transport' => 'postMessage',
						'sanitize_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id' => 'menu_hamburger_btn_color',
					'args' => array(
						'theme_supports' => array('custom-header'),
						'default' => '#ffffff',
						'transport' => 'refresh',
						'sanitize_callback' => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
			),
			// Controls init
			'control' => array(
				// 1. header settings
				// 2. top menu section
				array(
					'id' => 'for_menu_color_options',
					'control_type' => 'Inspiro_Customize_Accordion_UI_Control',
					'args' => array(
						'label' => esc_html__('Header', 'inspiro'),
						'section' => 'colors',
						'settings' => array(),
						'priority' => 11,
						'controls_to_wrap' => 3,
					),
				),
				array(
					'id' => 'color_menu_background',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Menu Background', 'inspiro'),
						'section' => 'colors',
						'priority' => 12,
					),
				),
				array(
					'id' => 'color-menu-background-scroll',
					'control_type' => 'Inspiro_Customize_Alpha_Color_Picker_Control',
					'args' => array(
						'label' => esc_html__('Menu Background on Scroll', 'inspiro'),
						'section' => 'colors',
						'priority' => 13,
					),
				),
				array(
					'id' => 'menu_hamburger_btn_color',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Hamburger Icon Color', 'inspiro'),
						'section' => 'colors',
						'priority' => 14,
					),
				),
				// -> hero section <-
			),
		);
	}
}
