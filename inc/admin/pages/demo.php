<?php
$parent = wp_get_theme();

// install-inspiro-starter-sites-btn
$btn_admin_link = esc_url( admin_url( 'admin.php?page=tgmpa-install-plugins' ) ); // was link attr value

?>

<?php if ( class_exists( 'WPZI_Importer' ) ) : ?>
	<?php do_action( 'inspiro_starter_sites_admin_page' ); ?>
<?php else : ?>

<div class="wpz-onboard_wrapper">
	<div id="tabs"><!-- #tabs -->

		<div class="wpz-onboard_header">
			<!-- Onboard title -->
			<div class="wpz-onboard_title-wrapper">
				<h1 class="wpz-onboard_title">
					<svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="https://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M23 46C35.7025 46 46 35.7025 46 23C46 10.2975 35.7025 0 23 0C10.2975 0 0 10.2975 0 23C0 35.7025 10.2975 46 23 46ZM19.4036 10.3152C19.4036 8.31354 21.0263 6.69091 23.0279 6.69091H26.2897C26.4899 6.69091 26.6521 6.85317 26.6521 7.05333V13.5025C26.6521 13.622 26.5884 13.7324 26.4848 13.7922L19.9055 17.5908C19.6824 17.7196 19.4036 17.5586 19.4036 17.3011V10.3152ZM19.5709 24.0613L26.1503 20.2627C26.3733 20.134 26.6521 20.2949 26.6521 20.5525V35.6849C26.6521 37.6865 25.0295 39.3091 23.0279 39.3091H19.7661C19.5659 39.3091 19.4036 39.1468 19.4036 38.9467V24.3511C19.4036 24.2316 19.4674 24.1211 19.5709 24.0613Z" fill="#242628"/>
					</svg>
					Inspiro <span>Lite</span>
				</h1>
			</div>

			<ul class="wpz-onboard_tabs">
				<li class="wpz-onboard_tab wpz-onboard_tab-license">
					<a href="#license" title="License">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 9H21" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M11 5.995L10.995 6L11 6.005L11.005 6L11 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M8.5 5.995L8.495 6L8.5 6.005L8.505 6L8.5 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M6 5.995L5.995 6L6 6.005L6.005 6L6 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M11 5.995L10.995 6L11 6.005L11.005 6L11 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M8.5 5.995L8.495 6L8.5 6.005L8.505 6L8.5 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M6 5.995L5.995 6L6 6.005L6.005 6L6 5.995" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M17.5 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H6.5" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 18L14 16" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10 16L12 18" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 13.5V18" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M14 21H10" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>	
					<?php esc_html_e( 'Demo Importer', 'inspiro' ); ?></a>
				</li><!-- /.tab-license -->
				<li class="wpz-onboard_tab wpz-onboard_tab-debug"><a href="#demos" title="Demos">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M4.64479 10.9348L6.77737 11.7451C8.38017 12.3542 9.64583 13.6198 10.2549 15.2226L11.0652 17.3552C11.2127 17.7434 11.5847 18 12 18C12.4152 18 12.7873 17.7434 12.9348 17.3552L13.7451 15.2226C14.3542 13.6198 15.6198 12.3542 17.2226 11.7451L19.3552 10.9348C19.7434 10.7873 20 10.4152 20 9.99999C20 9.58475 19.7434 9.21271 19.3552 9.06521L17.2226 8.25487C15.6198 7.64582 14.3542 6.38016 13.7451 4.77736L12.9348 2.64479C12.7873 2.25662 12.4152 2 12 2C11.5847 2 11.2127 2.25662 11.0652 2.64479L10.2549 4.77736C9.64583 6.38016 8.38017 7.64582 6.77737 8.25487L4.64479 9.06521C4.25662 9.21271 4 9.58475 4 9.99999C4 10.4152 4.25662 10.7873 4.64479 10.9348Z" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M4 19V15" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M2 17H6" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M3 5V1" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M1 3H5" stroke="#242628" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				<?php esc_html_e( 'Premium Demos', 'inspiro' ); ?></a></li>

			</ul>
		</div>

		<div class="wpz-onboard_content-wrapper">
			<div class="wpz-onboard_content">

				<div class="wpz-onboard_content-main">
				<div id="license" class="wpz-onboard_content-side demo-importer">

