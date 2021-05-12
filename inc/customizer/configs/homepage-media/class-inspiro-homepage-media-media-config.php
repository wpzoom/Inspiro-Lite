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
class Inspiro_Homepage_Media_Media_Config {
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
				'id'   => 'header_image',
				'args' => array(
					'title'          => esc_html__( 'Media', 'inspiro' ),
					'theme_supports' => 'custom-header',
					'priority'       => 60,
					'panel'          => 'homepage_media_panel',
				),
			),
			'control' => array(
				'id'   => 'external_header_video',
				'args' => array(
					'theme_supports'  => array( 'custom-header', 'video' ),
					'type'            => 'url',
					'label'           => esc_html__( 'External Header Video', 'inspiro' ),
					'description'     => esc_html__( 'Enter a YouTube or Vimeo URL:', 'inspiro' ),
					'section'         => 'header_image',
					'priority'        => 5,
					'active_callback' => 'is_header_video_active',
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

		$wp_customize->add_control(
			$configs['control']['id'],
			$configs['control']['args']
		);
	}
}

new Inspiro_Homepage_Media_Media_Config();
