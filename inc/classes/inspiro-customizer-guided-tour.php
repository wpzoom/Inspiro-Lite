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
	 * The Customizer Guided Tour Class
	 */
	class Inspiro_Customizer_Guided_Tour {

		/**
		 * Class init.
		 *
		 * @since 1.9.0
		 */
		public function __construct() {
			add_action('admin_init', array($this, 'guider'));
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
			wp_localize_script( 'inspiro-guided-tour', '_wpCustomizeSFGuidedTourSteps', $this->guided_tour_steps() );
		}

		/**
		 * Template for steps.
		 *
		 * @since 2.2.0
		 */
		public function print_templates() {
			?>
			<script type="text/html" id="tmpl-sf-guided-tour-step">
				<div class="sf-guided-tour-step">
					<# if ( data.title ) { #>
					<h2>{{ data.title }}</h2>
					<# } #>
					{{{ data.message }}}
					<a class="sf-nux-button" href="#">
						<# if ( data.button_text ) { #>
						{{ data.button_text }}
						<# } else { #>
						<?php esc_attr_e( 'Next', 'storefront' ); ?>
						<# } #>
					</a>
					<# if ( ! data.last_step ) { #>
					<a class="sf-guided-tour-skip" href="#">
						<# if ( data.first_step ) { #>
						<?php esc_attr_e( 'No thanks, skip the tour', 'storefront' ); ?>
						<# } else { #>
						<?php esc_attr_e( 'Skip this step', 'storefront' ); ?>
						<# } #>
					</a>
					<# } #>
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
				'section' => 'nav_menus',
			);

			return $steps;
		}
	}
}

new Inspiro_Customizer_Guided_Tour();
