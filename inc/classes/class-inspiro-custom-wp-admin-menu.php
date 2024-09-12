<?php
/**
 * Theme admin notices
 *
 * @package    Inspiro
 * @subpackage Inspiro_Lite
 * @since      Inspiro 1.9.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main PHP class for wp-admin options page
 */
if ( ! class_exists( 'Inspiro_Custom_Wp_Admin_Menu' ) ) {
	class Inspiro_Custom_Wp_Admin_Menu {
		public function __construct() {
			add_action( 'admin_menu', array( $this, 'register_admin_pages' ) );
		}

		public function admin() {
			require_once INSPIRO_THEME_DIR . 'inc/admin/pages/admin.php';
		}

		/**
		 * Register custom menu for wp-admin.
		 *
		 * @return void
		 */
		public function register_admin_pages() {
			add_menu_page(
				__( 'Page Title', 'wpzoom' ), // page title
				__( 'Inspiro', 'inspiro' ),  // menu title
				'manage_options',
				'inspiro_options',
				array(
					$this,
					'admin'
				),
				'none', 60 );

			add_submenu_page(
				'wpzoom_options',
				__( 'Inspiro', 'inspiro' ),
				__( 'Theme Options', 'wpzoom' ),
				'manage_options',
				'inspiro_options', array(
				$this,
				'admin'
			) );
		}
	}

	new Inspiro_Custom_Wp_Admin_Menu();
}
