<?php
/**
 * Theme Upgrader: Helps to set all settings needed to upgrade to premium version
 *
 * @package Inspiro
 * @subpackage Upgrader
 * @since Inspiro x.x.x
 */

/**
 * Theme Upgrader class for the Inspiro theme.
 *
 * @since x.x.x
 */
class Inspiro_Theme_Upgrader {
	/**
	 * WP_Upgrader instance
	 *
	 * @var WP_Upgrader
	 */
	private $wp_upgrader;

	/**
	 * Current theme data
	 *
	 * @var array
	 */
	private $old_theme_data = array();

	/**
	 * Message strings
	 *
	 * @var array
	 */
	public $strings = array();

	/**
	 * Uploaded premium version.
	 *
	 * @var boolean
	 */
	private $uploaded_premium = false;

	/**
	 * Store attributes to insert new custom post type slider
	 *
	 * @var array
	 */
	public $slide_post_attr = array();

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->generic_strings();

		add_filter( 'upgrader_source_selection', array( $this, 'set_upgrader_instance' ), 10, 4 );
		add_filter( 'upgrader_source_selection', array( $this, 'start_upgrader_process' ), 11, 4 );
		add_filter( 'install_theme_overwrite_comparison', array( $this, 'theme_overwrite_table' ), 10, 3 );
	}

	/**
	 * Filters the source file location for the upgrade package.
	 *
	 * @param string      $source        File source location.
	 * @param string      $remote_source Remote file source location.
	 * @param WP_Upgrader $upgrader      WP_Upgrader instance.
	 * @param array       $hook_extra    Extra arguments passed to hooked filters.
	 */
	public function set_upgrader_instance( $source, $remote_source, $upgrader, $hook_extra ) {
		if ( 'theme' === $hook_extra['type'] ) {
			$this->wp_upgrader = $upgrader;
		}
		return $source;
	}

	/**
	 * Check new theme version to make sure we have premium version uploaded
	 *
	 * @param array $data New theme data.
	 * @return boolean
	 */
	public function check_new_theme_version( $data ) {
		if ( version_compare( $data['Version'], '6.8.0', '>=' ) ) {
			$this->uploaded_premium = true;
		}
		return $this->uploaded_premium;
	}

	/**
	 * Add the generic strings.
	 */
	public function generic_strings() {
		$this->strings['migrate_customizer_settings'] = __( 'Migrate Customizer Settings to Inspiro Premium', 'inspiro' ) . '&hellip;';
		/* translators: %s: New slide title */
		$this->strings['setup_slider_item']           = __( 'Setup new slider item with title: %s', 'inspiro' ) . '&hellip;';
		$this->strings['setup_slider_item_error']     = __( 'Something went wrong to create new slider item!', 'inspiro' );
		$this->strings['create_temporary_slider_cpt'] = __( 'Create temporary custom post type Slider', 'inspiro' ) . '&hellip;';
	}

	/**
	 * The compare table output for overwriting a theme package on upload.
	 *
	 * @param string $table              The output table with Name, Version, Author, RequiresWP, and RequiresPHP info.
	 * @param array  $current_theme_data Array with current theme data.
	 * @param array  $new_theme_data     Array with uploaded theme data.
	 *
	 * @see WordPress Theme_Installer_Skin
	 *
	 * @return string The compare table output.
	 */
	public function theme_overwrite_table( $table, $current_theme_data, $new_theme_data ) {
		$this->old_theme_data = $current_theme_data;

		if ( $this->check_new_theme_version( $new_theme_data ) ) {
			$table .= '<h2 class="update-from-upload-heading">' . esc_html__( 'It seems you want to upgrade to premium version of the Inspiro WordPress Theme.', 'inspiro' ) . '</h2>';
			$table .= '<p class="update-from-upload-notice">' . esc_html__( 'After the upgrade all the settings will be kept but we still recommend that you make a backup of the database and files before proceeding to the replace process.', 'inspiro' ) . '</p>';
		}

		return $table;
	}

	/**
	 * Filters the source file location for the upgrade package.
	 *
	 * @param string      $source        File source location.
	 * @param string      $remote_source Remote file source location.
	 * @param WP_Upgrader $upgrader      WP_Upgrader instance.
	 * @param array       $hook_extra    Extra arguments passed to hooked filters.
	 */
	public function start_upgrader_process( $source, $remote_source, $upgrader, $hook_extra ) {
		$overwrite = isset( $_GET['overwrite'] ) ? sanitize_text_field( wp_unslash( $_GET['overwrite'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

		if ( 'theme' === $hook_extra['type'] && 'update-theme' === $overwrite ) {
			// Allow migration only if premium version is overwrite.
			if ( $this->check_new_theme_version( $this->wp_upgrader->new_theme_data ) ) {
				$this->migrate_customizer_settings();
				$this->setup_slider_item();
			}
		}

		return $source;
	}

	/**
	 * Migrate Customizer settings to Inspiro Premium
	 *
	 * @return void
	 */
	public function migrate_customizer_settings() {
		global $_wp_default_headers;

		show_message( $this->strings['migrate_customizer_settings'] );

		$customizer_data      = Inspiro_Customizer::$customizer_data;
		$theme_mods           = get_theme_mods();
		$header_image_data    = inspiro_get_prop( $theme_mods, 'header_image_data' );
		$default_header_image = inspiro_get_prop( $_wp_default_headers, 'default-image' );

		if ( ! $header_image_data && $default_header_image ) {
			$url           = inspiro_get_prop( $default_header_image, 'url' );
			$thumbnail_url = inspiro_get_prop( $default_header_image, 'thumbnail_url' );
			$description   = inspiro_get_prop( $default_header_image, 'description' );

			// Receive full path url.
			$url           = $url ? get_parent_theme_file_uri( str_replace( '%s', '', $url ) ) : '';
			$thumbnail_url = $thumbnail_url ? get_parent_theme_file_uri( str_replace( '%s', '', $thumbnail_url ) ) : '';

			$header_image_data = array(
				'url'           => $url,
				'thumbnail_url' => $thumbnail_url,
				'description'   => $description,
			);
		}

		foreach ( $customizer_data as $name => $args ) {
			$default       = inspiro_get_prop( $args, 'default' );
			$saved_setting = inspiro_get_prop( $theme_mods, $name );
			$theme_mod     = get_theme_mod( $name, $default );

			if ( ! $saved_setting ) {
				set_theme_mod( $name, $theme_mod );
			}
			if ( strpos( $name, 'font-family' ) !== false ) {
				$font_family = Inspiro_Font_Family_Manager::clean_google_fonts( $theme_mod );
				set_theme_mod( $name, $font_family );
			}
			if ( 'custom_logo_text' === $name ) {
				update_option( 'blogname', $theme_mod );
			}
			if ( 'colorscheme' === $name ) {
				if ( 'light' === $theme_mod ) {
					set_theme_mod( 'color-background', '#ffffff' );
					set_theme_mod( 'color-body-text', '#444444' );
				} elseif ( 'dark' === $theme_mod ) {
					set_theme_mod( 'color-background', '#222222' );
					set_theme_mod( 'color-body-text', '#eeeeee' );
				} elseif ( 'custom' === $theme_mod ) {
					$custom_color_hex = get_theme_mod( 'colorscheme_hex', '#0bb4aa' );
					set_theme_mod( 'color-accent', $custom_color_hex );
				}
			}
			if ( 'header_textcolor' === $name ) {
				set_theme_mod( 'color-slider-title', $theme_mod );
				set_theme_mod( 'color-slider-description', $theme_mod );
			}
			if ( 'header_button_textcolor' === $name ) {
				set_theme_mod( 'color-slider-button-text', $theme_mod );
			}
			if ( 'header_button_textcolor_hover' === $name ) {
				set_theme_mod( 'color-slider-button-text-hover', $theme_mod );
			}
			if ( 'header_button_bgcolor_hover' === $name ) {
				set_theme_mod( 'color-slider-button-background-hover', $theme_mod );
			}
			if ( 'header_site_title' === $name ) {
				$this->slide_post_attr['post_title'] = $theme_mod;
			}
			if ( 'header_site_description' === $name ) {
				$this->slide_post_attr['post_content'] = $theme_mod;
			}
			if ( 'header_button_title' === $name ) {
				$this->slide_post_attr['wpzoom_slide_button_title'] = $theme_mod;
			}
			if ( 'header_button_url' === $name ) {
				$this->slide_post_attr['wpzoom_slide_url']        = $theme_mod;
				$this->slide_post_attr['wpzoom_slide_button_url'] = $theme_mod;
			}
			if ( 'header_button_link_open' === $name ) {
				$this->slide_post_attr['wpzoom_slide_button_url_open'] = $theme_mod;
			}
		}

		if ( is_array( $header_image_data ) ) {
			$this->slide_post_attr['post_thumbnail_url'] = $header_image_data['thumbnail_url'];
		} elseif ( is_object( $header_image_data ) ) {
			$this->slide_post_attr['post_thumbnail_id'] = $header_image_data->attachment_id;
		}
	}

	/**
	 * Convert custom header media to custom post type slider
	 * This is necessary because premium version use slider items in header section on homepage
	 *
	 * @return void
	 */
	public function setup_slider_item() {
		$slider_cpt = $this->create_temporary_slider_cpt();

		if ( is_wp_error( $slider_cpt ) ) {
			show_message( $slider_cpt );
			return;
		}

		if ( empty( $this->slide_post_attr ) ) {
			return;
		}

		$slide_title         = inspiro_get_prop( $this->slide_post_attr, 'post_title' );
		$slide_content       = inspiro_get_prop( $this->slide_post_attr, 'post_content' );
		$slide_thumbnail_url = inspiro_get_prop( $this->slide_post_attr, 'post_thumbnail_url' );
		$slide_thumbnail_id  = inspiro_get_prop( $this->slide_post_attr, 'post_thumbnail_id' );
		$slide_url           = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_url' );
		$slide_button_title  = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_button_title' );
		$slide_button_url    = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_button_url' );

		show_message( sprintf( $this->strings['setup_slider_item'], $slide_title ) );

		$defaults = array(
			'post_type'   => 'slider',
			'post_status' => 'public',
		);

		$data     = wp_parse_args( $this->slide_post_attr, $defaults );
		$slide_id = wp_insert_post( $data );

		if ( 0 === $slide_id ) {
			show_message( $this->strings['setup_slider_item_error'] );
			return;
		}

		if ( $slide_url ) {
			add_post_meta( $slide_id, 'wpzoom_slide_url', $slide_url );
		}
		if ( $slide_button_title ) {
			add_post_meta( $slide_id, 'wpzoom_slide_button_title', $slide_button_title );
		}
		if ( $slide_button_url ) {
			add_post_meta( $slide_id, 'wpzoom_slide_button_url', $slide_button_url );
		}
		if ( $slide_thumbnail_id ) {
			set_post_thumbnail( $slide_id, $slide_thumbnail_id );
		}
		if ( $slide_thumbnail_url ) {
			$this->set_slide_thumbnail( $slide_thumbnail_url, $slide_id );
		}
	}

	/**
	 * Set slide thumbnail
	 * Custom header image needs to pe uploaded first to be able to set as post thumbnail for new created slider post
	 *
	 * @param string     $filename The path to a file which will be uploaded in the upload directory.
	 * @param string|int $parent_post_id The ID of the post this attachment is for.
	 * @return void
	 */
	public function set_slide_thumbnail( $filename, $parent_post_id ) {
		// Check the type of file. We'll use this as the 'post_mime_type'.
		$filetype = wp_check_filetype( basename( $filename ), null );

		// Get the path to the upload directory.
		$wp_upload_dir = wp_upload_dir();

		// Prepare an array of post data for the attachment.
		$attachment = array(
			'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
			'post_mime_type' => $filetype['type'],
			'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		);

		// Insert the attachment.
		$thumbnail_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );

		// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
		require_once ABSPATH . 'wp-admin/includes/image.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

		// Generate the metadata for the attachment, and update the database record.
		$attach_data = wp_generate_attachment_metadata( $thumbnail_id, $filename );
		wp_update_attachment_metadata( $thumbnail_id, $attach_data );

		set_post_thumbnail( $parent_post_id, $thumbnail_id );
	}

	/**
	 * Create custom post type Slider
	 *
	 * @return WP_Post_Type|WP_Error The registered post type object on success, WP_Error object on failure.
	 */
	private function create_temporary_slider_cpt() {
		show_message( $this->strings['create_temporary_slider_cpt'] );

		$args = array(
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-slides',
			'show_in_rest'       => true,
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'         => array( 'slide-category' ),
		);

		return register_post_type( 'slider', $args ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.plugin_territory_register_post_type
	}
}

new Inspiro_Theme_Upgrader();
