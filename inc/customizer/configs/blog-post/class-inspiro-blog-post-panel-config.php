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
class Inspiro_Blog_Post_Panel_Config {
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
			'blog_post_options_panel',
			array(
				'priority'        => 51,
				'capability'      => 'edit_theme_options',
				'title'           => esc_html__( 'Blog Post Options', 'inspiro' ),
				'active_callback' => 'inspiro_is_view_is_blog',
			)
		);
	}
}

new Inspiro_Blog_Post_Panel_Config();
