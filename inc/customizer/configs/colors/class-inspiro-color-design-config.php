<?php
/**
 * Inspiro Lite: Adds settings, sections, controls to Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * PHP Class for Registering Customizer Configuration
 *
 * @since 1.3.0
 */
class Inspiro_Color_Design_Config
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
				// hero section
				array(
					'id' => 'header_button_textcolor',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => '#ffffff',
						'transport' => 'postMessage',
						'sanitize_callback' => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id' => 'header_button_textcolor_hover',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => '#ffffff',
						'transport' => 'refresh',
						'sanitize_callback' => 'sanitize_hex_color',
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
				// 4. footer
				array(
					'id' => 'color_footer_background',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => '#101010',
						'transport' => 'refresh',
						'sanitize_callback' => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				array(
					'id' => 'color_footer_text',
					'args' => array(
						'theme_supports' => array('custom-header', 'header-text'),
						'default' => '#78787f',
						'transport' => 'refresh',
						'sanitize_callback' => 'sanitize_hex_color',
						'sanitize_js_callback' => 'maybe_hash_hex_color',
					),
				),
				// 5. premium single section
				array(
					'id' => 'colors_premium',
					'args' => array(
						'default' => null,
						'sanitize_callback' => 'sanitize_text_field',
					),
				),
			),
			// Controls init
			'control' => array(
				// 1. header settings
				// 2. top menu settings
				// 3. hero section
				array(
					'id' => 'for_hero_section_color_options',
					'control_type' => 'Inspiro_Customize_Accordion_UI_Control',
					'args' => array(
						'label' => esc_html__('Hero section', 'inspiro'),
						'section' => 'colors',
						'settings' => array(),
						'priority' => 15,
						'controls_to_wrap' => 4,
					),
				),
				array(
					'id' => 'header_button_textcolor',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Hero Button Text Color', 'inspiro'),
						'section' => 'colors',
						'priority' => 17,
					),
				),
				array(
					'id' => 'header_button_textcolor_hover',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Hero Button Text Color Hover', 'inspiro'),
						'section' => 'colors',
						'priority' => 18,
					),
				),
				array(
					'id' => 'header_button_bgcolor_hover',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Hero Button Background Color Hover', 'inspiro'),
						'section' => 'colors',
						'priority' => 19,
					),
				),
				// hide because was added Accordion UI
				// todo:clean
//				array(
//					'id' => 'menu_color_subtitle',
//					'control_type' => 'Inspiro_Customize_Title_Control',
//					'args' => array(
//						'label' => esc_html__('Top Menu', 'inspiro'),
//						'section' => 'colors',
//					),
//				),

				// 4. footer section
				// hide because was added Accordion UI
				// todo:clean
//				array(
//					'id' => 'footer_color_subtitle',
//					'control_type' => 'Inspiro_Customize_Title_Control',
//					'args' => array(
//						'label' => esc_html__('Footer', 'inspiro'),
//						'section' => 'colors',
//					),
//				),
				array(
					'id' => 'for_footer_color_options',
					'control_type' => 'Inspiro_Customize_Accordion_UI_Control',
					'args' => array(
						'label' => esc_html__('Footer', 'inspiro'),
						'section' => 'colors',
						'settings' => array(),
						'priority' => 20,
						'controls_to_wrap' => 2,
					),
				),
				array(
					'id' => 'color_footer_background',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Footer Background', 'inspiro'),
						'section' => 'colors',
						'priority' => 21,
					),
				),
				array(
					'id' => 'color_footer_text',
					'control_type' => 'WP_Customize_Color_Control',
					'args' => array(
						'label' => esc_html__('Text Color', 'inspiro'),
						'section' => 'colors',
						'priority' => 22,
					),
				),
				// 5. premium single section
				array(
					'id' => 'colors_premium',
					'control_type' => 'Inspiro_Customize_Title_Control',
					'args' => array(
						'label' => esc_html__('🎨 There are 68 more color & font options in Inspiro Premium!', 'inspiro'),
						'description' => esc_html__('Unlock all customization options by upgrading to the Premium version of the theme. Customize colors, fonts, header, footer & much more!', 'inspiro'),
						'pro_text' => esc_html__('👉 Unlock all customizations', 'inspiro'),
						'pro_url' => 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=customizer&utm_campaign=colorsbutton',
						'section' => 'colors',
						'priority' => 40,
					),
				),
			),
		);
	}
}
