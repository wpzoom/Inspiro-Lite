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
class Inspiro_Homepage_Media_Media_Config {
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
			'header_image',
			array(
				'title'          => esc_html__( 'Media', 'inspiro' ),
				'theme_supports' => 'custom-header',
				'priority'       => 60,
				'panel'          => 'homepage_media_panel',
			)
		);

		$wp_customize->add_control(
			'external_header_video',
			array(
				'theme_supports'  => array( 'custom-header', 'video' ),
				'type'            => 'url',
				'label'           => esc_html__( 'External Header Video', 'inspiro' ),
				'description'     => esc_html__( 'Enter a YouTube or Vimeo URL:', 'inspiro' ),
				'section'         => 'header_image',
				'priority'        => 5,
				'active_callback' => 'is_header_video_active',
			)
		);
	}
}

new Inspiro_Homepage_Media_Media_Config();
