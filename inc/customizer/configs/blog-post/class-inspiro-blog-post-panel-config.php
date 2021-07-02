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
class Inspiro_Blog_Post_Panel_Config {
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
			'panel' => array(
				'id'   => 'blog_post_options_panel',
				'args' => array(
					'priority'        => 51,
					'capability'      => 'edit_theme_options',
					'title'           => esc_html__( 'Blog Post Options', 'inspiro' ),
					'active_callback' => 'inspiro_is_view_is_blog',
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

		$wp_customize->add_panel(
			$configs['panel']['id'],
			$configs['panel']['args']
		);
	}
}

new Inspiro_Blog_Post_Panel_Config();
