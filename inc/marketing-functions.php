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
	<div class="is-dismissible inspiro-bf-banner-container">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/marketing/bf-inspiro-premium.png'); ?>"
		     class="bf-inspiro-banner-image"
		     alt="Black Friday Deal"
		>

		<div class="banner-text-container">
			<h2>Upgrade to <span class="green-text">Inspiro Premium</span></h2>
			<span>Take your website to the next level with Inspiro Premium and unlock powerful features like:</span>

			<div class="banner-promo-btns">
				<button class="btn">Advanced Video Integration</button>
				<button class="btn">Slideshow with Video Background</button>
				<button class="btn">15+ Premium Starter Sites</button>
				<button class="btn">Exclusive Premium Support</button>
			</div>
		</div>

		<div class="upgrade-banner-container">
			<div class="banner-clock">
				<span>Hurry Up!</span>
				<span class="clock-digits">
					10d 16h 55m 30s
				</span>

				<a href="#" class="upgrade-now-btn">Upgrade now</a>
			</div>
		</div>
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
	<style>

	</style>
	<script type="text/javascript">
		jQuery(document).on('click', '.inspiro-black-friday-banner .notice-dismiss', function () {
			jQuery.post(ajaxurl, {
				action: 'inspiro_dismiss_black_friday_banner'
			});
		});
	</script>
<?php }
add_action('admin_footer', 'inspiro_enqueue_bf_banner_script');
