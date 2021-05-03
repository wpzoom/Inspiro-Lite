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
class Inspiro_Typo_Hero_Header_Desc_Config {
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
				'inspiro_typography_section_title_header_description',
				array(
					'label'    => __( 'Header Description', 'inspiro' ),
					'section'  => 'inspiro_typography_section_hero_header',
					'settings' => array(),
				)
			)
		);

		$wp_customize->add_setting(
			'slider-text-font-family',
			array(
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => "'Inter', sans-serif",
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				'slider-text-font-family',
				array(
					'label'   => __( 'Font Family', 'inspiro' ),
					'section' => 'inspiro_typography_section_hero_header',
					'connect' => 'slider-text-font-weight',
					'variant' => 'slider-text-font-variant',
				)
			)
		);

		$wp_customize->add_setting(
			'slider-text-font-variant',
			array(
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_font_variant',
				'default'           => '',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				'slider-text-font-variant',
				array(
					'label'       => __( 'Variants', 'inspiro' ),
					'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
					'section'     => 'inspiro_typography_section_hero_header',
					'connect'     => 'slider-text-font-family',
				)
			)
		);

		$wp_customize->add_setting(
			'slider-text-font-size',
			array(
				'default'           => 20,
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_integer',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'slider-text-font-size',
				array(
					'label'       => __( 'Font Size (px)', 'inspiro' ),
					'section'     => 'inspiro_typography_section_hero_header',
					'input_attrs' => array(
						'min'  => 16,
						'max'  => 42,
						'step' => 1,
					),
				)
			)
		);

		$wp_customize->add_setting(
			'slider-text-font-weight',
			array(
				'default'           => 'inherit',
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'slider-text-font-weight',
			array(
				'label'   => __( 'Font Weight', 'inspiro' ),
				'section' => 'inspiro_typography_section_hero_header',
				'type'    => 'select',
				'choices' => Inspiro_Font_Family_Manager::get_font_family_weight( 'slider-text-font-family', $wp_customize ),
			)
		);

		$wp_customize->add_setting(
			'slider-text-text-transform',
			array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_choices',
			)
		);

		$wp_customize->add_control(
			'slider-text-text-transform',
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
			'slider-text-line-height',
			array(
				'default'           => 1.8,
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_float',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'slider-text-line-height',
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

new Inspiro_Typo_Hero_Header_Desc_Config();
