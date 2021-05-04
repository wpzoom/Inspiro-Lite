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
class Inspiro_Post_Options_Config {
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
			'blog_post_options',
			array(
				'title'      => esc_html__( 'Post Options', 'inspiro' ),
				'capability' => 'edit_theme_options',
				'panel'      => 'blog_post_options_panel',
			)
		);

		$wp_customize->add_setting(
			'display_content',
			array(
				'default'           => 'excerpt',
				'sanitize_callback' => 'inspiro_sanitize_display_content',
				'transport'         => 'refresh',
			)
		);

		$wp_customize->add_control(
			'display_content',
			array(
				'label'   => esc_html__( 'Content', 'inspiro' ),
				'section' => 'blog_post_options',
				'type'    => 'radio',
				'choices' => array(
					'excerpt'      => esc_html__( 'Excerpt', 'inspiro' ),
					'full-content' => esc_html__( 'Full Content', 'inspiro' ),
					'none'         => esc_html__( 'None', 'inspiro' ),
				),
			)
		);
	}
}

new Inspiro_Post_Options_Config();
