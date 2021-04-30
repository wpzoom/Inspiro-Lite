<?php
/**
 * Inspiro Lite: Customizer Control Base
 *
 * @link https://github.com/brainstormforce/astra/
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Base Class for Registering Customizer Controls.
 *
 * @since x.x.x
 */
if ( ! class_exists( 'Inspiro_Customizer_Control_Base' ) ) {

	/**
	 * Customizer Sanitizes Initial setup
	 */
	class Inspiro_Customizer_Control_Base {

		/**
		 * Registered Controls.
		 *
		 * @since x.x.x
		 * @var Array
		 */
		private static $controls;

		/**
		 *  Constructor
		 */
		public function __construct() {
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		}

		/**
		 * Enqueue Admin Scripts
		 *
		 * @since x.x.x
		 */
		public function enqueue_scripts() {
			wp_enqueue_style(
				'inspiro-custom-control-style',
				inspiro_get_assets_uri( 'custom-controls', 'css', 'inc/customizer/custom-controls/assets/' ),
				null,
				INSPIRO_THEME_VERSION
			);

			wp_enqueue_style(
				'select-woo',
				INSPIRO_THEME_URI . 'inc/customizer/custom-controls/typography/selectWoo.css',
				null,
				INSPIRO_THEME_VERSION
			);

			// Enqueue Customizer script.
			$custom_controls_deps = array(
				'jquery',
				'customize-base',
				'jquery-ui-tabs',
				'jquery-ui-sortable',
				'wp-i18n',
				'wp-components',
				'wp-element',
				'wp-media-utils',
				'wp-block-editor',
			);

			wp_enqueue_script(
				'inspiro-custom-control-script',
				inspiro_get_assets_uri( 'custom-controls', 'js', 'inc/customizer/custom-controls/assets/' ),
				$custom_controls_deps,
				INSPIRO_THEME_VERSION,
				true
			);
		}

		/**
		 * Add Control to self::$controls and Register control to WordPress Customizer.
		 *
		 * @param String $name Slug for the control.
		 * @param Array  $atts Control Attributes.
		 * @return void
		 */
		public static function add_control( $name, $atts ) {
			global $wp_customize;
			self::$controls[ $name ] = $atts;

			if ( isset( $atts['callback'] ) ) {
				/**
				 * Register controls
				 */
				$wp_customize->register_control_type( $atts['callback'] );
			}
		}

		/**
		 * Returns control instance
		 *
		 * @param  string $control_type control type.
		 * @since x.x.x
		 * @return string
		 */
		public static function get_control_instance( $control_type ) {
			$control_class = self::get_control( $control_type );

			if ( isset( $control_class['callback'] ) ) {
				return class_exists( $control_class['callback'] ) ? $control_class['callback'] : false;
			}

			return false;
		}

		/**
		 * Returns control and its attributes
		 *
		 * @param  string $control_type control type.
		 * @since x.x.x
		 * @return array
		 */
		public static function get_control( $control_type ) {
			if ( isset( self::$controls[ $control_type ] ) ) {
				return self::$controls[ $control_type ];
			}

			return array();
		}

		/**
		 * Returns Santize callback for control
		 *
		 * @param  string $control control.
		 * @since x.x.x
		 * @return string
		 */
		public static function get_sanitize_call( $control ) {
			if ( isset( self::$controls[ $control ]['sanitize_callback'] ) ) {
				return self::$controls[ $control ]['sanitize_callback'];
			}

			return false;
		}
	}
}

new Inspiro_Customizer_Control_Base();
