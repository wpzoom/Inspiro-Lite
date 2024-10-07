<?php
/**
 * Inspiro Customizer Guided Tour Class
 *
 * @package Inspiro
 * @since Inspiro 1.9.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists('Inspiro_Customizer_Guided_Tour')) {

	/**
	 * The Customizer Guided Tour Class (Singleton)
	 */
	class Inspiro_Customizer_Guided_Tour {

		// Holds the single instance of the class
		private static $instance = null;

		/**
		 * Private constructor to prevent multiple instances.
		 *
		 * @since 1.9.0
		 */
		private function __construct() {
			add_action('admin_init', array($this, 'guider'));
		}

		/**
		 * Prevent cloning of the instance.
		 */
		private function __clone() {
			// Prevent cloning
		}

		/**
		 * Prevent unserializing of the instance.
		 */
		private function __wakeup() {
			// Prevent unserialization
		}

		/**
		 * Get the single instance of the class.
		 *
		 * @since 1.9.0
		 * @return Inspiro_Customizer_Guided_Tour
		 */
		public static function get_instance() {
			if (self::$instance === null) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Guider method.
		 *
		 * @since 2.2.0
		 */
		public function guider() {
			global $pagenow;

			if ( 'customize.php' === $pagenow && false === (bool) get_theme_mod( 'inspiro_guided_tour_checked_status', false )  ) {
				// include customize scripts
				add_action( 'customize_controls_enqueue_scripts', array( $this, 'include_guider_scripts' ) );
				// include underscore template
				add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_guider_templates' ) );

				// deactivate status save cause of tests
//				if ( current_user_can( 'manage_options' ) ) {
//
//					// Set Guided Tour flag so it doesn't show up again.
//					set_theme_mod( 'inspiro_guided_tour_checked_status', true );
//				}
			}
		}

		/**
		 * Guider enqueues scripts.
		 *
		 * @since 2.2.0
		 */
		public function include_guider_scripts() {
			// styles
			wp_enqueue_style( 'inspiro-guided-tour-style', get_template_directory_uri() . '/assets/css/minified/customize-guided-tour.min.css', array(), INSPIRO_THEME_VERSION, 'all' );
			// scripts
			wp_enqueue_script( 'inspiro-guided-tour', get_template_directory_uri() . '/assets/js/minified/customize-guided-tour.min.js', array( 'jquery', 'wp-backbone' ), INSPIRO_THEME_VERSION, true );
			wp_localize_script( 'inspiro-guided-tour', '_wpCustomizeInspiroGuidedTourSteps', $this->guided_tour_steps() );
		}

		/**
		 * Template for steps.
		 *
		 * @since 2.2.0
		 */
		public function print_guider_templates() {
			?>
			<script type="text/html" id="tmpl-ins-guided-tour-step">
				<div class="ins-guided-tour-step">
					<# if ( data.title ) { #>
					<h2>{{ data.title }}</h2>
					<# } #>
					{{{ data.message }}}
					<div class="guided-tour-step-nav-elements">
						<a class="button button-primary ins-go-button" href="#">
							<# if ( data.button_text ) { #>
							{{ data.button_text }}
							<# } else { #>
							<?php esc_attr_e( 'Next', 'inspiro' ); ?>
							<# } #>
						</a>
						<# if ( ! data.last_step ) { #>
						<a class="ins-guided-tour-skip" href="#">
							<# if ( data.first_step ) { #>
							<?php esc_attr_e( 'No thanks, skip the tour', 'inspiro' ); ?>
							<# } else { #>
							<?php esc_attr_e( 'Next step &rarr;', 'inspiro' ); ?>
							<# } #>
						</a>
						<# } #>
					</div>
				</div>
			</script>
			<?php
		}

		/**
		 * Guided tour steps.
		 *
		 * @since 2.2.0
		 */
		public function guided_tour_steps() {
			$steps = array();

			$steps[] = array(
				'title'       => __( 'Customize Inspiro', 'inspiro' ),
				/* translators: %s: 'End Of Line' symbol */
				'message'     => sprintf( __( 'Here you can control the overall look and feel of your website.%sAre you ready? Let\'s start the tour!', 'inspiro' ), PHP_EOL . PHP_EOL ),
				'button_text' => __( 'Take the tour', 'inspiro' ),
				'section'     => '#customize-info',
			);

			$steps[] = array(
				'title'   => __( '1. Customize your Site Identity', 'inspiro' ),
				'message' => __( 'Click on the Site Identity section to upload your custom logo image or change the Site Title.', 'inspiro' ),
				'section' => 'title_tagline',
			);

			$steps[] = array(
				'title'   => __( '2. Customize Colors', 'inspiro' ),
				'message' => __( 'Change the color scheme of theme, accent color or individual colors.', 'inspiro' ),
				'section' => 'colors',
			);

			$steps[] = array(
				'title'   => __( '3. Customize Fonts', 'inspiro' ),
				'message' => __( 'From this section you can easily change the global fonts in your theme or customize individual elements.', 'inspiro' ),
				'section' => 'inspiro_typography_panel',
			);


			$steps[] = array(
				'title'   => __( '4. Customize Footer', 'inspiro' ),
				'message' => __( 'Need to change the default copyright text or add additional links? You can do it here!', 'inspiro' ),
				'section' => 'footer-area',
			);

			$steps[] = array(
				'title'       => '',
				/* translators: 1: open <strong> tag, 2: close <strong> tag, 3: 'End Of Line' symbol */
				'message'     => sprintf( __( 'All set! Remember to %1$sSave & publish%2$s your changes when you\'re done.%3$sYou can return to your dashboard by clicking the X in the top left corner.', 'inspiro' ), '<strong>', '</strong>', PHP_EOL . PHP_EOL ),
				'section'     => '#customize-header-actions .save',
				'button_text' => __( 'Done', 'inspiro' ),
			);

			return $steps;
		}
	}
}

// Get the singleton instance
Inspiro_Customizer_Guided_Tour::get_instance();
