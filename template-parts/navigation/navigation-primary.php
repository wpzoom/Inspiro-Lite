<?php
/**
 * Displays top navigation
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version x.x.x
 */
?>
<nav id="site-navigation" class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'inspiro' ); ?>">
    <div class="inner-wrap">

    	<?php inspiro_custom_logo(); ?>

        <?php if ( has_nav_menu( 'primary' ) || is_active_sidebar( 'sidebar' ) ) : ?>
            <button type="button" class="navbar-toggle">
                <span class="screen-reader-text"><?php _e( 'Toggle sidebar &amp; navigation', 'inspiro' ); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php endif ?>

        <div id="sb-search" class="sb-search">
            <?php get_template_part( 'template-parts/header/search', 'form' ); ?>
        </div>
        <div class="header_social">
            <?php dynamic_sidebar( 'header_social' ); ?>
        </div>

        <?php if ( has_nav_menu( 'primary' ) ): ?>
            <div class="navbar-collapse collapse">
                <?php
                    wp_nav_menu( array(
                        'menu_class'     => 'nav navbar-nav dropdown sf-menu',
                        'theme_location' => 'primary',
                    ) );
                ?>
            </div><!-- .navbar-collapse -->
        <?php endif ?>
    </div><!-- .inner-wrap -->
</nav><!-- #site-navigation -->
