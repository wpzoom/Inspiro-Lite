<script>

    jQuery(document).ready(function () {
        var $grid = jQuery('.wpz-onboard_content-main-step-content').isotope({
            itemSelector: 'li',
            layoutMode: 'fitRows'
        });
    
        jQuery('.filters a').on('click', function () {
            jQuery('.theme-buttons .button').removeClass('active');

            jQuery(this).addClass('active');

            var filterValue = jQuery(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    });
</script>

<div id="demos" class="wpz-onboard_content-main-tab wpz-onboard_content-main-theme-child demos wpz-onboard_content-side">
    <div class="wpz-onboard_content-side-section block-premium">
        <div class="section-content">
            <div class="header-row">
                <h3 class="wpz-onboard_content-main-title">
                    <?php esc_html_e( 'Premium Starter Sites', 'inspiro' ); ?>
                </h3>
            </div>
            <p class="wpz-onboard_content-main-intro">
                <?php esc_html_e( 'Explore the available demos in the Inspiro Premium & Inspiro PRO themes below. Unlock access to all by upgrading to the premium versions.', 'inspiro' ); ?>
            </p>
            <p class="section_footer">
                <a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
                    target="_blank" class="button button-primary">
                        <?php esc_html_e( 'Get Inspiro Premium &#8599;', 'inspiro' ); ?>
                </a>
                <a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro-pro/', 'inspiro' ) ); ?>"
                    target="_blank" class="button button-primary">
                        <?php esc_html_e( 'Get Inspiro PRO &#8599;', 'inspiro' ); ?>
                </a>
            </p>
        </div>
        <div class="section-image">
            <a title="Inspiro Premium" target="_blank">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/admin/inspiro-demos.png' ); ?>"
                    width="400" alt="<?php echo esc_attr__( 'Inspiro Premium Blocks', 'inspiro' ); ?>" />
            </a>
        </div>
    </div>

    <div class="theme-info-wrap">
        <h3 class="wpz-onboard_content-main-title">
            <?php esc_html_e( 'Inspiro Premium • 19', 'inspiro' ); ?>
        </h3>
        <div class="theme-buttons filters">
            <a class="button button-common active" data-filter="*">
                <?php esc_html_e( 'All Themes', 'inspiro' ); ?>
            </a>
            <a class="button button-common" data-filter=".elementor">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.99998C0 13.9703 4.0297 18 8.99997 18C13.9703 18 18 13.9703 18 8.99998C18 4.0297 13.9703 0 8.99997 0C4.0297 0 0 4.0297 0 8.99998ZM6.74964 5.2499H5.24987V12.7501H6.74964V5.2499ZM8.24943 5.2499H12.7488V6.74967H8.24943V5.2499ZM12.7488 8.24944H8.24943V9.74922H12.7488V8.24944ZM8.24943 11.2503H12.7488V12.7501H8.24943V11.2503Z" fill="#92123A"/>
                </svg>
                <?php esc_html_e( 'Elementor', 'inspiro' ); ?>
            </a>
            <a class="button button-common" data-filter=".guttenberg">
                <svg width="18" height="18" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
				</svg>
                <?php esc_html_e( 'Block Editor', 'inspiro' ); ?>
            </a>
        </div>
     
        <ol class="wpz-onboard_content-main-steps">

            <li id="step-choose-design" class="wpz-onboard_content-main-step step-1 step-choose-design">
                <div class="wpz-onboard_content-main-step-content">

                    <form method="post" action="#">

                        <ul id="grid theme-ul">
                            <li class="design_default-elementor elementor">
                                <figure title="Portfolio (Default)">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://demo.wpzoom.com/inspiro-pro-demo/wp-content/themes/inspiro-pro-select/images/site-layout_agency-dark.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-agency2/" target="_blank"
                                           class="button-select-template">View Demo
                                        </a>
                                    </div>
                                    <figcaption>
                                        <h5>Agency / Business (new)</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-agency2/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_default-elementor elementor">
                                <figure title="Portfolio (Default)">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro/" target="_blank"
                                           class="button-select-template">View Demo</a></div>
                                    <figcaption>
                                        <h5>Premium Demo</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_video elementor" data-design-id="inspiro-video">
                                <figure title="Video Production">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-video-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-video/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Video Production</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-video/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_video2 elementor" data-design-id="inspiro-video2">
                                <figure title="Video Production #2">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-video2-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-video2/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Video Production #2</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-video2/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_kids elementor" data-design-id="inspiro-kids">
                                <figure title="camp">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-scout/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-kids/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Kids Summer Camp</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-kids/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_architecture elementor"
                                data-design-id="inspiro-architecture">
                                <figure title="Architecture">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-architecture/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-architecture/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Architecture</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-architecture/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_photography elementor"
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
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-wedding-photography/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_photography elementor" data-design-id="inspiro-photography">
                                <figure title="Photography">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-photography-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-photography/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Photography</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-photography/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_agency-elementor elementor" data-design-id="inspiro-agency">
                                <figure title="Agency / Business">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-agency-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-agency/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Agency / Business</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-agency/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_hotel elementor" data-design-id="inspiro-hotel">
                                <figure title="Hotel / Real Estate">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-hotel-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-hotel/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Hotel / Real Estate</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-hotel/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_event guttenberg" data-design-id="inspiro-events">
                                <figure title="Shop / WooCommerce">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/shop-home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-shop/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Shop / WooCommerce</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-shop/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_events elementor" data-design-id="inspiro-jewelry">
                                <figure title="Jewelry Shop / WooCommerce">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/shop2/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-jewelry2/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Jewelry Shop / WooCommerce</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-jewelry2/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_restaurant elementor" data-design-id="inspiro-restaurant">
                                <figure title="Restaurant">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/home-restaurant-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-restaurant/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Restaurant</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-restaurant/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_events elementor" data-design-id="inspiro-events">
                                <figure title="Events / Conference">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/demo-events.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-event/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Events / Conference</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-event/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_wellness elementor" data-design-id="inspiro-wellness">
                                <figure title="Wellness / Spa">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-wellness/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-wellness/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Wellness / Spa</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-wellness/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_magazine elementor" data-design-id="inspiro-magazine">
                                <figure title="Magazine">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-magazine/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-magazine/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Magazine</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-magazine/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_magazine elementor" data-design-id="inspiro-auto">
                                <figure title="Magazine">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://demo.wpzoom.com/inspiro-demo/wp-content/themes/inspiro-select/images/inspiro-rent.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-auto/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Car Rental / Dealer</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-auto/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_magazine guttenberg" data-design-id="inspiro-coach">
                                <figure title="Author">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-author/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-author/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Author / Coach</h5>
                                        <p>
											Available for
											<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-author/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_magazine elementor" data-design-id="inspiro-church">
                                <figure title="Church">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro/inspiro-church/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-church/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Church</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-church/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
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

    <div class="theme-info-wrap">
        <h3 class="wpz-onboard_content-main-title">
            <?php esc_html_e( 'Inspiro Pro • 11', 'inspiro' ); ?>
        </h3>
        <div class="theme-buttons filters">
            <a class="button button-common active" data-filter="*">
                <?php esc_html_e( 'All Themes', 'inspiro' ); ?>
            </a>
            <a class="button button-common" data-filter=".elementor">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.99998C0 13.9703 4.0297 18 8.99997 18C13.9703 18 18 13.9703 18 8.99998C18 4.0297 13.9703 0 8.99997 0C4.0297 0 0 4.0297 0 8.99998ZM6.74964 5.2499H5.24987V12.7501H6.74964V5.2499ZM8.24943 5.2499H12.7488V6.74967H8.24943V5.2499ZM12.7488 8.24944H8.24943V9.74922H12.7488V8.24944ZM8.24943 11.2503H12.7488V12.7501H8.24943V11.2503Z" fill="#92123A"/>
                </svg>
                <?php esc_html_e( 'Elementor', 'inspiro' ); ?>
            </a>
            <a class="button button-common" data-filter=".guttenberg">
                <svg width="18" height="18" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
				</svg>
                <?php esc_html_e( 'Block Editor', 'inspiro' ); ?>
            </a>
        </div>

        <ol class="wpz-onboard_content-main-steps">

            <li id="step-choose-design" class="wpz-onboard_content-main-step step-1 step-choose-design">
                <div class="wpz-onboard_content-main-step-content">

                    <form method="post" action="#">

                        <ul>
                            <li class="design_eccentric elementor" data-design-id="inspiro-pro-eccentric">
                                <figure title="Eccentric">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/flow-1/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro/"
                                           target="_blank" class="button-select-template">View
                                            Demo
                                        </a>
                                    </div>
                                    <figcaption>
                                        <h5>Eccentric</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_offbeat elementor" data-design-id="inspiro-pro-offbeat">
                                <figure title="Offbeat">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/flow-2/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-2/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Offbeat</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-2/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_agency elementor" data-design-id="inspiro-pro-agency">
                                <figure title="Agency">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/agency/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-agency/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Agency</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-agency/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_agency-dark elementor" data-design-id="inspiro-pro-agency-dark">
                                <figure title="Agency (Dark)">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/agency-dark/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-agency-dark/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Agency (Dark)</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-agency-dark/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_business elementor" data-design-id="inspiro-pro-business">
                                <figure title="Business">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/business/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-business/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Business</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-business/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_shop guttenberg" data-design-id="inspiro-pro-shop">
                                <figure title="Shop">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/shop/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-shop/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Shop</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-shop/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_real-estate elementor" data-design-id="inspiro-pro-real-estate">
                                <figure title="Real Estate">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/real-estate/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-real-estate/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Real Estate</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-real-estate/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_charity elementor" data-design-id="inspiro-pro-charity">
                                <figure title="Charity / NGO">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/charity/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-charity/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Charity / NGO</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-charity/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_fitness elementor" data-design-id="inspiro-pro-fitness">
                                <figure title="Fitness / Gym">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/fitness/fitness-home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-fitness/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Fitness / Gym</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-fitness/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>

                            <li class="design_winery guttenberg" data-design-id="inspiro-pro-winery">
                                <figure title="Winery">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://wpzoom.s3.us-east-1.amazonaws.com/elementor/templates/assets/thumbs/inspiro-pro/winery/home-thumb.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-pro-winery/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Winery</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28ZM20.7598 11.7135C20.5168 11.5354 20.1841 11.6073 20.0192 11.873C19.053 13.4452 17.0019 13.5296 16.8948 13.5296H16.8456C14.3172 13.5296 13.351 15.8614 13.3134 15.9551C13.1977 16.2489 13.322 16.5865 13.5853 16.7147C13.6547 16.7459 13.7328 16.7678 13.7994 16.7678C14.0048 16.7678 14.1986 16.6428 14.2883 16.4209C14.297 16.399 14.9623 14.7955 16.6692 14.6923V17.6774C16.5997 18.3213 16.3191 18.8276 15.8187 19.2058C15.3008 19.5966 14.6094 19.7966 13.7589 19.7966C12.7435 19.7966 11.9132 19.4184 11.2999 18.6682C10.675 17.9181 10.3626 16.8553 10.3626 15.4831L10.3713 12.1918C10.4204 10.979 10.7213 10.0194 11.2999 9.3349C11.9248 8.58473 12.7435 8.20652 13.7589 8.20652C14.6094 8.20652 15.3008 8.40656 15.8187 8.79728C16.3365 9.18799 16.6287 9.72561 16.6779 10.4226V10.4977C16.6779 10.8977 16.9816 11.2259 17.3519 11.2259C17.7222 11.2259 18.026 10.8977 18.026 10.4977V10.4226C17.9276 9.37865 17.4879 8.5566 16.6981 7.93458C15.9083 7.30632 14.9247 7 13.7328 7C12.3182 7 11.1755 7.50636 10.3076 8.50659C9.48891 9.44429 9.05786 10.6789 9.00868 12.198C9.00868 12.2512 9.00651 12.3035 9.00434 12.3559C9.00217 12.4082 9 12.4606 9 12.5137L9.00868 15.4769H9C9 17.1523 9.43973 18.4932 10.3076 19.4934C11.1755 20.4936 12.3182 21 13.7328 21C14.9247 21 15.9083 20.6937 16.701 20.0717C17.4242 19.5028 17.8524 18.7526 17.9999 17.8243L18.0289 14.5142C18.917 14.2829 20.1262 13.7546 20.89 12.5106C21.0809 12.2512 21.0144 11.8917 20.7598 11.7135Z" fill="#242628"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-pro-winery/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
											<?php esc_html_e( 'Preview', 'inspiro' ); ?>
										</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="design_tech elementor" data-design-id="inspiro-tech">
                                <figure title="Tech">
                                    <div class="preview-thumbnail"
                                         style="background-image:url('https://demo.wpzoom.com/inspiro-pro-demo/wp-content/themes/inspiro-pro-select/images/site-layout_tech.png')">
                                        <a href="https://demo.wpzoom.com/inspiro-tech/"
                                           target="_blank" class="button-select-template">View
                                            Demo</a></div>
                                    <figcaption>
                                        <h5>Tech / Finance</h5>
                                        <p>
											Available for
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14 0C6.26727 0 0 6.26723 0 13.9999C0 21.7302 6.26727 28 14 28C21.7327 28 28 21.7326 28 13.9999C27.9976 6.26723 21.7303 0 14 0ZM10.5007 19.8312H8.16859V8.16599H10.5007V19.8312ZM19.8315 19.8312H12.8327V17.4993H19.8315V19.8312ZM19.8315 15.1647H12.8327V12.8327H19.8315V15.1647ZM19.8315 10.4981H12.8327V8.16599H19.8315V10.4981Z" fill="#92123A"/>
											</svg>
										</p>
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-primary">
											<?php esc_html_e( 'Get Inspiro PRO', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro-tech/', 'inspiro' ) ); ?>"
											target="_blank" class="button button-large button-secondary-gray">
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
</div>