<div class="wpz-onboard_content-side-section">
	<h3 class="wpz-onboard_content-side-section-title icon-docs">
		<?php esc_html_e( 'Demo Importer', 'inspiro' ); ?>
	</h3>
	<p class="wpz-onboard_content-main-intro">
		<?php esc_html_e( 'Importing demo data (posts, pages, images, settings, etc.) is the fastest way to set up your theme, letting you edit instead of starting from scratch.', 'inspiro' ); ?>
	</p>    
</div>

<div class="theme-info-wrap">

	<ol class="wpz-onboard_content-main-steps">

		<li id="step-choose-design" class="wpz-onboard_content-main-step step-1 step-choose-design">
			<div class="wpz-onboard_content-main-step-content">

				<form method="post" action="#">

					<ul>
						<li class="design_default-elementor">
							<figure title="Inspiro Blocks">
								<div class="preview-thumbnail"
									 style="background-image:url('https://www.wpzoom.com/wp-content/uploads/2023/02/inspiro-blocks-1400x1000.png')">
									<a href="https://demo.wpzoom.com/inspiro-blocks" target="_blank"
									   class="button-select-template">View Demo</a></div>
								<figcaption>
									<h5>Lite</h5>

									<p>
										Available for
										<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
										</svg>

									</p>

									<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
									target="_blank" class="button button-large button-primary">
									<?php esc_html_e( 'Import', 'inspiro' ); ?>
									</a>

									<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-agency2/', 'inspiro' ) ); ?>"
										target="_blank" class="button button-large button-secondary">
										<?php esc_html_e( 'Preview', 'inspiro' ); ?>
									</a>
								</figcaption>
							</figure>
						</li>

						<li class="design_default-elementor">
						<figure title="Inspiro Blocks">
								<div class="preview-thumbnail"
									 style="background-image:url('https://www.wpzoom.com/wp-content/uploads/2023/02/inspiro-blocks-1400x1000.png')">
									<a href="https://demo.wpzoom.com/inspiro/" target="_blank"
									   class="button-select-template">View Demo</a></div>
								<figcaption>
									<h5>Lite</h5>

									<p>
										Available for
										<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
										</svg>
									</p>

									<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
									target="_blank" class="button button-large button-primary">
									<?php esc_html_e( 'Import', 'inspiro' ); ?>
									</a>

									<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro/', 'inspiro' ) ); ?>"
										target="_blank" class="button button-large button-secondary">
										<?php esc_html_e( 'Preview', 'inspiro' ); ?>
									</a>
								</figcaption>
							</figure>
						</li>

						<li class="design_video" data-design-id="inspiro-video">
						<figure title="Inspiro Blocks">
								<div class="preview-thumbnail"
									 style="background-image:url('https://www.wpzoom.com/wp-content/uploads/2023/02/inspiro-blocks-1400x1000.png')">
									<a href="https://demo.wpzoom.com/inspiro-video/"
									   target="_blank" class="button-select-template">View
										Demo</a></div>
								<figcaption>
									<h5>Lite Shop / WooCommerce</h5>

									<p>
										Available for
										<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
										</svg>

									</p>

									<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
									target="_blank" class="button button-large button-primary">
									<?php esc_html_e( 'Import', 'inspiro' ); ?>
									</a>

									<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-video/', 'inspiro' ) ); ?>"
										target="_blank" class="button button-large button-secondary">
										<?php esc_html_e( 'Preview', 'inspiro' ); ?>
									</a>
								</figcaption>
							</figure>
						</li>
					</ul>

				</form>
			</div>
		</li>

	</ol>

</div>
</div><!-- /#license -->

					<?php get_template_part( 'inc/admin/pages/demos' ); ?>

				</div>

			</div>
		</div>
	</div><!-- /#tabs -->

	<?php get_template_part( 'inc/admin/pages/footer' ); ?>

</div>

<?php endif; ?>