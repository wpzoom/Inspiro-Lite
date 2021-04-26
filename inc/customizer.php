<?php
/**
 * Inspiro Lite: Customizer
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 */

/**
 * Register custom control types.
 *
 * @since x.x.x
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function inspiro_register_control_types( $wp_customize ) {
	// phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-checkbox-multiple-control.php';
	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-select-optgroup-control.php';
	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-font-presets-control.php';
	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-title-control.php';
	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-range-control.php';
	require INSPIRO_THEME_DIR . 'inc/customizer/class-inspiro-customize-more-section.php';
	require INSPIRO_THEME_DIR . 'inc/classes/class-inspiro-customize-section-pro.php';

	// phpcs:enable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

	$wp_customize->register_section_type( 'Inspiro_Customize_Section_Pro' );
	$wp_customize->register_section_type( 'Inspiro_Customize_Range_Control' );
	$wp_customize->register_section_type( 'Inspiro_Customize_Title_Control' );
	$wp_customize->register_section_type( 'Inspiro_Customize_More_Section' );
}
add_action( 'customize_register', 'inspiro_register_control_types' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function inspiro_customize_register( $wp_customize ) {
	/**
	 * Header Colors.
	 */
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting(
		'header_button_textcolor',
		array(
			'theme_supports'       => array( 'custom-header', 'header-text' ),
			'default'              => 'ffffff',
			'transport'            => 'postMessage',
			'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
		)
	);

	$wp_customize->add_setting(
		'header_button_textcolor_hover',
		array(
			'theme_supports'       => array( 'custom-header', 'header-text' ),
			'default'              => 'ffffff',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
		)
	);

	$wp_customize->add_setting(
		'header_button_bgcolor_hover',
		array(
			'theme_supports'       => array( 'custom-header', 'header-text' ),
			'default'              => '0bb4aa',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'inspiro_sanitize_header_button_textcolor',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_button_textcolor',
			array(
				'label'   => esc_html__( 'Header Button Text Color', 'inspiro' ),
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_button_textcolor_hover',
			array(
				'label'   => esc_html__( 'Header Button Text Color Hover', 'inspiro' ),
				'section' => 'colors',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_button_bgcolor_hover',
			array(
				'label'   => esc_html__( 'Header Button Background Color Hover', 'inspiro' ),
				'section' => 'colors',
			)
		)
	);

	/**
	 * Homepage Media Panel.
	 */
	$wp_customize->add_panel(
		'homepage_media_panel',
		array(
			'capability'      => 'edit_theme_options',
			'title'           => esc_html__( 'Homepage Media', 'inspiro' ),
			'active_callback' => 'is_header_video_active',
			'priority'        => 40,
		)
	);

	/**
	 * Media Section.
	 */
	$wp_customize->add_section(
		'header_image',
		array(
			'title'          => esc_html__( 'Media', 'inspiro' ),
			'theme_supports' => 'custom-header',
			'priority'       => 60,
			'panel'          => 'homepage_media_panel',
		)
	);

	$wp_customize->add_control(
		'external_header_video',
		array(
			'theme_supports'  => array( 'custom-header', 'video' ),
			'type'            => 'url',
			'label'           => esc_html__( 'External Header Video', 'inspiro' ),
			'description'     => esc_html__( 'Enter a YouTube or Vimeo URL:', 'inspiro' ),
			'section'         => 'header_image',
			'priority'        => 5,
			'active_callback' => 'is_header_video_active',
		)
	);

	/**
	 * Content Section.
	 */
	$wp_customize->add_section(
		'header_content',
		array(
			'title'          => esc_html__( 'Content', 'inspiro' ),
			'theme_supports' => 'custom-header',
			'priority'       => 70,
			'panel'          => 'homepage_media_panel',
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

	$wp_customize->add_setting(
		'header_button_title',
		array(
			'theme_supports'    => 'custom-header',
			'default'           => '',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting(
		'header_button_url',
		array(
			'theme_supports'    => 'custom-header',
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'inspiro_sanitize_header_button_url',
		)
	);

	$wp_customize->add_setting(
		'header_button_link_open',
		array(
			'capability'        => 'edit_theme_options',
			'default'           => true,
			'sanitize_callback' => 'inspiro_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'header_site_title',
		array(
			'theme_supports'  => array( 'custom-header' ),
			'type'            => 'text',
			'label'           => esc_html__( 'Header Title', 'inspiro' ),
			'description'     => esc_html__( 'Enter a site title which appears in the header on front-page', 'inspiro' ),
			'section'         => 'header_content',
			'priority'        => 1,
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'header_site_description',
		array(
			'theme_supports'  => array( 'custom-header' ),
			'type'            => 'textarea',
			'label'           => esc_html__( 'Header Description', 'inspiro' ),
			'description'     => esc_html__( 'Enter a site description which appears in the header on front-page', 'inspiro' ),
			'section'         => 'header_content',
			'priority'        => 1,
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'header_button_title',
		array(
			'theme_supports'  => 'custom-header',
			'type'            => 'text',
			'label'           => esc_html__( 'Header Button Title', 'inspiro' ),
			'description'     => esc_html__( 'Enter a title for Header Button', 'inspiro' ),
			'section'         => 'header_content',
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'header_button_url',
		array(
			'theme_supports'  => 'custom-header',
			'type'            => 'url',
			'label'           => esc_html__( 'Header Button URL', 'inspiro' ),
			'description'     => esc_html__( 'Enter a Button URL:', 'inspiro' ),
			'section'         => 'header_content',
			'active_callback' => 'is_header_video_active',
		)
	);

	$wp_customize->add_control(
		'header_button_link_open',
		array(
			'type'    => 'checkbox',
			'section' => 'header_content',
			'label'   => esc_html__( 'Open link on new tab', 'inspiro' ),
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
			'type'     => 'text',
			'label'    => esc_html__( 'Custom Logo Text', 'inspiro' ),
			'section'  => 'title_tagline',
			'priority' => 5,
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
			'label'    => esc_html__( 'Color Scheme', 'inspiro' ),
			'choices'  => array(
				'light'  => esc_html__( 'Light', 'inspiro' ),
				'dark'   => esc_html__( 'Dark', 'inspiro' ),
				'custom' => esc_html__( 'Custom', 'inspiro' ),
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
			'title'    => esc_html__( 'Footer', 'inspiro' ),
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
			'label'   => esc_html__( 'Number of Widget Areas', 'inspiro' ),
			'section' => 'footer-area',
			'type'    => 'radio',
			'choices' => array(
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
			'title'       => esc_html__( 'Theme Layout', 'inspiro' ),
			'description' => sprintf( __( 'If you want to display "Sidebar on the right", please make sure you have added some widgets to %s', 'inspiro' ), '<a href="javascript:wp.customize.panel( \'widgets\' ).focus();" title="Open Widgets Panel">' . __( 'Blog Sidebar', 'inspiro' ) . '</a>' ), // phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
			'priority'    => 50,
			'capability'  => 'edit_theme_options',
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
			'label'           => esc_html__( 'Blog Layout', 'inspiro' ),
			'section'         => 'theme_layout',
			'type'            => 'radio',
			'choices'         => array(
				'full'       => esc_html__( 'Full width', 'inspiro' ),
				'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
			),
			'active_callback' => 'inspiro_is_view_with_layout_option',
		)
	);

	$wp_customize->add_control(
		'layout_single_post',
		array(
			'label'           => esc_html__( 'Single Post Layout', 'inspiro' ),
			'section'         => 'theme_layout',
			'type'            => 'radio',
			'choices'         => array(
				'full'       => esc_html__( 'Full width', 'inspiro' ),
				'side-right' => esc_html__( 'Sidebar on the right', 'inspiro' ),
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
			'priority'        => 51,
			'capability'      => 'edit_theme_options',
			'title'           => esc_html__( 'Blog Post Options', 'inspiro' ),
			'active_callback' => 'inspiro_is_view_is_blog',
		)
	);

	$wp_customize->add_section(
		'blog_post_options',
		array(
			'title'      => esc_html__( 'Post Options', 'inspiro' ),
			'capability' => 'edit_theme_options',
			'panel'      => 'blog_post_options_panel',
		)
	);

	$wp_customize->add_setting(
		'display_content',
		array(
			'default'           => 'excerpt',
			'sanitize_callback' => 'inspiro_sanitize_display_content',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'display_content',
		array(
			'label'   => esc_html__( 'Content', 'inspiro' ),
			'section' => 'blog_post_options',
			'type'    => 'radio',
			'choices' => array(
				'excerpt'      => esc_html__( 'Excerpt', 'inspiro' ),
				'full-content' => esc_html__( 'Full Content', 'inspiro' ),
				'none'         => esc_html__( 'None', 'inspiro' ),
			),
		)
	);

	// Register sections.
	$wp_customize->add_section(
		new Inspiro_Customize_Section_Pro(
			$wp_customize,
			'inspiro_upgrade_pro',
			array(
				'title'       => esc_html__( 'Upgrade to Inspiro PRO', 'inspiro' ),
				'description' => esc_html__( 'Unlock premium features: 7 Style Kits, Video Backgrounds, Portfolio Integration, Premium Support and much more...', 'inspiro' ),
				'pro_text'    => esc_html__( 'View Inspiro PRO', 'inspiro' ),
				'pro_url'     => 'https://www.wpzoom.com/themes/inspiro/',
				'priority'    => 5,
			)
		)
	);

	/**
	 * Fonts
	 *
	 * @since x.x.x
	 */

	$wp_customize->add_section(
		'inspiro_fonts_section',
		array(
			'title'    => __( 'Fonts', 'inspiro' ),
			'priority' => 41,
		)
	);

	// phpcs:disable Squiz.PHP.CommentedOutCode.Found
	// $wp_customize->add_control(
	// new Inspiro_Customize_Font_Presets_Control(
	// $wp_customize,
	// 'inspiro_font_presets',
	// array(
	// 'section'  => 'inspiro_fonts_section',
	// 'settings' => array(),
	// )
	// )
	// );
	// phpcs:enable Squiz.PHP.CommentedOutCode.Found

	$wp_customize->add_control(
		new Inspiro_Customize_Title_Control(
			$wp_customize,
			'inspiro_fonts_section_title_body',
			array(
				'label'    => __( 'Body', 'inspiro' ),
				'section'  => 'inspiro_fonts_section',
				'settings' => array(),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_body_font',
		array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_fonts',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Select_Optgroup_Control(
			$wp_customize,
			'inspiro_body_font',
			array(
				'label'   => __( 'Body Font', 'inspiro' ),
				'section' => 'inspiro_fonts_section',
				'choices' => array(
					esc_html__( 'Default Theme Font', 'inspiro' )   => array(
						'' => __( 'System UI Font', 'inspiro' ),
					),
					esc_html__( 'Curated Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'body', true ),
					esc_html__( 'Additional Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'body', false ),
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_body_font_size',
		array(
			'default'           => 20,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_body_font_size',
			array(
				'label'       => __( 'Body Font Size (px)', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 16,
					'max'  => 22,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_body_line_height',
		array(
			'default'           => 1.7,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_float',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_body_line_height',
			array(
				'label'       => __( 'Body Line Height', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 2,
					'step' => 0.1,
				),
			)
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Title_Control(
			$wp_customize,
			'inspiro_fonts_section_title_headings',
			array(
				'label'    => __( 'Headings', 'inspiro' ),
				'section'  => 'inspiro_fonts_section',
				'settings' => array(),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_heading_font',
		array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_fonts',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Select_Optgroup_Control(
			$wp_customize,
			'inspiro_heading_font',
			array(
				'label'   => __( 'Headings Font', 'inspiro' ),
				'section' => 'inspiro_fonts_section',
				'choices' => array(
					esc_html__( 'Default Theme Font', 'inspiro' )   => array(
						'' => __( 'System Font', 'inspiro' ),
					),
					esc_html__( 'Curated Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'heading', true ),
					esc_html__( 'Additional Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'heading', false ),
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_heading_font_weight',
		array(
			'default'           => '400',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_font_weight',
		)
	);

	$wp_customize->add_control(
		'inspiro_heading_font_weight',
		array(
			'label'   => __( 'Headings Font Weight', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(),
		)
	);

	$wp_customize->add_setting(
		'inspiro_heading_letter_spacing',
		array(
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_float',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_heading_letter_spacing',
			array(
				'label'       => __( 'Headings Letter Spacing', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => -0.05,
					'max'  => 0.05,
					'step' => 0.001,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_h1_font_size',
		array(
			'default'           => 96,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_h1_font_size',
			array(
				'label'       => __( 'Page Title Font Size (px)', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 56,
					'max'  => 96,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Title_Control(
			$wp_customize,
			'inspiro_fonts_section_title_tertiary_font',
			array(
				'label'    => __( 'Secondary Elements', 'inspiro' ),
				'section'  => 'inspiro_fonts_section',
				'settings' => array(),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_secondary_elements_font',
		array(
			'default'           => 'body',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_choices',
		)
	);

	$wp_customize->add_control(
		'inspiro_secondary_elements_font',
		array(
			'label'       => __( 'Secondary Elements Font', 'inspiro' ),
			'section'     => 'inspiro_fonts_section',
			'type'        => 'select',
			'choices'     => array(
				'body'    => __( 'Body Font', 'inspiro' ),
				'heading' => __( 'Headings Font', 'inspiro' ),
			),
			'description' => __( 'Applies to meta, footer, buttons, captions, inputs…', 'inspiro' ),
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Title_Control(
			$wp_customize,
			'inspiro_fonts_section_title_logo',
			array(
				'label'    => __( 'Site Title', 'inspiro' ),
				'section'  => 'inspiro_fonts_section',
				'settings' => array(),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_font',
		array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_fonts',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Select_Optgroup_Control(
			$wp_customize,
			'inspiro_logo_font',
			array(
				'label'   => __( 'Site Title Font', 'inspiro' ),
				'section' => 'inspiro_fonts_section',
				'choices' => array(
					esc_html__( 'Default Theme Font', 'inspiro' )   => array(
						'' => __( 'Headings Font', 'inspiro' ),
					),
					esc_html__( 'Curated Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'heading', true ),
					esc_html__( 'Additional Google Fonts', 'inspiro' ) => inspiro_get_font_choices( 'heading', false ),
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_font_weight',
		array(
			'default'           => '400',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_font_weight',
		)
	);

	$wp_customize->add_control(
		'inspiro_logo_font_weight',
		array(
			'label'   => __( 'Site Title Font Weight', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(),
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_font_size',
		array(
			'transport'         => 'postMessage',
			'default'           => 24,
			'sanitize_callback' => 'inspiro_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_logo_font_size',
			array(
				'label'       => __( 'Site Title Font Size (px)', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 80,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_font_size_mobile',
		array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_logo_font_size_mobile',
			array(
				'label'       => __( 'Site Title Font Size on Mobile (px)', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 80,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_letter_spacing',
		array(
			'transport'         => 'postMessage',
			'default'           => 0,
			'sanitize_callback' => 'inspiro_sanitize_float',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_logo_letter_spacing',
			array(
				'label'       => __( 'Site Title Letter Spacing', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => -0.1,
					'max'  => 0.1,
					'step' => 0.001,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_logo_text_transform',
		array(
			'default'           => 'uppercase',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_choices',
		)
	);

	$wp_customize->add_control(
		'inspiro_logo_text_transform',
		array(
			'label'   => __( 'Site Title Text Transform', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(
				'none'       => _x( 'None', 'text transform', 'inspiro' ),
				'uppercase'  => __( 'Uppercase', 'inspiro' ),
				'lowercase'  => __( 'Lowercase', 'inspiro' ),
				'capitalize' => __( 'Capitalize', 'inspiro' ),
			),
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Title_Control(
			$wp_customize,
			'inspiro_fonts_section_title_menu',
			array(
				'label'    => __( 'Primary Menu', 'inspiro' ),
				'section'  => 'inspiro_fonts_section',
				'settings' => array(),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_menu_font',
		array(
			'default'           => 'body',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_choices',
		)
	);

	$wp_customize->add_control(
		'inspiro_menu_font',
		array(
			'label'   => __( 'Menu Font', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(
				'body'    => __( 'Body Font', 'inspiro' ),
				'heading' => __( 'Headings Font', 'inspiro' ),
			),
		)
	);

	$wp_customize->add_setting(
		'inspiro_menu_font_weight',
		array(
			'default'           => '400',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_font_weight',
		)
	);

	$wp_customize->add_control(
		'inspiro_menu_font_weight',
		array(
			'label'   => __( 'Menu Font Weight', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(),
		)
	);

	$wp_customize->add_setting(
		'inspiro_menu_font_size',
		array(
			'transport'         => 'postMessage',
			'default'           => 20,
			'sanitize_callback' => 'inspiro_sanitize_integer',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_menu_font_size',
			array(
				'label'       => __( 'Menu Font Size (px)', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => 14,
					'max'  => 22,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_menu_letter_spacing',
		array(
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_float',
		)
	);

	$wp_customize->add_control(
		new Inspiro_Customize_Range_Control(
			$wp_customize,
			'inspiro_menu_letter_spacing',
			array(
				'label'       => __( 'Menu Letter Spacing', 'inspiro' ),
				'section'     => 'inspiro_fonts_section',
				'input_attrs' => array(
					'min'  => -0.1,
					'max'  => 0.1,
					'step' => 0.001,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'inspiro_menu_text_transform',
		array(
			'transport'         => 'postMessage',
			'sanitize_callback' => 'inspiro_sanitize_choices',
		)
	);

	$wp_customize->add_control(
		'inspiro_menu_text_transform',
		array(
			'label'   => __( 'Menu Text Transform', 'inspiro' ),
			'section' => 'inspiro_fonts_section',
			'type'    => 'select',
			'choices' => array(
				''           => _x( 'None', 'text transform', 'inspiro' ),
				'uppercase'  => __( 'Uppercase', 'inspiro' ),
				'lowercase'  => __( 'Lowercase', 'inspiro' ),
				'capitalize' => __( 'Capitalize', 'inspiro' ),
			),
		)
	);
}
add_action( 'customize_register', 'inspiro_customize_register', 11 );

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
