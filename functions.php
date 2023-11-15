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
define( 'INSPIRO_THEME_VERSION', '1.7.13' );
define( 'INSPIRO_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'INSPIRO_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'INSPIRO_THEME_ASSETS_URI', INSPIRO_THEME_URI . 'dist' );

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require INSPIRO_THEME_DIR . 'inc/back-compat.php';
}

/**
 * Recommended Plugins
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-tgm-plugin-activation.php';

/**
 * Setup helper functions.
 */
require INSPIRO_THEME_DIR . 'inc/common-functions.php';

/**
 * Enqueues scripts and styles
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-enqueue-scripts.php';

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
require INSPIRO_THEME_DIR . 'inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require INSPIRO_THEME_DIR . 'inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require INSPIRO_THEME_DIR . 'inc/template-functions.php';

/**
 * Customizer additions.
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-font-family-manager.php';
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-fonts-manager.php';
require INSPIRO_THEME_DIR . 'inc/customizer-functions.php';
require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customizer-control-base.php';
require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customizer.php';

/**
 * SVG icons functions and filters.
 */
require INSPIRO_THEME_DIR . 'inc/icon-functions.php';

/**
 * Theme admin notices and info page
 */
if ( is_admin() ) {
	require INSPIRO_THEME_DIR . 'inc/admin-notice.php';
	require INSPIRO_THEME_DIR . 'inc/theme-info-page.php';

	if ( current_user_can( 'manage_options' ) ) {
		require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-notices.php';
		require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-notice-review.php';
	}
}

/**
 * Theme Upgrader
 */
require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-theme-upgrader.php';

/**
 * Inline theme css generated dynamically
 */
require INSPIRO_THEME_DIR . 'inc/dynamic-css/body.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/logo.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/headings.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/hero-header-title.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/hero-header-desc.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/hero-header-button.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/main-menu.php';
require INSPIRO_THEME_DIR . 'inc/dynamic-css/mobile-menu.php';







/**
 * Add group block inner container.
 * The inner container has been removed in WordPress 5.8 if a theme.json
 * is available in the theme.
 *
 * @param   string  $block_content The block content
 * @return  string The updated block content
 */
function inspiro_add_block_group_inner( $block_content ) {
    libxml_use_internal_errors( true );
    $dom = new DOMDocument();
    $dom->loadHTML(
        mb_convert_encoding(
            '<html>' . $block_content . '</html>',
            'HTML-ENTITIES',
            'UTF-8'
        ),
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    foreach ( $dom->getElementsByTagName( 'div' ) as $div ) {
        // check for desired class name
        if (
            strpos( $div->getAttribute( 'class' ), 'wp-block-group' ) === false
            || strpos( $div->getAttribute( 'class' ), 'wp-block-group__inner-container' ) !== false
        ) {
            continue;
        }

        // check if we already processed this div
        foreach ( $div->childNodes as $childNode ) {
            if (
                method_exists( $childNode, 'getAttribute' )
                && strpos( $childNode->getAttribute( 'class' ), 'wp-block-group__inner-container' ) !== false
            ) {
                continue 2;
            }
        }

        // create the inner container element
        $inner_container = $dom->createElement( 'div' );
        $inner_container->setAttribute( 'class', 'wp-block-group__inner-container' );
        // get all children of the current group
        $children = iterator_to_array( $div->childNodes );

        // append all children to the inner container
        foreach ( $children as $child ) {
            $inner_container->appendChild( $child );
        }

        // append new inner container to the group block
        $div->appendChild( $inner_container );
    }

    return str_replace( [ '<html>', '</html>' ], '', $dom->saveHTML( $dom->documentElement ) );
}

// add_filter( 'render_block_core/group', 'inspiro_add_block_group_inner' );