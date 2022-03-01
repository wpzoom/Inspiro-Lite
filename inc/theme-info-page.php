<?php
/**
 * Theme Info page
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * About Theme Page
 *
 * @return void
 */
function inspiro_theme_info_page() {
	add_theme_page(
		esc_html__( 'Welcome to Inspiro Lite', 'inspiro' ),
		esc_html__( 'About Inspiro', 'inspiro' ),
		'edit_theme_options',
		'inspiro',
		'inspiro_display_theme_page'
	);
}
add_action( 'admin_menu', 'inspiro_theme_info_page' );

/**
 * Display HTML page for Theme
 *
 * @return void
 */
function inspiro_display_theme_page() {
	?>
	<div class="theme-info-wrap">

		<div class="wpz-row theme-intro wpz-clearfix">

			<div class="wpz-col-1-4">
				<img class="theme-screenshot" src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Screenshot', 'inspiro' ); ?>"/>
			</div>
			<div class="wpz-col-3-4 theme-description">

				<h1>
					<?php
					esc_html_e( 'Welcome to Inspiro Lite', 'inspiro' );
					?>
				</h1>


				<?php esc_html_e( 'Looking for more features, like portfolio integration and video background? Check out the Premium version!', 'inspiro' ); ?>

				<div class="theme-links wpz-clearfix">
					<p>
						<a href="https://www.wpzoom.com/themes/inspiro/" class="button button-primary" target="_blank">
							<?php esc_html_e( 'Get Inspiro Premium &rarr;', 'inspiro' ); ?>
						</a>
                        <a class="button button-primary wpz-button-youtube" href="https://www.youtube.com/watch?v=ZltZDp2z0N8" rel="noopener" target="_blank"><span class="dashicons dashicons-youtube"></span> <?php esc_html_e( 'Theme Video Overview &rarr;', 'inspiro' ); ?></a>

						<a href="https://www.wpzoom.com/showcase/theme/inspiro/" target="_blank">
							<?php esc_html_e( 'Inspiro Showcase', 'inspiro' ); ?>
						</a>
					</p>
				</div>

			</div>

		</div>
		<div id="getting-started">
			<div class="wpz-grid-wrap">
				<div class="section">
					<div class="inner-section">
						<h4>
							<span class="dashicons dashicons-editor-help"></span>
							<?php esc_html_e( 'Theme Documentation', 'inspiro' ); ?>
						</h4>
						<p class="about">
							<?php esc_html_e( 'In the documentation, you can find all theme-related information needed to get your site up and running in no time.', 'inspiro' ); ?>
						</p>
						<p>
							<a href="https://www.wpzoom.com/documentation/inspiro-lite/" target="_blank" class="button button-primary">
								<?php esc_html_e( 'Theme Documentation', 'inspiro' ); ?>
							</a>
							<a href="https://wordpress.org/support/theme/inspiro/" target="_blank" class="button button-secondary">
								<?php esc_html_e( 'Support Forum', 'inspiro' ); ?>
							</a>
						</p>
					</div>
				</div>
				<div class="section">
					<div class="inner-section">
						<h4>
							<span class="dashicons dashicons-cart"></span>
							<?php esc_html_e( 'Inspiro Premium', 'inspiro' ); ?>
						</h4>
						<p class="about">
							<?php esc_html_e( 'If you like the free version of this theme, you will LOVE the full version of Inspiro, which includes numerous video features, portfolio integration, additional features, and more options to customize your website.', 'inspiro' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>" target="_blank" class="button button-primary">
								<?php esc_html_e( 'Upgrade to Inspiro Premium &rarr;', 'inspiro' ); ?>
							</a>
                            <a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/?theme=inspiro', 'inspiro' ) ); ?>" target="_blank" class="button button-secondary">
                                <?php esc_html_e( 'View Demo &rarr;', 'inspiro' ); ?>
                            </a>
						</p>
					</div>
				</div>

                <?php if ( class_exists( 'OCDI_Plugin' ) ) { ?>

                    <div class="section">
                        <div class="inner-section">
                            <h4>
                                <span class="dashicons dashicons-cloud-upload"></span>
                                <?php esc_html_e( 'Import the Demo Content', 'inspiro' ); ?>
                            </h4>
                            <p class="about">
                                <?php esc_html_e( 'Importing demo data (post, pages, images, etc.) is the quickest and easiest way to set up your new theme, and it allows you to simply edit everything instead of creating content and layouts from scratch.', 'inspiro' ); ?>
                            </p>
                            <p>
                                <a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>" class="button button-primary">
                                    <?php esc_html_e( 'Import the Demo Content', 'inspiro' ); ?>
                                </a>
                            </p>
                        </div>
                    </div>

                <?php } else { ?>

    				<div class="section">
    					<div class="inner-section">
                            <h4>
                                <span class="dashicons dashicons-cloud-upload"></span>
                                <?php esc_html_e( 'Import the Demo Content', 'inspiro' ); ?>
                            </h4>
                            <p class="about">
                                <?php esc_html_e( 'Importing demo data (post, pages, images, etc.) is the quickest and easiest way to set up your new theme. It allows you to simply edit everything instead of creating content and layouts from scratch.', 'inspiro' ); ?>
                            </p>
    						<p class="about">
    							<em><?php esc_html_e( 'Please install and activate recommended plugins to enable this feature.', 'inspiro' ); ?></em>
    						</p>
    						<p>
    							<a href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ); ?>" class="button button-primary">
    								<?php esc_html_e( 'Install Recommended Plugins &rarr;', 'inspiro' ); ?>
    							</a>
    						</p>
    					</div>
    				</div>

                <?php } ?>

				<div class="section">
					<div class="inner-section">
                        <?php
                        $current_user = wp_get_current_user();

                        ?>

						<h4>
							<span class="dashicons dashicons-email-alt"></span>
							<?php esc_html_e( 'Subscribe for Tips & Tricks', 'inspiro' ); ?>
						</h4>
						<p class="about">
							<?php esc_html_e( 'To ease up the journey you’re starting with Inspiro, we’re sending you some useful tips & tricks to have the best experience building your website.', 'inspiro' ); ?>
						</p>
						<p>
							<div id="mlb2-5543648" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-5543648">
                              <div class="ml-form-align-center">
                                <div class="ml-form-embedWrapper embedForm">
                                  <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                                    <form class="ml-block-form" action="https://static.mailerlite.com/webforms/submit/f1v8a3" data-code="f1v8a3" method="post" target="_blank">
                                        <input aria-label="email" aria-required="true" type="email" value="<?php echo esc_attr($current_user->user_email); ?>" class="form-control" data-inputmask="" name="fields[email]" placeholder="Email" autocomplete="email">
                                      <input type="hidden" name="ml-submit" value="1">
                                      <span class="ml-form-embedSubmit">
                                        <button type="submit" class="button button-primary">Subscribe</button>
                                        <button disabled="disabled" style="display:none" type="button" class="loading button-primary"> <div class="ml-form-embedSubmitLoad"></div> <span class="sr-only">Loading...</span> </button>
                                      </span>
                                      <input type="hidden" name="anticsrf" value="true">
                                    </form>
                                  </div>
                                  <div class="ml-form-successBody row-success" style="display:none">
                                    <div class="ml-form-successContent">
                                      <h3>Thank you!</h3>
                                      <p>You have successfully joined our subscriber list.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <script>
                              function ml_webform_success_5543648(){var r=ml_jQuery||jQuery;r(".ml-subscribe-form-5543648 .row-success").show(),r(".ml-subscribe-form-5543648 .row-form").hide()}
                            </script>
                            <img src="https://track.mailerlite.com/webforms/o/5543648/f1v8a3?v1646129865" width="1" height="1" style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="." border="0">
                            <script src="https://static.mailerlite.com/js/w/webforms.min.js?v0c75f831c56857441820dcec3163967c" type="text/javascript"></script>						</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="theme-comparison">
			<h3 class="theme-comparison-intro">
				<?php esc_html_e( 'Inspiro Lite vs. Inspiro Premium', 'inspiro' ); ?>
			</h3>
			<table>
				<thead class="theme-comparison-header">
					<tr>
						<th class="table-feature-title"><h3><?php esc_html_e( 'Features', 'inspiro' ); ?></h3></th>
						<th><h3><?php esc_html_e( 'Inspiro Lite', 'inspiro' ); ?></h3></th>
						<th><h3><?php esc_html_e( 'Inspiro Premium', 'inspiro' ); ?></h3></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><h3><?php esc_html_e( 'Responsive Layout', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-yes"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Live Customizer', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-yes"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Fullscreen Slideshow on Homepage', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Advanced WooCommerce Integration', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Elementor Integration', 'inspiro' ); ?></h3></td>
						<td>Partial</td>
						<td>Full</td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Demo Content Importer', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>

					<tr>
						<td><h3><?php esc_html_e( '9 Demos', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Portfolio Integration', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Video Features', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Predefined Style Kits', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Video Backgrounds', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Video Headers in Pages & Posts', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Video & Image Lightbox for Portfolio Posts', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Multiple Posts Layouts', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Theme Options', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-no"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( '600+ Google Fonts', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-yes"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Typography Options', 'inspiro' ); ?></h3></td>
						<td><span class="dashicons dashicons-yes"></span></td>
						<td><span class="dashicons dashicons-yes"></span></td>
					</tr>
					<tr>
						<td><h3><?php esc_html_e( 'Support', 'inspiro' ); ?></h3></td>
						<td><a href="https://wordpress.org/support/theme/inspiro/" target="_blank" title="<?php esc_attr_e( 'Open support forum in new tab', 'inspiro' ); ?>"><?php esc_html_e( 'Support Forum', 'inspiro' ); ?></a</td>
						<td><?php esc_html_e( 'Fast & Friendly Email Support', 'inspiro' ); ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<a href="https://www.wpzoom.com/themes/inspiro/" target="_blank" class="upgrade-button">
								<?php esc_html_e( 'Upgrade to Inspiro Premium', 'inspiro' ); ?>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div><?php
}

?>
