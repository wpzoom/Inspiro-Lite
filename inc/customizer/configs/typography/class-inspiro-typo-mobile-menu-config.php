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
class Inspiro_Typo_Mobile_Menu_Config {
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
			'setting' => array(
				array(
					'id'   => 'mobilemenu-font-family',
					'args' => array(
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_text_field',
						'default'           => "'Montserrat', sans-serif",
					),
				),
				array(
					'id'   => 'mobilemenu-font-variant',
					'args' => array(
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_font_variant',
						'default'           => '600',
					),
				),
				array(
					'id'   => 'mobilemenu-font-size',
					'args' => array(
						'default'           => 16,
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_integer',
					),
				),
				array(
					'id'   => 'mobilemenu-font-weight',
					'args' => array(
						'default'           => '600',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_font_weight',
					),
				),
				array(
					'id'   => 'mobilemenu-text-transform',
					'args' => array(
						'default'           => 'uppercase',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_choices',
					),
				),
				array(
					'id'   => 'mobilemenu-line-height',
					'args' => array(
						'default'           => 1.8,
						'transport'         => 'postMessage',
						'sanitize_callback' => 'inspiro_sanitize_float',
					),
				),
			),
			'control' => array(
				array(
					'id'   => 'inspiro_typography_section_title_mobile_menu',
					'args' => array(
						'label'    => __( 'Mobile Menu', 'inspiro' ),
						'section'  => 'inspiro_typography_section_menu',
						'settings' => array(),
					),
				),
				array(
					'id'   => 'mobilemenu-font-family',
					'args' => array(
						'label'   => __( 'Font Family', 'inspiro' ),
						'section' => 'inspiro_typography_section_menu',
						'connect' => 'mobilemenu-font-weight',
						'variant' => 'mobilemenu-font-variant',
					),
				),
				array(
					'id'   => 'mobilemenu-font-variant',
					'args' => array(
						'label'       => __( 'Variants', 'inspiro' ),
						'description' => __( 'Only selected Font Variants will be loaded from Google Fonts.', 'inspiro' ),
						'section'     => 'inspiro_typography_section_menu',
						'connect'     => 'mobilemenu-font-family',
					),
				),
				array(
					'id'   => 'mobilemenu-font-size',
					'args' => array(
						'label'       => __( 'Font Size (px)', 'inspiro' ),
						'section'     => 'inspiro_typography_section_menu',
						'input_attrs' => array(
							'min'  => 12,
							'max'  => 20,
							'step' => 1,
						),
					),
				),
				array(
					'id'   => 'mobilemenu-font-weight',
					'args' => array(
						'label'   => __( 'Font Weight', 'inspiro' ),
						'section' => 'inspiro_typography_section_menu',
						'type'    => 'select',
						'choices' => '',
					),
				),
				array(
					'id'   => 'mobilemenu-text-transform',
					'args' => array(
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
					),
				),
				array(
					'id'   => 'mobilemenu-line-height',
					'args' => array(
						'label'       => __( 'Line Height', 'inspiro' ),
						'section'     => 'inspiro_typography_section_menu',
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

		$wp_customize->add_control(
			new Inspiro_Customize_Title_Control(
				$wp_customize,
				$configs['control'][0]['id'],
				$configs['control'][0]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][0]['id'],
			$configs['setting'][0]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Typography_Control(
				$wp_customize,
				$configs['control'][1]['id'],
				$configs['control'][1]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][1]['id'],
			$configs['setting'][1]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Font_Variant_Control(
				$wp_customize,
				$configs['control'][2]['id'],
				$configs['control'][2]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][2]['id'],
			$configs['setting'][2]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				$configs['control'][3]['id'],
				$configs['control'][3]['args']
			)
		);

		$wp_customize->add_setting(
			$configs['setting'][3]['id'],
			$configs['setting'][3]['args']
		);

		$configs['control'][4]['args']['choices'] = Inspiro_Font_Family_Manager::get_font_family_weight( 'mobilemenu-font-family', $wp_customize );

		$wp_customize->add_control(
			$configs['control'][4]['id'],
			$configs['control'][4]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][4]['id'],
			$configs['setting'][4]['args']
		);

		$wp_customize->add_control(
			$configs['control'][5]['id'],
			$configs['control'][5]['args']
		);

		$wp_customize->add_setting(
			$configs['setting'][5]['id'],
			$configs['setting'][5]['args']
		);

		$wp_customize->add_control(
			new Inspiro_Customize_Range_Control(
				$wp_customize,
				$configs['control'][6]['id'],
				$configs['control'][6]['args']
			)
		);
	}
}

new Inspiro_Typo_Mobile_Menu_Config();
