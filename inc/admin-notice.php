<?php
/**
 * Admin notice after Theme activation
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Welcome Notice after Theme Activation
 */
if ( ! function_exists( 'inspiro_admin_notice' ) ) {
	function inspiro_admin_notice() {
		global $pagenow, $inspiro_version;

		$welcome_notice        = get_option( 'inspiro_notice_welcome' );
		$current_user_can      = current_user_can( 'edit_theme_options' );
		$should_display_notice = ( $current_user_can && 'index.php' === $pagenow && ! $welcome_notice ) || ( $current_user_can && 'themes.php' === $pagenow && isset( $_GET['activated'] ) && ! $welcome_notice );

		if ( $should_display_notice ) {
			wp_enqueue_style(
				'inspiro-admin-notice',
				inspiro_get_assets_uri( 'welcome-notice', 'css' ),
				array(),
				INSPIRO_THEME_VERSION
			);

			inspiro_welcome_notice();
		}
	}
}
add_action( 'admin_notices', 'inspiro_admin_notice' );


/*
 * Hide Welcome Notice in WordPress Dashboard
 */
if ( ! function_exists( 'inspiro_hide_notice' ) ) {
	function inspiro_hide_notice() {
		if ( isset( $_GET['inspiro-hide-notice'] ) && isset( $_GET['_inspiro_notice_nonce'] ) ) {
			if ( ! wp_verify_nonce( $_GET['_inspiro_notice_nonce'], 'inspiro_hide_notices_nonce' ) ) {
				wp_die( esc_html__( 'Action failed. Please refresh the page and retry.', 'inspiro' ) );
			}
			if ( ! current_user_can( 'edit_theme_options' ) ) {
				wp_die( esc_html__( 'You do not have the necessary permission to perform this action.', 'inspiro' ) );
			}
			$hide_notice = sanitize_text_field( $_GET['inspiro-hide-notice'] );
			update_option( 'inspiro_notice_' . $hide_notice, 1 );
		}
	}
}
add_action( 'wp_loaded', 'inspiro_hide_notice' );

/*
 * Content of Welcome Notice in WordPress Dashboard
 */

if ( ! function_exists( 'inspiro_welcome_notice' ) ) {
	function inspiro_welcome_notice() {
		?>
		<div class="notice notice-success wpz-welcome-notice">
			<a class="notice-dismiss wpz-welcome-notice-hide" href="<?php echo esc_url( wp_nonce_url( remove_query_arg( array( 'activated' ), add_query_arg( 'inspiro-hide-notice', 'welcome' ) ), 'inspiro_hide_notices_nonce', '_inspiro_notice_nonce' ) ); ?>">
				<span class="screen-reader-text">
					<?php echo esc_html__( 'Dismiss this notice.', 'inspiro' ); ?>
				</span>
			</a>
			<p><?php printf( esc_html__( 'Thank you for using %1$s! To get started please make sure you visit our %2$swelcome page%3$s.', 'inspiro' ), 'Inspiro', '<a href="' . esc_url( admin_url( 'themes.php?page=inspiro' ) ) . '">', '</a>' ); ?></p>
			<p class="wpz-welcome-notice-button">
				<a class="button-secondary" href="<?php echo esc_url( admin_url( 'themes.php?page=inspiro' ) ); ?>">
					<?php printf( esc_html__( 'Get Started with %s', 'inspiro' ), 'Inspiro' ); ?>
				</a>
				<a class="button-primary" href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>" target="_blank">
					<?php esc_html_e( 'Upgrade to Inspiro PRO', 'inspiro' ); ?>
				</a>
			</p>
		</div>
		<?php
	}
}
