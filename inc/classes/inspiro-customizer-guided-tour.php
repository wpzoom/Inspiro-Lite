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

			if ( 'customize.php' === $pagenow ) {
				// include customize scripts
				add_action( 'customize_controls_enqueue_scripts', array( $this, 'guider_scripts' ) );
				// include underscore template
				add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_templates' ) );
			}
		}

		/**
		 * Guider enqueues scripts.
		 *
		 * @since 2.2.0
		 */
		public function guider_scripts() {
			// styles
			wp_enqueue_style( 'inspiro-guided-tour-style', get_template_directory_uri() . '/assets/css/unminified/customize-guided-tour.css', array(), INSPIRO_THEME_VERSION, 'all' );
			// scripts
			wp_enqueue_script( 'inspiro-guided-tour', get_template_directory_uri() . '/assets/js/unminified/customize-guided-tour.js', array( 'jquery', 'wp-backbone' ), INSPIRO_THEME_VERSION, true );
			wp_localize_script( 'inspiro-guided-tour', '_wpCustomizeInspiroGuidedTourSteps', $this->guided_tour_steps() );
		}

		/**
		 * Template for steps.
		 *
		 * @since 2.2.0
		 */
		public function print_templates() {
			?>
			<script type="text/html" id="tmpl-ins-guided-tour-step">
				<div class="ins-guided-tour-step">
					<# if ( data.title ) { #>
					<h2>{{ data.title }}</h2>
					<# } #>
					{{{ data.message }}}
					<div class="guided-tour-step-nav-elements">
						<a class="button button-primary ins-nux-button" href="#">
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
							<?php esc_attr_e( 'Skip this step', 'inspiro' ); ?>
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
				'title'       => __( 'Welcome to the Customizer', 'inspiro' ),
				/* translators: %s: 'End Of Line' symbol */
				'message'     => sprintf( __( 'Here you can control the overall look and feel of your store.%sTo get started, let\'s add your logo', 'inspiro' ), PHP_EOL . PHP_EOL ),
				'button_text' => __( 'Let\'s go!', 'storefront' ),
				'section'     => '#customize-info',
			);

			$steps[] = array(
				'title'   => __( 'Customize your Site Identity', 'inspiro' ),
				'message' => __( 'Organize.', 'inspiro' ),
				'section' => 'title_tagline',
			);

			$steps[] = array(
				'title'   => __( 'Customize Colors', 'inspiro' ),
				'message' => __( 'Necessary Colors text.', 'inspiro' ),
				'section' => 'colors',
			);

			$steps[] = array(
				'title'   => __( 'Customize Footer', 'inspiro' ),
				'message' => __( 'Necessary Footer text.', 'inspiro' ),
				'section' => 'footer-area',
			);

			return $steps;
		}
	}
}

// Get the singleton instance
Inspiro_Customizer_Guided_Tour::get_instance();
