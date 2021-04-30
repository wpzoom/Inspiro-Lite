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
class Inspiro_Typo_Mobile_Menu_Config {
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
				'inspiro_typography_section_title_mobile_menu',
				array(
					'label'    => __( 'Mobile Menu', 'inspiro' ),
					'section'  => 'inspiro_typography_section_menu',
					'settings' => array(),
				)
			)
		);

		$wp_customize->add_setting(
			'mobilemenu-font-family',
			array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_fonts',
				'default'           => "'Inter', sans-serif",
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				'mobilemenu-font-family',
				array(
					'label'   => __( 'Font Family', 'inspiro' ),
					'section' => 'inspiro_typography_section_menu',
					'connect' => 'mobilemenu-font-weight',
				)
			)
		);

		$wp_customize->add_setting(
			'mobilemenu-font-size',
			array(
				'default'           => 16,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_integer',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'mobilemenu-font-size',
				array(
					'label'       => __( 'Font Size (px)', 'inspiro' ),
					'section'     => 'inspiro_typography_section_menu',
					'input_attrs' => array(
						'min'  => 14,
						'max'  => 18,
						'step' => 1,
					),
				)
			)
		);

		$wp_customize->add_setting(
			'mobilemenu-font-weight',
			array(
				'default'           => '',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'mobilemenu-font-weight',
			array(
				'label'   => __( 'Font Weight', 'inspiro' ),
				'section' => 'inspiro_typography_section_menu',
				'type'    => 'select',
				'choices' => array(),
			)
		);

		$wp_customize->add_setting(
			'mobilemenu-text-transform',
			array(
				'default'           => 'uppercase',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_font_weight',
			)
		);

		$wp_customize->add_control(
			'mobilemenu-text-transform',
			array(
				'label'   => __( 'Text Transform', 'inspiro' ),
				'section' => 'inspiro_typography_section_menu',
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
			'mobilemenu-line-height',
			array(
				'default'           => 1.4,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'inspiro_sanitize_float',
			)
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				'mobilemenu-line-height',
				array(
					'label'       => __( 'Line Height', 'inspiro' ),
					'section'     => 'inspiro_typography_section_menu',
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

new Inspiro_Typo_Mobile_Menu_Config();
