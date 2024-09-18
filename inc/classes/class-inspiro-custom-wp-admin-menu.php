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
 *  - Dashboard
 *  - Customize
 *  - Import Demo
 *  - Upgrade
 */
if ( ! class_exists( 'Inspiro_WP_Admin_Menu' ) ) {
	class Inspiro_WP_Admin_Menu {

		// Hold the class instance.
		private static $instance = null;

		/**
		 * Private constructor to prevent multiple instances.
		 */
		private function __construct() {
			add_action( 'admin_menu', array( $this, 'register_menus' ) );
		}

		/**
		 * Get the single instance of the class.
		 */
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Prevent object cloning.
		 */
		private function __clone() {}

		/**
		 * Admin page callback.
		 */
		public function admin() {
			require_once INSPIRO_THEME_DIR . 'inc/admin/pages/admin.php';
		}

		/**
		 * Call demo import plugin page.
		 */
		public function call_demo_import_plugin_page() {
			if ( class_exists( 'OCDI_Plugin' ) ) {
				$one_click_demo_import = OCDI\OneClickDemoImport::get_instance();
				$one_click_demo_import->display_plugin_page();
			}
		}

		/**
		 * Register custom menu for wp-admin.
		 *
		 * @return void
		 */
		public function register_menus() {
			$icon = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTUwIiBoZWlnaHQ9IjU1MCIgdmlld0JveD0iMCAwIDU1MCA1NTAiI
				GZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpc
				C1ydWxlPSJldmVub2RkIiBkPSJNMjc1IDU1MEM0MjYuODc4IDU1MCA1NTAgNDI2Ljg3OCA1NTAgMjc1QzU1MCAxMjMuMTIyIDQyNi44N
				zggMCAyNzUgMEMxMjMuMTIyIDAgMCAxMjMuMTIyIDAgMjc1QzAgNDI2Ljg3OCAxMjMuMTIyIDU1MCAyNzUgNTUwWk0yMzIgMTIzLjMzM0
				MyMzIgOTkuNDAwOSAyNTEuNDAxIDgwIDI3NS4zMzMgODBIMzE0LjMzM0MzMTYuNzI3IDgwIDMxOC42NjcgODEuOTM5OSAzMTguNjY3IDg
				0LjMzMzVWMTYxLjQ0M0MzMTguNjY3IDE2Mi44NzIgMzE3LjkwNCAxNjQuMTkyIDMxNi42NjcgMTY0LjkwN0wyMzggMjEwLjMyNUMyMzU
				uMzMzIDIxMS44NjUgMjMyIDIwOS45NCAyMzIgMjA2Ljg2MVYxMjMuMzMzWk0yMzQgMjg3LjY5TDMxMi42NjcgMjQyLjI3MkMzMTUuMzM
				zIDI0MC43MzIgMzE4LjY2NyAyNDIuNjU3IDMxOC42NjcgMjQ1LjczNlY0MjYuNjY3QzMxOC42NjcgNDUwLjU5OSAyOTkuMjY2IDQ3MCA
				yNzUuMzMzIDQ3MEgyMzYuMzMzQzIzMy45NCA0NzAgMjMyIDQ2OC4wNiAyMzIgNDY1LjY2N1YyOTEuMTU0QzIzMiAyODkuNzI1IDIzMi4
				3NjIgMjg4LjQwNCAyMzQgMjg3LjY5WiIgZmlsbD0iYmxhY2siLz4KPC9zdmc+';

			// Add the main menu page
			add_menu_page( // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_menu_page
				__( 'Inspiro Lite Theme Dashboard', 'inspiro' ),   // page title
				__( 'Inspiro', 'inspiro' ),                        // menu title
				'manage_options',                         // capability
				'inspiro',                               // menu slug
				array( $this, 'admin' ),                           // callback function
				$icon,                                             // icon (default: none)
				59                                         // position, before Appearance section
			);

			// Add Dashboard submenu. Same slug as parent to allow renaming the automatic submenu that is added.
			add_submenu_page( // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_submenu_page
				'inspiro',                              // parent slug
				__( 'Inspiro Lite Theme Dashboard', 'inspiro' ),   // page title
				__( 'Theme Dashboard', 'inspiro' ),                // menu title
				'manage_options',                         // capability
				'inspiro',                               // menu slug
				array( $this, 'admin' )                            // callback function
			);

			// Add the "Customize" submenu page
			add_submenu_page( // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_submenu_page
				'inspiro',          // parent slug
				__( 'Customize', 'inspiro' ),  // page title
				__( 'Customize', 'inspiro' ),  // menu title
				'manage_options',     // capability
				'customize.php',     // menu slug, link was included without a callback render func.
			);

			// Add the "Import Demo" submenu page
			add_submenu_page( // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_submenu_page
				'inspiro',            // parent slug
				__( 'Import Demo', 'inspiro' ),  // page title
				__( 'Import Demo', 'inspiro' ),  // menu title
				'manage_options',       // capability
				'demo-import-demo',    // menu slug,
				array( $this, 'call_demo_import_plugin_page' )  // callback function
			);

			// Add the "Upgrade" submenu page
			add_submenu_page( // phpcs:ignore WPThemeReview.PluginTerritory.NoAddAdminPages.add_menu_pages_add_submenu_page
				'inspiro',                   // parent slug
				__( 'Upgrade to Premium', 'inspiro' ),  // page title
				__( 'Upgrade to Premium', 'inspiro' ),  // menu title
				'manage_options',              // capability
				''                            // menu slug,
			);

			// The "Install Plugins" submenu page was added true class-tgm-plugin-activation.php add_admin_menu( array $args )
		}
	}

	// Instantiate the class as a Singleton.
	Inspiro_WP_Admin_Menu::get_instance();
}
