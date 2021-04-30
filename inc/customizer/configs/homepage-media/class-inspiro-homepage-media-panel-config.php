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
class Inspiro_Homepage_Media_Panel_Config {
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
		$wp_customize->add_panel(
			'homepage_media_panel',
			array(
				'capability'      => 'edit_theme_options',
				'title'           => esc_html__( 'Homepage Media', 'inspiro' ),
				'active_callback' => 'is_header_video_active',
				'priority'        => 40,
			)
		);
	}
}

new Inspiro_Homepage_Media_Panel_Config();
