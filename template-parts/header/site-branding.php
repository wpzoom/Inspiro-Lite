<?php
/**
 * Displays header site branding
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-branding">
	<div class="inner-wrap">
		<?php
			$site_title = get_theme_mod( 'header_site_title', get_bloginfo( 'name' ) );
			$description = get_theme_mod( 'header_site_description', get_bloginfo( 'description' ) );
            $button_title = get_theme_mod( 'header_button_title', esc_html__( 'Click here' ) );
            $button_url = get_theme_mod( 'header_button_url', get_home_url() );
		?>

		<div class="site-branding-text">
            <?php
            $query['autofocus[section]'] = 'header_image';
            $section_link = add_query_arg( $query, admin_url( 'customize.php' ) );
            ?>

            <?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?>
                <small class="edit-link"><a href="<?php echo esc_url( $section_link ); ?>"><?php esc_html_e( '[Edit]', 'inspiro' ); ?></a></small>
            <?php } ?>

			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( $button_url ); ?>" rel="home"><?php echo esc_html( $site_title ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( $button_url ); ?>" rel="home"><?php echo esc_html( $site_title ); ?></a></p>
			<?php endif; ?>

			<?php
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

        <?php if ( ! empty( $button_url ) && ! empty( $button_title ) ): ?>
            <?php get_template_part( 'template-parts/header/header', 'button' ); ?>
        <?php endif ?>

	</div><!-- .inner-wrap -->
</div><!-- .site-branding -->
