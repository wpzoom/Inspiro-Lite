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
const BTN_UPGRADE_NOW_LINK = '#';

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
	<div class="is-dismissible inspiro-bf-banner-container notice">
		<div class="radial-gradient left"></div>
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/marketing/bf-inspiro-premium.png'); ?>"
		     class="bf-inspiro-banner-image"
		     alt="WPZOOM Black Friday Deal"
		>

		<div class="banner-text-container">
			<h2>Upgrade to <span class="green-text">Inspiro Premium</span></h2>
			<span class="banner-text">Take your website to the next level with Inspiro Premium and unlock powerful features like:</span>

			<div class="banner-promo-btns">
				<div class="banner-btn">Advanced Video Integration</div>
				<div class="banner-btn">Slideshow with Video Background</div>
				<div class="banner-btn">15+ Premium Starter Sites</div>
				<div class="banner-btn">Exclusive Premium Support</div>
			</div>
		</div>

		<div class="upgrade-banner">
			<div class="banner-clock">
				<span class="hurry-up">Hurry Up!</span>
				<div class="clock-digits">
					<span><i>10</i>d</span>
					<span><i>16</i>h</span>
					<span><i>55</i>m</span>
					<span><i>30</i>s</span>
				</div>
			</div>
			<a href="<?php echo BTN_UPGRADE_NOW_LINK ?>" class="btn-upgrade-now">Upgrade now &rarr;</a>
		</div>
		<div class="radial-gradient right"></div>
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
 * Enqueue the script and styles to handle banner dismissal.
 */
function inspiro_enqueue_bf_banner_script_and_styles() { ?>
	<style>
		.inspiro-bf-banner-container {
			display: flex;
			align-items: center;
			justify-content: space-between;
			color: #FFFFFF;
			background: #242628;
		}
		.inspiro-bf-banner-container .radial-gradient {
			position: absolute;
			width: 150px;
			height: 150px;
			/*border: 1px solid #FFFFFF;*/
		}
		.inspiro-bf-banner-container .radial-gradient.left{
			bottom: 0;
			left: 0;
			background: radial-gradient(90% 70% at 0% 100%, #22BB66 -129%, rgba(34, 187, 102, 0) 120%);
		}
		.inspiro-bf-banner-container .radial-gradient.right{
			right: 0;
			top: 0;
			background: radial-gradient(70% 90% at 100% 0%, #22BB66 -129%, rgba(34, 187, 102, 0) 120%);
		}
		.inspiro-bf-banner-container.notice {
			border: unset;
		}
		.bf-inspiro-banner-image {
			max-width: 200px;
			margin: 10px 0;
		}
		.banner-text-container h2{
			color: #FFFFFF;
			font-size: 30px;
			margin: 0 0 10px;
		}
		.banner-text-container .green-text {
			color: #22BB66;
		}
		.banner-text-container .banner-text {
			font-size: 14px;
			font-weight: 300;
			line-height: 26px;
			margin-bottom: 5px;
			display: inline-block;
		}
		.banner-promo-btns {
			width: 500px;
		}
		.banner-promo-btns .banner-btn {
			padding: 4px 16px;
			border: 1px solid #22BB66;
			background: #343434;
			border-radius: 30px;
			display: inline-block;
			margin: 0 5px 8px 0;
			font-size: 11px;
		}
		.upgrade-banner .banner-clock {
			display: flex;
			flex-direction: column;
		}
		.upgrade-banner .banner-clock .hurry-up {
			font-size: 14px;
			margin-bottom: 5px;
		}
		.banner-clock .clock-digits {
			font-size: 14px;
			font-weight: 300;
			margin-bottom: 10px;
		}
		.banner-clock .clock-digits span {
			margin-right: 8px;
		}
		.banner-clock .clock-digits i {
			font-style: normal !important;
			margin-right: 2px;
			font-weight: 600;
			font-size: 20px;
		}
		.upgrade-banner a.btn-upgrade-now {
			font-size: 18px;
			font-weight: 600;
			background: #22BB66;
			padding: 15px 29px;
			text-decoration: none;
			color: #FFFFFF;
			text-transform: uppercase;
			display: inline-block;
			line-height: 30px;
		}
	</style>
	<script type="text/javascript">
		jQuery(document).on('click', '.inspiro-black-friday-banner .notice-dismiss', function () {
			jQuery.post(ajaxurl, {
				action: 'inspiro_dismiss_black_friday_banner'
			});
		});
	</script>
<?php }
add_action('admin_footer', 'inspiro_enqueue_bf_banner_script_and_styles');
