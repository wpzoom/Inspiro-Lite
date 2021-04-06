<?php

/**
 * Register custom fonts.
 */
function inspiro_fonts_url() {
    $fonts_url = '';

    /*
     * translators: If there are characters in your language that are not supported
     * by Libre Franklin, translate this to 'off'. Do not translate into your own language.
     */
    $libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'inspiro' );

    if ( 'off' !== $libre_franklin ) {
        $font_families = array();

        $font_families[] = 'Libre Franklin:200,200i,300,300i,400,400i,600,600i,700,700i|Montserrat:500,700';

        $query_args = array(
            'family'  => urlencode( implode( '|', $font_families ) ),
            'subset'  => urlencode( 'latin,latin-ext' ),
            'display' => urlencode( 'fallback' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}

/**
 * Get assets url depending on constant SCRIPT_DEBUG.
 * If value of this constant is `true` then theme will load unminified assets
 *
 * @since 1.0.0
 *
 * @param  string $filename The file name
 * @param  string $filetype The file type [css|js]
 * @return string           The full assets url
 */
function inspiro_get_assets_uri( $filename, $filetype ) {
    $assets_uri = '';

    // Directory and Extension
    $file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
    $dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

    $css_uri = INSPIRO_THEME_URI . 'assets/css/' . $dir_name . '/';
    $js_uri = INSPIRO_THEME_URI . 'assets/js/' . $dir_name . '/';

    if ( 'css' === $filetype ) {
        $assets_uri = $css_uri . $filename . $file_prefix .'.'. $filetype;
    } elseif ( 'js' === $filetype ) {
        $assets_uri = $js_uri . $filename . $file_prefix .'.'. $filetype;
    }

    return $assets_uri;
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Inspiro 1.0.0
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function inspiro_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'inspiro-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'inspiro_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inspiro_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'inspiro' ),
            'id'            => 'sidebar',
            'description'   => __( 'Main sidebar that is displayed on the right and can be toggled by clicking on the menu icon.', 'inspiro' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '<div class="clear"></div></div>',
            'before_title'  => '<h3 class="title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Blog Sidebar', 'inspiro' ),
            'id'            => 'blog-sidebar',
            'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'inspiro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer 1', 'inspiro' ),
            'id'            => 'footer_1',
            'description'   => __( 'Add widgets here to appear in your footer.', 'inspiro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer 2', 'inspiro' ),
            'id'            => 'footer_2',
            'description'   => __( 'Add widgets here to appear in your footer.', 'inspiro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer 3', 'inspiro' ),
            'id'            => 'footer_3',
            'description'   => __( 'Add widgets here to appear in your footer.', 'inspiro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer 4', 'inspiro' ),
            'id'            => 'footer_4',
            'description'   => __( 'Add widgets here to appear in your footer.', 'inspiro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Header Social Icons', 'inspiro' ),
            'id'            => 'header_social',
            'description'   => __( 'Widget area in the header. Install the "Social Icons Widget by WPZOOM" plugin and add the widget here.', 'inspiro' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="title"><span>',
            'after_title'   => '</span></h3>',
        )
    );


    register_sidebar(
        array(
            'name'          => __( 'Footer Instagram Bar', 'inspiro' ),
            'id'            => 'footer_instagram_section',
            'description'   => __( 'Widget area for "Instagram widget by WPZOOM".', 'inspiro' ),
            'before_widget' => '<section class="widget %2$s" id="%1$s">',
            'after_widget'  => '<div class="clear"></div></section>',
            'before_title'  => '<h3 class="title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'inspiro_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Read more' link.
 *
 * @since Inspiro 1.0.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Read more' link prepended with an ellipsis.
 */
function inspiro_excerpt_more( $link ) {
    if ( is_admin() ) {
        return $link;
    }

    $link = sprintf(
        '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url( get_permalink( get_the_ID() ) ),
        /* translators: %s: Post title. */
        sprintf( __( 'Read more<span class="screen-reader-text"> "%s"</span>', 'inspiro' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'inspiro_excerpt_more' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Inspiro 1.0.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function inspiro_content_image_sizes_attr( $sizes, $size ) {
    $width = $size[0];

    if ( 740 <= $width ) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if ( is_active_sidebar( 'blog-sidebar' ) || is_archive() || is_search() || is_home() || is_page() ) {
        if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'inspiro_content_image_sizes_attr', 10, 2 );

/**
 * Filters the `sizes` value in the header image markup.
 *
 * @since Inspiro 1.0.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function inspiro_header_image_tag( $html, $header, $attr ) {
    if ( isset( $attr['sizes'] ) ) {
        $html = str_replace( $attr['sizes'], '100vw', $html );
    }
    return $html;
}
add_filter( 'get_header_image_tag', 'inspiro_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Inspiro 1.0.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function inspiro_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
    if ( is_archive() || is_search() || is_home() ) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'inspiro_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Inspiro 1.0.0
 *
 * @param string $template front-page.php.
 * @return string The template to be used: blank if is_home() is true (defaults to index.php),
 *                otherwise $template.
 */
function inspiro_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'inspiro_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Inspiro 1.0.0
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function inspiro_widget_tag_cloud_args( $args ) {
    $args['largest']  = 1;
    $args['smallest'] = 1;
    $args['unit']     = 'em';
    $args['format']   = 'list';

    return $args;
}
add_filter( 'widget_tag_cloud_args', 'inspiro_widget_tag_cloud_args' );

/**
 * Gets unique ID.
 *
 * This is a PHP implementation of Underscore's uniqueId method. A static variable
 * contains an integer that is incremented with each call. This number is returned
 * with the optional prefix. As such the returned value is not universally unique,
 * but it is unique across the life of the PHP process.
 *
 * @since Inspiro 1.0.0
 *
 * @see wp_unique_id() Themes requiring WordPress 5.0.3 and greater should use this instead.
 *
 * @param string $prefix Prefix for the returned ID.
 * @return string Unique ID.
 */
function inspiro_unique_id( $prefix = '' ) {
    static $id_counter = 0;
    if ( function_exists( 'wp_unique_id' ) ) {
        return wp_unique_id( $prefix );
    }
    return $prefix . (string) ++$id_counter;
}

/**
 * Show custom logo or blog title and description (backward compatibility)
 */
function inspiro_custom_logo() {
    has_custom_logo() ? the_custom_logo() : printf( '<a href="%1$s" title="%2$s" class="custom-logo-text">%3$s</a>', esc_url( home_url() ), esc_html( get_bloginfo( 'description' ) ), esc_html( get_theme_mod( 'custom_logo_text', get_bloginfo( 'name' ) ) ) );
}

/**
 * Displays the sidebar after the openning <body> tag.
 */
function display_sidebar_body_open() {
    get_sidebar();
}
add_action( 'wp_body_open', 'display_sidebar_body_open' );

/**
 * Custom Comments Template.
 */
if ( ! function_exists( 'inspiro_comment' ) ) {

    function inspiro_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
            case 'comment' :
                ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php echo get_avatar( $comment, 50 ); ?>
                        <?php printf( '<cite class="fn">%s</cite>', get_comment_author_link() ); ?>

                        <div class="comment-meta commentmetadata"><a
                                href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                <?php printf( __( '%s @ %s', 'inspiro' ), get_comment_date(), get_comment_time() ); ?></a>
                            <?php comment_reply_link( array_merge( $args, array(
                                'depth'      => $depth,
                                'max_depth'  => $args['max_depth'],
                                'reply_text' => __( 'Reply', 'inspiro' ),
                                'before'     => '&nbsp;·&nbsp;&nbsp;'
                            ) ) ); ?>
                            <?php edit_comment_link( __( 'Edit', 'inspiro' ), '&nbsp;·&nbsp;&nbsp;' ); ?>

                        </div>
                        <!-- .comment-meta .commentmetadata -->

                    </div>
                    <!-- .comment-author .vcard -->
                    <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'inspiro' ); ?></em>
                        <br/>
                    <?php endif; ?>

                    <div class="comment-body"><?php comment_text(); ?></div>

                </div><!-- #comment-<?php comment_ID(); ?>  -->

                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <p><?php esc_html_e( 'Pingback:', 'inspiro' ); ?><?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'inspiro' ), ' ' ); ?></p>
                <?php
                break;
        endswitch;
    }

}

/**
 * WooCommerce compatibility.
 */

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}