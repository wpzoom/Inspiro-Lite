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
class Inspiro_Typo_Hero_Header_Button_Config {
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
		$wp_customize->add_control(
			new Inspiro_Customize_Title_Control(
				$wp_customize,
				'inspiro_typography_section_title_header_button',
				array(
					'label'    => __( 'Header Button', 'inspiro' ),
					'section'  => 'inspiro_typography_section_hero_header',
					'settings' => array(),
				)
			)
		);

		$wp_customize->add_setting(
			'slider-button-font-family',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => "'Inter', sans-serif",
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				'slider-button-font-family',
				array(
					'label'   => __( 'Font Family', 'inspiro' ),
					'section' => 'inspiro_typography_section_hero_header',
					'connect' => 'slider-button-font-weight',
					'variant' => 'slider-button-font-variant',
				)
			)
		);

		$wp_customize->add_setting(
			'slider-button-font-variant',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_variant',
				'default'           => '',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				'slider-button-font-variant',
				array(
					'label'       => __( 'Variants', 'inspiro' ),
					'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
					'section'     => 'inspiro_typography_section_hero_header',
					'connect'     => 'slider-button-font-family',
				)
			)
		);

		$wp_customize->add_setting(
			'slider-button-font-size',
			array(
				'default'           => 16,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_integer',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'slider-button-font-size',
				array(
					'label'       => __( 'Font Size (px)', 'inspiro' ),
					'section'     => 'inspiro_typography_section_hero_header',
					'input_attrs' => array(
						'min'  => 14,
						'max'  => 18,
						'step' => 1,
					),
				)
			)
		);

		$wp_customize->add_setting(
			'slider-button-font-weight',
			array(
				'default'           => 'inherit',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'slider-button-font-weight',
			array(
				'label'   => __( 'Font Weight', 'inspiro' ),
				'section' => 'inspiro_typography_section_hero_header',
				'type'    => 'select',
				'choices' => Inspiro_Font_Family_Manager::get_font_family_weight( 'slider-button-font-family', $wp_customize ),
			)
		);

		$wp_customize->add_setting(
			'slider-button-text-transform',
			array(
				'default'           => '',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_choices',
			)
		);

		$wp_customize->add_control(
			'slider-button-text-transform',
			array(
				'label'   => __( 'Text Transform', 'inspiro' ),
				'section' => 'inspiro_typography_section_hero_header',
				'type'    => 'select',
				'choices' => array(
					''           => _x( 'Inherit', 'text transform', 'inspiro' ),
					'none'       => _x( 'None', 'text transform', 'inspiro' ),
					'capitalize' => __( 'Capitalize', 'inspiro' ),
					'uppercase'  => __( 'Uppercase', 'inspiro' ),
					'lowercase'  => __( 'Lowercase', 'inspiro' ),
				),
			)
		);

		$wp_customize->add_setting(
			'slider-button-line-height',
			array(
				'default'           => 1.8,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_float',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'slider-button-line-height',
				array(
					'label'       => __( 'Line Height', 'inspiro' ),
					'section'     => 'inspiro_typography_section_hero_header',
					'input_attrs' => array(
						'min'  => 1,
						'max'  => 2,
						'step' => 0.1,
					),
				)
			)
		);
	}
}

new Inspiro_Typo_Hero_Header_Button_Config();
