<?php
/**
 * Inspiro Lite: Customizer Class
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro x.x.x
 */

if ( ! class_exists( 'Inspiro_Customizer' ) ) {

	/**
	 * Help class for Customizer
	 */
	class Inspiro_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
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
			add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );

			add_action( 'customize_register', array( $this, 'register_control_types' ), 2 );
			add_action( 'customize_register', array( $this, 'include_configurations' ), 2 );

			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ) );

			add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_footer_scripts' ) );
		}

		/**
		 * Register custom control types.
		 *
		 * @since x.x.x
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public function register_control_types( $wp_customize ) {
			// phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			require INSPIRO_THEME_DIR . 'inc/customizer/customizer-sections.php';
			require INSPIRO_THEME_DIR . 'inc/customizer/customizer-controls.php';
			// phpcs:enable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

			/**
			 * Register sections
			 */

			$wp_customize->register_section_type( 'Inspiro_Customize_Section_Pro' );

			/**
			 * Add controls
			 */

			Inspiro_Customizer_Control_Base::add_control(
				'inspiro-range',
				array(
					'callback' => 'Inspiro_Customize_Range_Control',
				)
			);

			Inspiro_Customizer_Control_Base::add_control(
				'inspiro-title',
				array(
					'callback' => 'Inspiro_Customize_Title_Control',
				)
			);

			Inspiro_Customizer_Control_Base::add_control(
				'inspiro-typography',
				array(
					'callback'          => 'Inspiro_Customize_Typography_Control',
					'sanitize_callback' => 'sanitize_text_field',
				)
			);

			Inspiro_Customizer_Control_Base::add_control(
				'inspiro-font-variant',
				array(
					'callback'          => 'Inspiro_Customize_Font_Variant_Control',
					'sanitize_callback' => 'sanitize_text_field',
				)
			);
		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public function include_configurations( $wp_customize ) {
			/**
			 * Upgrade to Inspiro Premium
			 */
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

			$configuration_files = array(
				'blog-post'      => array(
					'blog-post-panel',
					'post-options',
				),
				'colors'         => array(
					'header-textcolor',
					'header-button-color',
					'color-scheme',
				),
				'footer'         => array(
					'footer-widget-areas',
				),
				'homepage-media' => array(
					'homepage-media-panel',
					'homepage-media-media',
					'homepage-media-content',
				),
				'logo'           => array(
					'custom-logo-text',
				),
				'theme-layout'   => array(
					'theme-layout',
				),
				'typography'     => array(
					'typo-panel',
					'typo-body',
					'typo-headings',
					// phpcs:disable Squiz.PHP.CommentedOutCode.Found
					// TODO: Enable all panels in the next update
					// 'typo-h1',
					// 'typo-h2',
					// 'typo-h3',
					// 'typo-h4',
					// 'typo-h5',
					// 'typo-h6'.
					// phpcs:enable Squiz.PHP.CommentedOutCode.Found
					'typo-main-menu',
					'typo-mobile-menu',
					'typo-hero-header-title',
					'typo-hero-header-desc',
					'typo-hero-header-button',
				),
			);

			// phpcs:disable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			foreach ( $configuration_files as $folder_name => $files ) {
				foreach ( $files as $file_name ) {
					if ( file_exists( INSPIRO_THEME_DIR . "inc/customizer/configs/{$folder_name}/class-inspiro-{$file_name}-config.php" ) ) {
						require INSPIRO_THEME_DIR . "inc/customizer/configs/{$folder_name}/class-inspiro-{$file_name}-config.php";
					}
				}
			}
			// phpcs:enable WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

			/**
			 * Fires to register all customizer custom panels, settings and controls
			 *
			 * @since x.x.x
			 */
			do_action( 'inspiro/customize_register', $wp_customize );
		}

		/**
		 * Bind JS handlers to instantly live-preview changes.
		 *
		 * @return void
		 */
		public function customize_preview_js() {
			wp_enqueue_script(
				'inspiro-customize-preview',
				inspiro_get_assets_uri( 'customize-preview', 'js' ),
				array( 'customize-preview' ),
				INSPIRO_THEME_VERSION,
				true
			);
		}

		/**
		 * Load dynamic logic for the customizer controls area.
		 *
		 * @return void
		 */
		public function enqueue_control_scripts() {
			wp_enqueue_script(
				'inspiro-customize-controls',
				inspiro_get_assets_uri( 'customize-controls', 'js' ),
				array( 'customize-controls' ),
				INSPIRO_THEME_VERSION,
				true
			);

			wp_enqueue_style(
				'inspiro-customize-controls',
				inspiro_get_assets_uri( 'customize-controls', 'css' ),
				array(),
				INSPIRO_THEME_VERSION
			);

			wp_localize_script(
				'inspiro-customize-controls',
				'inspiroCustomControl',
				apply_filters(
					'inspiro/customizer/js_localize',
					array(
						'customizer'  => array(
							'settings' => array(
								'google_fonts' => $this->generate_font_dropdown(),
							),
						),
						'font_weight' => Inspiro_Font_Family_Manager::get_all_font_weight(),
						'strings'     => array(
							'inherit' => __( 'Inherit', 'inspiro' ),
						),
					)
				)
			);
		}

		/**
		 * Generates HTML for font dropdown
		 *
		 * @link https://github.com/brainstormforce/astra/blob/663761d3419f25640af9b59e64384bd07f810bc4/inc/customizer/class-astra-customizer.php#L1265
		 *
		 * @return string
		 */
		public function generate_font_dropdown() {
			ob_start();

			?>

			<option value="inherit"><?php esc_html_e( 'Default System Font', 'inspiro' ); ?></option>
			<optgroup label="<?php esc_html_e( 'Other System Fonts', 'inspiro' ); ?>">

			<?php

			$system_fonts = Inspiro_Font_Family_Manager::get_system_fonts();
			$google_fonts = Inspiro_Font_Family_Manager::get_google_fonts();

			foreach ( $system_fonts as $name => $variants ) {
				?>

				<option value="<?php echo esc_attr( $name ); ?>" ><?php echo esc_html( $name ); ?></option>
				<?php
			}

			?>
			<optgroup label="Google">

			<?php
			foreach ( $google_fonts as $name => $single_font ) {
				$variants = isset( $single_font[0] ) ? $single_font[0] : null;
				$category = isset( $single_font[1] ) ? $single_font[1] : null;

				?>
				<option value="<?php echo "'" . esc_attr( $name ) . "', " . esc_attr( $category ); ?>"><?php echo esc_html( $name ); ?></option>

				<?php
			}

			return ob_get_clean();
		}

		/**
		 * Print Footer Scripts
		 *
		 * @link https://github.com/brainstormforce/astra/blob/663761d3419f25640af9b59e64384bd07f810bc4/inc/customizer/class-astra-customizer.php#L286
		 *
		 * @since x.x.x
		 * @return void
		 */
		public function print_footer_scripts() {
			$output  = '<script type="text/javascript">';
			$output .= Inspiro_Fonts_Manager::js();
			$output .= '</script>';

			echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

	}

}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Inspiro_Customizer::get_instance();
