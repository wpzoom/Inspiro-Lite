<?php $parent = wp_get_theme(); ?>

<script>
	jQuery(document).ready(function ($) {
		$(function () {
			$("#tabs").tabs();
		});
	});
</script>

<div class="wpz-onboard_wrapper">
	<div id="tabs"><!-- #tabs -->

		<div class="wpz-onboard_header">
			<!-- Onboard title -->
			<div class="wpz-onboard_title-wrapper">
				<h1 class="wpz-onboard_title">
					<svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="https://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							  clip-rule="evenodd"
							  d="M23 46C35.7025 46 46 35.7025 46 23C46 10.2975 35.7025 0 23 0C10.2975 0 0 10.2975 0 23C0 35.7025 10.2975 46 23 46ZM19.4036 10.3152C19.4036 8.31354 21.0263 6.69091 23.0279 6.69091H26.2897C26.4899 6.69091 26.6521 6.85317 26.6521 7.05333V13.5025C26.6521 13.622 26.5884 13.7324 26.4848 13.7922L19.9055 17.5908C19.6824 17.7196 19.4036 17.5586 19.4036 17.3011V10.3152ZM19.5709 24.0613L26.1503 20.2627C26.3733 20.134 26.6521 20.2949 26.6521 20.5525V35.6849C26.6521 37.6865 25.0295 39.3091 23.0279 39.3091H19.7661C19.5659 39.3091 19.4036 39.1468 19.4036 38.9467V24.3511C19.4036 24.2316 19.4674 24.1211 19.5709 24.0613Z"
							  fill="#242628"/>
					</svg>
					Inspiro <span>Lite</span>
				</h1>
				<h2 class="wpz-onboard_framework-version">v <?php echo esc_html( $parent->get( 'Version' ) ); ?></h2>
			</div>

			<ul class="wpz-onboard_tabs">
				<li class="wpz-onboard_tab wpz-onboard_tab-license">
					<a href="#license" title="License">
						<svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="https://www.w3.org/2000/svg">
							<path clip-rule="evenodd"
								  d="M15 5.75C11.5482 5.75 8.75 8.54822 8.75 12C8.75 15.4518 11.5482 18.25 15 18.25C15.9599 18.25 16.8674 18.0341 17.6782 17.6489C18.0523 17.4712 18.4997 17.6304 18.6774 18.0045C18.8552 18.3787 18.696 18.8261 18.3218 19.0038C17.3141 19.4825 16.1873 19.75 15 19.75C10.7198 19.75 7.25 16.2802 7.25 12C7.25 7.71979 10.7198 4.25 15 4.25C19.2802 4.25 22.75 7.71979 22.75 12C22.75 12.7682 22.638 13.5115 22.429 14.2139C22.3108 14.6109 21.8932 14.837 21.4962 14.7188C21.0992 14.6007 20.8731 14.1831 20.9913 13.7861C21.1594 13.221 21.25 12.6218 21.25 12C21.25 8.54822 18.4518 5.75 15 5.75Z"
								  fill="black" fill-rule="evenodd"/>
							<path clip-rule="evenodd"
								  d="M5.25 5C5.25 4.58579 5.58579 4.25 6 4.25H15C15.4142 4.25 15.75 4.58579 15.75 5C15.75 5.41421 15.4142 5.75 15 5.75H6C5.58579 5.75 5.25 5.41421 5.25 5Z"
								  fill="black" fill-rule="evenodd"/>
							<path clip-rule="evenodd"
								  d="M4.75 8.5C4.75 8.08579 5.08579 7.75 5.5 7.75H8.5C8.91421 7.75 9.25 8.08579 9.25 8.5C9.25 8.91421 8.91421 9.25 8.5 9.25H5.5C5.08579 9.25 4.75 8.91421 4.75 8.5Z"
								  fill="black" fill-rule="evenodd"/>
							<path clip-rule="evenodd"
								  d="M1.25 8.5C1.25 8.08579 1.58579 7.75 2 7.75H3.5C3.91421 7.75 4.25 8.08579 4.25 8.5C4.25 8.91421 3.91421 9.25 3.5 9.25H2C1.58579 9.25 1.25 8.91421 1.25 8.5Z"
								  fill="black" fill-rule="evenodd"/>
							<path clip-rule="evenodd"
								  d="M3.25 12.5C3.25 12.0858 3.58579 11.75 4 11.75H8C8.41421 11.75 8.75 12.0858 8.75 12.5C8.75 12.9142 8.41421 13.25 8 13.25H4C3.58579 13.25 3.25 12.9142 3.25 12.5Z"
								  fill="black" fill-rule="evenodd"/>
							<path clip-rule="evenodd"
								  d="M12.376 8.58397C12.5151 8.37533 12.7492 8.25 13 8.25H17C17.2508 8.25 17.4849 8.37533 17.624 8.58397L19.624 11.584C19.792 11.8359 19.792 12.1641 19.624 12.416L17.624 15.416C17.4849 15.6247 17.2508 15.75 17 15.75H13C12.7492 15.75 12.5151 15.6247 12.376 15.416L10.376 12.416C10.208 12.1641 10.208 11.8359 10.376 11.584L12.376 8.58397ZM13.4014 9.75L11.9014 12L13.4014 14.25H16.5986L18.0986 12L16.5986 9.75H13.4014Z"
								  fill="black" fill-rule="evenodd"/>
						</svg>
						<?php esc_html_e( 'Theme Upgrade', 'inspiro' ); ?>
					</a>
				</li><!-- /.tab-license -->

			</ul>
		</div>

        <div class="theme-info-wrap welcome-section">

                                    <h3 class="wpz-onboard_content-main-title">Welcome to Inspiro!                              👋</h3>
                                    <p class="wpz-onboard_content-main-intro">Thank you for installing the free version of our theme! Below you can find quick links to different sections in the Customizer where you can configure and customize the theme. The free version includes limited features and customization options, but if you need more flexibility and plan to take your website to the next level, make sure to check the Premium version.</p>

                                    <p class="section_footer">
                                        <a href="http://localhost/inspiro/wp-admin/customize.php" target="_blank" class="button button-primary">
                                            Customize Inspiro →                             </a>

                                        <a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&amp;utm_medium=about-inspiro-page&amp;utm_campaign=upgrade-premium" target="_blank" class="button button-secondary">
                                            Get Inspiro Premium →                               </a>

                                    </p>

                                </div>

		<div class="wpz-onboard_content-wrapper">
			<div class="wpz-onboard_content">

				<div class="wpz-onboard_content-main">


					<div id="license" class="wpz-onboard_content-main-tab">
						<div class="theme-info-wrap welcome-section">


                            <div class="wpz-grid-wrap">

                                <div class="section premium-feature">
                                    <h4>
                                        <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M21 12.405L13.5 8.07C13.0442 7.80682 12.5271 7.66821 12.0008 7.66807C11.4744 7.66794 10.9573 7.80629 10.5013 8.06923C10.0454 8.33217 9.66661 8.71045 9.40308 9.16607C9.13956 9.6217 9.00054 10.1386 9 10.665V19.335C9.00054 19.8611 9.13942 20.3778 9.4027 20.8332C9.66597 21.2887 10.0444 21.667 10.5 21.93C10.9561 22.1933 11.4734 22.3319 12 22.3319C12.5266 22.3319 13.0439 22.1933 13.5 21.93L21 17.595C21.4546 17.3313 21.832 16.9528 22.0943 16.4973C22.3566 16.0419 22.4947 15.5256 22.4947 15C22.4947 14.4744 22.3566 13.9581 22.0943 13.5027C21.832 13.0472 21.4546 12.6687 21 12.405ZM19.5 15L12 19.335V10.665L19.5 15ZM15 0C12.0333 0 9.13319 0.879734 6.66645 2.52796C4.19971 4.17618 2.27713 6.51885 1.14181 9.25974C0.00649926 12.0006 -0.290551 15.0166 0.288227 17.9263C0.867006 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16394 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C30 13.0302 29.612 11.0796 28.8582 9.25974C28.1044 7.43986 26.9995 5.78628 25.6066 4.3934C24.2137 3.00052 22.5601 1.89563 20.7403 1.14181C18.9204 0.387986 16.9698 0 15 0ZM15 27C12.6266 27 10.3066 26.2962 8.33316 24.9776C6.35977 23.659 4.8217 21.7849 3.91345 19.5922C3.0052 17.3995 2.76756 14.9867 3.23058 12.6589C3.69361 10.3311 4.83649 8.19295 6.51472 6.51472C8.19295 4.83649 10.3311 3.6936 12.6589 3.23058C14.9867 2.76755 17.3995 3.00519 19.5922 3.91344C21.7849 4.8217 23.6591 6.35977 24.9776 8.33315C26.2962 10.3065 27 12.6266 27 15C27 18.1826 25.7357 21.2348 23.4853 23.4853C21.2348 25.7357 18.1826 27 15 27Z" fill="#242628"></path>
                                        </svg> Advanced Portfolio with Video Integration                                    </h4>
                                    <p class="about">
                                        Inspiro Premium is perfect for showing off your portfolio, images and videos. The premium version includes multiple page templates to display your Portfolio posts and a custom Elementor Portfolio widget. You also get access to features such as Video Lightbox, Video Background on Hover, and more!                                    </p>
                                    <p class="section_footer">
                                        <a href="https://demo.wpzoom.com/inspiro/portfolio/" target="_blank" class="button button-primary">
                                            Premium Portfolio Demo →                                        </a>
                                    </p>
                                </div>

                            </div>



							<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Install the Premium version', 'inspiro' ); ?></h3>

                            <p class="wpz-onboard_content-main-intro">
                                <?php
                                $download_link = esc_url( 'https://www.wpzoom.com/account/' ); // Replace with your actual download URL
                                echo sprintf( __( 'If you have purchased the Premium or PRO version fo the theme, please download it as a ZIP file from the <a href="%s" target="_blank">Members Area</a> and upload it here.', 'inspiro' ), $download_link );
                                ?>
                            </p>
                            <div class="wpz-upload">

                            <form method="post" enctype="multipart/form-data" class="wp-upload-form" action="<?php echo esc_url( self_admin_url( 'update.php?action=upload-theme' ) ); ?>">
                                <?php wp_nonce_field( 'theme-upload' ); ?>
                                <label class="screen-reader-text" for="themezip">
                                    <?php
                                    /* translators: Hidden accessibility text. */
                                    _e( 'Theme zip file' );
                                    ?>
                                </label>
                                <input type="file" id="themezip" name="themezip" accept=".zip" />
                                <?php submit_button( _x( 'Install Now', 'theme' ), '', 'install-theme-submit', false ); ?>
                            </form>

                        </div>


                        <strong><?php esc_html_e( 'From the Documentation:', 'inspiro' ); ?></strong>

                        <ul>
                            <li><a href="<?php echo esc_url( __( 'https://www.wpzoom.com/docs/theme-installation/', 'inspiro' ) ); ?>" target="_blank"><?php esc_html_e( 'How to Install the Premium version', 'inspiro' ); ?></a></li>
                            <li><a href="<?php echo esc_url( __( 'https://www.wpzoom.com/docs/how-to-activate-the-license-key-of-your-wpzoom-theme/', 'inspiro' ) ); ?>" target="_blank"><?php esc_html_e( 'How to Activate your License Key', 'inspiro' ); ?></a></li>
                            <li><a href="<?php echo esc_url( __( 'https://www.wpzoom.com/documentation/inspiro/inspiro-upgrade-from-inspiro-lite-free-to-inspiro-premium-pro/', 'inspiro' ) ); ?>" target="_blank"><?php esc_html_e( 'How to migrate from the free version to the premium version', 'inspiro' ); ?></a></li>

                        </ul>
						</div>
					</div><!-- /#license -->

				</div>

			</div>
		</div>
	</div><!-- /#tabs -->

	<?php get_template_part( 'inc/admin/pages/footer' ); ?>

</div>
