<?php
/**
 * Inspiro functions and definitions
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
 * Inspiro_After_Setup_Theme initial setup
 * 
 * @since 1.0.0
 */
if ( ! class_exists( 'Inspiro_After_Setup_Theme' ) ) {
    
    class Inspiro_After_Setup_Theme {
        /**
         * Instance
         *
         * @var $instance
         */
        private static $instance;

        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object
         */
        public static function get_instance() {
            if ( ! isset( self::$instance ) ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Constructor
         */
        public function __construct() {
            add_action( 'after_setup_theme', array( $this, 'theme_setup' ), 2 );
            add_action( 'template_redirect', array( $this, 'theme_content_width' ), 0 );
        }

        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
         * 
         * @since 1.0.0
         */
        public function theme_setup() {
            /*
             * Make theme available for translation.
             * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/inspiro-lite
             */
            load_theme_textdomain( 'inspiro', INSPIRO_THEME_DIR . '/languages' );

            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );

            /*
             * Let WordPress manage the document title.
             * By adding theme support, we declare that this theme does not use a
             * hard-coded <title> tag in the document head, and expect WordPress to
             * provide it for us.
             */
            add_theme_support( 'title-tag' );

            /*
             * Enable support for Post Thumbnails on posts and pages.
             *
             * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
             */
            add_theme_support( 'post-thumbnails' );

            /**
             * Register image sizes.
             */
            add_image_size( 'inspiro-featured-image', 2000 );
            add_image_size( 'inspiro-thumbnail-avatar', 100, 100, true );
            add_image_size( 'inspiro-recent-thumbnail', 345, 192, true );
            add_image_size( 'inspiro-recent-thumbnail-retina', 690, 384, true );
            add_image_size( 'inspiro-entry-cover', 1800 );

            // Set the default content width.
            $GLOBALS['content_width'] = 750;

            // Register nav menus.
            register_nav_menus(
                array(
                    'primary' => __( 'Main Menu', 'wpzoom' )
                )
            );

            /*
             * Switch default core markup for search form, comment form, and comments
             * to output valid HTML5.
             */
            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'script',
                    'style',
                )
            );

            /*
             * Enable support for Post Formats.
             *
             * See: https://wordpress.org/support/article/post-formats/
             */
            add_theme_support(
                'post-formats',
                array(
                    'aside',
                    'image',
                    'video',
                    'quote',
                    'link',
                    'gallery',
                    'audio',
                )
            );

            // Add theme support for Custom Logo.
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 100,
                    'width'       => 400,
                    'flex-height' => true,
                    'flex-width'  => true
                )
            );

            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );

            /*
             * This theme styles the visual editor to resemble the theme style,
             * specifically font, colors, and column width.
             */
            $dir_name    = ( WP_LOCAL_DEV ) ? 'unminified' : 'minified';
            $file_prefix = ( WP_LOCAL_DEV ) ? '' : '.min';

            add_editor_style(
                array(
                    'assets/css/'. $dir_name .'/editor-style'. $file_prefix .'.css',
                    inspiro_fonts_url()
                )
            );

            // Load regular editor styles into the new block-based editor.
            add_theme_support( 'editor-styles' );

            // Load default block styles.
            add_theme_support( 'wp-block-styles' );

            // Add support for responsive embeds.
            add_theme_support( 'responsive-embeds' );

            // Define and register starter content to showcase the theme on new sites.
            $starter_content = array(
                'widgets'     => array(
                    // Place three core-defined widgets in the sidebar area.
                    'sidebar-1' => array(
                        'text_business_info',
                        'search',
                        'text_about',
                    ),

                    // Add the core-defined business info widget to the footer 1 area.
                    'sidebar-2' => array(
                        'text_business_info',
                    ),

                    // Put two core-defined widgets in the footer 2 area.
                    'sidebar-3' => array(
                        'text_about',
                        'search',
                    ),
                ),

                // Specify the core-defined pages to create and add custom thumbnails to some of them.
                'posts'       => array(
                    'home',
                    'about'            => array(
                        'thumbnail' => '{{image-sandwich}}',
                    ),
                    'contact'          => array(
                        'thumbnail' => '{{image-espresso}}',
                    ),
                    'blog'             => array(
                        'thumbnail' => '{{image-coffee}}',
                    ),
                    'homepage-section' => array(
                        'thumbnail' => '{{image-espresso}}',
                    ),
                ),

                // Create the custom image attachments used as post thumbnails for pages.
                'attachments' => array(
                    'image-espresso' => array(
                        'post_title' => _x( 'Espresso', 'Theme starter content', 'inspiro' ),
                        'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
                    ),
                    'image-sandwich' => array(
                        'post_title' => _x( 'Sandwich', 'Theme starter content', 'inspiro' ),
                        'file'       => 'assets/images/sandwich.jpg',
                    ),
                    'image-coffee'   => array(
                        'post_title' => _x( 'Coffee', 'Theme starter content', 'inspiro' ),
                        'file'       => 'assets/images/coffee.jpg',
                    ),
                ),

                // Default to a static front page and assign the front and posts pages.
                'options'     => array(
                    'show_on_front'  => 'page',
                    'page_on_front'  => '{{home}}',
                    'page_for_posts' => '{{blog}}',
                ),

                // Set the front page section theme mods to the IDs of the core-registered pages.
                'theme_mods'  => array(
                    'panel_1' => '{{homepage-section}}',
                    'panel_2' => '{{about}}',
                    'panel_3' => '{{blog}}',
                    'panel_4' => '{{contact}}',
                ),

                // Set up nav menus for each of the two areas registered in the theme.
                'nav_menus'   => array(
                    // Assign a menu to the "top" location.
                    'top'    => array(
                        'name'  => __( 'Top Menu', 'inspiro' ),
                        'items' => array(
                            'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                            'page_about',
                            'page_blog',
                            'page_contact',
                        ),
                    ),

                    // Assign a menu to the "social" location.
                    'social' => array(
                        'name'  => __( 'Social Links Menu', 'inspiro' ),
                        'items' => array(
                            'link_yelp',
                            'link_facebook',
                            'link_twitter',
                            'link_instagram',
                            'link_email',
                        ),
                    ),
                ),
            );

            /**
             * Filters Inspiro array of starter content.
             *
             * @since Inspiro 1.0.0
             *
             * @param array $starter_content Array of starter content.
             */
            $starter_content = apply_filters( 'inspiro_starter_content', $starter_content );

            add_theme_support( 'starter-content', $starter_content );
        }

        /**
         * Set the content width in pixels, based on the theme's design and stylesheet.
         *
         * Priority 0 to make it available to lower priority callbacks.
         *
         * @since 1.0.0
         * 
         * @global int $content_width
         */
        public function theme_content_width() {

            $content_width = $GLOBALS['content_width'];

            // Get layout.
            $page_layout = get_theme_mod( 'page_layout' );

            // Check if layout is one column.
            if ( 'one-column' === $page_layout ) {
                if ( inspiro_is_frontpage() ) {
                    $content_width = 644;
                } elseif ( is_page() ) {
                    $content_width = 740;
                }
            }

            // Check if is single post and there is no sidebar.
            if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
                $content_width = 740;
            }

            /**
             * Filters Inspiro content width of the theme.
             *
             * @since 1.0.0
             *
             * @param int $content_width Content width in pixels.
             */
            $GLOBALS['content_width'] = apply_filters( 'inspiro_content_width', $content_width );
        }
    }

}

Inspiro_After_Setup_Theme::get_instance();