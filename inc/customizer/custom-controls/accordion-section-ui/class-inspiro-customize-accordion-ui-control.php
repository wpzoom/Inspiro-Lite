<?php
/**
 * Customize Accordion UI Control class.
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.9.0
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

if (class_exists('WP_Customize_Control')) {

	/**
	 * Accordion UI Control.
	 */
	class Inspiro_Customize_Accordion_UI_Control extends WP_Customize_Control
	{

		/**
		 * Control type.
		 *
		 * @since 1.9.0
		 * @var string $type
		 */
		public $type = 'accordion-section-ui-wrapper';

		/**
		 * Should be accordion?
		 *
		 * @var bool
		 */
		public $accordion = false;

		/**
		 * Initial state.
		 *
		 * @var bool
		 */
		public $expanded = true;

		/**
		 * The number of controls to group (wrap) together.
		 *
		 * @var int
		 */
		public $controls_to_wrap = 1;

		/**
		 * Control class.
		 *
		 * @var string
		 */
		public $class = '';

		/**
		 * Label before the accordion.
		 *
		 * @var string
		 */
		public $category_label = '';

		/**
		 * Send data to _s
		 *
		 * @return array
		 * @see WP_Customize_Control::to_json()
		 */
		public function json() {
			$json                   = parent::json();
			$json['classes']        = $this->class;
			$json['accordion']      = $this->accordion;
			$json['category_label'] = $this->category_label;
			$json['style']          = $this->print_style();

			if ( $this->accordion === true ) {
				$json['classes'] .= ' accordion';
			}

			return $json;
		}

		/**
		 * Render the control.
		 */
		protected function render()
		{
			$id = 'customize-control-' . str_replace(array('[', ']'), array('-', ''), $this->id);
			$class = 'render-test customize-control customize-control-' . $this->type;
			$class .= ' ' . $this->class;
			if ($this->accordion) {
				$class .= ' accordion';
			}

			if ($this->expanded) {
				$class .= ' expanded';
			}

			echo '<li id="' . esc_attr($id) . '" class="' . esc_attr($class) . '">';
			echo '</li>';
		}

		/**
		 * Render the control's content.
		 *
		 * Allows the content to be overridden without having to rewrite the wrapper in `$this::render()`.
		 *
		 * Supports basic input types `text`, `checkbox`, `textarea`, `radio`, `select` and `dropdown-pages`.
		 * Additional input types such as `email`, `url`, `number`, `hidden` and `date` are supported implicitly.
		 *
		 * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template().
		 *
		 * @since 3.4.0
		 */
		protected function render_content() {
		}


		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
		 *
		 * @see WP_Customize_Control::print_template()
		 *
		 * @access protected
		 */
		protected function content_template()
		{
			?>
			<# if(data.category_label) {#>
			<span class="customize-control-title">{{data.category_label}}</span>
			<# }#>
			<div class="inspiro-accordion-section-ui-wrapper">
				<span class="accordion-heading">{{ data.label }}</span>
				<# if(data.accordion) { #>
				<span class="accordion-expand-button"></span>
				<# } #>
				{{ console.log(data) }}
			</div>
			{{{data.style}}} <?php // phpcs:ignore WordPressVIPMinimum.Security.Mustache.OutputNotation ?>
			<?php
		}

		/**
		 * Print inline styles.
		 * Helps with wrap functionality.
		 */
		protected function print_style()
		{
			$style = '';
			$style .= '<style>';

			for ($i = 1; $i <= $this->controls_to_wrap; $i++) {
				$style .= '.accordion.' . 'customize-control-' . $this->type . ':not(.expanded)';
				for ($j = 1; $j <= $i; $j++) {
					$style .= ' + li';
				}
				if ($i !== $this->controls_to_wrap) {
					$style .= ',';
				}
			}

			$style .= '{max-height: 0;opacity: 0;margin: 0; overflow: hidden; padding:0 !important;}';

			$style .= '</style>';

			return $style;
		}
	}
}
