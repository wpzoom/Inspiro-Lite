<?php
/**
 * Theme Upgrader: Helps to set all settings needed to upgrade to premium version
 *
 * @package Inspiro
 * @subpackage Upgrader
 * @since x.x.x
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
	private $current_theme_data = [];

	/**
	 * New theme data
	 *
	 * @var array
	 */
	private $new_theme_data = [];

	/**
	 * Uploaded premium version.
	 *
	 * @var boolean
	 */
	private $uploaded_premium = false;

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_filter( 'install_theme_overwrite_comparison', array( $this, 'theme_overwrite_table' ), 10, 3 );
		add_filter( 'install_theme_complete_actions', array( $this, 'install_theme_complete' ), 10, 4 );
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
		$this->current_theme_data = $current_theme_data;
		$this->new_theme_data = $new_theme_data;

		if ( version_compare( $new_theme_data['Version'], '6.8.0', '>=' ) ) {
			$this->uploaded_premium = true;
		}

		if ( $this->uploaded_premium ) {
			$table .= '<h2 class="update-from-upload-heading">' . esc_html__( 'It seems you want to upgrade to premium version of the Inspiro WordPress Theme.' ) . '</h2>';
			$table .= '<p class="update-from-upload-notice">' . esc_html__( 'After the upgrade all the settings will be kept but we still recommend that you make a backup of the database and files before proceeding to the replace process.' ) . '</p>';
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
		echo '<pre>';
		print_r($api);
		print_r($stylesheet);
		print_r($theme_info);
		echo '</pre>';

		return $install_actions;
	}
}

new Inspiro_Theme_Upgrader();
