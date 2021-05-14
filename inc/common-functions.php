<?php
/**
 * Inspiro Lite: Common functions
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 */

/**
 * Get assets url depending on constant SCRIPT_DEBUG.
 * If value of this constant is `true` then theme will load unminified assets
 *
 * @since 1.0.0
 *
 * @param  string $filename The file name.
 * @param  string $filetype The file type [css|js].
 * @param  string $folder   The folder name.
 * @return string           The full assets url.
 */
function inspiro_get_assets_uri( $filename, $filetype, $folder = 'assets/' ) {
	$assets_uri = '';

	// Directory and Extension.
	$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
	$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';
	$file_rtl    = ( is_rtl() ) ? '-rtl' : '';

	$css_uri = INSPIRO_THEME_URI . $folder . 'css/' . $dir_name . '/';
	$js_uri  = INSPIRO_THEME_URI . $folder . 'js/' . $dir_name . '/';

	if ( 'css' === $filetype ) {
		$assets_uri = $css_uri . $filename . $file_rtl . $file_prefix . '.' . $filetype;
	} elseif ( 'js' === $filetype ) {
		$assets_uri = $js_uri . $filename . $file_prefix . '.' . $filetype;
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
	has_custom_logo() ? the_custom_logo() : printf( '<a href="%1$s" title="%2$s" class="custom-logo-text">%3$s</a>', esc_url( home_url() ), esc_html( get_bloginfo( 'description' ) ), esc_html( inspiro_get_theme_mod('custom_logo_text') ) );
}

/**
 * Displays the sidebar after the openning <body> tag.
 */
function display_sidebar_body_open() {
	get_sidebar();
}
add_action( 'wp_body_open', 'display_sidebar_body_open' );

if ( ! function_exists( 'inspiro_comment' ) ) {
	/**
	 * Custom Comments Template
	 *
	 * @param string  $comment Comment text.
	 * @param array   $args Comment args.
	 * @param boolean $depth Comment depth.
	 * @return void
	 */
	function inspiro_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
		switch ( $comment->comment_type ) :
			case '':
			case 'comment':
				?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, 50 ); ?>
						<?php printf( '<cite class="fn">%s</cite>', get_comment_author_link() ); ?>

						<div class="comment-meta commentmetadata"><a
								href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<?php
								/* translators: %1$s: Comment date %2$s: Comment time */
								printf( __( '%1$s @ %2$s', 'inspiro' ), get_comment_date(), get_comment_time() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								?>
								</a>
							<?php
							comment_reply_link(
								array_merge(
									$args,
									array(
										'depth'      => $depth,
										'max_depth'  => $args['max_depth'],
										'reply_text' => __( 'Reply', 'inspiro' ),
										'before'     => '&nbsp;·&nbsp;&nbsp;',
									)
								)
							);
							?>
							<?php edit_comment_link( __( 'Edit', 'inspiro' ), '&nbsp;·&nbsp;&nbsp;' ); ?>

						</div>
						<!-- .comment-meta .commentmetadata -->

					</div>
					<!-- .comment-author .vcard -->
					<?php if ( '0' === $comment->comment_approved ) : ?>
						<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'inspiro' ); ?></em>
						<br/>
					<?php endif; ?>

					<div class="comment-body"><?php comment_text(); ?></div>

				</div><!-- #comment-<?php comment_ID(); ?>  -->

				<?php
				break;
			case 'pingback':
			case 'trackback':
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

if ( ! function_exists( 'inspiro_get_prop' ) ) :

	/**
	 * Get a specific property of an array without needing to check if that property exists.
	 *
	 * Provide a default value if you want to return a specific value if the property is not set.
	 *
	 * @since  1.3.0
	 * @access public
	 * @author Gravity Forms - Easiest Tool to Create Advanced Forms for Your WordPress-Powered Website.
	 * @link  https://www.gravityforms.com/
	 *
	 * @param array  $array   Array from which the property's value should be retrieved.
	 * @param string $prop    Name of the property to be retrieved.
	 * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
	 *
	 * @return null|string|mixed The value
	 */
	function inspiro_get_prop( $array, $prop, $default = null ) {
		if ( ! is_array( $array ) && ! ( is_object( $array ) && $array instanceof ArrayAccess ) ) {
			return $default;
		}

		if ( ( isset( $array[ $prop ] ) && false === $array[ $prop ] ) ) {
			return false;
		}

		if ( isset( $array[ $prop ] ) ) {
			$value = $array[ $prop ];
		} else {
			$value = '';
		}

		return empty( $value ) && null !== $default ? $default : $value;
	}

endif;

/**
 * Register Block Patterns categories
 *
 * @since 1.3.0
 *
 * @return void
 */
function inspiro_register_block_categories() {
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
		register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
			'inspiro',
			array( 'label' => _x( 'Inspiro', 'Block pattern category', 'inspiro' ) )
		);
	}
}
add_action( 'init', 'inspiro_register_block_categories' );

/**
 * Register Block Patterns
 *
 * @return void
 */
