<?php
/**
 * Customize Section Title Control class.
 *
 * @package Inspiro
 * @since Inspiro x.x.x
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'WP_Customize_Control' ) ) {

	/**
	 * Title control.
	 */
	class Inspiro_Customize_Title_Control extends WP_Customize_Control {
		/**
		 * Type.
		 *
		 * @var string
		 */
		public $type = 'section-title';

		/**
		 * Render a JS template for the content of the section title control.
		 */
		public function content_template() { ?>
				<# if ( data.label ) { #>
					<h4 class="inspiro-customize-section-title wp-ui-text-highlight">{{{ data.label }}}</h4>
				<# } #>
				<# if ( data.description ) { #>
					<span class="description customize-control-description">{{{ data.description }}}</span>
				<# } #>
			<?php
		}
	}
}