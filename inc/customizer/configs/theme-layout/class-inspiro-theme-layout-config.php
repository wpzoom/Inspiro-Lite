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
	 * Register configurations
	 *
	 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
	 * @return void
	 */
	public function register_configuration( $wp_customize ) {
		$wp_customize->add_section(
			'theme_layout',
			array(
				'title'       => esc_html__( 'Theme Layout', 'inspiro' ),
				'description' => sprintf( __( 'If you want to display "Sidebar on the right", please make sure you have added some widgets to %s', 'inspiro' ), '<a href="javascript:wp.customize.panel( \'widgets\' ).focus();" title="Open Widgets Panel">' . __( 'Blog Sidebar', 'inspiro' ) . '</a>' ), // phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
				'priority'    => 50,
				'capability'  => 'edit_theme_options',
			)
		);

		$wp_customize->add_setting(
			'layout_blog_page',
			array(
				'default'           => 'full',
				'sanitize_callback' => 'inspiro_sanitize_page_layout',
				'transport'         => 'refresh',
			)
		);

		$wp_customize->add_setting(
			'layout_single_post',
			array(
				'default'           => 'full',
				'sanitize_callback' => 'inspiro_sanitize_page_layout',
				'transport'         => 'refresh',
			)
		);

		$wp_customize->add_control(
			'layout_blog_page',
			array(
				'label'           => esc_html__( 'Blog Layout', 'inspiro' ),
				'section'         => 'theme_layout',
				'type'            => 'radio',
				'choices'         => array(
					'full'       => esc_html__( 'Full width', 'inspiro' ),
					'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
				),
				'active_callback' => 'inspiro_is_view_with_layout_option',
			)
		);

		$wp_customize->add_control(
			'layout_single_post',
			array(
				'label'           => esc_html__( 'Single Post Layout', 'inspiro' ),
				'section'         => 'theme_layout',
				'type'            => 'radio',
				'choices'         => array(
					'full'       => esc_html__( 'Full width', 'inspiro' ),
					'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
				),
				'active_callback' => 'inspiro_is_view_with_layout_option',
			)
		);
	}
}

new Inspiro_Theme_Layout_Config();
