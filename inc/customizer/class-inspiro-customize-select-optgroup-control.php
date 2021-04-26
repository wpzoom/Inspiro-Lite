<?php
/**
 * Customize Select with Optgroup Control class.
 *
 * @package Inspiro
 * @since Inspiro x.x.x
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	/**
	 * Select with optgroup control.
	 */
	class Inspiro_Customize_Select_Optgroup_Control extends WP_Customize_Control {
		/**
		 * Type.
		 *
		 * @var string
		 */
		public $type = 'select-optgroup';

		/**
		 * Render the content of the select control.
		 */
		public function render_content() {
			$input_id         = '_customize-input-' . $this->id;
			$description_id   = '_customize-description-' . $this->id;
			$describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';

			if ( empty( $this->choices ) ) {
				return;
			}
			?>
			<?php if ( ! empty( $this->label ) ) : ?>
				<label for="<?php echo esc_attr( $input_id ); ?>" class="customize-control-title"><?php echo esc_html( $this->label ); ?></label>
			<?php endif; ?>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span id="<?php echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>

			<select id="<?php echo esc_attr( $input_id ); ?>" <?php echo esc_html( $describedby_attr ); ?> <?php $this->link(); ?>>
				<?php
				foreach ( $this->choices as $value => $data ) {
					if ( is_array( $data ) && ! empty( $data ) ) {
						echo '<optgroup label="' . esc_attr( $value ) . '">';
						foreach ( $data as $optgroup_val => $optgroup_data ) {
							echo '<option value="' . esc_attr( $optgroup_val ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $optgroup_data ) . '</option>';
						}
						echo '</optgroup>';
					} else {
						echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $data ) . '</option>';
					}
				}
				?>
			</select>
			<?php
		}
	}
}
