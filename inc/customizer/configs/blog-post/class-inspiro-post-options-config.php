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
	 * Configurations
	 *
	 * @since 1.4.0 Store configurations to class method.
	 * @return array
	 */
	public static function config() {
		return array(
			'section' => array(
				'id'   => 'blog_post_options',
				'args' => array(
					'title'      => esc_html__( 'Post Options', 'inspiro' ),
					'capability' => 'edit_theme_options',
					'panel'      => 'blog_post_options_panel',
				),
			),
			'setting' => array(
				'id'   => 'display_content',
				'args' => array(
					'default'           => 'excerpt',
					'sanitize_callback' => 'inspiro_sanitize_display_content',
					'transport'         => 'refresh',
				),
			),
			'control' => array(
				'id'   => 'display_content',
				'args' => array(
					'label'   => esc_html__( 'Content', 'inspiro' ),
					'section' => 'blog_post_options',
					'type'    => 'radio',
					'choices' => array(
						'excerpt'      => esc_html__( 'Excerpt', 'inspiro' ),
						'full-content' => esc_html__( 'Full Content', 'inspiro' ),
						'none'         => esc_html__( 'None', 'inspiro' ),
					),
				),
			),
		);
	}
}
