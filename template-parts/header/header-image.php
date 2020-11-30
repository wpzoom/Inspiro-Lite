<?php
/**
 * Displays header media
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version x.x.x
 */

?>
<div class="custom-header">
    <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
    
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>

    <?php if ( inspiro_is_frontpage() || ( is_home() && is_front_page() ) ) : ?>
    <div id="scroll-to-content" title="<?php _e( 'Scroll down to content', 'inspiro' ); ?>">
        <span class="screen-reader-text"><?php _e( 'Scroll down to content', 'inspiro' ); ?></span>
    </div>
    <?php endif; ?>
</div><!-- .custom-header -->
