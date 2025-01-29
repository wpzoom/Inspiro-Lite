<?php $parent = wp_get_theme(); ?>

<div id="quick-start" class="wpz-onboard_content-main-tab">

	<div class="theme-info-wrap welcome-section">
		<div class="section-content">
			<div class="header-row">
				<h3 class="wpz-onboard_content-main-title welcome"><?php esc_html_e( 'Welcome to Inspiro Lite!', 'inspiro' ); ?>
					👋</h3>
				<h2 class="wpz-onboard_framework-version">v <?php echo esc_html( $parent->get( 'Version' ) ); ?></h2>
			</div>
			<p class="wpz-onboard_content-main-intro"><?php esc_html_e( 'Thank you for installing the free version of our theme! Below you can find quick links to different sections in the Customizer where you can configure and customize the theme. The free version includes limited features and customization options, but if you need more flexibility and plan to take your website to the next level, make sure to check the Premium version.', 'inspiro' ); ?></p>
			<p class="section_footer">
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank"
					class="button button-primary">
					<?php esc_html_e( 'Customize', 'inspiro' ); ?>
				</a>
				<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
					target="_blank" class="button button-secondary">
					<?php esc_html_e( 'Get Inspiro Premium &#8599;', 'inspiro' ); ?>
				</a>
			</p>
		</div>
		<div class="section-image">
			<a href="https://demo.wpzoom.com/inspiro-premium-blocks"
				title="Inspiro Premium" target="_blank"><img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/admin/inspiro-premium-blocks.png' ); ?>"
				width="300" alt="<?php echo esc_attr__( 'Inspiro Premium Blocks', 'inspiro' ); ?>"/>
			</a>
		</div>
	</div>

	<div class="theme-info-wrap">
		<h3 class="wpz-onboard_content-main-title"><?php esc_html_e( 'Customize & Configure', 'inspiro' ); ?></h3>
			<div class="wpz-grid-wrap three">
				<div class="section">
					<h4>
						<svg id="Icons" style="enable-background:new 0 0 32 32;" width="26" height="26"
							version="1.1" viewBox="0 0 32 32" xml:space="preserve"
							xmlns="https://www.w3.org/2000/svg"
							xmlns:xlink="https://www.w3.org/1999/xlink">
							<style type="text/css">
								.st0 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-linejoin: round;
									stroke-miterlimit: 10;
								}

								.st1 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-linejoin: round;
								}
												
								.st2 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-linejoin: round;
									stroke-dasharray: 6, 6;
								}

								.st3 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-linejoin: round;
									stroke-dasharray: 4, 4;
								}

								.st4 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
								}

								.st5 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-dasharray: 3.1081, 3.1081;
								}

								.st6 {
									fill: none;
									stroke: #000000;
									stroke-width: 2;
									stroke-linecap: round;
									stroke-linejoin: round;
									stroke-miterlimit: 10;
									stroke-dasharray: 4, 3;
								}
							</style>
							<circle class="st0" cx="13" cy="13" r="1"/>
							<polyline class="st0" points="7,21 16,16 20,19 25,16 "/>
							<polyline class="st0" points="30,25 7,25 7,2 "/>
							<polyline class="st0" points="7,7 25,7 25,25 "/>
							<line class="st0" x1="7" x2="2" y1="7" y2="7"/>
							<line class="st0" x1="25" x2="25" y1="30" y2="25"/>
						</svg>
						<?php esc_html_e( 'Site Logo', 'inspiro' ); ?>
					</h4>
					<p class="about">
						<?php esc_html_e( 'If you have a logo image, you can upload it in the Site Identity section in the Customizer, and it will appear in your website\'s header.', 'inspiro' ); ?>
					</p>
					<p class="section_footer">
						<a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>"
							target="_blank" class="button button-primary">
							<?php esc_html_e( 'Customize &#8599;', 'inspiro' ); ?>
						</a>
					</p>
				</div>

				<div class="section">
					<h4>
						<svg with="26" height="26" id="Lager_1"
							style="enable-background:new -265 388.9 64 64;" version="1.1"
							viewBox="-265 388.9 64 64" xml:space="preserve"
							xmlns="https://www.w3.org/2000/svg"
							xmlns:xlink="https://www.w3.org/1999/xlink">
							<g><path d="M-244.5,411h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-242.9,410.3-243.6,411-244.5,411z"/>
							<path d="M-228.1,411h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-226.4,410.3-227.2,411-228.1,411z"/>
							<path d="M-211.6,411h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-210,410.3-210.7,411-211.6,411z"/>
							<path d="M-244.5,427.5h-9.9c-0.9,0-1.6-0.7-1.6-1.6V416c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-242.9,426.7-243.6,427.5-244.5,427.5z"/>
							<path d="M-228.1,427.5h-9.9c-0.9,0-1.6-0.7-1.6-1.6V416c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-226.4,426.7-227.2,427.5-228.1,427.5z"/>
							<path d="M-211.6,427.5h-9.9c-0.9,0-1.6-0.7-1.6-1.6V416c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-210,426.7-210.7,427.5-211.6,427.5z"/>
							<path d="M-244.5,443.9h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-242.9,443.2-243.6,443.9-244.5,443.9z"/>
							<path d="M-228.1,443.9h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-226.4,443.2-227.2,443.9-228.1,443.9z"/>										<path d="M-211.6,443.9h-9.9c-0.9,0-1.6-0.7-1.6-1.6v-9.9c0-0.9,0.7-1.6,1.6-1.6h9.9c0.9,0,1.6,0.7,1.6,1.6v9.9   C-210,443.2-210.7,443.9-211.6,443.9z"/>
							</g>
						</svg> 
						<?php esc_html_e( 'Portfolio', 'inspiro' ); ?>
					</h4>
					<p class="about">
						<?php esc_html_e( 'Using the free version of our WPZOOM Portfolio plugin you can quickly create a Portfolio section on your website.', 'inspiro' ); ?>
					</p>

					<p class="section_footer">

						<?php if ( class_exists( 'WPZOOM_Portfolio_Custom_Posts' ) ) { ?>

											<a href="<?php echo esc_url( admin_url( 'edit.php?post_type=portfolio_item' ) ); ?>"
											   target="_blank" class="button button-primary">
												<?php esc_html_e( 'Add a Portfolio Post &#8599;', 'inspiro' ); ?>
											</a>

										<?php } else { ?>

											<a href="<?php echo esc_url( admin_url( 'plugin-install.php?s=wpzoom%2520portfolio&tab=search&type=term' ) ); ?>"
											   target="_blank" class="button button-primary">
												<?php esc_html_e( 'Install WPZOOM Portfolio &#8599;', 'inspiro' ); ?>
											</a>

										<?php } ?>

										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/documentation/inspiro-lite/inspiro-lite-how-to-create-a-portfolio-section/', 'inspiro' ) ); ?>"
										   target="_blank" class="button button-secondary-gray">
											<?php esc_html_e( 'How to Create a Portfolio?', 'inspiro' ); ?>
										</a>
									</p>
								</div>

								<div class="section quick-action-section">
									<h4>
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.7062 1.79315C10.7847 -0.234165 14.1069 -0.213458 16.16 1.83961C18.2131 3.89268 18.2338 7.21491 16.2065 9.29341L16.1999 9.3001L14.008 11.492C13.7151 11.7849 13.2402 11.7849 12.9473 11.492C12.6544 11.1991 12.6544 10.7242 12.9473 10.4313L15.1358 8.24287C16.5866 6.75198 16.5707 4.37166 15.0993 2.90027C13.628 1.42889 11.2476 1.413 9.75676 2.86383L7.56829 5.05229C7.2754 5.34519 6.80053 5.34519 6.50763 5.05229C6.21474 4.7594 6.21474 4.28453 6.50763 3.99163L8.7062 1.79315Z" fill="#242628"/>
										<path d="M12.1982 5.8017C12.4911 6.09459 12.4911 6.56947 12.1982 6.86236L6.862 12.1986C6.5691 12.4915 6.09423 12.4915 5.80133 12.1986C5.50844 11.9057 5.50844 11.4308 5.80133 11.1379L11.1376 5.8017C11.4305 5.50881 11.9053 5.50881 12.1982 5.8017Z" fill="#242628"/>
										<path d="M5.05229 7.56842C5.34519 7.27552 5.34519 6.80065 5.05229 6.50776C4.7594 6.21486 4.28453 6.21486 3.99163 6.50776L1.79968 8.69963L1.79315 8.70632C-0.234165 10.7848 -0.213458 14.1071 1.83961 16.1601C3.89268 18.2132 7.21495 18.2339 9.29345 16.2066L11.492 14.0081C11.7849 13.7152 11.7849 13.2403 11.492 12.9474C11.1991 12.6545 10.7242 12.6545 10.4313 12.9474L8.24287 15.1359C6.75198 16.5867 4.37166 16.5709 2.90027 15.0995C1.42889 13.6281 1.413 11.2478 2.86383 9.75688L5.05229 7.56842Z" fill="#242628"/>
									</svg>
									<?php esc_html_e( 'Quick Links', 'inspiro' ); ?>
									</h4>
									<p class="about about-quick-links">
										<a href="#" target="_blank" class="description-link">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M3.1875 2C3.1875 1.27534 3.77534 0.6875 4.5 0.6875H6.75C7.67007 0.6875 8.48689 1.1292 9 1.81214C9.51311 1.1292 10.3299 0.6875 11.25 0.6875H13.5C14.2247 0.6875 14.8125 1.27534 14.8125 2V2.1875H15C16.1394 2.1875 17.0625 3.11059 17.0625 4.25V13.25C17.0625 14.3894 16.1394 15.3125 15 15.3125H3C1.86059 15.3125 0.9375 14.3894 0.9375 13.25V4.25C0.9375 3.11059 1.86059 2.1875 3 2.1875H3.1875V2ZM9.5625 12.4997C10.0325 12.1467 10.6168 11.9375 11.25 11.9375H13.5C13.6033 11.9375 13.6875 11.8533 13.6875 11.75V2C13.6875 1.89666 13.6033 1.8125 13.5 1.8125H11.25C10.3179 1.8125 9.5625 2.56791 9.5625 3.5V12.4997ZM8.4375 3.5C8.4375 2.56791 7.68209 1.8125 6.75 1.8125H4.5C4.39666 1.8125 4.3125 1.89666 4.3125 2V11.75C4.3125 11.8533 4.39666 11.9375 4.5 11.9375H6.75C7.38318 11.9375 7.96745 12.1467 8.4375 12.4997V3.5ZM15 3.3125H14.8125V11.75C14.8125 12.4747 14.2247 13.0625 13.5 13.0625H11.25C10.5152 13.0625 9.89012 13.532 9.65849 14.1875H15C15.5181 14.1875 15.9375 13.7681 15.9375 13.25V4.25C15.9375 3.73191 15.5181 3.3125 15 3.3125ZM6.75 13.0625C7.48485 13.0625 8.10988 13.532 8.34151 14.1875H3C2.48191 14.1875 2.0625 13.7681 2.0625 13.25V4.25C2.0625 3.73191 2.48191 3.3125 3 3.3125H3.1875V11.75C3.1875 12.4747 3.77534 13.0625 4.5 13.0625H6.75Z" fill="#3496FF"/>
											</svg>
											<?php esc_html_e( 'Find answers in our documentation', 'inspiro' ); ?>
										</a>
										<a href="#" target="_blank" class="description-link">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.31723 0.502779C2.95867 0.421836 0.91239 2.11793 0.554361 4.45056C0.196331 6.7832 1.63974 9.01491 3.91401 9.64505C4.21339 9.728 4.52333 9.55254 4.60628 9.25316C4.68923 8.95378 4.51378 8.64384 4.2144 8.56089C2.48953 8.08298 1.3948 6.39038 1.66634 4.62124C1.93788 2.85209 3.48984 1.56573 5.27865 1.62712C7.06745 1.68851 8.52757 3.07824 8.67718 4.86184C8.70315 5.17141 8.97516 5.40132 9.28473 5.37535C9.59431 5.34938 9.82421 5.07737 9.79825 4.7678C9.60098 2.41611 7.67579 0.583722 5.31723 0.502779Z" fill="#3496FF"/>
												<path d="M6.68215 4.22861C6.90188 4.44822 6.90197 4.80438 6.68236 5.02411L5.27627 6.43094C5.05669 6.65064 4.70059 6.65077 4.48085 6.43122L3.636 5.58712C3.41623 5.36755 3.41607 5.0114 3.63564 4.79163C3.85522 4.57186 4.21137 4.5717 4.43114 4.79128L4.87814 5.23788L5.88665 4.22882C6.10626 4.00909 6.46242 4.009 6.68215 4.22861Z" fill="#3496FF"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.75266 8.56606C5.75266 7.42662 6.67635 6.50293 7.81578 6.50293H13.068C14.2074 6.50293 15.1311 7.42662 15.1311 8.56606V11.5673C15.1311 12.7067 14.2074 13.6304 13.068 13.6304H11.4918L9.90848 14.9197C9.62785 15.1482 9.24076 15.1949 8.9139 15.0395C8.58705 14.8842 8.37875 14.5546 8.37875 14.1926V13.6304H7.81578C6.67635 13.6304 5.75266 12.7067 5.75266 11.5673V8.56606ZM7.81578 7.62793C7.29767 7.62793 6.87766 8.04794 6.87766 8.56606V10.3176V11.5673C6.87766 12.0854 7.29767 12.5054 7.81578 12.5054H8.28281H8.94125C9.25191 12.5054 9.50375 12.7573 9.50375 13.0679V13.7985L10.9365 12.6318C11.0369 12.55 11.1623 12.5054 11.2917 12.5054H13.068C13.5861 12.5054 14.0061 12.0854 14.0061 11.5673V8.56606C14.0061 8.04794 13.5861 7.62793 13.068 7.62793H7.81578Z" fill="#3496FF"/>
											</svg>
											<?php esc_html_e( 'Visit support forum', 'inspiro' ); ?>
										</a>
										<a href="#" target="_blank" class="description-link">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.85925 7.29906C7.85925 6.04565 8.87609 5.02881 10.1295 5.02881H10.737C11.0477 5.02881 11.2995 5.28065 11.2995 5.59131C11.2995 5.90197 11.0477 6.15381 10.737 6.15381H10.1295C9.49741 6.15381 8.98425 6.66697 8.98425 7.29906V7.92334H10.7362C11.0469 7.92334 11.2987 8.17518 11.2987 8.48584C11.2987 8.7965 11.0469 9.04834 10.7362 9.04834H8.98425V12.4088C8.98425 12.7195 8.73241 12.9713 8.42175 12.9713C8.11109 12.9713 7.85925 12.7195 7.85925 12.4088V9.04834H7.26297C6.95231 9.04834 6.70047 8.7965 6.70047 8.48584C6.70047 8.17518 6.95231 7.92334 7.26297 7.92334H7.85925V7.29906Z" fill="#3496FF"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M9 0.9375C4.5472 0.9375 0.9375 4.5472 0.9375 9C0.9375 13.4528 4.5472 17.0625 9 17.0625C13.4528 17.0625 17.0625 13.4528 17.0625 9C17.0625 4.5472 13.4528 0.9375 9 0.9375ZM2.0625 9C2.0625 5.16852 5.16852 2.0625 9 2.0625C12.8315 2.0625 15.9375 5.16852 15.9375 9C15.9375 12.8315 12.8315 15.9375 9 15.9375C5.16852 15.9375 2.0625 12.8315 2.0625 9Z" fill="#3496FF"/>
											</svg>
											<?php esc_html_e( 'Join our Facebook group', 'inspiro' ); ?>
										</a>
										<a href="#" target="_blank" class="description-link">
											<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M3.98359 8.70108L5.58302 9.30884C6.78512 9.76562 7.73437 10.7149 8.19115 11.917L8.7989 13.5164C8.90953 13.8075 9.18856 14 9.49999 14C9.81143 14 10.0905 13.8075 10.2011 13.5164L10.8088 11.917C11.2656 10.7149 12.2149 9.76562 13.417 9.30884L15.0164 8.70108C15.3075 8.59046 15.5 8.31143 15.5 7.99999C15.5 7.68856 15.3075 7.40953 15.0164 7.2989L13.417 6.69115C12.2149 6.23437 11.2656 5.28512 10.8088 4.08302L10.2011 2.48359C10.0905 2.19247 9.81143 2 9.49999 2C9.18856 2 8.90953 2.19247 8.7989 2.48359L8.19115 4.08302C7.73437 5.28512 6.78513 6.23437 5.58302 6.69115L3.98359 7.2989C3.69247 7.40953 3.5 7.68856 3.5 7.99999C3.5 8.31143 3.69247 8.59046 3.98359 8.70108Z" stroke="#3496FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M3.5 14.75V11.75" stroke="#3496FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M2 13.25H5" stroke="#3496FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M2.75 4.25V1.25" stroke="#3496FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M1.25 2.75H4.25" stroke="#3496FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											<?php esc_html_e( 'Update to Inspiro Premium', 'inspiro' ); ?>
										</a>
										<a href="#" target="_blank" class="description-link">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M9.19037 2.625C8.97642 2.625 8.78095 2.74628 8.68595 2.93798L8.68481 2.94028L7.08289 6.13586C7.00027 6.30067 6.84213 6.41453 6.65963 6.44062L3.1114 6.94783L3.10988 6.94805C2.89606 6.97802 2.71821 7.12764 2.6521 7.33318C2.58598 7.53872 2.64324 7.76397 2.7995 7.91298L2.80049 7.91392L5.35605 10.3629C5.49135 10.4926 5.5532 10.6811 5.52099 10.8657L4.91399 14.3449L4.91369 14.3466C4.87617 14.5579 4.96203 14.7721 5.13508 14.899C5.30813 15.0259 5.53826 15.0434 5.7285 14.9441L5.73064 14.943L8.93223 13.2893C9.09419 13.2056 9.28665 13.2057 9.4486 13.2894L12.6502 14.9438L12.6522 14.9449C12.8425 15.0442 13.0726 15.0267 13.2457 14.8998C13.4187 14.7729 13.5046 14.5586 13.467 14.3474L13.4667 14.3457L12.8597 10.8657C12.8275 10.6811 12.8894 10.4926 13.0247 10.3629L15.5803 7.91392L15.5812 7.91298C15.7375 7.76397 15.7948 7.53872 15.7286 7.33318C15.6625 7.12764 15.4847 6.97802 15.2709 6.94805L15.2693 6.94783L11.7211 6.44062C11.5386 6.41453 11.3805 6.30067 11.2979 6.13586L9.69478 2.93798C9.59978 2.74628 9.40432 2.625 9.19037 2.625ZM7.67857 2.43717C7.96366 1.86311 8.54933 1.5 9.19037 1.5C9.83137 1.5 10.417 1.86307 10.7021 2.43709C10.7023 2.43753 10.7026 2.43797 10.7028 2.43842L12.1717 5.36859L15.427 5.83394C15.4273 5.83398 15.4276 5.83402 15.4279 5.83405C16.0686 5.92419 16.6015 6.37268 16.7996 6.98869C16.9977 7.60453 16.8264 8.27938 16.3586 8.72617C16.3586 8.72618 16.3586 8.72616 16.3586 8.72617C16.3583 8.72647 16.358 8.72681 16.3576 8.72712L14.0195 10.9678L14.5747 14.1507C14.5748 14.151 14.5748 14.1513 14.5749 14.1517C14.6869 14.7848 14.4295 15.4267 13.9109 15.807C13.3924 16.1872 12.703 16.2398 12.1329 15.9428C12.1325 15.9426 12.1321 15.9424 12.1317 15.9422L9.19031 14.4222L6.24907 15.9414C6.24862 15.9417 6.24816 15.9419 6.2477 15.9421C5.67759 16.2391 4.98825 16.1864 4.46981 15.8062C3.95121 15.4259 3.69377 14.784 3.80586 14.1508C3.80591 14.1505 3.80597 14.1502 3.80602 14.1499L4.3612 10.9677L2.02309 8.72712C2.02288 8.72692 2.02268 8.72672 2.02247 8.72652C1.55444 8.27973 1.38299 7.60469 1.58114 6.98869C1.77929 6.37266 2.31218 5.92416 2.95294 5.83405C2.9532 5.83401 2.95346 5.83397 2.95373 5.83394L6.20907 5.36859L7.67857 2.43717Z" fill="#3496FF"/>
											</svg>
											<?php esc_html_e( 'Leave a review', 'inspiro' ); ?>
										</a>
									</p>

								</div>


								<div class="section">

									<h4>
										<span class="dashicons dashicons-cloud-upload"></span>
										<?php esc_html_e( 'Demo Content', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'Importing demo data (post, pages, images, etc.) is the quickest and easiest way to set up your new theme, and it allows you to simply edit everything instead of creating content and layouts from scratch.', 'inspiro' ); ?>
									</p>


									<p class="section_footer">

										<a href="<?php echo esc_url( admin_url( 'admin.php?page=inspiro-demo' ) ); ?>"
										   class="button button-primary">
											<?php esc_html_e( 'Import the Demo Content &#8599;', 'inspiro' ); ?>
										</a>

										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/documentation/inspiro-lite/inspiro-lite-importing-the-demo-content/', 'inspiro' ) ); ?>"
										   target="_blank" class="button button-secondary-gray">
											<?php esc_html_e( 'How it works?', 'inspiro' ); ?>
										</a>

									</p>

								</div>


								<div class="section">
									<h4>
										<svg height="26" viewBox="0 0 21 21" width="26"
											 xmlns="https://www.w3.org/2000/svg">
											<g fill="none" fill-rule="evenodd" stroke="currentColor"
											   stroke-linecap="round" stroke-linejoin="round"
											   transform="translate(3 3)">
												<path
													d="m14.4978951 12.4978973-.0105089-9.99999996c-.0011648-1.10374784-.8962548-1.99789734-2-1.99789734h-9.99999995c-1.0543629 0-1.91816623.81587779-1.99451537 1.85073766l-.00548463.151365.0105133 10.00000004c.0011604 1.1037478.89625045 1.9978973 1.99999889 1.9978973h9.99999776c1.0543618 0 1.9181652-.8158778 1.9945143-1.8507377z"/>
												<path d="m4.5 4.5v9.817"/>
												<path d="m7-2v14" transform="matrix(0 1 -1 0 12.5 -2.5)"/>
											</g>
										</svg> <?php esc_html_e( 'Header & Footer', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'In the Customizer, you will find separate sections to configure theme\'s Header and Footer. You can also add widgets in the Footer in the Widgets section in the Customizer.', 'inspiro' ); ?>
									</p>

									<p class="section_footer">

										<a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=header-area' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Header Options &#8599;', 'inspiro' ); ?>
										</a>

										<a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=footer-area' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Footer Options &#8599;', 'inspiro' ); ?>
										</a>

									</p>
								</div>

								<div class="section">
									<h4>
										<svg style="enable-background:new 0 0 16 16;" version="1.1" width="26"
											 viewBox="0 0 16 16" xml:space="preserve"
											 xmlns="https://www.w3.org/2000/svg"
											 xmlns:xlink="https://www.w3.org/1999/xlink"><g id="Guide"/>
											<g id="Layer_2">
												<g>
													<path
														d="M6,6c0-0.93-0.64-1.71-1.5-1.93V2.5C4.5,2.22,4.28,2,4,2S3.5,2.22,3.5,2.5v1.57C2.64,4.29,2,5.07,2,6s0.64,1.71,1.5,1.93    v5.57C3.5,13.78,3.72,14,4,14s0.5-0.22,0.5-0.5V7.93C5.36,7.71,6,6.93,6,6z M4,7C3.45,7,3,6.55,3,6s0.45-1,1-1s1,0.45,1,1    S4.55,7,4,7z"/>
													<path
														d="M8.5,9.07V2.5C8.5,2.22,8.28,2,8,2S7.5,2.22,7.5,2.5v6.57C6.64,9.29,6,10.07,6,11s0.64,1.71,1.5,1.93v0.57    C7.5,13.78,7.72,14,8,14s0.5-0.22,0.5-0.5v-0.57c0.86-0.22,1.5-1,1.5-1.93S9.36,9.29,8.5,9.07z M8,12c-0.55,0-1-0.45-1-1    s0.45-1,1-1s1,0.45,1,1S8.55,12,8,12z"/>
													<path
														d="M14,5c0-0.93-0.64-1.71-1.5-1.93V2.5C12.5,2.22,12.28,2,12,2s-0.5,0.22-0.5,0.5v0.57C10.64,3.29,10,4.07,10,5    s0.64,1.71,1.5,1.93v6.57c0,0.28,0.22,0.5,0.5,0.5s0.5-0.22,0.5-0.5V6.93C13.36,6.71,14,5.93,14,5z M12,6c-0.55,0-1-0.45-1-1    s0.45-1,1-1s1,0.45,1,1S12.55,6,12,6z"/>
												</g>
											</g></svg> <?php esc_html_e( 'Colors & Fonts', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'Set up your global colors and fonts to match your site with your brand.', 'inspiro' ); ?>
									</p>

									<p class="section_footer">

										<a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=colors' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Customize Colors &#8599;', 'inspiro' ); ?>
										</a>

										<a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=inspiro_typography_panel' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Typography Options &#8599;', 'inspiro' ); ?>
										</a>

									</p>
								</div>

							</div>

						</div>

						<div class="wpz-onboard_content-side-section discover-premium">
                        <div class="image-column">

                            <a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
                                title="Inspiro Premium" target="_blank"><img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/admin/inspiro-premium.png' ); ?>"
                                        width="300" alt="<?php echo esc_attr__( 'Inspiro Premium', 'inspiro' ); ?>"/>
                            </a>
                        </div>

                        <div class="text-column">

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
                                </svg> <?php esc_html_e( 'Discover Inspiro Premium!', 'inspiro' ); ?>
							</h3>

                            <ul>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									19+ Starter Sites
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Portfolio with Video Integration
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Video Slideshow
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Video Backgrounds
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Advanced WooCommerce Integration
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Video Background on Hover
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									Custom Elementor Widgets
								</li>
                                <li>
									<svg width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6706 6.08301L9.00365 11.75L6.1709 8.91651" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.75 9.5C15.75 13.2283 12.7283 16.25 9 16.25C5.27175 16.25 2.25 13.2283 2.25 9.5C2.25 5.77175 5.27175 2.75 9 2.75C10.0897 2.75 11.1158 3.01475 12.027 3.473" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									...and much more
								</li>
                            </ul>
                            
                            <div class="wpz-onboard_content-side-section-button">
                                <a href="https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
                                title="Inspiro Premium" target="_blank"
                                class="button"><?php esc_html_e( 'Discover the Premium Version &#8599;', 'inspiro' ); ?></a>

                                <a href="https://www.wpzoom.com/themes/inspiro/starter-sites/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
                                    title="Inspiro Premium" target="_blank"
                                    class="button button-starter"><?php esc_html_e( 'View Starter Sites &#8599;', 'inspiro' ); ?></a>
                            </div>

                        </div>
                    </div>

						<div class="theme-info-wrap">

							<h3 class="wpz-onboard_content-main-title">
								<svg fill="none" height="24" viewBox="0 0 24 24" width="24"
									 xmlns="https://www.w3.org/2000/svg">
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
								</svg> <?php esc_html_e( 'Premium Features', 'inspiro' ); ?></h3>

							<div class="wpz-grid-wrap three">

								<div class="section premium-feature">
									<h4>
										<svg height="24"
											 style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
											 version="1.1" viewBox="0 0 1069 1069" width="24" xml:space="preserve"
											 xmlns="https://www.w3.org/2000/svg" xmlns:serif="https://www.serif.com/"
											 xmlns:xlink="https://www.w3.org/1999/xlink"><rect height="1066.67"
																							   id="Video-player"
																							   style="fill:none;"
																							   width="1066.67" x="1.515"
																							   y="0.143"/>
											<g>
												<path
													d="M653.802,660.183c9.682,-5.579 15.648,-15.903 15.648,-27.077c0,-11.174 -5.966,-21.498 -15.648,-27.077c-0,0 -207.519,-119.571 -207.519,-119.571c-9.669,-5.571 -21.576,-5.563 -31.238,0.021c-9.662,5.584 -15.613,15.897 -15.613,27.056c-0,0 -0,239.142 -0,239.142c-0,11.159 5.951,21.472 15.613,27.056c9.662,5.584 21.569,5.592 31.238,0.021c0,-0 207.519,-119.571 207.519,-119.571Zm-78.196,-27.077l-113.674,65.498c-0,0.001 -0,-130.996 -0,-130.996l113.674,65.498Z"
													style="fill-opacity:0.5;"/>
												<path
													d="M45.265,325.143l-0,458.333c-0,52.49 20.852,102.831 57.968,139.948c37.117,37.117 87.458,57.969 139.949,57.969c165.508,-0 417.825,-0 583.333,-0c52.491,-0 102.832,-20.852 139.948,-57.969c37.117,-37.117 57.969,-87.458 57.969,-139.948l-0,-458.333c-0,-52.49 -20.852,-102.831 -57.969,-139.948c-37.116,-37.117 -87.457,-57.969 -139.948,-57.969c-165.508,0 -417.825,0 -583.333,0c-52.491,0 -102.832,20.852 -139.949,57.969c-37.116,37.117 -57.968,87.458 -57.968,139.948Zm62.5,56.213l-0,402.12c-0,35.915 14.267,70.358 39.662,95.754c25.396,25.396 59.84,39.663 95.755,39.663c165.508,-0 417.825,-0 583.333,-0c35.915,-0 70.359,-14.267 95.754,-39.663c25.396,-25.396 39.663,-59.839 39.663,-95.754l-0,-458.333c-0,-35.915 -14.267,-70.358 -39.663,-95.754c-25.395,-25.396 -59.839,-39.663 -95.754,-39.663c-165.508,0 -417.825,0 -583.333,0c-35.915,0 -70.359,14.267 -95.755,39.663c-23.909,23.91 -37.955,55.84 -39.516,89.467l676.937,0c17.248,0 31.25,14.003 31.25,31.25c0,17.248 -14.002,31.25 -31.25,31.25l-677.083,0Zm123.177,-160.38c18.253,0 33.073,14.82 33.073,33.073c-0,18.254 -14.82,33.074 -33.073,33.074c-18.254,-0 -33.074,-14.82 -33.074,-33.074c0,-18.253 14.82,-33.073 33.074,-33.073Zm104.166,0c18.254,0 33.074,14.82 33.074,33.073c-0,18.254 -14.82,33.074 -33.074,33.074c-18.253,-0 -33.073,-14.82 -33.073,-33.074c0,-18.253 14.82,-33.073 33.073,-33.073Zm104.167,0c18.254,0 33.073,14.82 33.073,33.073c0,18.254 -14.819,33.074 -33.073,33.074c-18.254,-0 -33.073,-14.82 -33.073,-33.074c-0,-18.253 14.819,-33.073 33.073,-33.073Z"/>
											</g></svg> <?php esc_html_e( 'Slideshow with YouTube & Vimeo Integration ', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'In the free version, you can have just a static hero on the homepage, while in the Premium version, you can create a fully working slideshow with multiple videos and images. The Slideshow of the Premium version provides more options and features, such as displaying a different video on mobile devices, adding a video popup, and more.', 'inspiro' ); ?>
									</p>
									<p class="section_footer">
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium', 'inspiro' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Get Inspiro Premium &#8599;', 'inspiro' ); ?>
										</a>
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/?theme=inspiro-demo', 'inspiro' ) ); ?>"
										   target="_blank" class="button button-secondary-gray">
											<?php esc_html_e( 'View Demo &#8599;', 'inspiro' ); ?>
										</a>
									</p>
								</div>

								<div class="section premium-feature">
									<h4>
										<svg width="26" height="26" viewBox="0 0 30 30" fill="none"
											 xmlns="https://www.w3.org/2000/svg">
											<path
												d="M21 12.405L13.5 8.07C13.0442 7.80682 12.5271 7.66821 12.0008 7.66807C11.4744 7.66794 10.9573 7.80629 10.5013 8.06923C10.0454 8.33217 9.66661 8.71045 9.40308 9.16607C9.13956 9.6217 9.00054 10.1386 9 10.665V19.335C9.00054 19.8611 9.13942 20.3778 9.4027 20.8332C9.66597 21.2887 10.0444 21.667 10.5 21.93C10.9561 22.1933 11.4734 22.3319 12 22.3319C12.5266 22.3319 13.0439 22.1933 13.5 21.93L21 17.595C21.4546 17.3313 21.832 16.9528 22.0943 16.4973C22.3566 16.0419 22.4947 15.5256 22.4947 15C22.4947 14.4744 22.3566 13.9581 22.0943 13.5027C21.832 13.0472 21.4546 12.6687 21 12.405ZM19.5 15L12 19.335V10.665L19.5 15ZM15 0C12.0333 0 9.13319 0.879734 6.66645 2.52796C4.19971 4.17618 2.27713 6.51885 1.14181 9.25974C0.00649926 12.0006 -0.290551 15.0166 0.288227 17.9263C0.867006 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16394 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C30 13.0302 29.612 11.0796 28.8582 9.25974C28.1044 7.43986 26.9995 5.78628 25.6066 4.3934C24.2137 3.00052 22.5601 1.89563 20.7403 1.14181C18.9204 0.387986 16.9698 0 15 0ZM15 27C12.6266 27 10.3066 26.2962 8.33316 24.9776C6.35977 23.659 4.8217 21.7849 3.91345 19.5922C3.0052 17.3995 2.76756 14.9867 3.23058 12.6589C3.69361 10.3311 4.83649 8.19295 6.51472 6.51472C8.19295 4.83649 10.3311 3.6936 12.6589 3.23058C14.9867 2.76755 17.3995 3.00519 19.5922 3.91344C21.7849 4.8217 23.6591 6.35977 24.9776 8.33315C26.2962 10.3065 27 12.6266 27 15C27 18.1826 25.7357 21.2348 23.4853 23.4853C21.2348 25.7357 18.1826 27 15 27Z"
												fill="#242628"></path>
										</svg> <?php esc_html_e( 'Advanced Portfolio with Video Integration', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'Inspiro Premium is perfect for showing off your portfolio, images and videos. The premium version includes multiple page templates to display your Portfolio posts and a custom Elementor Portfolio widget. You also get access to features such as Video Lightbox, Video Background on Hover, and more!', 'inspiro' ); ?>
									</p>
									<p class="section_footer">
										<a href="<?php echo esc_url( __( 'https://demo.wpzoom.com/inspiro/portfolio/', 'inspiro' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Premium Portfolio Demo &#8599;', 'inspiro' ); ?>
										</a>
									</p>
								</div>

								<div class="section premium-feature">
									<h4>
										<svg height="26" preserveAspectRatio="xMidYMid" version="1.1"
											 viewBox="0 0 256 153" width="26" xmlns="https://www.w3.org/2000/svg"
											 xmlns:xlink="https://www.w3.org/1999/xlink">
											<g>
												<path
													d="M23.7586644,0 L232.137438,0 C245.324643,0 256,10.6753566 256,23.8625617 L256,103.404434 C256,116.591639 245.324643,127.266996 232.137438,127.266996 L157.409942,127.266996 L167.666657,152.385482 L122.558043,127.266996 L23.8633248,127.266996 C10.6761196,127.266996 0.000763038458,116.591639 0.000763038458,103.404434 L0.000763038458,23.8625617 C-0.10389732,10.7800169 10.5714592,0 23.7586644,0 L23.7586644,0 Z"
													fill="#9B5C8F"/>
												<path
													d="M14.5781994,21.7495935 C16.0351099,19.7723577 18.2204758,18.7317073 21.1342969,18.5235772 C26.441614,18.1073171 29.4595002,20.604878 30.1879555,26.0162602 C33.4139717,47.7658537 36.9521831,66.1853659 40.6985246,81.2747967 L63.4887685,37.8796748 C65.5700693,33.9252033 68.1716953,31.8439024 71.2936465,31.6357724 C75.8725083,31.3235772 78.6822644,34.2373984 79.8269798,40.3772358 C82.4286059,54.2178862 85.7586872,65.9772358 89.7131587,75.9674797 C92.4188498,49.5349593 96.9977116,30.4910569 103.449744,18.7317073 C105.01072,15.8178862 107.300151,14.3609756 110.318037,14.1528455 C112.711533,13.9447154 114.896899,14.6731707 116.874134,16.2341463 C118.85137,17.795122 119.89202,19.7723577 120.100151,22.1658537 C120.204216,24.0390244 119.89202,25.6 119.0595,27.1609756 C115.000964,34.6536585 111.670882,47.2455285 108.965191,64.7284553 C106.363565,81.6910569 105.42698,94.9073171 106.05137,104.377236 C106.2595,106.978862 105.84324,109.268293 104.80259,111.245528 C103.553809,113.534959 101.680638,114.78374 99.2871424,114.99187 C96.5814514,115.2 93.7716953,113.95122 91.0660042,111.141463 C81.3879555,101.255285 73.6871424,86.4780488 68.0676303,66.8097561 C61.3034026,80.1300813 56.3082807,90.1203252 53.0822644,96.7804878 C46.942427,108.539837 41.739175,114.57561 37.3684433,114.887805 C34.5586872,115.095935 32.1651912,112.702439 30.0838904,107.707317 C24.7765733,94.0747967 19.0529961,67.7463415 12.9131587,28.7219512 C12.4968985,26.0162602 13.1212888,23.6227642 14.5781994,21.7495935 Z M238.213972,38.0878049 C234.46763,31.5317073 228.952183,27.5772358 221.563565,26.0162602 C219.586329,25.6 217.713159,25.3918699 215.944053,25.3918699 C205.953809,25.3918699 197.836736,30.595122 191.488768,41.001626 C186.077386,49.8471545 183.371695,59.6292683 183.371695,70.3479675 C183.371695,78.3609756 185.036736,85.2292683 188.366817,90.9528455 C192.113159,97.5089431 197.628606,101.463415 205.017224,103.02439 C206.99446,103.44065 208.86763,103.64878 210.636736,103.64878 C220.731045,103.64878 228.848118,98.4455285 235.09202,88.0390244 C240.503403,79.0894309 243.209094,69.3073171 243.209094,58.5886179 C243.313159,50.4715447 241.544053,43.7073171 238.213972,38.0878049 Z M225.101777,66.9138211 C223.644866,73.7821138 221.04324,78.8813008 217.192834,82.3154472 C214.174947,85.0211382 211.365191,86.1658537 208.763565,85.6455285 C206.266004,85.1252033 204.184703,82.9398374 202.623728,78.8813008 C201.374947,75.6552846 200.750557,72.4292683 200.750557,69.4113821 C200.750557,66.8097561 200.958687,64.2081301 201.479012,61.8146341 C202.415598,57.5479675 204.184703,53.3853659 206.99446,49.4308943 C210.428606,44.3317073 214.070882,42.2504065 217.817224,42.9788618 C220.314785,43.499187 222.396086,45.6845528 223.957061,49.7430894 C225.205842,52.9691057 225.830232,56.195122 225.830232,59.2130081 C225.830232,61.9186992 225.622102,64.5203252 225.101777,66.9138211 Z M173.069256,38.0878049 C169.322915,31.5317073 163.703403,27.5772358 156.41885,26.0162602 C154.441614,25.6 152.568443,25.3918699 150.799338,25.3918699 C140.809094,25.3918699 132.69202,30.595122 126.344053,41.001626 C120.932671,49.8471545 118.22698,59.6292683 118.22698,70.3479675 C118.22698,78.3609756 119.89202,85.2292683 123.222102,90.9528455 C126.968443,97.5089431 132.48389,101.463415 139.872508,103.02439 C141.849744,103.44065 143.722915,103.64878 145.49202,103.64878 C155.586329,103.64878 163.703403,98.4455285 169.947305,88.0390244 C175.358687,79.0894309 178.064378,69.3073171 178.064378,58.5886179 C178.064378,50.4715447 176.399338,43.7073171 173.069256,38.0878049 Z M159.852996,66.9138211 C158.396086,73.7821138 155.79446,78.8813008 151.944053,82.3154472 C148.926167,85.0211382 146.116411,86.1658537 143.514785,85.6455285 C141.017224,85.1252033 138.935923,82.9398374 137.374947,78.8813008 C136.126167,75.6552846 135.501777,72.4292683 135.501777,69.4113821 C135.501777,66.8097561 135.709907,64.2081301 136.230232,61.8146341 C137.166817,57.5479675 138.935923,53.3853659 141.745679,49.4308943 C145.179825,44.3317073 148.822102,42.2504065 152.568443,42.9788618 C155.066004,43.499187 157.147305,45.6845528 158.708281,49.7430894 C159.957061,52.9691057 160.581451,56.195122 160.581451,59.2130081 C160.685516,61.9186992 160.373321,64.5203252 159.852996,66.9138211 L159.852996,66.9138211 L159.852996,66.9138211 Z"
													fill="#FFFFFF"/>
											</g>
										</svg> <?php esc_html_e( 'WooCommerce Features', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'The Premium version of the theme includes unique WooCommerce features and additional options to customize the shop pages as you want.', 'inspiro' ); ?>
									</p>
								</div>


								<div class="section premium-feature">
									<h4>
										<svg height="26" style="enable-background:new 0 0 512 512;" version="1.1"
											 viewBox="0 0 512 512" width="26" xml:space="preserve"
											 xmlns="https://www.w3.org/2000/svg"
											 xmlns:xlink="https://www.w3.org/1999/xlink"><g id="_x31_09-elementor">
												<g>
													<path
														d="M462.999,26.001H49c-12.731,0-22.998,10.268-22.998,23v413.998c0,12.732,10.267,23,22.998,23    h413.999c12.732,0,22.999-10.268,22.999-23V49.001C485.998,36.269,475.731,26.001,462.999,26.001"
														style="fill:#D63362;"/>
													<rect height="204.329" style="fill:#FFFFFF;" width="40.865"
														  x="153.836" y="153.836"/>
													<rect height="40.866" style="fill:#FFFFFF;" width="122.7"
														  x="235.566" y="317.299"/>
													<rect height="40.865" style="fill:#FFFFFF;" width="122.7"
														  x="235.566" y="235.566"/>
													<rect height="40.865" style="fill:#FFFFFF;" width="122.7"
														  x="235.566" y="153.733"/>
												</g>
											</g>
											<g id="Layer_1"/></svg> <?php esc_html_e( 'Custom Elementor Modules', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'The Premium version will unlock Premium Elementor Modules such as Portfolio Showcase, Slideshow widget, and more!', 'inspiro' ); ?>
									</p>

								</div>


								<div class="section premium-feature">

									<h4>
										<svg width="20" height="20" viewBox="0 0 40 40" fill="none"
											 xmlns="https://www.w3.org/2000/svg">
											<path
												d="M34 0H14C12.4087 0 10.8826 0.632141 9.75736 1.75736C8.63214 2.88258 8 4.4087 8 6V8H6C4.4087 8 2.88258 8.63214 1.75736 9.75736C0.632141 10.8826 0 12.4087 0 14V34C0 35.5913 0.632141 37.1174 1.75736 38.2426C2.88258 39.3679 4.4087 40 6 40H26C27.5913 40 29.1174 39.3679 30.2426 38.2426C31.3679 37.1174 32 35.5913 32 34V32H34C35.5913 32 37.1174 31.3679 38.2426 30.2426C39.3679 29.1174 40 27.5913 40 26V6C40 4.4087 39.3679 2.88258 38.2426 1.75736C37.1174 0.632141 35.5913 0 34 0ZM28 34C28 34.5304 27.7893 35.0391 27.4142 35.4142C27.0391 35.7893 26.5304 36 26 36H6C5.46957 36 4.96086 35.7893 4.58579 35.4142C4.21071 35.0391 4 34.5304 4 34V20H28V34ZM28 16H4V14C4 13.4696 4.21071 12.9609 4.58579 12.5858C4.96086 12.2107 5.46957 12 6 12H26C26.5304 12 27.0391 12.2107 27.4142 12.5858C27.7893 12.9609 28 13.4696 28 14V16ZM36 26C36 26.5304 35.7893 27.0391 35.4142 27.4142C35.0391 27.7893 34.5304 28 34 28H32V14C31.9946 13.3177 31.8728 12.6413 31.64 12H36V26ZM36 8H12V6C12 5.46957 12.2107 4.96086 12.5858 4.58579C12.9609 4.21071 13.4696 4 14 4H34C34.5304 4 35.0391 4.21071 35.4142 4.58579C35.7893 4.96086 36 5.46957 36 6V8Z"
												fill="#242628"/>
										</svg> <?php esc_html_e( '19+ Starter Sites', 'inspiro' ); ?> </h4>
									<p class="about">
										<?php esc_html_e( 'With the built-in demo importer, you can quickly import fully configured demos to help you get started. The theme includes beautiful demos to create a business or portfolio website.', 'inspiro' ); ?>
									</p>
									<p class="section_footer">
										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/starter-sites/'. INSPIRO_MARKETING_UTM_CODE_STARTER_SITE, 'inspiro' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Inspiro Premium Demos &#8599;', 'inspiro' ); ?>
										</a>

										<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro-pro/starter-sites/'. INSPIRO_MARKETING_UTM_CODE_STARTER_SITE, 'inspiro' ) ); ?>"
										   target="_blank" class="button button-primary">
											<?php esc_html_e( 'Inspiro PRO Demos &#8599;', 'inspiro' ); ?>
										</a>

									</p>
								</div>

								<div class="section premium-feature">

									<h4>
										<svg width="24" height="24" viewBox="0 0 40 40" fill="none"
											 xmlns="https://www.w3.org/2000/svg">
											<path
												d="M32.8441 0H7.15594C3.21016 0 0 3.21016 0 7.15594V32.8441C0 36.7898 3.21016 40 7.15594 40H32.8441C36.7898 40 40 36.7898 40 32.8441V7.15594C40 3.21016 36.7898 0 32.8441 0ZM37.6562 32.8441C37.6562 35.4975 35.4975 37.6562 32.8441 37.6562H7.15594C4.5025 37.6562 2.34375 35.4975 2.34375 32.8441V7.15594C2.34375 4.5025 4.5025 2.34375 7.15594 2.34375H32.8441C35.4975 2.34375 37.6562 4.5025 37.6562 7.15594V32.8441Z"
												fill="#000"/>
											<path
												d="M33.8079 8.78773H15.9594C15.4687 7.33031 14.0902 6.27734 12.4694 6.27734C10.8486 6.27734 9.47008 7.33031 8.97938 8.78773H6.19336C5.54617 8.78773 5.02148 9.31242 5.02148 9.95961C5.02148 10.6068 5.54617 11.1315 6.19336 11.1315H8.97945C9.47016 12.5889 10.8487 13.6419 12.4695 13.6419C14.0902 13.6419 15.4687 12.5889 15.9595 11.1315H33.808C34.4552 11.1315 34.9798 10.6068 34.9798 9.95961C34.9798 9.31242 34.4552 8.78773 33.8079 8.78773V8.78773ZM12.4694 11.2981C11.7313 11.2981 11.1309 10.6977 11.1309 9.95961C11.1309 9.22156 11.7313 8.62109 12.4694 8.62109C13.2074 8.62109 13.8079 9.22156 13.8079 9.95961C13.8079 10.6977 13.2074 11.2981 12.4694 11.2981Z"
												fill="#000"/>
											<path
												d="M33.8079 18.8268H31.0218C30.5311 17.3694 29.1525 16.3164 27.5318 16.3164C25.9111 16.3164 24.5326 17.3694 24.0419 18.8268H6.19336C5.54617 18.8268 5.02148 19.3515 5.02148 19.9987C5.02148 20.6459 5.54617 21.1705 6.19336 21.1705H24.0419C24.5326 22.628 25.9112 23.6809 27.5319 23.6809C29.1526 23.6809 30.5312 22.628 31.0219 21.1705H33.808C34.4552 21.1705 34.9798 20.6459 34.9798 19.9987C34.9798 19.3515 34.4552 18.8268 33.8079 18.8268ZM27.5319 21.3372C26.7938 21.3372 26.1934 20.7367 26.1934 19.9987C26.1934 19.2606 26.7938 18.6602 27.5319 18.6602C28.2699 18.6602 28.8704 19.2606 28.8704 19.9987C28.8704 20.7367 28.2699 21.3372 27.5319 21.3372Z"
												fill="#000"/>
											<path
												d="M33.8079 28.8698H20.9802C20.4895 27.4123 19.111 26.3594 17.4902 26.3594C15.8695 26.3594 14.4909 27.4123 14.0002 28.8698H6.19336C5.54617 28.8698 5.02148 29.3945 5.02148 30.0416C5.02148 30.6888 5.54617 31.2135 6.19336 31.2135H14.0002C14.4909 32.6709 15.8695 33.7239 17.4902 33.7239C19.111 33.7239 20.4895 32.6709 20.9802 31.2135H33.808C34.4552 31.2135 34.9798 30.6888 34.9798 30.0416C34.9798 29.3945 34.4552 28.8698 33.8079 28.8698ZM17.4902 31.3802C16.7522 31.3802 16.1517 30.7798 16.1517 30.0417C16.1517 29.3037 16.7522 28.7032 17.4902 28.7032C18.2283 28.7032 18.8288 29.3036 18.8288 30.0416C18.8288 30.7797 18.2283 31.3802 17.4902 31.3802V31.3802Z"
												fill="#000"/>
										</svg> <?php esc_html_e( 'Theme Options Panel', 'inspiro' ); ?> </h4>
									<p class="about">
										<?php esc_html_e( 'Using the Theme Options panel, you can configure different features and functionalities in the theme as you want. Additional customization options are available in the Customizer, while different options for features like Portfolio can be found on the Theme Options page.', 'inspiro' ); ?>
									</p>

								</div>

								<div class="section premium-feature">

									<h4>
										<svg width="26" height="26" viewBox="0 0 40 58" fill="none"
											 xmlns="https://www.w3.org/2000/svg" fill="none">
											<rect x="9.23047" y="50.2578" width="7.69231" height="7.69231"
												  transform="rotate(90 9.23047 50.2578)" fill="#3496FF"></rect>
											<rect x="16.9219" y="50.2578" width="7.69231" height="7.69231"
												  transform="rotate(90 16.9219 50.2578)" fill="#22BB66"></rect>
											<rect x="24.6172" y="50.2578" width="7.69231" height="7.69231"
												  transform="rotate(90 24.6172 50.2578)" fill="#F2DD19"></rect>
											<rect x="32.3086" y="50.2578" width="7.69231" height="7.69231"
												  transform="rotate(90 32.3086 50.2578)" fill="#F29B19"></rect>
											<rect x="40" y="50.2578" width="7.69231" height="7.69231"
												  transform="rotate(90 40 50.2578)" fill="#FF4141"></rect>
											<path
												d="M8.23122 39.4166L5.81078 35.6272C5.51551 35.1649 5.01186 34.8887 4.46335 34.8887C3.91484 34.8887 3.41118 35.1649 3.11591 35.6268L0.695824 39.4166C-0.424861 41.1709 -0.169855 43.5126 1.30226 44.9844C2.14675 45.8289 3.2692 46.294 4.46335 46.294C5.65785 46.294 6.7803 45.8289 7.62479 44.9847C9.0969 43.5126 9.35191 41.1713 8.23122 39.4166ZM6.34623 43.7058C5.84328 44.2088 5.17468 44.4857 4.46335 44.4857C3.75237 44.4857 3.08377 44.2088 2.58082 43.7058C1.70419 42.8292 1.55232 41.4348 2.2195 40.39L4.46335 36.8768L6.70719 40.39C7.37437 41.4348 7.2225 42.8292 6.34623 43.7058Z"
												fill="#000"></path>
											<path
												d="M37.9323 5.94885C37.9323 4.35983 37.3135 2.86582 36.1897 1.74231C35.0661 0.618796 33.5721 0 31.9831 0C30.3941 0 28.9004 0.618796 27.7766 1.74231L26.3525 3.16674C25.3042 2.29682 23.7417 2.35298 22.7598 3.33486C22.2551 3.83957 21.9775 4.51029 21.9775 5.22374C21.9775 5.85349 22.194 6.44968 22.5913 6.9279L7.83769 21.6812L6.1964 23.3225C5.62493 23.8939 5.39323 24.7356 5.59208 25.5193L6.01132 27.173C6.15931 27.7565 5.98695 28.3834 5.56135 28.809L4.58513 29.7852C4.10937 30.261 3.84766 30.8932 3.84766 31.566C3.84766 32.2389 4.10937 32.8714 4.58513 33.3468C5.06088 33.8226 5.69345 34.0847 6.36628 34.0847C7.03877 34.0847 7.67134 33.8226 8.14709 33.3468L9.12297 32.371C9.54856 31.9454 10.1755 31.773 10.759 31.9206L12.413 32.3402C13.1967 32.5384 14.0384 32.307 14.6095 31.7356L16.2494 30.096C16.2497 30.0953 16.2504 30.095 16.2511 30.0943L31.0044 15.341C31.4826 15.7383 32.0788 15.9548 32.7086 15.9548C33.422 15.9548 34.0927 15.6769 34.5975 15.1725C35.1018 14.6678 35.3798 13.9971 35.3798 13.2836C35.3798 12.6539 35.1633 12.0577 34.7659 11.5795L36.19 10.1554C37.3135 9.03188 37.9323 7.53787 37.9323 5.94885ZM19.4843 24.3036L13.6287 18.448L16.1695 15.9068L22.0252 21.7628L19.4843 24.3036ZM12.3497 19.7266L18.2054 25.5822L15.6115 28.1761L9.75589 22.3205L12.3497 19.7266ZM12.8573 30.5873L11.2033 30.1677C10.0052 29.864 8.7182 30.2182 7.8444 31.092L6.86817 32.0683C6.59127 32.3452 6.14059 32.3452 5.86404 32.0683C5.72983 31.9341 5.65601 31.7557 5.65601 31.566C5.65601 31.3764 5.72983 31.198 5.86404 31.0638L6.83992 30.0879C7.71407 29.2138 8.06797 27.9267 7.76423 26.7287L7.34499 25.0747C7.30225 24.9058 7.35205 24.7247 7.47531 24.6014L8.47733 23.5994L14.3329 29.455L13.3309 30.457C13.2077 30.5803 13.0261 30.6301 12.8573 30.5873ZM33.3185 13.8936C32.9819 14.2302 32.4348 14.2302 32.0982 13.8936L30.0547 11.85C29.7015 11.4972 29.1293 11.4972 28.7761 11.85C28.4229 12.2032 28.4229 12.7757 28.7761 13.1289L29.7174 14.0702L23.3037 20.4839L17.4481 14.6282L23.8618 8.21459L23.9727 8.32549C24.3255 8.67834 24.898 8.67834 25.2512 8.32549C25.6044 7.9723 25.6044 7.39977 25.2512 7.04658L24.0384 5.83371C23.7018 5.49747 23.7018 4.95002 24.0384 4.61342C24.3746 4.27718 24.922 4.27718 25.2586 4.61342L25.7181 5.07328C25.7192 5.07434 25.7203 5.0754 25.7213 5.07646L32.8555 12.211H32.8559L33.3185 12.6737C33.6551 13.0103 33.6551 13.5574 33.3185 13.8936ZM34.9111 8.87683L33.4951 10.2928L27.6395 4.43718L29.0555 3.02122C29.8375 2.23925 30.8773 1.80835 31.9831 1.80835C33.0893 1.80835 34.1291 2.23925 34.9111 3.02122C35.6931 3.8032 36.124 4.843 36.124 5.94885C36.124 7.05505 35.6931 8.09451 34.9111 8.87683Z"
												fill="#000"></path>
											<path
												d="M27.1073 9.27539C26.6079 9.27539 26.2031 9.68015 26.2031 10.1796C26.2031 10.6786 26.6079 11.0837 27.1073 11.0837H27.1094C27.6088 11.0837 28.0125 10.6786 28.0125 10.1796C28.0125 9.68015 27.6067 9.27539 27.1073 9.27539Z"
												fill="#000"></path>
										</svg> <?php esc_html_e( 'Customize Every Detail', 'inspiro' ); ?> </h4>
									<p class="about">
										<?php esc_html_e( 'No more custom CSS! The Premium version gives you access to numerous customization options, and you can change the theme\'s color and font styles of each element.', 'inspiro' ); ?>
									</p>

								</div>

								<div class="section premium-feature">
									<h4>
										<svg id="Icons" width="26" style="enable-background:new 0 0 32 32;"
											 version="1.1" viewBox="0 0 32 32" xml:space="preserve"
											 xmlns="https://www.w3.org/2000/svg"
											 xmlns:xlink="https://www.w3.org/1999/xlink"><style type="text/css">.st0 {
													fill: none;
													stroke: #000000;
													stroke-width: 2;
													stroke-linecap: round;
													stroke-linejoin: round;
													stroke-miterlimit: 10;
												}</style>
											<line class="st0" x1="3" x2="29" y1="11" y2="11"/>
											<g>
												<path
													d="M7,9C6.7,9,6.5,8.9,6.3,8.7C6.1,8.5,6,8.3,6,8c0-0.3,0.1-0.5,0.3-0.7c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1   C6.7,7,6.7,7,6.8,7c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.2,0.2,0.2,0.3   C8,7.7,8,7.9,8,8c0,0.1,0,0.3-0.1,0.4C7.9,8.5,7.8,8.6,7.7,8.7C7.5,8.9,7.3,9,7,9z"/>
											</g>
											<g>
												<path
													d="M10,9C9.7,9,9.5,8.9,9.3,8.7C9.1,8.5,9,8.3,9,8c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2   C10,6.9,10.4,7,10.7,7.3c0.1,0.1,0.2,0.2,0.2,0.3C11,7.7,11,7.9,11,8c0,0.3-0.1,0.5-0.3,0.7C10.5,8.9,10.3,9,10,9z"/>
											</g>
											<g>
												<path
													d="M13,9c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3C12,8.3,12,8.1,12,8c0-0.1,0-0.3,0.1-0.4   c0.1-0.1,0.1-0.2,0.2-0.3c0.4-0.4,1-0.4,1.4,0c0.1,0.1,0.2,0.2,0.2,0.3C14,7.7,14,7.9,14,8c0,0.1,0,0.3-0.1,0.4   c-0.1,0.1-0.1,0.2-0.2,0.3C13.5,8.9,13.3,9,13,9z"/>
											</g>
											<path class="st0"
												  d="M27,5H5C3.9,5,3,5.9,3,7v18c0,1.1,0.9,2,2,2h22c1.1,0,2-0.9,2-2V7C29,5.9,28.1,5,27,5z"/>
											<line class="st0" x1="3" x2="19" y1="19" y2="19"/>
											<line class="st0" x1="19" x2="19" y1="11"
												  y2="27"/></svg> <?php esc_html_e( 'Multiple Header & Footer Layouts', 'inspiro' ); ?>
									</h4>
									<p class="about">
										<?php esc_html_e( 'Upgrading to the Premium version, you will get access to 6 Header Styles and 9 Footer Layouts.', 'inspiro' ); ?>
									</p>

								</div>


							</div>
							<br>
							<a href="<?php echo esc_url( __( 'https://www.wpzoom.com/themes/inspiro/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-table', 'inspiro' ) ); ?>"
							   target="_blank" class="button button-large button-primary">
								<?php esc_html_e( 'Get Inspiro Premium Today &#8599;', 'inspiro' ); ?>
							</a>
							<a href="https://www.wpzoom.com/themes/inspiro/starter-sites/?utm_source=wpadmin&utm_medium=about-inspiro-page&utm_campaign=upgrade-premium"
                                title="Inspiro Premium" target="_blank"
                                class="button button-secondary-gray">
								<?php esc_html_e( 'View Starter Sites &#8599;', 'inspiro' ); ?>
							</a>
                          

	</div>

</div>