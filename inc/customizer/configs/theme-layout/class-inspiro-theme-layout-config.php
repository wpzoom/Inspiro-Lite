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
class Inspiro_Theme_Layout_Config {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'inspiro/customize_register', array( $this, 'register_configuration' ) );
	}

	/**
	 * Configurations
	 *
	 * @since 1.4.0 Store configurations to class method.
	 * @return array
	 */
	public static function config() {
		return array(
			'section' => array(
				'id'   => 'theme_layout',
				'args' => array(
					'title'       => esc_html__( 'Theme Layout', 'inspiro' ),
					'description' => sprintf( __( 'If you want to display "Sidebar on the right", please make sure you have added some widgets to %s', 'inspiro' ), '<a href="javascript:wp.customize.panel( \'widgets\' ).focus();" title="Open Widgets Panel">' . __( 'Blog Sidebar', 'inspiro' ) . '</a>' ), // phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
					'priority'    => 50,
					'capability'  => 'edit_theme_options',
				),
			),
			'setting' => array(
				array(
					'id'   => 'layout_blog_page',
					'args' => array(
						'default'           => 'full',
						'sanitize_callback' => 'inspiro_sanitize_page_layout',
						'transport'         => 'refresh',
					),
				),
				array(
					'id'   => 'layout_single_post',
					'args' => array(
						'default'           => 'full',
						'sanitize_callback' => 'inspiro_sanitize_page_layout',
						'transport'         => 'refresh',
					),
				),
			),
			'control' => array(
				array(
					'id'   => 'layout_blog_page',
					'args' => array(
						'label'           => esc_html__( 'Blog Layout', 'inspiro' ),
						'section'         => 'theme_layout',
						'type'            => 'radio',
						'choices'         => array(
							'full'       => esc_html__( 'Full width', 'inspiro' ),
							'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
						),
						'active_callback' => 'inspiro_is_view_with_layout_option',
					),
				),
				array(
					'id'   => 'layout_single_post',
					'args' => array(
						'label'           => esc_html__( 'Single Post Layout', 'inspiro' ),
						'section'         => 'theme_layout',
						'type'            => 'radio',
						'choices'         => array(
							'full'       => esc_html__( 'Full width', 'inspiro' ),
							'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
						),
						'active_callback' => 'inspiro_is_view_with_layout_option',
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

		$wp_customize->add_setting(
			$configs['setting'][1]['id'],
			$configs['setting'][1]['args']
		);

		$wp_customize->add_control(
			$configs['control'][0]['id'],
			$configs['control'][0]['args']
		);

		$wp_customize->add_control(
			$configs['control'][1]['id'],
			$configs['control'][1]['args']
		);
	}
}

new Inspiro_Theme_Layout_Config();
