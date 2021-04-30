<?php
/**
 * Helper class for load google fonts to front-end
 *
 * @package Inspiro
 * @since Inspiro x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Inspiro_Fonts_Manager' ) ) {

	/**
	 * Fonts class manager
	 */
	class Inspiro_Fonts_Manager {

		/**
		 * Fonts to load
		 *
		 * @var array
		 */
		public static $fonts = array();

		/**
		 * Localize Fonts
		 */
		public static function js() {
			$system = wp_json_encode( Inspiro_Font_Family_Manager::get_system_fonts() );
			$google = wp_json_encode( Inspiro_Font_Family_Manager::get_google_fonts() );

			return 'var InspiroFontFamilies = { system: ' . $system . ', google: ' . $google . ' };';
		}

	}

}
