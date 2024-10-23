<?php
/**
 * Marketing theme functions
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.5
 */

// Define the Black Friday campaign dates as constants
const BF_START_DATE = '2024-10-22'; // for testing
//const BF_START_DATE = '2024-11-27';
const BF_END_DATE = '2024-12-04';
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
function inspiro_display_black_friday_banner() {

	// - Functionality for render first date/time - //
	$today = new DateTime();
	$endDay = new DateTime( BF_END_DATE );

	// Calculate the difference in days between today and the end date
	$interval = $today->diff( $endDay );
	?>
	<div class="inspiro-banner-container-wrapper">
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
						<span><i id="days"><?php echo $interval->days ?></i>d</span>
						<span><i id="hours"><?php echo $interval->h ?></i>h</span>
						<span><i id="minutes"><?php echo $interval->i ?></i>m</span>
						<span><i id="seconds"><?php echo $interval->s ?></i>s</span>
					</div>
				</div>
				<a href="<?php echo BTN_UPGRADE_NOW_LINK ?>" class="btn-upgrade-now">Upgrade now &rarr;</a>
			</div>
			<div class="radial-gradient right"></div>
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
 * Enqueue the script and styles to handle banner dismissal.
 */
function inspiro_enqueue_bf_banner_script_and_styles() { ?>
	<style>
		.inspiro-banner-container-wrapper {
			margin: 10px 20px 0 2px;
		}
		/*	rewrite WP core rule */
		.inspiro-bf-banner-container.notice.is-dismissible {
			padding-right: 14px;
			margin: 0;
			/*margin: 10px 20px 0 0;*/
		}

		.inspiro-bf-banner-container {
			display: flex;
			align-items: center;
			justify-content: space-between;
			color: #fff;
			/* drow squares with CSS */
			background-color: #242628; /* Base background color for the squares */
			background-image:
				linear-gradient(90deg, rgba(255, 255, 255, .1)  1px, transparent 1px),
				linear-gradient(180deg, rgba(255, 255, 255, .1) 1px, transparent 1px);
			background-size: 20px 20px; /* Size of the squares, including borders */
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
			max-width: 190px;
			margin: 10px 0;
		}
		.banner-text-container {
			margin: 14px 0 5px 0;
		}
		.banner-text-container h2{
			color: #fff;
			font-size: 30px;
			margin: 0 0 15px;
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
			max-width: 500px;
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
			display: flex;
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
			color: #fff;
			text-transform: uppercase;
			display: inline-block;
			line-height: 20px;
			z-index: 999;
			position: relative;
		}

		@media screen and (max-width: 1023px) {
			.inspiro-banner-container-wrapper {
				margin-right: 10px;
			}
			.inspiro-bf-banner-container {
				flex-direction: column;
			}
			.inspiro-bf-banner-container.notice.is-dismissible {
				padding-right: 0;
			}
			.banner-text-container {
				margin: 14px 0 14px 0;
			}
			.banner-text-container .green-text {
				line-height: 30px;
			}
			.upgrade-banner {
				margin-bottom: 10px;
			}
		}
		@media screen and (min-width: 1024px) and (max-width: 1230px) {
			.inspiro-bf-banner-container.notice.is-dismissible {
				padding-right: 0px;
			}
			.bf-inspiro-banner-image {
				margin-right: 10px;
			}
			.upgrade-banner a.btn-upgrade-now {
				font-size: 14px;
				padding: 10px 10px;
			}
		}
	</style>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {

			jQuery(document).on('click', '.inspiro-black-friday-banner .notice-dismiss', function () {
				jQuery.post(ajaxurl, {
					action: 'inspiro_dismiss_black_friday_banner'
				});
			});

			// Set the date we're counting down to
			const countDownDate = new Date("<?php echo BF_END_DATE; ?>").getTime(); // example was this type: Dec 31, 2023 23:59:59

			// Get the current minute, for testing purposes
			//	<?php //$today = new DateTime(); ?>
			//console.log('php: ' + <?php //echo $today->format('i') ?>//);
			//console.log('js: ' + new Date().getMinutes());

			// Update the countdown every 1 second
			const x = setInterval(function() {

				// Get today's date and time
				const now = new Date().getTime();

				// Find the distance between now and the countdown date
				const distance = countDownDate - now;

				// Time calculations for days, hours, minutes and seconds
				let days, hours, minutes, seconds;
				if (distance > 0) {
					days = Math.floor(distance / (1000 * 60 * 60 * 24));
					hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					seconds = Math.floor((distance % (1000 * 60)) / 1000);
				} else {
					days = hours = minutes = seconds = 0;
				}

				// Display the result in the elements with respective ids
				document.getElementById("days").innerText = days;
				document.getElementById("hours").innerText = hours;
				document.getElementById("minutes").innerText = minutes;
				document.getElementById("seconds").innerText = seconds;

				// If the count down is finished, clear the interval
				if (distance < 0) {
					clearInterval(x);
				}
			}, 1000);
		});

	</script>
<?php }
add_action('admin_footer', 'inspiro_enqueue_bf_banner_script_and_styles');
