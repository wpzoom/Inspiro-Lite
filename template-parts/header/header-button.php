<?php
/**
 * Displays header button
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro x.x.x
 * @version x.x.x
 */

?>
<div class="custom-header-button-wrapper">
    <?php
        $button_title = get_theme_mod( 'header_button_title', esc_html__( 'Click here' ) );
        $button_url = get_theme_mod( 'header_button_url', get_home_url() );
    ?>
    <a class="custom-header-button button" href="<?php echo esc_url( $button_url ); ?>" rel="nofollow"><?php echo esc_html( $button_title ); ?></a>
</div><!-- .custom-header-button -->