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
class Inspiro_Typo_Headings_Config {
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
			'inspiro_typography_section_headings',
			array(
				'title' => __( 'Headings', 'inspiro' ),
				'panel' => 'inspiro_typography_panel',
			)
		);

		$wp_customize->add_setting(
			'headings-font-family',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'inherit',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				'headings-font-family',
				array(
					'label'   => __( 'Font Family', 'inspiro' ),
					'section' => 'inspiro_typography_section_headings',
					'connect' => 'headings-font-weight',
					'variant' => 'headings-font-variant',
				)
			)
		);

		$wp_customize->add_setting(
			'headings-font-variant',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_variant',
				'default'           => '700',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				'headings-font-variant',
				array(
					'label'       => __( 'Variants', 'inspiro' ),
					'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
					'section'     => 'inspiro_typography_section_headings',
					'connect'     => 'headings-font-family',
				)
			)
		);

		$wp_customize->add_setting(
			'headings-font-weight',
			array(
				'default'           => '700',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'headings-font-weight',
			array(
				'label'   => __( 'Font Weight', 'inspiro' ),
				'section' => 'inspiro_typography_section_headings',
				'type'    => 'select',
				'choices' => Inspiro_Font_Family_Manager::get_font_family_weight( 'headings-font-family', $wp_customize ),
			)
		);

		$wp_customize->add_setting(
			'headings-text-transform',
			array(
				'default'           => 'inherit',
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_choices',
			)
		);

		$wp_customize->add_control(
			'headings-text-transform',
			array(
				'label'   => __( 'Text Transform', 'inspiro' ),
				'section' => 'inspiro_typography_section_headings',
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
			'headings-line-height',
			array(
				'default'           => 1.4,
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_float',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'headings-line-height',
				array(
					'label'       => __( 'Line Height', 'inspiro' ),
					'section'     => 'inspiro_typography_section_headings',
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

new Inspiro_Typo_Headings_Config();
