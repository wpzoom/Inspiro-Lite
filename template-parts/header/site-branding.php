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
		<?php
			$site_title = get_theme_mod( 'header_site_title', get_bloginfo( 'name' ) );
			$description = get_theme_mod( 'header_site_description', get_bloginfo( 'description' ) );
		?>

		<div class="site-branding-text">
            <?php
            $query['autofocus[section]'] = 'header_image';
            $section_link = add_query_arg( $query, admin_url( 'customize.php' ) );
            ?>

            <?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?>

                <small class="edit-link"><a href="<?php echo esc_url( $section_link ); ?>"><?php _e( '[Edit]', 'inspiro' ); ?></a></small>

            <?php } ?>

			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( $site_title ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( $site_title ); ?></a></p>
			<?php endif; ?>

			<?php
			if ( $description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

	</div><!-- .inner-wrap -->
</div><!-- .site-branding -->
