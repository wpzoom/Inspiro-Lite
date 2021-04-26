<?php
/**
 * Customize Multiple Checkbox Control class.
 *
 * @package Inspiro
 * @since Inspiro x.x.x
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	/**
	 * Multiple checkbox control.
	 */
	class Inspiro_Customize_Checkbox_Multiple_Control extends WP_Customize_Control {
		/**
		 * Type.
		 *
		 * @var string
		 */
		public $type = 'checkbox-multiple';

		/**
		 * Render the content of the checkbox multiple control.
		 */
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}
			?>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<ul>
				<?php foreach ( $this->choices as $value => $label ) : ?>
					<li>
						<label>
							<input type="checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( $value, $this->value(), true ) ); ?> />
							<?php echo esc_html( $label ); ?>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php
		}
	}
}
