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
				// include underscore template
				add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_templates' ) );

			}
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
	}
}

new Inspiro_Customizer_Guided_Tour();
