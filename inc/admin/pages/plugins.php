<div class="wpz-onboard_wrapper">
	<div id="tabs"><!-- #tabs -->

        <?php get_template_part( 'inc/admin/pages/main-menu' ); ?>

		<div class="wpz-onboard_content-wrapper">
			<div class="wpz-onboard_content">
				<div class="wpz-onboard_content-main">
                    <div id="license" class="wpz-onboard_content-side plugins">
                        <div class="wpz-onboard_content-side-section">
                            <h3 class="wpz-onboard_content-side-section-title icon-docs">
                            <?php esc_html_e( 'Plugins', 'inspiro' ); ?></h3>
                            <p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Install and activate the required plugins to ensure full functionality of your theme.', 'inspiro' ); ?></p>    
                        </div>
                        
                        <div class="theme-info-wrap">
                            <div class="wpz-onboard_content-side-section install-plugin">
                                <h3 class="wpz-onboard_content-side-section-title icon-assist">
                                    <?php esc_html_e( '2 plugins recommended/required', 'inspiro' ); ?>
                                </h3>

                                <a href="#" title="Install & Activate all plugins"
                                    target="_blank" class="button"><?php esc_html_e( 'Install & Activate all plugins', 'inspiro' ); ?>
                                </a>
                            </div>

                            <div class="wpz-grid-wrap three">
                                <div class="section">
                                    <h4>
                                        <?php esc_html_e( 'Instagram Widget by WPZOOM', 'inspiro' ); ?>
                                    </h4>
                                    <p class="about">
                                        <?php esc_html_e( 'Add your Instagram feed to your website and gain even more followers with our customizable and responsive plugin.', 'inspiro' ); ?>
                                    </p>
                                    <p class="section_footer">
                                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>"
                                            target="_blank" class="button button-secondary">
                                            <?php esc_html_e( 'Install & Activate', 'inspiro' ); ?>
                                        </a>
                                    </p>
                                </div>
                                <div class="section">
                                    <h4>
                                        <?php esc_html_e( 'Video Popup Block by WPZOOM', 'inspiro' ); ?>
                                    </h4>
                                    <p class="about">
                                        <?php esc_html_e( 'A simple single-block plugin to add video popups from YouTube, Vimeo, or Self-Hosted (MP4) videos.', 'inspiro' ); ?>
                                    </p>
                                    <p class="section_footer">
                                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>"
                                            target="_blank" class="button button-secondary">
                                            <?php esc_html_e( 'Activate', 'inspiro' ); ?>
                                        </a>
                                    </p>
                                </div>
                                <div class="section">
                                    <h4>
                                        <?php esc_html_e( 'Video Popup Block by WPZOOM', 'inspiro' ); ?>
                                    </h4>
                                    <p class="about">
                                        <?php esc_html_e( 'A simple single-block plugin to add video popups from YouTube, Vimeo, or Self-Hosted (MP4) videos.', 'inspiro' ); ?>
                                    </p>
                                    <p class="section_footer">
                                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>"
                                            target="_blank" class="button button-secondary">
                                            <?php esc_html_e( 'Activate', 'inspiro' ); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div><!-- /#tabs -->

	<?php get_template_part( 'inc/admin/pages/footer' ); ?>

</div>
