<?php
/**
 * Pro customizer section.
 *
 * @since  x.x.x
 * @access public
 */
class Inspiro_Customize_Section_Pro extends WP_Customize_Section {

    /**
     * The type of customize section being rendered.
     *
     * @since  x.x.x
     * @access public
     * @var    string
     */
    public $type = 'upgrade-pro';

    /**
     * Custom description text to output.
     *
     * @since  x.x.x
     * @access public
     * @var    string
     */
    public $description = '';

    /**
     * Custom button text to output.
     *
     * @since  x.x.x
     * @access public
     * @var    string
     */
    public $pro_text = '';

    /**
     * Custom pro button URL.
     *
     * @since  x.x.x
     * @access public
     * @var    string
     */
    public $pro_url = '';

    /**
     * Add custom parameters to pass to the JS via JSON.
     *
     * @since  x.x.x
     * @access public
     * @return void
     */
    public function json() {
        $json = parent::json();

        $json['desription'] = $this->description;
        $json['pro_text'] = $this->pro_text;
        $json['pro_url']  = esc_url( $this->pro_url );

        return $json;
    }

    /**
     * Outputs the Underscore.js template.
     *
     * @since  x.x.x
     * @access public
     * @return void
     */
    protected function render_template() { ?>

        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

            <h3 class="accordion-section-title">
                {{ data.title }}

                <span class="customize-action">{{ data.description }}</span>


                <# if ( data.pro_text && data.pro_url ) { #>
                    <a href="{{ data.pro_url }}" class="button button-secondary" target="_blank">{{ data.pro_text }}</a>
                <# } #>

            </h3>


        </li>
    <?php }
}
