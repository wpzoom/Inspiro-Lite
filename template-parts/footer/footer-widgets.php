<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version x.x.x
 */

?>

<?php
if ( is_active_sidebar( 'footer_1' ) || is_active_sidebar( 'footer_2' ) || is_active_sidebar( 'footer_3' ) || is_active_sidebar( 'footer_4' ) ) : ?>

	<aside class="footer-widgets widgets widget-columns-4" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'inspiro' ); ?>">
		<?php if ( is_active_sidebar( 'footer_1' ) ): ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'footer_1' ); ?>
			</div>
		<?php endif ?>

		<?php if ( is_active_sidebar( 'footer_2' ) ): ?>
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'footer_2' ); ?>
			</div>
		<?php endif ?>

		<?php if ( is_active_sidebar( 'footer_3' ) ): ?>
			<div class="widget-column footer-widget-3">
				<?php dynamic_sidebar( 'footer_3' ); ?>
			</div>
		<?php endif ?>

		<?php if ( is_active_sidebar( 'footer_4' ) ): ?>
			<div class="widget-column footer-widget-4">
				<?php dynamic_sidebar( 'footer_4' ); ?>
			</div>
		<?php endif ?>
	</aside><!-- .widget-area -->

	<div class="site-footer-separator"></div>

<?php endif; ?>
