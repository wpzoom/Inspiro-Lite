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
class Inspiro_Typo_Body_Config {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

	/**
	 * Configurations
	 *
	 * @since x.x.x Store configurations to class method.
	 * @return array
	 */
	public static function config() {
		return array(
			'section' => array(
				'id'   => 'inspiro_typography_section_body',
				'args' => array(
					'title' => __( 'Body', 'inspiro' ),
					'panel' => 'inspiro_typography_panel',
				),
			),
			'setting' => array(
				array(
					'id'   => 'body-font-family',
					'args' => array(
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_text_field',
						'default'           => "'Inter', sans-serif",
					),
				),
				array(
					'id'   => 'body-font-variant',
					'args' => array(
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_font_variant',
						'default'           => '400',
					),
				),
				array(
					'id'   => 'body-font-size',
					'args' => array(
						'default'           => 16,
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_integer',
					),
				),
				array(
					'id'   => 'body-font-weight',
					'args' => array(
						'default'           => '400',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_font_weight',
					),
				),
				array(
					'id'   => 'body-text-transform',
					'args' => array(
						'default'           => '',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_choices',
					),
				),
				array(
					'id'   => 'body-line-height',
					'args' => array(
						'default'           => 1.8,
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_float',
					),
				),
			),
			'control' => array(
				array(
					'id'   => 'body-font-family',
					'args' => array(
						'label'   => __( 'Font Family', 'inspiro' ),
						'section' => 'inspiro_typography_section_body',
						'connect' => 'body-font-weight',
						'variant' => 'body-font-variant',
					),
				),
				array(
					'id'   => 'body-font-variant',
					'args' => array(
						'label'       => __( 'Variants', 'inspiro' ),
						'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
						'section'     => 'inspiro_typography_section_body',
						'connect'     => 'body-font-family',
					),
				),
				array(
					'id'   => 'body-font-size',
					'args' => array(
						'label'       => __( 'Font Size (px)', 'inspiro' ),
						'section'     => 'inspiro_typography_section_body',
						'input_attrs' => array(
							'min'  => 12,
							'max'  => 26,
							'step' => 1,
						),
					),
				),
				array(
					'id'   => 'body-font-weight',
					'args' => array(
						'label'   => __( 'Font Weight', 'inspiro' ),
						'section' => 'inspiro_typography_section_body',
						'type'    => 'select',
						'choices' => '',
					),
				),
				array(
					'id'   => 'body-text-transform',
					'args' => array(
						'label'   => __( 'Text Transform', 'inspiro' ),
						'section' => 'inspiro_typography_section_body',
						'type'    => 'select',
						'choices' => array(
							''           => _x( 'Inherit', 'text transform', 'inspiro' ),
							'none'       => _x( 'None', 'text transform', 'inspiro' ),
							'capitalize' => __( 'Capitalize', 'inspiro' ),
							'uppercase'  => __( 'Uppercase', 'inspiro' ),
							'lowercase'  => __( 'Lowercase', 'inspiro' ),
						),
					),
				),
				array(
					'id'   => 'body-line-height',
					'args' => array(
						'label'       => __( 'Line Height', 'inspiro' ),
						'section'     => 'inspiro_typography_section_body',
						'input_attrs' => array(
							'min'  => 1,
							'max'  => 2,
							'step' => 0.1,
						),
					),
				),
			),
		);
	}

	/**
	 * Register configurations
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @return void
	 */
	public function register_configuration( $wp_customize ) {
		$configs = self::config();

		$wp_customize->add_section(
			$configs['section']['id'],
			$configs['section']['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][0]['id'],
			$configs['setting'][0]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				$configs['control'][0]['id'],
				$configs['control'][0]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][1]['id'],
			$configs['setting'][1]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				$configs['control'][1]['id'],
				$configs['control'][1]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][2]['id'],
			$configs['setting'][2]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				$configs['control'][2]['id'],
				$configs['control'][2]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][3]['id'],
			$configs['setting'][3]['args']
		);

		$configs['control'][3]['args']['choices'] = Inspiro_Font_Family_Manager::get_font_family_weight( 'body-font-family', $wp_customize );

		$wp_customize->add_control(
			$configs['control'][3]['id'],
			$configs['control'][3]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][4]['id'],
			$configs['setting'][4]['args']
		);

		$wp_customize->add_control(
			$configs['control'][4]['id'],
			$configs['control'][4]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][5]['id'],
			$configs['setting'][5]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				$configs['control'][5]['id'],
				$configs['control'][5]['args']
			)
		);
	}
}

new Inspiro_Typo_Body_Config();
