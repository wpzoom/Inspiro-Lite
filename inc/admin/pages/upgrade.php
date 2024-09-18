<?php $parent = wp_get_theme(); ?>

<script>
	jQuery(document).ready(function ($) {
		$(function () {
			$("#tabs").tabs();
		});
	});
</script>

<div class="wpz-onboard_wrapper">
	<div id="tabs">

		<div class="wpz-onboard_header">
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
				<li class="wpz-onboard_tab wpz-onboard_tab-quick-start"><a href="#quick-start" title="Quick Start">
						<svg width="18" height="18" viewBox="0 0 13 15" fill="none" xmlns="https://www.w3.org/2000/svg">
							<path
								d="M0.166992 14.5V0.333332H7.66699L8.00033 2H12.667V10.3333H6.83366L6.50033 8.66667H1.83366V14.5H0.166992ZM8.20866 8.66667H11.0003V3.66667H6.62533L6.29199 2H1.83366V7H7.87533L8.20866 8.66667Z"
								fill="#000"></path>
						</svg> <?php esc_html_e( 'Quick Start', 'inspiro' ); ?></a></li>

				<li class="wpz-onboard_tab wpz-onboard_tab-theme-child"><a href="#vs-pro" title="Free vs. PRO">
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
						</svg> <?php esc_html_e( 'Free vs. Premium', 'inspiro' ); ?></a></li>

				<li class="wpz-onboard_tab wpz-onboard_tab-debug"><a href="#demos" title="Demos">
						<svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="https://www.w3.org/2000/svg">
							<path
								d="M34 0H14C12.4087 0 10.8826 0.632141 9.75736 1.75736C8.63214 2.88258 8 4.4087 8 6V8H6C4.4087 8 2.88258 8.63214 1.75736 9.75736C0.632141 10.8826 0 12.4087 0 14V34C0 35.5913 0.632141 37.1174 1.75736 38.2426C2.88258 39.3679 4.4087 40 6 40H26C27.5913 40 29.1174 39.3679 30.2426 38.2426C31.3679 37.1174 32 35.5913 32 34V32H34C35.5913 32 37.1174 31.3679 38.2426 30.2426C39.3679 29.1174 40 27.5913 40 26V6C40 4.4087 39.3679 2.88258 38.2426 1.75736C37.1174 0.632141 35.5913 0 34 0ZM28 34C28 34.5304 27.7893 35.0391 27.4142 35.4142C27.0391 35.7893 26.5304 36 26 36H6C5.46957 36 4.96086 35.7893 4.58579 35.4142C4.21071 35.0391 4 34.5304 4 34V20H28V34ZM28 16H4V14C4 13.4696 4.21071 12.9609 4.58579 12.5858C4.96086 12.2107 5.46957 12 6 12H26C26.5304 12 27.0391 12.2107 27.4142 12.5858C27.7893 12.9609 28 13.4696 28 14V16ZM36 26C36 26.5304 35.7893 27.0391 35.4142 27.4142C35.0391 27.7893 34.5304 28 34 28H32V14C31.9946 13.3177 31.8728 12.6413 31.64 12H36V26ZM36 8H12V6C12 5.46957 12.2107 4.96086 12.5858 4.58579C12.9609 4.21071 13.4696 4 14 4H34C34.5304 4 35.0391 4.21071 35.4142 4.58579C35.7893 4.96086 36 5.46957 36 6V8Z"
								fill="#242628"/>
						</svg> <?php esc_html_e( 'Premium Demos', 'inspiro' ); ?></a></li>
			</ul>
		</div>

		<div class="wpz-onboard_content-wrapper">
			<div class="wpz-onboard_content">

				<div class="wpz-onboard_content-main">
					<div id="quick-start" class="wpz-onboard_content-main-tab">

						<div class="theme-info-wrap welcome-section">

							<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Welcome to Inspiro!', 'inspiro' ); ?>
								👋</h3>
							<p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Thank you for installing the free version of our theme! Below you can find quick links to different sections in the Customizer where you can configure and customize the theme. The free version includes limited features and customization options, but if you need more flexibility and plan to take your website to the next level, make sure to check the Premium version.', 'inspiro' ); ?></p>

							<p class="section_footer">
								<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank"
								   class="button button-primary">
									<?php esc_html_e( 'Customize Inspiro &rarr;', 'inspiro' ); ?>
								</a>

								<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
								   target="_blank" class="button button-secondary">
									<?php esc_html_e( 'Get Inspiro Premium &rarr;', 'inspiro' ); ?>
								</a>

							</p>
						</div>
					</div>

					<div id="vs-pro" class="wpz-onboard_content-main-tab">
						<div class="theme-info-wrap">
							<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Inspiro Lite vs. Inspiro Premium', 'inspiro' ); ?></h3>
							<p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Below is a comparison chart of the free and the premium versions.', 'inspiro' ); ?></p>

							<div class="theme-comparison">

								<table>
									<thead class="theme-comparison-header">
									<tr>
										<th class="table-feature-title">
											<h3><?php esc_html_e( 'Feature', 'inspiro' ); ?></h3></th>
										<th><h3><?php esc_html_e( 'Inspiro Lite', 'inspiro' ); ?></h3></th>
										<th><h3><?php esc_html_e( 'Inspiro Premium', 'inspiro' ); ?></h3></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><h3><?php esc_html_e( 'Responsive Layout', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-saved"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Live Customizer', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-saved"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td>
											<h3><?php esc_html_e( 'Fullscreen Slideshow on Homepage', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td>
											<h3><?php esc_html_e( 'Advanced WooCommerce Integration', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Elementor Integration', 'inspiro' ); ?></h3></td>
										<td>Partial</td>
										<td>Full</td>
									</tr>
									<tr>
										<td><h3>
												<strong><?php esc_html_e( 'Custom Elementor Widgets', 'inspiro' ); ?></strong>
												<span class="table-new-promo">POPULAR FEATURE</span></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Demo Content Importer', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>

									<tr>
										<td><h3><?php esc_html_e( 'Starter Sites', 'inspiro' ); ?></h3></td>
										<td>2</td>
										<td>15+</td>
									</tr>
									<tr>
										<td><h3>
												<strong><?php esc_html_e( 'Portfolio with Video Integration', 'inspiro' ); ?></strong>
												<span class="table-new-promo">POPULAR FEATURE</span></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Video Features', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Predefined Style Kits', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Video Backgrounds', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3>
												<strong><?php esc_html_e( 'Video Background on Hover', 'inspiro' ); ?></strong>
												<span class="table-new-promo">POPULAR FEATURE</span></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Video Headers in Pages & Posts', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td>
											<h3><?php esc_html_e( 'Video & Image Lightbox for Portfolio Posts', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Multiple Blog & Posts Layouts', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Theme Options', 'inspiro' ); ?></h3></td>
										<td><span class="dashicons dashicons-no-alt"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Google Fonts (Hosted Locally)', 'inspiro' ); ?></h3>
										</td>
										<td><span class="dashicons dashicons-saved"></span></td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Typography Options', 'inspiro' ); ?></h3></td>
										<td>Limited</td>
										<td><span class="dashicons dashicons-saved"></span></td>
									</tr>
									<tr>
										<td><h3><?php esc_html_e( 'Support', 'inspiro' ); ?></h3></td>
										<td><?php esc_html_e( 'Support Forum', 'inspiro' ); ?></td>
										<td><?php esc_html_e( 'Fast Email Support', 'inspiro' ); ?></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td>
											<a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
											   target="_blank" class="button button-primary">
												<?php esc_html_e( 'Get Inspiro Premium Today!', 'inspiro' ); ?>
											</a>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div id="demos" class="wpz-onboard_content-main-tab wpz-onboard_content-main-theme-child">

						<div class="theme-info-wrap">

							<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Inspiro Premium Demos', 'inspiro' ); ?></h3>
							<p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Below you can demos available in the Inspiro Premium theme. You can get access to all of them by purchasing the Premium version of the theme.', 'inspiro' ); ?></p>

							<ol class="wpz-onboard_content-main-steps">

								<li id="step-choose-design"
									class="wpz-onboard_content-main-step step-1 step-choose-design">
									<div class="wpz-onboard_content-main-step-content">

										<form method="post" action="#">

											<ul>
												<li class="design_default-elementor">
													<figure title="Portfolio (Default)">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro/" target="_blank"
															   class="button-select-template">View Demo</a></div>
														<figcaption>
															<h5>Premium Demo</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>

															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_video" data-design-id="inspiro-video">
													<figure title="Video Production">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-video-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-video/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Video Production</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-video/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_video2" data-design-id="inspiro-video2">
													<figure title="Video Production #2">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-video2-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-video2/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Video Production #2</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-video2/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_photography"
													data-design-id="inspiro-wedding-photography">
													<figure title="Photography">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/wedding/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-wedding-photography/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Wedding Photography</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-wedding-photography/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_photography" data-design-id="inspiro-photography">
													<figure title="Photography">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-photography-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-photography/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Photography</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-photography/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_agency-elementor" data-design-id="inspiro-agency">
													<figure title="Agency / Business">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-agency-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-agency/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Agency / Business</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-agency/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_hotel" data-design-id="inspiro-hotel">
													<figure title="Hotel / Real Estate">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-hotel-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-hotel/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Hotel / Real Estate</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-hotel/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_events" data-design-id="inspiro-events">
													<figure title="Shop / WooCommerce">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/shop-home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-shop/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Shop / WooCommerce</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-shop/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_events" data-design-id="inspiro-jewelry">
													<figure title="Jewelry Shop / WooCommerce">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/shop2/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-jewelry2/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Jewelry Shop / WooCommerce</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-jewelry2/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_restaurant" data-design-id="inspiro-restaurant">
													<figure title="Restaurant">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-restaurant-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-restaurant/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Restaurant</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-restaurant/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_events" data-design-id="inspiro-events">
													<figure title="Events / Conference">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/demo-events.png')">
															<a href="https://demo.wpzoom.com/inspiro-event/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Events / Conference</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-event/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_wellness" data-design-id="inspiro-wellness">
													<figure title="Wellness / Spa">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-wellness/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-wellness/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Wellness / Spa</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-wellness/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_magazine" data-design-id="inspiro-magazine">
													<figure title="Magazine">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-magazine/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-magazine/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Magazine</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-magazine/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_magazine" data-design-id="inspiro-auto">
													<figure title="Magazine">
														<div class="preview-thumbnail"
															 style="background-image:url('https://demo.wpzoom.com/inspiro-demo/wp-content/themes/inspiro-select/images/inspiro-rent.png')">
															<a href="https://demo.wpzoom.com/inspiro-auto/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Car Rental / Dealer</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-auto/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	Preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_magazine" data-design-id="inspiro-coach">
													<figure title="Author">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-author/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-author/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Author / Coach</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-author/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	Preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_magazine" data-design-id="inspiro-church">
													<figure title="Church">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-church/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-church/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Author / Coach</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-church/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	Preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
											</ul>

										</form>
									</div>
								</li>

							</ol>


							<br/>
							<br/>
							<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
							   target="_blank" class="button button-large button-primary">
								<?php esc_html_e( 'Get Inspiro Premium Today &rarr;', 'inspiro' ); ?>
							</a>

						</div>

						<div class="theme-info-wrap">

							<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Inspiro PRO Demos', 'inspiro' ); ?></h3>
							<p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Inspiro PRO is a newer version of the Inspiro theme, which can be purchased separately.', 'inspiro' ); ?></p>

							<ol class="wpz-onboard_content-main-steps">

								<li id="step-choose-design"
									class="wpz-onboard_content-main-step step-1 step-choose-design">
									<div class="wpz-onboard_content-main-step-content">

										<form method="post" action="#">

											<ul>
												<li class="design_eccentric" data-design-id="inspiro-pro-eccentric">
													<figure title="Eccentric">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/flow-1/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Eccentric</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_offbeat" data-design-id="inspiro-pro-offbeat">
													<figure title="Offbeat">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/flow-2/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-2/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Offbeat</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-2/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_agency" data-design-id="inspiro-pro-agency">
													<figure title="Agency">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/agency/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-agency/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Agency</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-agency/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_agency-dark" data-design-id="inspiro-pro-agency-dark">
													<figure title="Agency (Dark)">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/agency-dark/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-agency-dark/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Agency (Dark)</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-agency-dark/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_business" data-design-id="inspiro-pro-business">
													<figure title="Business">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/business/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-business/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Business</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-business/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_shop" data-design-id="inspiro-pro-shop">
													<figure title="Shop">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/shop/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-shop/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Shop</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-shop/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_real-estate" data-design-id="inspiro-pro-real-estate">
													<figure title="Real Estate">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/real-estate/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-real-estate/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Real Estate</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-real-estate/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_charity" data-design-id="inspiro-pro-charity">
													<figure title="Charity / NGO">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/charity/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-charity/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Charity / NGO</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-charity/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_fitness" data-design-id="inspiro-pro-fitness">
													<figure title="Fitness / Gym">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/fitness/fitness-home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-fitness/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Fitness / Gym</h5>
															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-fitness/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>

												<li class="design_winery" data-design-id="inspiro-pro-winery">
													<figure title="Winery">
														<div class="preview-thumbnail"
															 style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/winery/home-thumb.png')">
															<a href="https://demo.wpzoom.com/inspiro-pro-winery/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Winery</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-pro-winery/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
												<li class="design_tech" data-design-id="inspiro-tech">
													<figure title="Tech">
														<div class="preview-thumbnail"
															 style="background-image:url('https://demo.wpzoom.com/inspiro-pro-demo/wp-content/themes/inspiro-pro-select/images/site-layout_tech.png')">
															<a href="https://demo.wpzoom.com/inspiro-tech/"
															   target="_blank" class="button-select-template">View
																Demo</a></div>
														<figcaption>
															<h5>Tech / Finance</h5>

															<p>
																<a href="https://demo.wpzoom.com/inspiro-tech/"
																   target="_blank" rel="noopener" title="Live preview">Live
																	preview</a>
															</p>
														</figcaption>
													</figure>
												</li>
											</ul>
										</form>
									</div>
								</li>

							</ol>

							<br/>
							<br/>
							<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro-pro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-pro', 'inspiro' ) ); ?>"
							   target="_blank" class="button button-large button-primary">
								<?php esc_html_e( 'Get Inspiro PRO Today &rarr;', 'inspiro' ); ?>
							</a>

						</div>

					</div>
				</div>

				<div class="wpz-onboard_content-side">

					<div class="wpz-onboard_content-side-section discover-premium">
						<h3 class="wpz-onboard_content-side-section-title icon-docs">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								 xmlns="https://www.w3.org/2000/svg">
								<mask id="mask0_3409_3568" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
									  y="0" width="24" height="24">
									<rect width="24" height="24" fill="#D9D9D9"/>
								</mask>
								<g mask="url(#mask0_3409_3568)">
									<path
										d="M19 9L17.75 6.25L15 5L17.75 3.75L19 1L20.25 3.75L23 5L20.25 6.25L19 9ZM19 23L17.75 20.25L15 19L17.75 17.75L19 15L20.25 17.75L23 19L20.25 20.25L19 23ZM9 20L6.5 14.5L1 12L6.5 9.5L9 4L11.5 9.5L17 12L11.5 14.5L9 20ZM9 15.15L10 13L12.15 12L10 11L9 8.85L8 11L5.85 12L8 13L9 15.15Z"
										fill="white"/>
								</g>
							</svg> <?php esc_html_e( 'Inspiro Premium', 'inspiro' ); ?></h3>
						<p class="wpz-onboard_content-side-section-content"><?php esc_html_e( 'Upgrade to the Premium version to get instant access to unique features and dozen of pre-built demos!', 'inspiro' ); ?></p>

						<a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
						   title="Inspiro Premium" target="_blank"><img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/admin/inspiro-premium.png' ); ?>"
								width="300" alt="<?php echo esc_attr__( 'Inspiro Premium', 'inspiro' ); ?>"/></a>

						<div class="wpz-onboard_content-side-section-button">
							<a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
							   title="Inspiro Premium" target="_blank"
							   class="button"><?php esc_html_e( 'Discover the Premium Version &rarr;', 'inspiro' ); ?></a>
						</div>

					</div>

					<div class="wpz-onboard_content-side-section discover-premium inspiro-block-version">
						<h3 class="wpz-onboard_content-side-section-title icon-docs">
							<svg id="Icons" width="24" style="enable-background:new 0 0 32 32;" version="1.1"
								 viewBox="0 0 32 32" xml:space="preserve" xmlns="https://www.w3.org/2000/svg"
								 xmlns:xlink="https://www.w3.org/1999/xlink"><style type="text/css">.st20 {
										fill: none;
										stroke: #fff;
										stroke-width: 2;
										stroke-linecap: round;
										stroke-linejoin: round;
										stroke-miterlimit: 10;
									}</style>
								<line class="st20" x1="3" x2="29" y1="11" y2="11"></line>
								<g>
									<path
										d="M7,9C6.7,9,6.5,8.9,6.3,8.7C6.1,8.5,6,8.3,6,8c0-0.3,0.1-0.5,0.3-0.7c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1   C6.7,7,6.7,7,6.8,7c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.2,0.3   C8,7.7,8,7.9,8,8c0,0.1,0,0.3-0.1,0.4C7.9,8.5,7.8,8.6,7.7,8.7C7.5,8.9,7.3,9,7,9z"></path>
								</g>
								<g>
									<path
										d="M10,9C9.7,9,9.5,8.9,9.3,8.7C9.1,8.5,9,8.3,9,8c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2   C10,6.9,10.4,7,10.7,7.3c0.1,0.1,0.2,0.2,0.2,0.3C11,7.7,11,7.9,11,8c0,0.3-0.1,0.5-0.3,0.7C10.5,8.9,10.3,9,10,9z"></path>
								</g>
								<g>
									<path
										d="M13,9c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3C12,8.3,12,8.1,12,8c0-0.1,0-0.3,0.1-0.4   c0.1-0.1,0.1-0.2,0.2-0.3c0.4-0.4,1-0.4,1.4,0c0.1,0.1,0.2,0.2,0.2,0.3C14,7.7,14,7.9,14,8c0,0.1,0,0.3-0.1,0.4   c-0.1,0.1-0.1,0.2-0.2,0.3C13.5,8.9,13.3,9,13,9z"></path>
								</g>
								<path class="st20"
									  d="M27,5H5C3.9,5,3,5.9,3,7v18c0,1.1,0.9,2,2,2h22c1.1,0,2-0.9,2-2V7C29,5.9,28.1,5,27,5z"></path>
								<line class="st20" x1="3" x2="19" y1="19" y2="19"></line>
								<line class="st20" x1="19" x2="19" y1="11"
									  y2="27"></line></svg> <?php esc_html_e( 'Inspiro Blocks Theme', 'inspiro' ); ?>
							&nbsp;&nbsp;<svg width="57" height="25" viewBox="0 0 57 25" fill="none"
											 xmlns="https://www.w3.org/2000/svg">
								<rect width="57" height="25" rx="12.5" fill="white"/>
								<path opacity="0.9"
									  d="M21.3714 7.81818V18H19.7308L14.9332 11.0646H14.8487V18H13.0043V7.81818H14.6548L19.4474 14.7585H19.5369V7.81818H21.3714ZM23.3812 18V7.81818H30.0034V9.36435H25.2257V12.1286H29.6603V13.6747H25.2257V16.4538H30.0431V18H23.3812ZM34.0279 18L31.1543 7.81818H33.138L34.9725 15.3004H35.0669L37.0257 7.81818H38.8304L40.7942 15.3054H40.8837L42.7182 7.81818H44.7019L41.8283 18H40.0087L37.9703 10.8558H37.8908L35.8475 18H34.0279Z"
									  fill="#3496FF"/>
							</svg>
						</h3>
						<p class="wpz-onboard_content-side-section-content"><?php esc_html_e( 'We have launched a new version of the Inspiro theme that is compatible with the new Site Editor. Experience the future of WordPress with our new block theme!', 'inspiro' ); ?></p>

						<a href="https://www.wpzoom.com/themes/inspiro-blocks/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-blocks"
						   title="Inspiro Premium" target="_blank"><img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/admin/inspiro-blocks.png' ); ?>"
								width="300" alt="<?php echo esc_attr__( 'Inspiro Premium', 'inspiro' ); ?>"/>
						</a>

						<div class="wpz-onboard_content-side-section-button">
							<a href="<?php echo esc_url( admin_url( 'theme-install.php?search=inspiro%2Bblocks' ) ); ?>"
							   title="Inspiro Blocks" target="_blank"
							   class="button"><?php esc_html_e( 'Install Now', 'inspiro' ); ?> &nbsp;
								<svg
									class="feather feather-download" fill="none" height="20" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
									width="20" xmlns="https://www.w3.org/2000/svg">
									<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
									<polyline points="7 10 12 15 17 10"/>
									<line x1="12" x2="12" y1="15" y2="3"/>
								</svg>
							</a>
						</div>
					</div>

					<div class="wpz-onboard_content-side-section">
						<h3 class="wpz-onboard_content-side-section-title icon-docs">
							<svg width="24" height="24" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									  d="M7.96074 2H19.9019C20.9965 2 21.8921 2.9 21.8921 4V16C21.8921 17.1 20.9965 18 19.9019 18H7.96074C6.86614 18 5.97055 17.1 5.97055 16V4C5.97055 2.9 6.86614 2 7.96074 2ZM1.99017 6H3.98036V20H17.9117V22H3.98036C2.88576 22 1.99017 21.1 1.99017 20V6ZM19.9019 16H7.96075V4H19.9019V16ZM17.9117 9H9.95093V11H17.9117V9ZM9.95093 12H13.9313V14H9.95093V12ZM17.9117 6H9.95093V8H17.9117V6Z"></path>
							</svg> <?php esc_html_e( 'Need help?', 'inspiro' ); ?></h3>
						<p class="wpz-onboard_content-side-section-content">
							<?php esc_html_e( 'Documentation is the place where you’ll find the information needed to setup the theme quickly, and other details about theme-specific features. You can also get in touch with our team by contacting us through our website or using the Support Forum.', 'inspiro' ); ?>
						</p>
						<div class="wpz-onboard_content-side-section-button">
							<a href="https://www.wpzoom.com/documentation/inspiro-lite/"
							   title="Read documentation"
							   target="_blank" class="button"><?php esc_html_e( 'Documentation', 'inspiro' ); ?>
							</a>
							<a href="https://wordpress.org/support/theme/inspiro/" title="Open Support Desk"
								target="_blank" class="button"><?php esc_html_e( 'Support Forums', 'inspiro' ); ?>
							</a>
						</div>
					</div>

					<div class="wpz-onboard_content-side-section">
						<h3 class="wpz-onboard_content-side-section-title icon-assist">
							<svg width="24" height="24" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									  d="M15.9216 2H2.98533C2.43803 2 1.99023 2.45 1.99023 3V17L5.97062 13H15.9216C16.4689 13 16.9167 12.55 16.9167 12V3C16.9167 2.45 16.4689 2 15.9216 2ZM14.9265 4V11H5.14473L3.98047 12.17V4H14.9265ZM18.9068 6H20.897C21.4443 6 21.8921 6.45 21.8921 7V22L17.9117 18H6.96568C6.41837 18 5.97058 17.55 5.97058 17V15H18.9068V6Z"></path>
							</svg> <?php esc_html_e( 'Walkthrough Video', 'inspiro' ); ?></h3>
						<p class="wpz-onboard_content-side-section-content"><?php esc_html_e( 'Below you can find a quick video tutorial that will guide you through configuring basic things in the theme after installing it. Please remember that this video was created in 2021, and since then, many things have improved in our theme.', 'inspiro' ); ?></p>

						<iframe width="800" height="464" src="https://www.youtube.com/embed/ZltZDp2z0N8"
								title="INSPIRO Lite Free WordPress Theme - For Photographers, Videographers and Portfolios"
								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								allowfullscreen></iframe>


					</div>

					<div class="wpz-onboard_content-side-section">
						<div class="section">
							<div class="inner-section">
								<?php
								$current_user = wp_get_current_user();
								?>

								<h3 class="wpz-onboard_content-side-section-title">
									<svg viewBox="0 0 512 512" xmlns="https://www.w3.org/2000/svg" width="21">
										<path
											d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/>
									</svg> <?php esc_html_e( 'Subscribe for Tips & Tricks', 'inspiro' ); ?>
								</h3>
								<p class="about">
									<?php esc_html_e( 'To ease up the journey you’re starting with Inspiro, we’re sending you some useful tips & tricks to have the best experience building your website.', 'inspiro' ); ?>
								</p>
								<p>
								<div id="mlb2-5543648"
									 class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-5543648">
									<div class="ml-form-align-center">
										<div class="ml-form-embedWrapper embedForm">
											<div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
												<form class="ml-block-form"
													  action="https://static.mailerlite.com/webforms/submit/f1v8a3"
													  data-code="f1v8a3" method="post" target="_blank">
													<input aria-label="email" aria-required="true" type="email"
														   value="<?php echo esc_attr( $current_user->user_email ); ?>"
														   class="form-control" data-inputmask="" name="fields[email]"
														   placeholder="Email" autocomplete="email">
													<input type="hidden" name="ml-submit" value="1">
													<span class="ml-form-embedSubmit">
                                                    <button type="submit"
															class="button button-primary">Subscribe</button>
                                                    <button disabled="disabled" style="display:none" type="button"
															class="loading button-primary"> <div
															class="ml-form-embedSubmitLoad"></div> <span
															class="sr-only">Loading...</span> </button>
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
									function ml_webform_success_5543648() {
										var r = ml_jQuery || jQuery;
										r(".ml-subscribe-form-5543648 .row-success").show(), r(".ml-subscribe-form-5543648 .row-form").hide()
									}
								</script>
								<img src="https://track.mailerlite.com/webforms/o/5543648/f1v8a3?v1646129865" width="1"
									 height="1"
									 style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block"
									 alt="." border="0">
								<script
									src="https://static.mailerlite.com/js/w/webforms.min.js?v0c75f831c56857441820dcec3163967c"
									type="text/javascript"></script>
								</p>
							</div>
						</div>
					</div>

					<div class="wpz-onboard_content-side-section">
						<h3 class="wpz-onboard_content-side-section-title icon-follow">
							<svg width="24" height="24" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									  d="M20.8971 9H14.618L15.5633 4.43L15.5932 4.11C15.5932 3.7 15.424 3.32 15.1553 3.05L14.1005 2L7.55281 8.59C7.18462 8.95 6.9657 9.45 6.9657 10V20C6.9657 21.1 7.86129 22 8.95589 22H17.9118C18.7377 22 19.4442 21.5 19.7427 20.78L22.7479 13.73C22.8375 13.5 22.8872 13.26 22.8872 13V11C22.8872 9.9 21.9917 9 20.8971 9ZM20.897 13L17.9117 20H8.95587V10L13.2746 5.66003L12.17 11H20.897V13ZM4.9755 10H0.995117V22H4.9755V10Z"></path>
							</svg>
							Follow WPZOOM
						</h3>
						<p class="wpz-onboard_content-side-section-content">Follow us on social media for news and
							updates on all your theme needs.</p>
						<div class="wpz-onboard_content-side-section-button">
							<a href="https://twitter.com/wpzoom" target="_blank" title="Twitter"
							   class="button button-smaller button-rounded"><span
									class="dashicons dashicons-twitter"></span> <span
									class="icon-text">Twitter</span></a>
							<a href="https://facebook.com/wpzoom" target="_blank" title="Facebook"
							   class="button button-smaller button-rounded">
								<svg width="18" height="18" fill="#fff" role="img" viewBox="0 0 24 24"
									 xmlns="https://www.w3.org/2000/svg"><title>Facebook</title>
									<path
										d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
								</svg>
								<span class="icon-text">Facebook</span></a>
							<a href="https://instagram.com/wpzoom" target="_blank" title="Instagram"
							   class="button button-smaller button-rounded"><span
									class="dashicons dashicons-instagram"></span> <span
									class="icon-text">Instagram</span></a>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div> <!-- /#tabs -->

	<div class="wpz-onboard_footer">
		<h3 class="wpz-onboard_footer-logo"><a href="https://wpzoom.com/" title="WPZOOM">WPZOOM</a></h3>

		<ul class="wpz-onboard_footer-links">
			<li class="wpz-onboard_footer-links-themes"><a href="https://www.wpzoom.com/themes/" target="_blank"
														   title="Themes">Premium Themes</a></li>
			<li class="wpz-onboard_footer-links-plugins"><a href="https://www.wpzoom.com/plugins/" target="_blank"
															title="Plugins">Plugins</a></li>
			<li class="wpz-onboard_footer-links-blog"><a href="https://www.wpzoom.com/blog/" target="_blank"
														 title="Blog">Our Blog</a></li>
			<li class="wpz-onboard_footer-links-support"><a href="https://www.wpzoom.com/support/" target="_blank"
															title="Support">Support</a></li>
		</ul>
	</div>
</div>
