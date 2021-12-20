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
								<?php esc_html_e( 'Upgrade to Inspiro Premium', 'inspiro' ); ?>
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
						<h4>
							<span class="dashicons dashicons-star-filled"></span>
							<?php esc_html_e( 'Why Upgrade?', 'inspiro' ); ?>
						</h4>
						<p class="about">
							<?php esc_html_e( 'Upgrading to Inspiro Premium, you will unlock a dozen unique features that will take your website to the next level. See in the table below just a few of the features included in the Premium version.', 'inspiro' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/?theme=inspiro', 'inspiro' ) ); ?>" target="_blank" class="button button-primary">
								<?php esc_html_e( 'View Inspiro Premium Demo &rarr;', 'inspiro' ); ?>
							</a>
						</p>
					</div>
				</div>
				<?php if ( current_user_can( 'upload_themes' ) ) : ?>
					<!-- <div class="section">
						<div class="inner-section">
							<h4>
								<span class="dashicons dashicons-upload"></span>
								<?php esc_html_e( 'Upload Inspiro Premium', 'inspiro' ); ?>
							</h4>
							<p class="about">
								<?php esc_html_e( 'If you have a premium version of Inspiro theme in a .zip format, you may upgrade by uploading it here.', 'inspiro' ); ?>
							</p>
							<div class="upload-theme">
								<form method="post" enctype="multipart/form-data" class="wp-upload-form" action="<?php echo self_admin_url( 'update.php?action=upload-theme&payload=about-inspiro' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
									<?php wp_nonce_field( 'theme-upload' ); ?>
									<label class="screen-reader-text" for="themezip"><?php esc_html_e( 'Theme zip file', 'inspiro' ); ?></label>
									<input type="file" id="themezip" name="themezip" accept=".zip" />
									<?php submit_button( __( 'Install Now', 'inspiro' ), '', 'install-theme-submit', false ); ?>
								</form>
							</div>
						</div>
					</div> -->
				<?php endif; ?>
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
