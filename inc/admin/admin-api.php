<?php
/**
 * Theme Admin API
 *
 * @package    Inspiro
 * @since      Inspiro 1.9.5
 */

// Handle AJAX request for activating one-click demo plugin
add_action( 'wp_ajax_install_activate_one_click_demo_plugin', 'install_activate_one_click_demo_plugin' );
function install_activate_one_click_demo_plugin() {
	// Check for nonce security
	//	check_ajax_referer( 'install_activate_one_click_demo_plugin_nonce', 'nonce' );

	// Ensure the user has the capability to install plugins
	if ( current_user_can( 'install_plugins' ) ) {
		// Assuming the plugin slug is passed via POST
		$plugin_slug = isset( $_POST['plugin_slug'] ) ? sanitize_text_field( $_POST['plugin_slug'] ) : '';

		if ( ! empty( $plugin_slug ) && 'one-click-demo-import' === $plugin_slug ) {
			// Check if plugin is already installed
			$plugin_file = WP_PLUGIN_DIR . '/' . $plugin_slug . '/' . $plugin_slug . '.php';
			if ( file_exists( $plugin_file ) ) {
				// Plugin is installed, activate it
				$result = activate_plugin( $plugin_slug . '/' . $plugin_slug . '.php' );

				if ( is_wp_error( $result ) ) {
					// Activation failed
					wp_send_json_error( array( 'message' => $result->get_error_message() ) );
				} else {
					// Activation succeeded
					wp_send_json_success( array( 'message' => __( 'Plugin activated successfully.' ) ) );
				}
			} else {
				// Include necessary files for plugin installation
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
				require_once ABSPATH . 'wp-admin/includes/file.php';
				require_once ABSPATH . 'wp-admin/includes/misc.php';

				// Instantiate the Plugin_Upgrader class
				$upgrader = new Plugin_Upgrader();

				// Install the plugin
				$install_result = $upgrader->install( 'https://downloads.wordpress.org/plugin/' . $plugin_slug . '.zip' );

				if ( $install_result ) {
					// Activate the plugin
					$result = activate_plugin( $plugin_slug . '/' . $plugin_slug . '.php' );

					if ( is_wp_error( $result ) ) {
						// Activation failed
						wp_send_json_error( array( 'message' => $result->get_error_message() ) );
					} else {
						// Activation succeeded
						wp_send_json_success( array( 'message' => __( 'Plugin installed and activated successfully.' ) ) );
					}
				} else {
					// Installation failed
					wp_send_json_error( array( 'message' => __( 'Failed to install plugin.' ) ) );
				}
			}
		} else {
			wp_send_json_error( array( 'message' => __( 'Invalid plugin slug.' ) ) );
		}
	} else {
		wp_send_json_error( array( 'message' => __( 'You do not have permission to install plugins.' ) ) );
	}

	// End the AJAX request
	wp_die();
}
