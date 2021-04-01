<?php
/**
 * Displays top navigation
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version 1.0.0
 */
?>
<div id="site-navigation" class="navbar">
    <div class="header-inner inner-wrap">

        <div class="header-logo-wrapper">
            <?php inspiro_custom_logo(); ?>
        </div>

        <div class="header-navigation-wrapper">
            <?php if ( has_nav_menu( 'primary' ) ): ?>
                <nav class="primary-menu-wrapper navbar-collapse collapse" aria-label="<?php echo esc_attr_x( 'Top Horizontal Menu', 'menu', 'inspiro' ); ?>" role="navigation">
                    <?php
                        wp_nav_menu( array(
                            'menu_class'        => 'nav navbar-nav dropdown sf-menu',
                            'theme_location'    => 'primary',
                            'container'         => '',
                        ) );
                    ?>
                </nav>
            <?php endif ?>

            <?php if ( is_active_sidebar( 'header_social' ) ): ?>
                <div class="header_social">
                    <?php dynamic_sidebar( 'header_social' ); ?>
                </div>
            <?php endif ?>

            <div id="sb-search" class="sb-search">
                <?php get_template_part( 'template-parts/header/search', 'form' ); ?>
            </div>

            <?php if ( has_nav_menu( 'primary' ) || is_active_sidebar( 'sidebar' ) ) : ?>
                <button type="button" class="navbar-toggle">
                    <span class="screen-reader-text"><?php esc_html_e( 'Toggle sidebar &amp; navigation', 'inspiro' ); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <?php endif ?>
        </div>
    </div><!-- .inner-wrap -->
</div><!-- #site-navigation -->
