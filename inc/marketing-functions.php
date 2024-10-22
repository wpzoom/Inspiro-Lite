<?php
/**
 * Marketing theme functions
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.5
 */

// Define the Black Friday campaign dates as constants
const BF_START_DATE = '2024-10-21'; // testing
//const BF_START_DATE = '2024-11-27';
const BF_END_DATE = '2024-12-03';

/**
 * Display the Black Friday banner if the conditions are met.
 */
function inspiro_show_black_friday_banner() {
	// Get current date
	$today = current_time('Y-m-d');

	// Only show the banner between the updated Black Friday dates
	if ($today >= BF_START_DATE && $today <= BF_END_DATE && !inspiro_has_dismissed_banner()) {
		inspiro_display_black_friday_banner();
	}
}
add_action('admin_notices', 'inspiro_show_black_friday_banner');

/**
 * Check if the user has dismissed the Black Friday banner.
 *
 * @return bool
 */
function inspiro_has_dismissed_banner() {
	return (bool) get_user_meta(get_current_user_id(), 'inspiro_dismiss_black_friday_banner', true);
}

/**
 * Output the Black Friday banner markup.
 */
function inspiro_display_black_friday_banner() { ?>
	<div class="notice notice-success is-dismissible wpzoom-black-friday-banner">
		<p><strong>Black Friday Deal:</strong> Upgrade to the premium version of <strong>Your Theme</strong> at 50% off! <a href="https://your-site.com/upgrade" target="_blank">Get the offer now!</a></p>
	</div>
<?php }

/**
 * Handle dismissing the Black Friday banner.
 */
function inspiro_dismiss_black_friday_banner() {
	update_user_meta(get_current_user_id(), 'inspiro_dismiss_black_friday_banner', 1);
}
add_action('wp_ajax_inspiro_dismiss_black_friday_banner', 'inspiro_dismiss_black_friday_banner');

/**
 * Enqueue the script to handle banner dismissal.
 */
function inspiro_enqueue_bf_banner_script() { ?>
	<script type="text/javascript">
		jQuery(document).on('click', '.wpzoom-black-friday-banner .notice-dismiss', function () {
			jQuery.post(ajaxurl, {
				action: 'inspiro_dismiss_black_friday_banner'
			});
		});
	</script>
<?php }
add_action('admin_footer', 'inspiro_enqueue_bf_banner_script');
