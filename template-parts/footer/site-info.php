<?php
/**
 * Displays footer site info
 *
 * @package    Inspiro
 * @subpackage Inspiro_Lite
 * @since      Inspiro 1.0.0
 * @version    1.0.0
 */

// todo: fix
// check content on first load and after deletet it.
$customizer_copyright_text = get_theme_mod( 'footer_copyright_text_setting', 'Copyright {copyright} {current-year} {site-title}' );
?>

<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			<?php if ( $customizer_copyright_text ) : ?>
				<?php echo get_footer_copyright_text() ; ?>
			<?php endif; ?>
		</span>
		<span>
			<?php esc_html_e( 'Inspiro WordPress Theme by', 'inspiro' ); ?>
			<a href="<?php echo 'https://www.wpzoom.com/'; ?>" target="_blank" rel="nofollow">WPZOOM</a>
		</span>
	</span>
</div><!-- .site-info -->
