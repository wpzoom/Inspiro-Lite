<?php
/**
 * Inspiro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inspiro
 * @since Inspiro 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'INSPIRO_THEME_VERSION', '1.2.5' );
define( 'INSPIRO_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'INSPIRO_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Inspiro only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require INSPIRO_THEME_DIR . '/inc/back-compat.php';
	return;
}

/**
 * Recommended Plugins
 */
require INSPIRO_THEME_DIR . '/inc/classes/class-tgm-plugin-activation.php';

/**
 * Setup helper functions.
 */
require INSPIRO_THEME_DIR . '/inc/common-functions.php';

/**
 * Enqueues scripts and styles
 */
require INSPIRO_THEME_DIR . '/inc/classes/class-inspiro-enqueue-scripts.php';

/**
 * Functions and definitions.
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-after-setup-theme.php';

/**
 * Handle SVG icons.
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-svg-icons.php';

/**
 * Implement the Custom Header feature.
 */
require INSPIRO_THEME_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require INSPIRO_THEME_DIR . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require INSPIRO_THEME_DIR . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require INSPIRO_THEME_DIR . '/inc/customizer.php';

/**
 * SVG icons functions and filters.
 */
require INSPIRO_THEME_DIR . '/inc/icon-functions.php';

/**
 * Theme admin notices and info page
 */
if ( is_admin() ) {
    require INSPIRO_THEME_DIR . '/inc/admin-notice.php';
    require INSPIRO_THEME_DIR . '/inc/theme-info-page.php';

    if ( current_user_can( 'manage_options' ) ) {
        require INSPIRO_THEME_DIR . '/inc/classes/class-inspiro-notices.php';
        require INSPIRO_THEME_DIR . '/inc/classes/class-inspiro-notice-review.php';
    }
}
