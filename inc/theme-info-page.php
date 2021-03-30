<?php
/**
 * Theme Info page
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite x.x.x
 */

if (!defined('ABSPATH')) {
    exit;
}

/*
 * About Theme Page
 */
if ( ! function_exists('inspiro_theme_info_page') ) {
    function inspiro_theme_info_page() {
        add_theme_page(
            esc_html__('Welcome to Inspiro Theme', 'inspiro'),
            esc_html__('About Inspiro', 'inspiro'),
            'edit_theme_options',
            'inspiro',
            'inspiro_display_theme_page'
        );
    }
}
add_action('admin_menu', 'inspiro_theme_info_page');

if ( ! function_exists('inspiro_display_theme_page') ) {
    function inspiro_display_theme_page() {
    ?>
        <div class="theme-info-wrap">

            <div class="wpz-row theme-intro wpz-clearfix">


                <div class="wpz-col-1-4">
                    <img class="theme-screenshot"
                         src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>"
                         alt="<?php esc_attr_e( 'Theme Screenshot', 'inspiro' ); ?>"/>
                </div>
                <div class="wpz-col-3-4 theme-description">

                    <h1>
                        <?php printf( esc_html__('Welcome to %1$1s %2$2s', 'inspiro'), 'Inspiro', INSPIRO_THEME_VERSION ); ?>
                    </h1>


                    <?php esc_html_e('Inspiro is perfect for creating food based blogs and recipe websites. A beautiful featured slider and WooCommerce integration mean Inspiro is packed with features to help you stand out.', 'inspiro'); ?>

                    <div class="theme-links wpz-clearfix">
                        <p>
                            <a href="<?php echo esc_url(__('https://www.wpzoom.com/wordpress-food-themes/inspiro-pro/', 'inspiro')); ?>" class="button button-primary" target="_blank">
                                <?php esc_html_e('About Inspiro', 'inspiro'); ?>
                            </a>
                            <a href="<?php echo esc_url(__('https://www.wpzoom.com/documentation/inspiro-lite/','inspiro')); ?>" target="_blank">
                                <?php esc_html_e('Documentation', 'inspiro'); ?>
                            </a>
                            <a href="<?php echo esc_url(__('https://www.wpzoom.com/showcase/theme/inspiro/', 'inspiro')); ?>" target="_blank">
                                <?php esc_html_e('Inspiro Showcase', 'inspiro'); ?>
                            </a>
                        </p>
                    </div>

                </div>

            </div>
            <hr>
            <div id="getting-started">
                <h3>
                    <?php printf( esc_html__('Get Started with %s', 'inspiro'), 'Inspiro' ); ?>
                </h3>
                <div class="wpz-row wpz-clearfix">
                    <div class="wpz-col-1-2">
                        <div class="section">
                            <h4>
                                <span class="dashicons dashicons-editor-help"></span>
                                <?php esc_html_e('Theme Documentation', 'inspiro'); ?>
                            </h4>
                            <p class="about">
                                <?php printf(esc_html__('Need help configuring %s? In the documentation you can find all theme related information that is needed to get your site up and running in no time.', 'inspiro'), 'Inspiro' ); ?>
                            </p>
                            <p>
                                <a href="<?php echo esc_url(__('https://www.wpzoom.com/documentation/inspiro-lite/', 'inspiro')); ?>" target="_blank" class="button button-primary">
                                    <?php esc_html_e('Theme Documentation', 'inspiro'); ?>
                                </a>
                                <a href="<?php echo esc_url(__('https://wordpress.org/support/theme/inspiro', 'inspiro')); ?>" target="_blank" class="button button-secondary">
                                    <?php esc_html_e('Support Forum', 'inspiro'); ?>
                                </a>
                            </p>
                        </div>

                        <hr /><br/>
                        <div class="section">
                            <h4>
                                <span class="dashicons dashicons-admin-plugins"></span>
                                <?php esc_html_e('Recommended Plugins', 'inspiro'); ?>
                            </h4>
                            <p class="about">
                                <?php esc_html_e('In order to enable all theme features, it\'s necessary to install a few recommended plugins.', 'inspiro'); ?>
                            </p>
                            <p>
                                <a href="<?php echo esc_url(admin_url('themes.php?page=tgmpa-install-plugins')); ?>" class="button button-secondary">
                                    <?php esc_html_e('Recommended Plugins', 'inspiro'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="wpz-col-1-2">
                        <div class="section">
                            <h4>
                                <span class="dashicons dashicons-cart"></span>
                                <?php esc_html_e('Inspiro Pro', 'inspiro'); ?>
                            </h4>
                            <p class="about">
                                <?php esc_html_e('If you like the free version of this theme, you will LOVE the full version of Inspiro which includes unique custom widgets, additional features and more useful options to customize your website.', 'inspiro'); ?>
                            </p>
                            <p>
                                <a href="<?php echo esc_url(__('https://www.wpzoom.com/wordpress-food-themes/inspiro-pro/', 'inspiro')); ?>" target="_blank" class="button button-primary">
                                    <?php esc_html_e('Upgrade to Inspiro PRO', 'inspiro'); ?>
                                </a>
                            </p>
                        </div><hr /><br/>
                        <div class="section">
                            <h4>
                                <span class="dashicons dashicons-star-filled"></span>
                                <?php esc_html_e('Why Upgrade?', 'inspiro'); ?>
                            </h4>
                            <p class="about">
                                <?php esc_html_e('Upgrading to Inspiro PRO you will unlock a dozen of unique features that will take your food blog to the next level. See in the table below just a few of the features included in the PRO version.', 'inspiro'); ?>
                            </p>
                            <p>
                                <a href="<?php echo esc_url(__('http://demo.wpzoom.com/?theme=inspiro', 'inspiro')); ?>" target="_blank" class="button button-primary">
                                    <?php esc_html_e('View Inspiro PRO Demo', 'inspiro'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="theme-comparison">
                <h3 class="theme-comparison-intro">
                    <?php esc_html_e('Inspiro Lite vs. Inspiro PRO', 'inspiro'); ?>
                </h3>
                <table>
                    <thead class="theme-comparison-header">
                        <tr>
                            <th class="table-feature-title"><h3><?php esc_html_e('Features', 'inspiro'); ?></h3></th>
                            <th><h3><?php esc_html_e('Inspiro Lite', 'inspiro'); ?></h3></th>
                            <th><h3><?php esc_html_e('Inspiro PRO', 'inspiro'); ?></h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h3><?php esc_html_e('Custom Widgets', 'inspiro'); ?></h3></td>
                            <td><?php esc_html_e('1', 'inspiro'); ?></td>
                            <td><?php esc_html_e('6 (Featured Categories, Carousel, Author Bio, Image Box)', 'inspiro'); ?></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Widget Areas', 'inspiro'); ?></h3></td>
                            <td><?php esc_html_e('6', 'inspiro'); ?></td>
                            <td><?php esc_html_e('15 (5 on Homepage)', 'inspiro'); ?></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Responsive Layout', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Magazine Layout', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Demo Content Importer', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Recipe Index', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Recipe Shortcodes', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('10 Color Schemes', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('3 Slider Styles', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Multiple Posts Layouts', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Built-in Social Buttons', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Extended WooCommerce Integration', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Advertising Options', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Theme Options', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Carousel Widget', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('100+ Color Options', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('600+ Google Fonts', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Typography Options', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Instagram Bar in the Footer', 'inspiro'); ?></h3></td>
                            <td><span class="dashicons dashicons-no"></span></td>
                            <td><span class="dashicons dashicons-yes"></span></td>
                        </tr>
                        <tr>
                            <td><h3><?php esc_html_e('Support', 'inspiro'); ?></h3></td>
                            <td><?php esc_html_e('Support Forum', 'inspiro'); ?></td>
                            <td><?php esc_html_e('Fast & Friendly Email Support', 'inspiro'); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="<?php echo esc_url(__('https://www.wpzoom.com/wordpress-food-themes/inspiro-pro/', 'inspiro')); ?>" target="_blank" class="upgrade-button">
                                    <?php esc_html_e('Upgrade to Inspiro PRO', 'inspiro'); ?>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div><?php
    }
}

?>