<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inspiro_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'inspiro-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'inspiro-front-page';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'blog-sidebar' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}
	if ( is_active_sidebar( 'sidebar' ) ) {
		$classes[] = 'inspiro--with-page-nav';
	}

	// Add class for one or two column page layouts.
	if ( is_page() || is_archive() ) {
		if ( 'one-column' === get_theme_mod( 'page_layout' ) ) {
			$classes[] = 'page-one-column';
		} else {
			$classes[] = 'page-two-column';
		}
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	// Get the colorscheme or the default if there isn't one.
	$colors    = inspiro_sanitize_colorscheme( get_theme_mod( 'colorscheme', 'light' ) );
	$classes[] = 'colors-' . $colors;

	return $classes;
}
add_filter( 'body_class', 'inspiro_body_classes' );

/**
 * Displays the class names for the footer element.
 *
 * @since x.x.x
 * @see https://core.trac.wordpress.org/browser/tags/5.5.1/src/wp-includes/post-template.php#L586
 *
 * @param string|string[] $class Space-separated string or array of class names to add to the class list.
 */
function inspiro_footer_class( $class = '' ) {
	// Separates class names with a single space, collates class names for footer element.
	echo 'class="' . esc_attr( join( ' ', inspiro_get_footer_class( $class ) ) ) . '"';
}

/**
 * Retrieves an array of the class names for the footer element.
 *
 * @since x.x.x
 * @see https://core.trac.wordpress.org/browser/tags/5.5.1/src/wp-includes/post-template.php#L608
 *
 * @param string|string[] $class Space-separated string or array of class names to add to the class list.
 * @return string[] Array of class names.
 */
function inspiro_get_footer_class( $class = '' ) {
	$classes = array('site-footer');
	$widgets_columns = get_theme_mod( 'footer-widget-areas', 3 );

	if ( $widgets_columns > 0 ) {
		$classes[] = 'has-footer-widgets';
	}

	if ( ! empty( $class ) ) {
		if ( ! is_array( $class ) ) {
			$class = preg_split( '#\s+#', $class );
		}
		$classes = array_merge( $classes, $class );
	} else {
		// Ensure that we always coerce class to being an array.
		$class = array();
	}
	
	$classes = array_map( 'esc_attr', $classes );
	
	/**
	 * Filters the list of CSS footer class names.
	 *
	 * @since x.x.x
	 *
	 * @param string[] $classes An array of footer class names.
	 * @param string[] $class   An array of additional class names added to the footer.
	 */
	$classes = apply_filters( 'inspiro_footer_class', $classes, $class );
	
	return array_unique( $classes );
}

/**
 * Checks to see if we're on the front page or not.
 */
function inspiro_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}
