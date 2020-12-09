<?php
/**
 * Inspiro Lite: Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function inspiro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'inspiro_customize_partial_blogname',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'inspiro_customize_partial_blogdescription',
		)
	);

	/**
	 * Custom field for Logo text.
	 */
	$wp_customize->add_setting(
		'custom_logo_text',
		array(
			'default'           => get_bloginfo( 'name' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'custom_logo_text',
		array(
			'type' 		=> 'text',
			'label'		=> __( 'Custom Logo Text', 'inspiro' ),
			'section' 	=> 'title_tagline',
			'priority'	=> 5
		)
	);

	/**
	 * Custom colors.
	 */
	$wp_customize->add_setting(
		'colorscheme',
		array(
			'default'           => 'light',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_colorscheme',
		)
	);

	$wp_customize->add_setting(
		'colorscheme_hue',
		array(
			'default'           => 250,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint', // The hue is stored as a positive integer.
		)
	);

	$wp_customize->add_control(
		'colorscheme',
		array(
			'type'     => 'radio',
			'label'    => __( 'Color Scheme', 'inspiro' ),
			'choices'  => array(
				'light'  => __( 'Light', 'inspiro' ),
				'dark'   => __( 'Dark', 'inspiro' ),
				'custom' => __( 'Custom', 'inspiro' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorscheme_hue',
			array(
				'mode'     => 'hue',
				'section'  => 'colors',
				'priority' => 6,
			)
		)
	);

	/**
	 * Footer.
	 */
	$wp_customize->add_section(
		'footer-area',
		array(
			'title'    => __( 'Footer', 'inspiro' ),
			'priority' => 130, // Before Additional CSS.
		)
	);

	$wp_customize->add_setting(
		'footer-widget-areas',
		array(
			'default'           => 3,
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'footer-widget-areas',
		array(
			'label'           => __( 'Number of Widget Areas', 'inspiro' ),
			'section'         => 'footer-area',
			'type'            => 'radio',
			'choices'         => array(
				__( 'Don\'t display Widgets', 'inspiro' ),
				__( 'One Column', 'inspiro' ),
				__( 'Two Columns', 'inspiro' ),
				__( 'Three Columns', 'inspiro' ),
				__( 'Four Columns', 'inspiro' ),
			),
		)
	);

	/**
	 * Theme Layout.
	 */
	$wp_customize->add_section(
		'theme_layout',
		array(
			'title'    => __( 'Theme Layout', 'inspiro' ),
			'priority' => 50,
	        'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'layout_blog_page',
		array(
			'default'           => 'full',
			'sanitize_callback' => 'inspiro_sanitize_page_layout',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_setting(
		'layout_single_post',
		array(
			'default'           => 'full',
			'sanitize_callback' => 'inspiro_sanitize_page_layout',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'layout_blog_page',
		array(
			'label'           => __( 'Blog Layout', 'inspiro' ),
			'section'         => 'theme_layout',
			'type'            => 'radio',
			'choices'         => array(
				'full' 		  => __( 'Full width', 'inspiro' ),
				'side-right'  => __( 'Sidebar on the right', 'inspiro' ),
			),
			'active_callback' => 'inspiro_is_view_with_layout_option',
		)
	);

	$wp_customize->add_control(
		'layout_single_post',
		array(
			'label'           => __( 'Single Post Layout', 'inspiro' ),
			'section'         => 'theme_layout',
			'type'            => 'radio',
			'choices'         => array(
				'full' 		  => __( 'Full width', 'inspiro' ),
				'side-right'  => __( 'Sidebar on the right', 'inspiro' ),
			),
			'active_callback' => 'inspiro_is_view_with_layout_option',
		)
	);

	/**
	 * Single Post Options.
	 */
	$wp_customize->add_panel(
		'single_post_options_panel',
		array(
		 	'priority'       	=> 51,
		  	'capability'     	=> 'edit_theme_options',
		  	'title'          	=> __( 'Single Post Options', 'inspiro' ),
		  	'active_callback' 	=> 'inspiro_is_view_is_single',
		)
	);

	$wp_customize->add_section(
		'share_buttons',
		array(
			'title'    		=> __( 'Share Buttons', 'inspiro' ),
	        'capability' 	=> 'edit_theme_options',
	        'panel'			=> 'single_post_options_panel',
		)
	);

	$wp_customize->add_setting(
		'post_share',
		array(
			'default'  			=> true,
			'sanitize_callback' => 'wp_validate_boolean',
			'transport'     	=> 'refresh',
		)
	);

	$wp_customize->add_setting(
		'post_share_label_twitter',
		array(
			'default'           => __( 'Share on Twitter', 'inspiro' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting(
		'post_share_label_facebook',
		array(
			'default'           => __( 'Share on Facebook', 'inspiro' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting(
		'post_share_label_linkedin',
		array(
			'default'           => __( 'Share on Linkedin', 'inspiro' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'post_share',
		array(
			'type'            => 'checkbox',
			'label'           => __( 'Display Share Buttons', 'inspiro' ),
			'section'         => 'share_buttons',
		)
	);

	$wp_customize->add_control(
		'post_share_label_twitter',
		array(
			'type' 				=> 'text',
			'label'				=> __( 'Twitter Button Label', 'inspiro' ),
			'section' 			=> 'share_buttons',
			'active_callback' 	=> 'inspiro_is_post_share_buttons_enabled',
		)
	);

	$wp_customize->add_control(
		'post_share_label_facebook',
		array(
			'type' 				=> 'text',
			'label'				=> __( 'Facebook Button Label', 'inspiro' ),
			'section' 			=> 'share_buttons',
			'active_callback' 	=> 'inspiro_is_post_share_buttons_enabled',
		)
	);

	$wp_customize->add_control(
		'post_share_label_linkedin',
		array(
			'type' 				=> 'text',
			'label'				=> __( 'Linkedin Button Label', 'inspiro' ),
			'section' 			=> 'share_buttons',
			'active_callback' 	=> 'inspiro_is_post_share_buttons_enabled',
		)
	);
}
add_action( 'customize_register', 'inspiro_customize_register' );

/**
 * Sanitize the page layout options.
 *
 * @param string $input Page layout.
 */
function inspiro_sanitize_page_layout( $input ) {
	$valid = array(
		'full' 			=> __( 'Full width', 'inspiro' ),
		'side-right' 	=> __( 'Sidebar on the right', 'inspiro' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the colorscheme.
 *
 * @param string $input Color scheme.
 */
function inspiro_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Inspiro Lite 1.0.0
 *
 * @see inspiro_customize_register()
 *
 * @return void
 */
function inspiro_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Inspiro Lite 1.0.0
 *
 * @see inspiro_customize_register()
 *
 * @return void
 */
function inspiro_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function inspiro_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Return whether we're previewing the single page.
 */
function inspiro_is_view_is_single() {
	return is_single();
}

/**
 * Return whether we're on a view that supports a full width or sidebar right layout.
 */
function inspiro_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_front_page() || is_home() || is_single() );
}

/**
 * Return the value of post_share option.
 */
function inspiro_is_post_share_buttons_enabled() {
	return get_theme_mod( 'post_share' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function inspiro_customize_preview_js() {
	wp_enqueue_script( 'inspiro-customize-preview', inspiro_get_assets_uri( 'customize-preview', 'js' ), array( 'customize-preview' ), INSPIRO_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'inspiro_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function inspiro_panels_js() {
	wp_enqueue_script( 'inspiro-customize-controls', inspiro_get_assets_uri( 'customize-controls', 'js' ), array(), INSPIRO_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'inspiro_panels_js' );
