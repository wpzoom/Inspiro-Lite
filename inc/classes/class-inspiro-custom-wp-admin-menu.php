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
 *
 * Menu items:
 *  - About Inspiro
 *  - Customizer
 *  - Upgrade
 */
if ( ! class_exists( 'Inspiro_Custom_Wp_Admin_Menu' ) ) {
	class Inspiro_Custom_Wp_Admin_Menu {

		public function __construct() {
			add_action( 'admin_menu', array( $this, 'register_admin_pages' ) );
		}

		public function admin() {
			require_once INSPIRO_THEME_DIR . 'inc/admin/pages/admin.php';
		}

		public function about() {
			echo '<h1>About Inspiro</h1>';
		}

		public function upgrade() {
			echo '<h1>Upgrade Options</h1>';
		}

		/**
		 * Register custom menu for wp-admin.
		 *
		 * @return void
		 */
		public function register_admin_pages() {
			// Add the main menu page
			add_menu_page(
				__( 'Page Title', 'wpzoom' ),   // page title
				__( 'Inspiro', 'inspiro' ),     // menu title
				'manage_options',
				'inspiro_admin',      // menu slug, todo:check here if ok
				array( $this, 'admin' ),        // callback function
				'none',                 // icon (default: none)
				59                      // position
			);

			// Add the first submenu page
//			add_submenu_page(
//				'inspiro_admin',          // parent slug
//				__( 'Inspiro Options', 'inspiro' ),  // page title
//				__( 'Theme Options', 'wpzoom' ),     // menu title
//				'manage_options',           // capability
//				'inspiro_options',         // menu slug
//				array( $this, 'admin' )              // callback function
//			);

			// Add the "About Inspiro" submenu page
			add_submenu_page(
				'inspiro_admin',         // parent slug
				__( 'About Inspiro', 'inspiro' ),   // page title
				__( 'About', 'inspiro' ),           // menu title
				'manage_options',          // capability
				'inspiro_about',          // menu slug
				array( $this, 'about' )             // callback function
			);

			// Add the "Customizer" submenu page
			add_submenu_page(
				'inspiro_admin',         // parent slug
				__( 'Customizer', 'inspiro' ),      // page title
				__( 'Customizer', 'inspiro' ),      // menu title
				'manage_options',          // capability
				'customize.php',          // menu slug
			);

			// Add the "Upgrade" submenu page
			add_submenu_page(
				'inspiro_admin',         // parent slug
				__( 'Upgrade', 'inspiro' ),         // page title
				__( 'Upgrade', 'inspiro' ),         // menu title
				'manage_options',          // capability
				'inspiro_upgrade',        // menu slug
				array( $this, 'upgrade' )           // callback function
			);
		}
	}

	new Inspiro_Custom_Wp_Admin_Menu();
}
