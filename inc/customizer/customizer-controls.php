<?php
/**
 * Inspiro Lite: Customizer Controls.
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$control_dir = INSPIRO_THEME_DIR . 'inc/customizer/custom-controls';

// phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require $control_dir . '/class-inspiro-customizer-control-base.php';
require $control_dir . '/font-presets/class-inspiro-customize-font-presets-control.php';
require $control_dir . '/title/class-inspiro-customize-title-control.php';
require $control_dir . '/range/class-inspiro-customize-range-control.php';
require $control_dir . '/typography/class-inspiro-customize-typography-control.php';
require $control_dir . '/font-variant/class-inspiro-customize-font-variant-control.php';
// phpcs:enable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
