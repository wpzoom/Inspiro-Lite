<?php
/**
 * Customize More Section Control class.
 *
 * @package Inspiro
 * @since Inspiro x.x.x
 */

if ( class_exists( 'WP_Customize_Section' ) ) {

	/**
	 * More section.
	 */
	class Inspiro_Customize_More_Section extends WP_Customize_Section {

		/**
		 * Type.
		 *
		 * @var string
		 */
		public $type = 'inspiro-more';
		/**
		 * Button label.
		 *
		 * @var string
		 */
		public $button_text = '';
		/**
		 * Button URL.
		 *
		 * @var string
		 */
		public $button_url = '';

		/**
		 * Export data to JS.
		 */
		public function json() {
			$json                = parent::json();
			$json['button_text'] = $this->button_text;
			$json['button_url']  = $this->button_url;

			return $json;
		}

		/**
		 * Render a JS template for the content of the section more control.
		 */
		protected function render_template() {
			?>
			<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
				<h3 class="accordion-section-title">
					<span>{{ data.title }}</span>

					<# if ( data.button_text && data.button_url ) { #>
						<a href="{{ data.button_url }}" class="button" target="_blank" rel="external">{{ data.button_text }}</a>
					<# } #>
				</h3>
			</li>
			<?php
		}
	}
}
