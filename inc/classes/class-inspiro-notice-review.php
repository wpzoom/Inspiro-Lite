<?php
/**
 * Theme admin leave review notice
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.2.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main PHP class for notice review
 */
class Inspiro_Notice_Review extends Inspiro_Notices {

	/**
	 * The constructor.
	 */
	public function __construct() {
		add_action( 'wp_loaded', array( $this, 'review_notice' ), 20 );
		add_action( 'wp_loaded', array( $this, 'hide_notices' ), 15 );

		$this->current_user_id = get_current_user_id();
	}

	/**
	 * Update option 'inspiro_theme_installed_time' if is not exists
	 * Add action if notice wasn't dismissed
	 *
	 * @return void
	 */
	public function review_notice() {
		if ( ! get_option( 'inspiro_theme_installed_time' ) ) {
			update_option( 'inspiro_theme_installed_time', time() );
		}

		$this_notice_was_dismissed = $this->get_notice_status( 'review-user-' . $this->current_user_id );

		if ( ! $this_notice_was_dismissed ) {
			add_action( 'admin_notices', array( $this, 'review_notice_markup' ) ); // Display this notice.
		}
	}

	/**
	 * Show HTML markup if conditions meet
	 *
	 * @return void
	 */
	public function review_notice_markup() {
		$dismiss_url = wp_nonce_url(
			remove_query_arg( array( 'activated' ), add_query_arg( 'inspiro-hide-notice', 'review-user-' . $this->current_user_id ) ),
			'inspiro_hide_notices_nonce',
			'_inspiro_notice_nonce'
		);

		$theme_data   = wp_get_theme();
		$current_user = wp_get_current_user();

		if ( ( get_option( 'inspiro_theme_installed_time' ) > strtotime( '-5 day' ) ) ) {
			return;
		}
		?>
		<div id="message" class="notice notice-success inspiro-notice inspiro-review-notice">
			<a class="inspiro-message-close notice-dismiss" href="<?php echo esc_url( $dismiss_url ); ?>"></a>
			<div class="inspiro-message-content">

				<div class="inspiro-message-image">
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=inspiro-doc' ) ); ?>"><img class="inspiro-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e( 'inspiro', 'inspiro' ); ?>" /></a>
				</div>
				<div class="inspiro-message-text">

					<p>
						<?php
						printf(
							/* Translators: %1$s current user display name. */
							esc_html__(
								'We hope you are happy with everything that the %1$s has to offer. %2$sIf you can spare a moment, please consider adding a rating on WordPress.org. %2$sIt helps us continue providing updates and support for this theme.',
								'inspiro'
							),
							// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
							'<a href="' . esc_url( admin_url( 'themes.php?page=inspiro' ) ) . '"><strong>' . esc_html( $theme_data->Name ) . ' theme</strong></a>',
							'<br>'
						);
						?>
					</p>

					<p class="notice-buttons"><a href="https://wordpress.org/support/theme/inspiro/reviews/?rate=5#new-post" class="btn button button-primary inspiro-button" target="_blank"><span class="dashicons dashicons-awards"></span> <?php esc_html_e( 'Add a Rating for Inspiro', 'inspiro' ); ?></a>
					<a href="<?php echo esc_url( $dismiss_url ); ?>" class="btn button button-secondary"><?php esc_html_e( 'Hide this notice', 'inspiro' ); ?></a>
					</a></p>

				</div><!-- .inspiro-message-text -->

			</div><!-- .inspiro-message-content -->

		</div><!-- #message -->
		<?php
	}
}

new Inspiro_Notice_Review();
