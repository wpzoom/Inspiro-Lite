<?php
/**
 * Displays header site branding
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite x.x.x
 * @version x.x.x
 */

?>
<div class="site-branding">
	<div class="inner-wrap">

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

	</div><!-- .inner-wrap -->
</div><!-- .site-branding -->
