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
class Inspiro_Homepage_Media_Content_Config {
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
			'header_content',
			array(
				'title'          => esc_html__( 'Content', 'inspiro' ),
				'theme_supports' => 'custom-header',
				'priority'       => 70,
				'panel'          => 'homepage_media_panel',
			)
		);

		$wp_customize->add_setting(
			'header_site_title',
			array(
				'default'           => get_bloginfo( 'name' ),
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_setting(
			'header_site_description',
			array(
				'default'           => get_bloginfo( 'description' ),
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);

		$wp_customize->add_setting(
			'header_button_title',
			array(
				'theme_supports'    => 'custom-header',
				'default'           => '',
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_setting(
			'header_button_url',
			array(
				'theme_supports'    => 'custom-header',
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'inspiro_sanitize_header_button_url',
			)
		);

		$wp_customize->add_setting(
			'header_button_link_open',
			array(
				'capability'        => 'edit_theme_options',
				'default'           => true,
				'sanitize_callback' => 'inspiro_sanitize_checkbox',
			)
		);

		$wp_customize->add_control(
			'header_site_title',
			array(
				'theme_supports'  => array( 'custom-header' ),
				'type'            => 'text',
				'label'           => esc_html__( 'Header Title', 'inspiro' ),
				'description'     => esc_html__( 'Enter a site title which appears in the header on front-page', 'inspiro' ),
				'section'         => 'header_content',
				'priority'        => 1,
				'active_callback' => 'is_header_video_active',
			)
		);

		$wp_customize->add_control(
			'header_site_description',
			array(
				'theme_supports'  => array( 'custom-header' ),
				'type'            => 'textarea',
				'label'           => esc_html__( 'Header Description', 'inspiro' ),
				'description'     => esc_html__( 'Enter a site description which appears in the header on front-page', 'inspiro' ),
				'section'         => 'header_content',
				'priority'        => 1,
				'active_callback' => 'is_header_video_active',
			)
		);

		$wp_customize->add_control(
			'header_button_title',
			array(
				'theme_supports'  => 'custom-header',
				'type'            => 'text',
				'label'           => esc_html__( 'Header Button Title', 'inspiro' ),
				'description'     => esc_html__( 'Enter a title for Header Button', 'inspiro' ),
				'section'         => 'header_content',
				'active_callback' => 'is_header_video_active',
			)
		);

		$wp_customize->add_control(
			'header_button_url',
			array(
				'theme_supports'  => 'custom-header',
				'type'            => 'url',
				'label'           => esc_html__( 'Header Button URL', 'inspiro' ),
				'description'     => esc_html__( 'Enter a Button URL:', 'inspiro' ),
				'section'         => 'header_content',
				'active_callback' => 'is_header_video_active',
			)
		);

		$wp_customize->add_control(
			'header_button_link_open',
			array(
				'type'    => 'checkbox',
				'section' => 'header_content',
				'label'   => esc_html__( 'Open link on new tab', 'inspiro' ),
			)
		);
	}
}

new Inspiro_Homepage_Media_Content_Config();
