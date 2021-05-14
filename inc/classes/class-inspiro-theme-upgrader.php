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

		add_filter( 'install_theme_overwrite_comparison', array( $this, 'theme_overwrite_table' ), 10, 3 );
		add_filter( 'install_theme_complete_actions', array( $this, 'install_theme_complete' ), 10, 4 );
	}

	/**
	 * Add the generic strings.
	 */
	public function generic_strings() {
		$this->strings['migrate_customizer_settings'] = __( 'Migrate Customizer Settings to Inspiro Premium', 'inspiro' ) . '&hellip;';
		/* translators: %s: New slide title */
		$this->strings['setup_slider_item']       = __( 'Setup new slider item with title: %s', 'inspiro' ) . '&hellip;';
		$this->strings['setup_slider_item_error'] = __( 'Something went wrong to create new slider item!', 'inspiro' );
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

		if ( version_compare( $new_theme_data['Version'], '6.8.0', '>=' ) ) {
			$this->uploaded_premium = true;
		}

		if ( $this->uploaded_premium ) {
			$table .= '<h2 class="update-from-upload-heading">' . esc_html__( 'It seems you want to upgrade to premium version of the Inspiro WordPress Theme.', 'inspiro' ) . '</h2>';
			$table .= '<p class="update-from-upload-notice">' . esc_html__( 'After the upgrade all the settings will be kept but we still recommend that you make a backup of the database and files before proceeding to the replace process.', 'inspiro' ) . '</p>';
		}

		return $table;
	}

	/**
	 * Filters the list of action links available following a single theme installation.
	 *
	 * @param string[] $install_actions Array of theme action links.
	 * @param object   $api             Object containing WordPress.org API theme data.
	 * @param string   $stylesheet      Theme directory name.
	 * @param WP_Theme $theme_info      Theme object.
	 *
	 * @return array List of action links available following a single theme installation
	 */
	public function install_theme_complete( $install_actions, $api, $stylesheet, $theme_info ) {
		if ( $this->uploaded_premium ) {
			$this->migrate_customizer_settings();
			$this->setup_slider_item();
		}

		return $install_actions;
	}

	/**
	 * Migrate Customizer settings to Inspiro Premium
	 *
	 * @return void
	 */
	public function migrate_customizer_settings() {
		show_message( $this->strings['migrate_customizer_settings'] );

		$customizer_data   = Inspiro_Customizer::$customizer_data;
		$theme_mods        = get_theme_mods();
		$header_image_data = inspiro_get_prop( $theme_mods, 'header_image_data' );

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
					set_theme_mod( 'color-background', 'ffffff' );
					set_theme_mod( 'color-body-text', '444444' );
				} elseif ( 'dark' === $theme_mod ) {
					set_theme_mod( 'color-background', '222222' );
					set_theme_mod( 'color-body-text', 'eeeeee' );
				} elseif ( 'custom' === $theme_mod ) {
					$custom_color_hex = get_theme_mod( 'colorscheme_hex', '0bb4aa' );
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
		global $_wp_default_headers;

		if ( empty( $this->slide_post_attr ) ) {
			return;
		}

		$data = wp_parse_args( $this->slide_post_attr );

		$slide_title          = inspiro_get_prop( $this->slide_post_attr, 'post_title' );
		$slide_content        = inspiro_get_prop( $this->slide_post_attr, 'post_content' );
		$slide_thumbnail_url  = inspiro_get_prop( $this->slide_post_attr, 'post_thumbnail_url' );
		$slide_thumbnail_id   = inspiro_get_prop( $this->slide_post_attr, 'post_thumbnail_id' );
		$slide_url            = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_url' );
		$slide_button_title   = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_button_title' );
		$slide_button_url     = inspiro_get_prop( $this->slide_post_attr, 'wpzoom_slide_button_url' );
		$default_header_image = inspiro_get_prop( $_wp_default_headers, 'default-image' );

		show_message( sprintf( $this->strings['setup_slider_item'], $slide_title ) );

		$data['post_type'] = 'slider';

		$slide_id = wp_insert_post( $data );

		if ( 0 === $slide_id ) {
			show_message( $this->strings['setup_slider_item_error'] );
			return;
		}

		if ( $slide_url ) {
			update_post_meta( $slide_id, $slide_url, 'wpzoom_slide_url' );
		}
		if ( $slide_button_title ) {
			update_post_meta( $slide_id, $slide_button_title, 'wpzoom_slide_button_title' );
		}
		if ( $slide_button_url ) {
			update_post_meta( $slide_id, $slide_button_url, 'wpzoom_slide_button_url' );
		}
		if ( $slide_thumbnail_id ) {
			set_post_thumbnail( $slide_id, $slide_thumbnail_id );
		}
		if ( $slide_thumbnail_url ) {
			$this->set_slide_thumbnail( $slide_thumbnail_url, $slide_id );
		}
		if ( ! ( $slide_thumbnail_id && $slide_thumbnail_url ) && $default_header_image ) {
			$filename = get_parent_theme_file_uri( str_replace( '%s', '', $default_header_image['thumbnail_url'] ) );
			$this->set_slide_thumbnail( $filename, $slide_id );
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
}

new Inspiro_Theme_Upgrader();
