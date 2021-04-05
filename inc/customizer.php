<?php
/**
 * Inspiro Lite: Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function inspiro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Custom Header.
	 */
	$wp_customize->add_section(
		'header_image',
		array(
			'title'    			=> __( 'Homepage Media', 'inspiro' ),
			'theme_supports' 	=> 'custom-header',
			'priority' 			=> 60,
		)
	);

	$wp_customize->add_setting(
		'header_site_title',
		array(
			'default'           => get_bloginfo( 'name' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting(
		'header_site_description',
		array(
			'default'           => get_bloginfo( 'description' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		'header_site_title',
		array(
			'theme_supports'  => array( 'custom-header' ),
			'type'            => 'text',
			'label'           => __( 'Header Title', 'inspiro' ),
			'description'     => __( 'Enter a site title which appears in the header on front-page', 'inspiro' ),
			'section'         => 'header_image',
			'priority'		  => 1,
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'header_site_description',
		array(
			'theme_supports'  => array( 'custom-header' ),
			'type'            => 'textarea',
			'label'           => __( 'Header Description', 'inspiro' ),
			'description'     => __( 'Enter a site description which appears in the header on front-page', 'inspiro' ),
			'section'         => 'header_image',
			'priority'		  => 1,
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'external_header_video',
		array(
			'theme_supports'  => array( 'custom-header', 'video' ),
			'type'            => 'url',
			'label'           => __( 'External Header Video', 'inspiro' ),
			'description'     => __( 'Enter a YouTube or Vimeo URL:', 'inspiro' ),
			'section'         => 'header_image',
			'priority'		  => 5,
			'active_callback' => 'is_header_video_active',
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
		'colorscheme_hex',
		array(
			'default'           => '#0bb4aa',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
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
			'colorscheme_hex',
			array(
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
			'title'    			=> __( 'Theme Layout', 'inspiro' ),
			'description'		=> sprintf( __( 'If you want to display "Sidebar on the right", please make sure you have added some widgets to %s', 'inspiro' ), '<a href="javascript:wp.customize.panel( \'widgets\' ).focus();" title="Open Widgets Panel">' . __( 'Blog Sidebar', 'inspiro') . '</a>' ),
			'priority' 			=> 50,
	        'capability' 		=> 'edit_theme_options',
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
	 * Blog Post Options.
	 */
	$wp_customize->add_panel(
		'blog_post_options_panel',
		array(
		 	'priority'       	=> 51,
		  	'capability'     	=> 'edit_theme_options',
		  	'title'          	=> __( 'Blog Post Options', 'inspiro' ),
		  	'active_callback' 	=> 'inspiro_is_view_is_blog',
		)
	);

	$wp_customize->add_section(
		'blog_post_options',
		array(
			'title'    		=> __( 'Post Options', 'inspiro' ),
	        'capability' 	=> 'edit_theme_options',
	        'panel'			=> 'blog_post_options_panel',
		)
	);

	$wp_customize->add_setting(
		'display_content',
		array(
			'default'  			=> 'excerpt',
			'sanitize_callback' => 'inspiro_sanitize_display_content',
			'transport'     	=> 'refresh',
		)
	);

	$wp_customize->add_control(
		'display_content',
		array(
			'label'           => __( 'Content', 'inspiro' ),
			'section'         => 'blog_post_options',
			'type'            => 'radio',
			'choices'         => array(
				'excerpt' 		=> __( 'Excerpt', 'inspiro' ),
				'full-content'  => __( 'Full Content', 'inspiro' ),
				'none'  		=> __( 'None', 'inspiro' ),
			),
		)
	);

	/**
	 * Single Post Options.
	 */
	// $wp_customize->add_panel(
	// 	'single_post_options_panel',
	// 	array(
	// 	 	'priority'       	=> 52,
	// 	  	'capability'     	=> 'edit_theme_options',
	// 	  	'title'          	=> __( 'Single Post Options', 'inspiro' ),
	// 	  	'active_callback' 	=> 'inspiro_is_view_is_single',
	// 	)
	// );

	/**
	 * Add custom section to Customizer
	 * This section will display upsell message to Customizer at the top of all section panels.
	 * 
	 * @since 1.2.2
	 */
	require INSPIRO_THEME_DIR . '/inc/classes/class-inspiro-customize-section-pro.php';

    $wp_customize->register_section_type( 'Inspiro_Customize_Section_Pro' );

    // Register sections.
    $wp_customize->add_section(
        new Inspiro_Customize_Section_Pro(
            $wp_customize,
            'inspiro_upgrade_pro',
            array(
                'title'    		=> esc_html__( 'Upgrade to Inspiro PRO', 'inspiro' ),
                'description' 	=> esc_html__( 'Unlock premium features: 7 Style Kits, 9 Predefined templates, Automatically play background videos, Portfolios, Premium Support and much more...', 'inspiro' ),
                'pro_text' 		=> esc_html__( 'View Inspiro PRO', 'inspiro' ),
                'pro_url'  		=> 'https://www.wpzoom.com/themes/inspiro/',
                'priority' 		=> 5
            )
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
 * Sanitize the display content.
 *
 * @param string $input Content to display.
 */
function inspiro_sanitize_display_content( $input ) {
	$valid = array( 'excerpt', 'full-content', 'none' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'excerpt';
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function inspiro_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Return whether we're previewing the blog page.
 */
function inspiro_is_view_is_blog() {
	return is_home();
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
 * Bind JS handlers to instantly live-preview changes.
 */
function inspiro_customize_preview_js() {
	wp_enqueue_script(
		'inspiro-customize-preview',
		inspiro_get_assets_uri( 'customize-preview', 'js' ),
		array( 'customize-preview' ),
		INSPIRO_THEME_VERSION,
		true
	);
}
add_action( 'customize_preview_init', 'inspiro_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function inspiro_enqueue_control_scripts() {
	wp_enqueue_script(
		'inspiro-customize-controls',
		inspiro_get_assets_uri( 'customize-controls', 'js' ),
		array( 'customize-controls' ),
		INSPIRO_THEME_VERSION,
		true
	);

	wp_enqueue_style(
		'inspiro-customize-controls',
		inspiro_get_assets_uri( 'customize', 'css' ),
		array(),
		INSPIRO_THEME_VERSION
	);
}
add_action( 'customize_controls_enqueue_scripts', 'inspiro_enqueue_control_scripts' );
