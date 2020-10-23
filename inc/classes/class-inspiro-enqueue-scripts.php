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
            wp_enqueue_style( 'inspiro-style', get_stylesheet_uri(), array(), INSPIRO_THEME_VERSION );

            // Theme block stylesheet.
            wp_enqueue_style( 'inspiro-block-style', inspiro_get_assets_uri( 'blocks', 'css' ), array( 'inspiro-style' ), INSPIRO_THEME_VERSION );

            // Load the dark colorscheme.
            if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
                wp_enqueue_style( 'inspiro-colors-dark', inspiro_get_assets_uri( 'colors-dark', 'css' ), array( 'inspiro-style' ), INSPIRO_THEME_VERSION );
            }

            // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
            if ( is_customize_preview() ) {
                wp_enqueue_style( 'inspiro-ie9', inspiro_get_assets_uri( 'ie9', 'css' ), array( 'inspiro-style' ), INSPIRO_THEME_VERSION );
                wp_style_add_data( 'inspiro-ie9', 'conditional', 'IE 9' );
            }

            // Load the Internet Explorer 8 specific stylesheet.
            wp_enqueue_style( 'inspiro-ie8', inspiro_get_assets_uri( 'ie8', 'css' ), array( 'inspiro-style' ), INSPIRO_THEME_VERSION );
            wp_style_add_data( 'inspiro-ie8', 'conditional', 'lt IE 9' );

            // Load the html5 shiv.
            wp_enqueue_script( 'html5', inspiro_get_assets_uri( 'html5', 'js' ), array(), INSPIRO_THEME_VERSION );
            wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

            wp_enqueue_script( 'inspiro-skip-link-focus-fix', inspiro_get_assets_uri( 'skip-link-focus-fix', 'js' ), array(), INSPIRO_THEME_VERSION, true );

            $inspiro_l10n = array(
                'quote' => inspiro_get_svg( array( 'icon' => 'quote-right' ) ),
            );

            if ( has_nav_menu( 'top' ) ) {
                wp_enqueue_script( 'inspiro-navigation', inspiro_get_assets_uri( 'navigation', 'js' ), array( 'jquery' ), INSPIRO_THEME_VERSION, true );
                $inspiro_l10n['expand']   = __( 'Expand child menu', 'inspiro' );
                $inspiro_l10n['collapse'] = __( 'Collapse child menu', 'inspiro' );
                $inspiro_l10n['icon']     = inspiro_get_svg(
                    array(
                        'icon'     => 'angle-down',
                        'fallback' => true,
                    )
                );
            }

            wp_enqueue_script( 'inspiro-global', inspiro_get_assets_uri( 'global', 'js' ), INSPIRO_THEME_VERSION, true );

            wp_enqueue_script( 'jquery-scrollto', inspiro_get_assets_uri( 'jquery.scrollTo', 'js' ), array( 'jquery' ), '2.1.2', true );

            wp_localize_script( 'inspiro-skip-link-focus-fix', 'inspiroScreenReaderText', $inspiro_l10n );

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