function inspiro_register_block_patterns() {
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'inspiro/homepage',
			array(
				'title'       => __( 'Homepage', 'inspiro' ),
				'description' => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'inspiro' ),
				'content'     => "<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\"><meta charset=\"utf-8\">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":55} -->\n<div style=\"height:55px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:group {\"align\":\"full\",\"style\":{\"color\":{\"background\":\"#e5e9ec\"}}} -->\n<div class=\"wp-block-group alignfull has-background\" style=\"background-color:#e5e9ec\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading -->\n<h2>About us</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"left\"} -->\n<div class=\"wp-block-buttons is-content-justification-left\"><!-- wp:button {\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link no-border-radius\" href=\"#\">About Us</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:spacer {\"height\":48} -->\n<div style=\"height:48px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:image {\"id\":26,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_JKMGVEJMPU.jpg\" alt=\"\" class=\"wp-image-26\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->\n\n<!-- wp:group {\"align\":\"full\"} -->\n<div class=\"wp-block-group alignfull\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer {\"height\":48} -->\n<div style=\"height:48px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:image {\"id\":27,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_M6D1GS9PSL.jpg\" alt=\"\" class=\"wp-image-27\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading -->\n<h2>Our Services</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link no-border-radius\" href=\"#\">Services</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->\n\n<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"black\"} -->\n<div class=\"wp-block-group alignfull has-black-background-color has-background\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"white\"} -->\n<h2 class=\"has-text-align-center has-white-color has-text-color\"><strong>Gallery</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:gallery {\"ids\":[28,27,26,25,24,29],\"linkTo\":\"none\",\"align\":\"center\"} -->\n<figure class=\"wp-block-gallery aligncenter columns-3 is-cropped\"><ul class=\"blocks-gallery-grid\"><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_P9QYJ8AAL8.jpg\" alt=\"\" data-id=\"28\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_P9QYJ8AAL8.jpg\" data-link=\"#\" class=\"wp-image-28\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_M6D1GS9PSL.jpg\" alt=\"\" data-id=\"27\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_M6D1GS9PSL.jpg\" data-link=\"#\" class=\"wp-image-27\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_JKMGVEJMPU.jpg\" alt=\"\" data-id=\"26\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_JKMGVEJMPU.jpg\" data-link=\"#\" class=\"wp-image-26\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_CXVCF2NNWJ.jpg\" alt=\"\" data-id=\"25\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_CXVCF2NNWJ.jpg\" data-link=\"#\" class=\"wp-image-25\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_89BQZ89TLH.jpg\" alt=\"\" data-id=\"24\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_89BQZ89TLH.jpg\" data-link=\"#\" class=\"wp-image-24\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_PGXCCTCLB5.jpg\" alt=\"\" data-id=\"29\" data-full-url=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_PGXCCTCLB5.jpg\" data-link=\"#\" class=\"wp-image-29\"/></figure></li></ul></figure>\n<!-- /wp:gallery --></div></div>\n<!-- /wp:group -->\n\n<!-- wp:cover {\"url\":\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_89BQZ89TLH.jpg\",\"id\":24,\"hasParallax\":true,\"dimRatio\":40,\"overlayColor\":\"black\",\"minHeight\":375,\"minHeightUnit\":\"px\",\"contentPosition\":\"center center\",\"align\":\"full\",\"className\":\"is-position-center-center\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-40 has-black-background-color has-background-dim has-parallax is-position-center-center\" style=\"background-image:url(https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_89BQZ89TLH.jpg);min-height:375px\"><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"},\"color\":{\"text\":\"#fffffa\"}},\"fontSize\":\"huge\"} -->\n<p class=\"has-text-align-center has-text-color has-huge-font-size\" style=\"color:#fffffa;line-height:1.1\"><strong>Unleash your creativity with Inspiro</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":39} -->\n<div style=\"height:39px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\"} -->\n<div class=\"wp-block-buttons is-content-justification-center\"><!-- wp:button {\"borderRadius\":0,\"textColor\":\"white\",\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-white-color has-text-color no-border-radius\" href=\"#\">Contact us</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
				'categories'  => array( 'inspiro' ),
			)
		);

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'inspiro/full-section',
			array(
				'title'       => __( 'Full-width section', 'inspiro' ),
				'description' => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'inspiro' ),
				'content'     => "<!-- wp:group {\"align\":\"full\",\"style\":{\"color\":{\"background\":\"#e5e9ec\"}}} -->\n<div class=\"wp-block-group alignfull has-background\" style=\"background-color:#e5e9ec\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading -->\n<h2>About us</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"left\"} -->\n<div class=\"wp-block-buttons is-content-justification-left\"><!-- wp:button {\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link no-border-radius\" href=\"#\">About Us</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:spacer {\"height\":48} -->\n<div style=\"height:48px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:image {\"id\":26,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://wp-themes.com/wp-content/themes/inspiro/assets/images/StockSnap_JKMGVEJMPU.jpg\" alt=\"\" class=\"wp-image-26\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
				'categories'  => array( 'inspiro' ),
			)
		);
	}
}
add_action( 'init', 'inspiro_register_block_patterns' );
