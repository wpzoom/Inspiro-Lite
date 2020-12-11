<?php
/**
 * Load scripts & styles
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
 * Inspiro_Enqueue_Scripts initial setup
 * 
 * @since 1.0.0
 */
if ( ! class_exists( 'Inspiro_Enqueue_Scripts' ) ) {
    
    class Inspiro_Enqueue_Scripts {

        /**
         * Constructor
         */
        public function __construct() {
            add_action( 'wp_head', array( $this, 'javascript_detection' ), 0 );
            add_action( 'wp_head', array( $this, 'pingback_header' ) );
            add_action( 'wp_head', array( $this, 'colors_css_wrap' ) );

            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
            add_action( 'enqueue_block_editor_assets', array( $this, 'block_editor_styles' ) );
        }

        /**
         * Enqueues scripts and styles.
         */
        function enqueue_scripts() {
            // Add custom fonts, used in the main stylesheet.
            wp_enqueue_style( 'inspiro-fonts', inspiro_fonts_url(), array(), null );

            // Theme stylesheet.
            wp_enqueue_style( 'inspiro-style', inspiro_get_assets_uri( 'style', 'css' ), array(), INSPIRO_THEME_VERSION );

            // RTL support.
            wp_style_add_data( 'inspiro-style', 'rtl', 'replace' );

            wp_enqueue_script( 'inspiro-lite-js-plugins', inspiro_get_assets_uri( 'plugins', 'js' ), array( 'jquery' ), INSPIRO_THEME_VERSION, true );

            wp_enqueue_script( 'inspiro-lite-script', inspiro_get_assets_uri( 'scripts', 'js' ), array( 'inspiro-lite-js-plugins', 'jquery' ), INSPIRO_THEME_VERSION, true );

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
        }

        /**
         * Enqueues styles for the block-based editor.
         *
         * @since x.x.x
         */
        function block_editor_styles() {
            // Block styles.
            wp_enqueue_style( 'inspiro-block-editor-style', inspiro_get_assets_uri( 'editor-blocks', 'css' ), array(), INSPIRO_THEME_VERSION );

            // RTL support.
            wp_style_add_data( 'inspiro-block-editor-style', 'rtl', 'replace' );

            // Add custom fonts.
            wp_enqueue_style( 'inspiro-fonts', inspiro_fonts_url(), array(), null );
        }

        /**
         * Handles JavaScript detection.
         *
         * Adds a `js` class to the root `<html>` element when JavaScript is detected.
         *
         * @since x.x.x
         */
        function javascript_detection() {
            echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
        }

        /**
         * Add a pingback url auto-discovery header for singularly identifiable articles.
         */
        function pingback_header() {
            if ( is_singular() && pings_open() ) {
                printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
            }
        }

        /**
         * Display custom color CSS.
         */
        function colors_css_wrap() {
            if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
                return;
            }

            require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
            $hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );

            $customize_preview_data_hue = '';
            if ( is_customize_preview() ) {
                $customize_preview_data_hue = 'data-hue="' . $hue . '"';
            }
            ?>
            <style type="text/css" id="custom-theme-colors" <?php echo $customize_preview_data_hue; ?>>
                <?php echo inspiro_custom_colors_css(); ?>
            </style>
            <?php
        }
    }

    new Inspiro_Enqueue_Scripts();
}