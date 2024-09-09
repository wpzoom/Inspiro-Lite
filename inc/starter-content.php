<?php
/**
 * Inspiro Lite Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `inspiro_starter_content` filter before returning.
 *
 * @since Inspiro 1.0.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function inspiro_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'     => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar'  => array(
				'search',
				'text_about',
				'text_business_info',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'footer_1' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'footer_2' => array(
				'text_about',
			),

            // Put two core-defined widgets in the footer 3 area.
            'footer_3' => array(
                'search',
            ),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'front' => array(
				'post_type'    => 'page',
                'template' => 'page-templates/homepage-no-hero.php',
				'post_title'   => esc_html_x( 'Homepage', 'Theme starter content', 'inspiro' ),
				'post_content' => '
                    <!-- wp:cover {"url":"https://demo.wpzoom.com/inspiro-lite/files/2022/03/Pexels-Videos-1409899-1.mp4","id":6672,"dimRatio":20,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="https://demo.wpzoom.com/inspiro-lite/files/2022/03/Pexels-Videos-1409899-1.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"900","lineHeight":"1.2"}},"textColor":"white","fontSize":"max-60"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-max-60-font-size" style="font-style:normal;font-weight:900;line-height:1.2"><strong>Create. Amaze. Inspire.</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"medium"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-medium-font-size">Inspiro is a Portfolio &amp; Photography WordPress Theme. This area supports self-hosted videos as well as videos from YouTube and Vimeo.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"55px"} -->
                    <div style="height:55px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="#" style="border-radius:0px">Learn More</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div></div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:spacer {"height":"57px"} -->
                    <div style="height:57px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
                    <h2 class="wp-block-heading has-text-align-center has-medium-font-size" style="letter-spacing:1px">WE ARE A CREATIVE AGENCY LOCATED IN LONDON</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">ABOUT US</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->

                    <!-- wp:spacer {"height":"57px"} -->
                    <div style="height:57px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","style":{"color":{"background":"#f8f8f8"}},"className":"pattern_multiple_covers","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull pattern_multiple_covers has-background" id="services" style="background-color:#f8f8f8"><!-- wp:spacer {"height":"84px"} -->
                    <div style="height:84px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"1px"}},"textColor":"secondary"} -->
                    <p class="has-text-align-left has-secondary-color has-text-color" style="letter-spacing:1px">LET\'S WORK TOGETHER!</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"left"} -->
                    <h2 class="wp-block-heading has-text-align-left">Our Services</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">Inspiro is the perfect solution to create a beautiful website for your portfolio or your business. If you’re looking to create a captivating presence online, then you’ve found the right tool. The theme is easy to manage, with a drag-and-drop interface and fully customizable using the Theme Customizer.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"46px"} -->
                    <div style="height:46px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_356BERTH29.jpg","id":7392,"dimRatio":70,"overlayColor":"primary","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7392" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_356BERTH29.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}}},"textColor":"white","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-white-color has-text-color has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Video<br>Production</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">Explore more →</a></p>
                    <!-- /wp:paragraph --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_KV0WLH355C.jpg","id":7394,"dimRatio":70,"overlayColor":"primary","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7394" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_KV0WLH355C.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}}},"textColor":"white","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-white-color has-text-color has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Professional<br>Editing</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">Explore more →</a></p>
                    <!-- /wp:paragraph --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_P9QYJ8AAL8.jpg","id":7497,"dimRatio":70,"overlayColor":"primary","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7497" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_P9QYJ8AAL8.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}}},"textColor":"white","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-white-color has-text-color has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Aerial<br>Video</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","top":"0","right":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">Explore more →</a></p>
                    <!-- /wp:paragraph --></div></div>
                    <!-- /wp:cover --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"103px"} -->
                    <div style="height:103px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:spacer {"height":"30px"} -->
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                    <h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase">About us</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">ABOUT US</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":26,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_JKMGVEJMPU.jpg" alt="" class="wp-image-26"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"30px"} -->
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","style":{"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull has-background" style="background-color:#f8f8f8"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:spacer {"height":"30px"} -->
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":27,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_M6D1GS9PSL.jpg" alt="" class="wp-image-27"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                    <h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase">Our Services</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">SERVICES</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"30px"} -->
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","className":"portfolio-dark","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull portfolio-dark has-black-background-color has-background" id="portfolio" style="margin-top:0px"><!-- wp:spacer {"height":"122px"} -->
                    <div style="height:122px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"1px"},"color":{"text":"#0bb4aa"}}} -->
                    <p class="has-text-align-left has-text-color" style="color:#0bb4aa;letter-spacing:1px">FROM THE PORTFOLIO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"left","textColor":"white","fontSize":"large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-white-color has-text-color has-large-font-size">Our Work</h2>
                    <!-- /wp:heading -->

                    <!-- wp:spacer {"height":"44px"} -->
                    <div style="height:44px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:wpzoom-blocks/portfolio {"align":"full","textColor":"white","btnHoverTextColor":"#101010","btnBgColor":"#0bb4aa","btnHoverBgColor":"#ffffff"} /-->

                    <!-- wp:spacer {"height":"50px"} -->
                    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px","justifyContent":"center"}} -->
                    <div id="partners" class="wp-block-group"><!-- wp:spacer {"height":"80px"} -->
                    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"var:preset|spacing|small","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left","wideSize":""}} -->
                    <div class="wp-block-group" style="padding-top:0px;padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
                    <div class="wp-block-column" style="flex-basis:60%"><!-- wp:spacer {"height":"20px"} -->
                    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color">WE WORK WITH</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"left"} -->
                    <h2 class="wp-block-heading has-text-align-left">Our Clients</h2>
                    <!-- /wp:heading -->

                    <!-- wp:spacer {"height":"20px"} -->
                    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"align":"left","textColor":"tertiary"} -->
                    <p class="has-text-align-left has-tertiary-color has-text-color">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"40%"} -->
                    <div class="wp-block-column" style="flex-basis:40%"></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"center","width":"200px"} -->
                    <div class="wp-block-outermost-icon-block items-justified-center"><div class="icon-container" style="width:200px"><svg width="147" height="46" viewBox="0 0 147 46" fill="none" xmlns="https://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M72.6763 7.40747C74.0641 6.01977 76.3141 6.01977 77.7019 7.40747C79.0897 8.79527 79.0897 11.0453 77.7019 12.4331L69.241 20.894C66.8118 17.6384 67.0757 13.0082 70.0327 10.0512L72.6763 7.40747Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M84.7713 26.4967C86.1593 27.8844 86.1593 30.1345 84.7713 31.5222C83.3843 32.91 81.1339 32.91 79.7461 31.5222L71.2852 23.0614C74.5408 20.6322 79.171 20.896 82.128 23.853L84.7713 26.4967Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M65.6835 38.5924C64.2958 39.9802 62.0457 39.9802 60.658 38.5924C59.2702 37.2046 59.2702 34.9546 60.658 33.5668L69.1188 25.106C71.548 28.3616 71.2842 32.9918 68.3272 35.9487L65.6835 38.5924Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M53.5877 19.503C52.1999 18.1152 52.1999 15.8652 53.5877 14.4774C54.9755 13.0896 57.2255 13.0896 58.6133 14.4774L67.0742 22.9383C63.8186 25.3675 59.1883 25.1036 56.2314 22.1467L53.5877 19.503Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M70.7852 37.5563C72.8315 35.2811 73.7826 32.3698 73.6383 29.5034L77.7017 33.5668C77.7118 33.5769 77.722 33.587 77.7322 33.5971V36.4981C77.7322 38.4607 76.1412 40.0517 74.1786 40.0517C72.5845 40.0517 71.2356 39.0021 70.7852 37.5563Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M54.6243 24.606C56.8994 26.6524 59.8107 27.6035 62.6771 27.4592L58.6138 31.5226C58.6036 31.5327 58.5935 31.5429 58.5835 31.553H55.6825C53.7199 31.5531 52.1289 29.962 52.1289 27.9994C52.1289 26.4054 53.1785 25.0564 54.6243 24.606Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M83.7362 21.3944C81.4613 19.348 78.55 18.3969 75.6836 18.5411L79.7469 14.4778C79.7571 14.4677 79.7671 14.4575 79.7772 14.4473H82.6783C84.6412 14.4473 86.2322 16.0384 86.2322 18.001C86.2322 19.5951 85.1822 20.944 83.7362 21.3944Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M67.572 8.44374C65.5256 10.7189 64.5746 13.6302 64.7188 16.4967L60.6555 12.4333C60.6453 12.4232 60.6352 12.4131 60.625 12.403V9.50194C60.625 7.53934 62.216 5.94824 64.1786 5.94824C65.7727 5.94824 67.1216 6.99794 67.572 8.44374Z" fill="#ECECEC"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M64.1781 3.05713C60.6187 3.05713 57.7332 5.94263 57.7332 9.50203V10.7555C55.5918 10.196 53.2186 10.7552 51.5405 12.4333C49.0236 14.9502 49.0236 19.0309 51.5405 21.5478L52.4268 22.4341C50.517 23.5527 49.2344 25.6262 49.2344 27.9993C49.2344 31.5587 52.1199 34.4442 55.6793 34.4442H56.9327C56.3732 36.5856 56.9324 38.9588 58.6105 40.6368C61.1274 43.1537 65.2081 43.1537 67.725 40.6368L70.3686 37.9932C72.7007 35.6611 73.7899 32.5567 73.6362 29.5033L77.6997 33.5667C80.2166 36.0836 84.2974 36.0836 86.8144 33.5667C89.3314 31.0498 89.3314 26.9691 86.8144 24.4523L85.9284 23.5661C87.8374 22.4475 89.1204 20.374 89.1204 18.0009C89.1204 14.4415 86.2344 11.556 82.6754 11.556H81.4219C81.9815 9.41453 81.4222 7.04133 79.7441 5.36323C77.2273 2.84633 73.1466 2.84633 70.6297 5.36323L67.986 8.00693C65.6539 10.339 64.5647 13.4433 64.7184 16.4967L60.655 12.4333C60.6448 12.4232 60.6347 12.4131 60.6245 12.403V9.50203C60.6245 7.53943 62.2155 5.94843 64.1781 5.94843C65.7722 5.94843 67.1211 6.99803 67.5715 8.44383C67.705 8.29543 67.8431 8.14973 67.9859 8.00693L69.7433 6.24953C68.6247 4.33973 66.5512 3.05713 64.1781 3.05713ZM79.7744 14.4473C79.7643 14.4574 79.7543 14.4676 79.7441 14.4777L75.6808 18.541C78.5473 18.3968 81.4585 19.3478 83.7334 21.3943C85.1794 20.9439 86.2294 19.5949 86.2294 18.0009C86.2294 16.0383 84.6384 14.4473 82.6754 14.4473H79.7744ZM58.5801 31.5529C58.5902 31.5427 58.6003 31.5325 58.6105 31.5224L62.6738 27.459C59.8074 27.6033 56.8962 26.6522 54.6211 24.6059C53.1753 25.0563 52.1256 26.4052 52.1256 27.9993C52.1256 29.9619 53.7167 31.5529 55.6793 31.5529H58.5801ZM54.5103 24.5049C54.4 24.403 54.2913 24.2985 54.1842 24.1914V24.1915C54.2913 24.2986 54.4 24.403 54.5103 24.5049ZM74.1766 42.9431C71.8034 42.9431 69.7299 41.6604 68.6113 39.7506L70.3686 37.9932C70.5115 37.8504 70.6496 37.7047 70.7831 37.5563C71.2335 39.0021 72.5824 40.0518 74.1766 40.0518C76.1392 40.0518 77.7302 38.4608 77.7302 36.4982V33.5972C78.563 34.4191 79.564 34.9683 80.6215 35.2446V36.4982C80.6215 40.0576 77.736 42.9431 74.1766 42.9431ZM77.6997 7.40763C76.3119 6.01993 74.0619 6.01993 72.6741 7.40763L70.0304 10.0513C67.0735 13.0083 66.8096 17.6385 69.2388 20.8941L77.6997 12.4332C79.0875 11.0454 79.0875 8.79543 77.6997 7.40763ZM84.7694 31.5223C86.1574 30.1345 86.1574 27.8845 84.7694 26.4967L82.126 23.853C79.1691 20.8961 74.5388 20.6322 71.2832 23.0614L79.7441 31.5223C81.1319 32.9101 83.3824 32.9101 84.7694 31.5223ZM65.6805 38.5924C64.2927 39.9802 62.0427 39.9802 60.6549 38.5924C59.2672 37.2046 59.2672 34.9546 60.6549 33.5668L69.1158 25.1059C71.545 28.3615 71.2811 32.9918 68.3242 35.9487L65.6805 38.5924ZM53.5849 14.4777C52.1972 15.8655 52.1972 18.1155 53.5849 19.5033L56.2286 22.147C59.1856 25.1039 63.8158 25.3678 67.0714 22.9386L58.6105 14.4777C57.2227 13.09 54.9727 13.09 53.5849 14.4777Z" fill="#6C6C77"></path><path d="M1.53125 16.0898H4.69185V25.911H10.1202V28.5716H1.53125V16.0898Z" fill="#6C6C77"></path><path d="M15.8598 28.8393C14.8003 28.8393 13.8717 28.6488 13.0741 28.2679C12.2765 27.875 11.6575 27.3393 11.217 26.6608C10.7885 25.9703 10.5742 25.1787 10.5742 24.2858C10.5742 23.393 10.7885 22.6073 11.217 21.9288C11.6575 21.2383 12.2765 20.7026 13.0741 20.3217C13.8717 19.9288 14.8003 19.7324 15.8598 19.7324C16.9193 19.7324 17.8478 19.9288 18.6454 20.3217C19.443 20.7026 20.0561 21.2383 20.4846 21.9288C20.9251 22.6073 21.1453 23.393 21.1453 24.2858C21.1453 25.1787 20.9251 25.9703 20.4846 26.6608C20.0561 27.3393 19.443 27.875 18.6454 28.2679C17.8478 28.6488 16.9193 28.8393 15.8598 28.8393ZM15.8598 26.3929C16.4907 26.3929 16.9907 26.2084 17.3597 25.8394C17.7407 25.4584 17.9311 24.9406 17.9311 24.2858C17.9311 23.6311 17.7407 23.1192 17.3597 22.7502C16.9907 22.3692 16.4907 22.1788 15.8598 22.1788C15.2288 22.1788 14.7229 22.3692 14.342 22.7502C13.9729 23.1192 13.7884 23.6311 13.7884 24.2858C13.7884 24.9406 13.9729 25.4584 14.342 25.8394C14.7229 26.2084 15.2288 26.3929 15.8598 26.3929Z" fill="#6C6C77"></path><path d="M27.049 32.6785C26.4776 32.6785 25.9002 32.6249 25.3169 32.5178C24.7455 32.4106 24.2513 32.2678 23.8347 32.0892V29.9107C24.7751 30.3154 25.8466 30.5178 27.049 30.5178C27.918 30.5178 28.543 30.3392 28.9239 29.9821C29.3168 29.625 29.5131 29.1012 29.5131 28.4107V27.8929C29.1679 28.1905 28.7393 28.4226 28.2274 28.5893C27.7274 28.756 27.1918 28.8393 26.6203 28.8393C25.7156 28.8393 24.9181 28.6488 24.2276 28.2679C23.5372 27.8869 22.9954 27.3512 22.6026 26.6608C22.2216 25.9703 22.0312 25.1787 22.0312 24.2858C22.0312 23.3811 22.2216 22.5835 22.6026 21.8931C22.9835 21.2026 23.5192 20.6728 24.2097 20.3038C24.9001 19.9229 25.6919 19.7324 26.5847 19.7324C27.8109 19.7324 28.8227 20.1074 29.6203 20.8574V20.0002H32.656V27.9822C32.656 29.4702 32.1976 30.625 31.281 31.4464C30.3763 32.2678 28.9656 32.6785 27.049 32.6785ZM27.406 26.4108C27.8941 26.4108 28.3287 26.2858 28.7096 26.0358C29.0906 25.7858 29.3583 25.4525 29.5131 25.0358V23.5359C29.3464 23.1192 29.0726 22.7918 28.6917 22.5537C28.3107 22.3038 27.8822 22.1788 27.406 22.1788C26.7632 22.1788 26.2454 22.3692 25.8526 22.7502C25.4597 23.1192 25.2633 23.6251 25.2633 24.268C25.2633 24.9227 25.4597 25.4465 25.8526 25.8394C26.2454 26.2203 26.7632 26.4108 27.406 26.4108Z" fill="#6C6C77"></path><path d="M38.7387 28.8393C37.6792 28.8393 36.7507 28.6488 35.9531 28.2679C35.1555 27.875 34.5364 27.3393 34.096 26.6608C33.6674 25.9703 33.4531 25.1787 33.4531 24.2858C33.4531 23.393 33.6674 22.6073 34.096 21.9288C34.5364 21.2383 35.1555 20.7026 35.9531 20.3217C36.7507 19.9288 37.6792 19.7324 38.7387 19.7324C39.7982 19.7324 40.7267 19.9288 41.5243 20.3217C42.3219 20.7026 42.935 21.2383 43.3636 21.9288C43.804 22.6073 44.0243 23.393 44.0243 24.2858C44.0243 25.1787 43.804 25.9703 43.3636 26.6608C42.935 27.3393 42.3219 27.875 41.5243 28.2679C40.7267 28.6488 39.7982 28.8393 38.7387 28.8393ZM38.7387 26.3929C39.3696 26.3929 39.8696 26.2084 40.2387 25.8394C40.6196 25.4584 40.8101 24.9406 40.8101 24.2858C40.8101 23.6311 40.6196 23.1192 40.2387 22.7502C39.8696 22.3692 39.3696 22.1788 38.7387 22.1788C38.1078 22.1788 37.6018 22.3692 37.2209 22.7502C36.8518 23.1192 36.6673 23.6311 36.6673 24.2858C36.6673 24.9406 36.8518 25.4584 37.2209 25.8394C37.6018 26.2084 38.1078 26.3929 38.7387 26.3929Z" fill="#6C6C77"></path><path d="M94.4336 16.0898H97.5946V28.5716H94.4336V16.0898Z" fill="#6C6C77"></path><path d="M99.1914 20.0002H102.227V20.8574C103.024 20.1074 104.036 19.7324 105.262 19.7324C106.155 19.7324 106.947 19.9229 107.637 20.3038C108.328 20.6728 108.863 21.2026 109.244 21.8931C109.625 22.5716 109.816 23.3633 109.816 24.268C109.816 25.1608 109.625 25.9584 109.244 26.6608C108.863 27.3512 108.328 27.8869 107.637 28.2679C106.959 28.6488 106.167 28.8393 105.262 28.8393C104.691 28.8393 104.143 28.75 103.62 28.5714C103.108 28.4048 102.679 28.1726 102.334 27.875V32.482H99.1914V20.0002ZM104.441 26.3929C105.084 26.3929 105.602 26.2025 105.994 25.8215C106.387 25.4406 106.584 24.9227 106.584 24.268C106.584 23.6132 106.387 23.1014 105.994 22.7323C105.602 22.3514 105.084 22.1609 104.441 22.1609C103.965 22.1609 103.536 22.2859 103.155 22.5359C102.774 22.774 102.501 23.1014 102.334 23.518V25.0358C102.501 25.4525 102.774 25.7858 103.155 26.0358C103.536 26.2739 103.965 26.3929 104.441 26.3929Z" fill="#6C6C77"></path><path d="M114.502 28.8393C113.812 28.8393 113.092 28.7679 112.342 28.625C111.592 28.4941 110.996 28.3036 110.556 28.0536V25.7501C111.044 26.0358 111.627 26.2739 112.306 26.4644C112.996 26.6429 113.627 26.7322 114.199 26.7322C114.615 26.7322 114.919 26.7024 115.109 26.6429C115.3 26.5834 115.395 26.4644 115.395 26.2858C115.395 26.1429 115.33 26.0298 115.199 25.9465C115.08 25.8513 114.853 25.756 114.52 25.6608C114.199 25.5537 113.824 25.4406 113.395 25.3215C112.669 25.1072 112.098 24.887 111.681 24.6608C111.264 24.4346 110.955 24.1489 110.752 23.8037C110.55 23.4585 110.449 23.024 110.449 22.5002C110.449 21.5716 110.812 20.8812 111.538 20.4288C112.276 19.9645 113.282 19.7324 114.556 19.7324C115.175 19.7324 115.824 19.7979 116.502 19.9288C117.193 20.0598 117.71 20.2324 118.056 20.4467V22.7145C117.699 22.4764 117.222 22.2799 116.627 22.1252C116.044 21.9704 115.496 21.8931 114.984 21.8931C114.58 21.8931 114.264 21.9347 114.038 22.018C113.812 22.0895 113.699 22.2204 113.699 22.4109C113.699 22.5895 113.812 22.7264 114.038 22.8216C114.264 22.9168 114.669 23.0359 115.252 23.1787C115.633 23.274 115.794 23.3156 115.734 23.3037C116.496 23.5061 117.085 23.7323 117.502 23.9823C117.919 24.2323 118.21 24.5299 118.377 24.8751C118.556 25.2084 118.645 25.637 118.645 26.1608C118.645 26.9822 118.288 27.6369 117.574 28.125C116.871 28.6012 115.847 28.8393 114.502 28.8393Z" fill="#6C6C77"></path><path d="M123.34 28.8396C122.162 28.8396 121.275 28.5122 120.68 27.8575C120.097 27.2027 119.805 26.3397 119.805 25.2683V20.0005H122.948V24.9111C122.948 25.8992 123.394 26.3932 124.287 26.3932C124.692 26.3932 125.061 26.298 125.394 26.1075C125.727 25.917 126.001 25.6373 126.215 25.2683V20.0005H129.358V28.5717H126.323V27.6432C125.954 28.036 125.507 28.3336 124.983 28.536C124.46 28.7384 123.912 28.8396 123.34 28.8396Z" fill="#6C6C77"></path><path d="M130.965 20.0004H133.876V20.929C134.233 20.5481 134.644 20.2564 135.108 20.054C135.572 19.8397 136.066 19.7326 136.59 19.7326C137.233 19.7326 137.745 19.8278 138.126 20.0183C138.519 20.2088 138.834 20.4945 139.072 20.8754C139.429 20.5183 139.864 20.2385 140.376 20.0362C140.888 19.8338 141.406 19.7326 141.929 19.7326C143.06 19.7326 143.864 20.0243 144.34 20.6076C144.816 21.179 145.054 22.0063 145.054 23.0896V28.5716H142.054V23.5361C142.054 23.0599 141.965 22.7147 141.786 22.5004C141.608 22.2861 141.31 22.179 140.894 22.179C140.358 22.179 139.923 22.3694 139.59 22.7504C139.602 22.9527 139.608 23.2623 139.608 23.6789V28.5716H136.608V23.4111C136.608 22.9706 136.531 22.6551 136.376 22.4647C136.221 22.2742 135.947 22.179 135.555 22.179C134.947 22.179 134.424 22.5182 133.983 23.1968V28.5716H130.965V20.0004Z" fill="#6C6C77"></path></svg></div></div>
                    <!-- /wp:outermost/icon-block --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"center","width":"105px","align":"center"} -->
                    <div class="wp-block-outermost-icon-block aligncenter items-justified-center"><div class="icon-container" style="width:105px"><svg width="70" height="44" viewBox="0 0 70 44" fill="none" xmlns="https://www.w3.org/2000/svg"><g clip-path="url(#clip0_3236_3431)"><path d="M65.5256 5.40859C65.5256 5.45989 65.5256 5.52402 65.5125 5.5625C65.4469 6.06271 65.4469 6.56292 65.4862 7.07596C65.5125 7.20422 65.5387 7.33248 65.6437 7.43509C65.8142 7.62747 66.0765 7.589 66.1815 7.35813C66.234 7.2427 66.234 7.12726 66.2077 7.01183C66.0765 6.52444 66.0503 6.01141 66.0372 5.51119C66.0372 5.48554 66.0372 5.44706 66.0372 5.40859C66.1815 5.39576 66.3127 5.38293 66.4307 5.38293C66.5226 5.37011 66.6013 5.35728 66.6669 5.3188C66.8636 5.2162 66.8636 4.99816 66.6537 4.89555C66.575 4.85707 66.4701 4.84424 66.3783 4.84424C66.0503 4.85707 65.7224 4.85707 65.3944 4.85707C65.2764 4.85707 65.1583 4.8699 65.0402 4.88272C64.9746 4.89555 64.8959 4.89555 64.8435 4.93403C64.7516 4.9725 64.6992 5.03663 64.6992 5.12641C64.7123 5.2162 64.7516 5.2675 64.8435 5.30598C64.8959 5.34446 64.9615 5.35728 65.0271 5.35728C65.1845 5.37011 65.3551 5.39576 65.5256 5.40859ZM69.133 5.99858C69.133 6.01141 69.1461 6.02423 69.1461 6.02423C69.1986 6.37053 69.2511 6.70401 69.2904 7.03748C69.3036 7.15291 69.3167 7.25552 69.3954 7.3453C69.5659 7.56334 69.8283 7.53769 69.9463 7.30683C69.9988 7.19139 70.0119 7.07596 69.9857 6.9477C69.907 6.56292 69.8676 6.17814 69.7889 5.80619C69.7364 5.57532 69.6709 5.35728 69.6053 5.15207C69.5659 5.02381 69.4741 4.93402 69.3167 4.9212C69.1593 4.89555 69.0412 4.9725 68.9756 5.08794C68.8969 5.19054 68.8313 5.29315 68.7788 5.40859C68.687 5.6138 68.6083 5.81902 68.5034 6.01141C68.4902 6.06271 68.4771 6.10119 68.4509 6.13966C68.4378 6.11401 68.4247 6.10119 68.4247 6.10119C68.2541 5.78054 68.0967 5.45989 67.9262 5.15207C67.8999 5.12641 67.8868 5.10076 67.8737 5.07511C67.795 4.95968 67.7032 4.89555 67.5589 4.89555C67.4277 4.90837 67.3227 4.98533 67.2572 5.10076C67.2309 5.15207 67.2309 5.19054 67.2178 5.24185C67.1653 5.65228 67.0997 6.06271 67.0473 6.47314C67.021 6.70401 67.0079 6.93487 67.0079 7.16574C66.9948 7.21704 67.0079 7.28117 67.0341 7.33248C67.0604 7.43508 67.1391 7.49922 67.244 7.51204C67.3752 7.52487 67.467 7.48639 67.5064 7.38378C67.5457 7.30683 67.5589 7.2427 67.572 7.17857C67.6245 6.9477 67.6638 6.72966 67.7032 6.51162C67.7294 6.38336 67.7425 6.28075 67.7819 6.13966C67.8081 6.19097 67.8343 6.22945 67.8606 6.26792C67.9786 6.42184 68.0967 6.57575 68.241 6.70401C68.3853 6.80661 68.5034 6.79379 68.6214 6.67835C68.6477 6.6527 68.6608 6.63988 68.687 6.61422C68.8051 6.43466 68.9494 6.2551 69.0674 6.07553C69.0937 6.04988 69.1068 6.02423 69.133 5.99858Z" fill="#6C6C77"></path><path d="M38.9086 5.66047C38.8174 5.90422 38.8 6.07983 38.8421 6.22579C38.8886 6.42427 39.0093 6.48925 39.1731 6.43877C40.7139 6.06624 44.0926 7.12364 45.3435 7.41835C45.6385 7.48023 45.8785 7.10788 45.6772 6.77404C45.3834 6.45074 42.0062 5.06657 40.7176 4.9911C40.2125 4.96319 39.3095 4.83655 38.9086 5.66047Z" fill="#6C6C77"></path><path d="M52.1116 1.17977C52.2758 1.27244 52.3676 1.36084 52.4129 1.45961C52.4804 1.58917 52.4448 1.67881 52.3314 1.72455C51.3129 2.21057 49.9576 4.30298 49.4105 5.02463C49.2779 5.19064 48.972 5.09417 48.9258 4.82117C48.9353 4.51249 50.1367 2.24176 50.8072 1.62329C51.0707 1.38182 51.506 0.908026 52.1116 1.17977Z" fill="#6C6C77"></path><path d="M44.0017 0.149796C44.199 0.00441888 44.404 -0.0465256 44.5087 0.0479512C46.0454 1.3329 46.8603 3.36773 47.3649 5.23057C47.3839 5.27397 47.3851 5.33625 47.3699 5.40122C47.3636 5.45675 47.3221 5.51541 47.2562 5.5608C47.1858 5.61091 47.1252 5.62617 47.0967 5.58299C46.4232 4.68732 42.5765 1.20242 44.0017 0.149796Z" fill="#6C6C77"></path><path d="M11.461 22.4276C11.8293 22.1595 12.2297 21.9363 12.6534 21.7631C13.0967 21.6392 13.5692 21.6597 13.9995 21.8217C14.4297 21.9837 14.7944 22.2782 15.0382 22.6608C15.2563 23.0424 15.3416 23.483 15.2814 23.9162C15.2212 24.3493 15.0187 24.7516 14.7043 25.0625C14.4606 25.3145 14.1839 25.534 13.8816 25.7154C12.5342 26.5665 11.1748 27.3709 9.81547 28.222C9.53732 28.435 9.24225 28.6261 8.93308 28.7933C8.46281 29.0226 7.92537 29.084 7.41368 28.9669C6.902 28.8499 6.44826 28.5616 6.13092 28.1521C5.89369 27.8621 5.69348 27.545 5.53471 27.2077C4.24691 24.5612 2.91142 21.9263 1.67131 19.2331C1.09895 18.0673 0.633913 16.7265 0.180798 15.4324C-0.0152406 15.0564 -0.0535225 14.6205 0.0741037 14.2173C0.20173 13.8141 0.485195 13.4755 0.864201 13.2735C1.24321 13.0715 1.68785 13.0221 2.10357 13.1357C2.51929 13.2493 2.87329 13.517 3.09027 13.8818C3.75722 14.7484 4.34761 15.6689 4.85504 16.6333C6.14284 18.965 7.37103 21.2967 8.61113 23.5585C8.68334 23.6835 8.76296 23.8041 8.84961 23.9199C9.783 23.5362 10.6609 23.0345 11.461 22.4276Z" fill="#6C6C77"></path><path d="M24.7776 21.6142C21.8324 24.9835 16.8958 24.1324 14.4156 19.7954C12.6508 16.7175 12.3408 11.6343 16.1804 8.42819C17.0003 7.75696 17.9807 7.29971 19.0302 7.09909C20.317 6.91872 21.6292 7.14068 22.7792 7.73326C23.9292 8.32584 24.8582 9.2587 25.4335 10.3985C27.5321 14.1293 27.234 18.886 24.7776 21.6142ZM23.5852 13.7562C23.2723 12.8394 22.6446 12.0567 21.8085 11.541C21.3354 11.2113 20.7605 11.051 20.1807 11.0871C19.6008 11.1232 19.0514 11.3535 18.6248 11.7392C16.9197 13.2199 16.5619 16.7292 17.802 18.8161C17.9601 19.1564 18.1922 19.4588 18.4823 19.7022C18.7724 19.9456 19.1134 20.1241 19.4814 20.2251C19.8494 20.3262 20.2355 20.3474 20.6128 20.2873C20.9901 20.2271 21.3493 20.0871 21.6655 19.877C22.5898 19.1763 23.2679 18.2115 23.6055 17.1167C23.9432 16.0218 23.9236 14.8513 23.5495 13.7679L23.5852 13.7562Z" fill="#6C6C77"></path><path d="M36.7949 15.2251C36.4934 15.2885 36.1819 15.2923 35.8788 15.2362C35.5758 15.1801 35.2872 15.0654 35.0302 14.8987C34.8053 14.7729 34.6117 14.6 34.4633 14.3923C34.315 14.1846 34.2156 13.9474 34.1723 13.6976C34.1289 13.4479 34.1428 13.1919 34.2127 12.948C34.2827 12.7041 34.4072 12.4784 34.5771 12.2871C34.8731 11.9027 35.2933 11.6275 35.7695 11.506C37.0128 11.1532 38.2927 10.9381 39.5852 10.8648C39.8692 10.8325 40.1569 10.856 40.4314 10.9339C40.706 11.0119 40.9618 11.1426 41.184 11.3186C41.4061 11.4945 41.5901 11.7121 41.7251 11.9585C41.86 12.2049 41.9433 12.4752 41.97 12.7535C42.3426 14.1205 42.3834 15.5538 42.0892 16.939C41.0161 21.4159 37.3196 22.9548 33.17 21.5208C32.0052 21.1374 30.9839 20.423 30.2367 19.4689C29.2401 18.3199 28.5335 16.9582 28.1738 15.4933C27.8824 14.1888 27.9143 12.8352 28.267 11.5453C28.6196 10.2554 29.2827 9.06664 30.2009 8.07834C31.0723 7.00417 32.2033 6.1588 33.492 5.61835C34.3063 5.1795 35.2592 5.05472 36.163 5.26859C36.368 5.32407 36.5541 5.43217 36.702 5.58168C36.8499 5.7312 36.9542 5.91667 37.0041 6.11888C37.054 6.32108 37.0476 6.53265 36.9857 6.73165C36.9237 6.93064 36.8085 7.10981 36.6519 7.25057C36.3541 7.51412 36.0306 7.74842 35.686 7.95009C34.6259 8.61016 33.7034 9.46071 32.9673 10.4567C32.4848 11.1012 32.1525 11.8413 31.9939 12.6248C31.8352 13.4083 31.8541 14.2163 32.0492 14.992C32.3196 16.0496 32.9197 16.9989 33.7662 17.7084C36.3895 20.0402 39.7998 17.79 39.2036 14.6072C38.3332 14.8171 37.57 15.0386 36.7949 15.2251Z" fill="#6C6C77"></path><path d="M52.8235 21.8007C48.9482 24.1325 44.5363 21.8007 43.5704 16.9041C42.8669 13.4065 44.2024 8.50979 48.8767 6.6444C49.8712 6.25605 50.9499 6.1197 52.0127 6.248C53.2896 6.47655 54.461 7.09118 55.3616 8.00525C56.2622 8.91931 56.8468 10.0867 57.0327 11.3429C57.8197 15.505 56.0311 19.947 52.8235 21.8007ZM54.171 13.9544C54.1698 12.9859 53.8194 12.0487 53.1813 11.3079C52.8402 10.8497 52.3471 10.5214 51.7861 10.3789C51.225 10.2365 50.6309 10.2887 50.1048 10.5268C48.0062 11.4128 46.5276 14.6306 47.0642 16.9974C47.1052 17.3688 47.2286 17.727 47.4259 18.0469C47.6232 18.3668 47.8896 18.6407 48.2065 18.8495C48.5233 19.0582 48.883 19.1968 49.2603 19.2555C49.6377 19.3141 50.0236 19.2915 50.391 19.1892C51.5003 18.8103 52.4608 18.1022 53.1384 17.1637C53.8161 16.2252 54.1771 15.1032 54.171 13.9544Z" fill="#6C6C77"></path><path d="M60.9503 22.78C60.8918 23.2067 60.6624 23.5932 60.3124 23.8545C59.9624 24.1157 59.5206 24.2304 59.0842 24.1732C58.6478 24.116 58.2525 23.8916 57.9853 23.5494C57.718 23.2073 57.6008 22.7753 57.6593 22.3486C57.7178 21.9219 57.9473 21.5354 58.2972 21.2741C58.6472 21.0128 59.089 20.8982 59.5254 20.9554C59.9618 21.0126 60.3571 21.2369 60.6244 21.5791C60.8916 21.9213 61.0089 22.3533 60.9503 22.78ZM59.9129 7.0524C60.1397 6.71375 60.4724 6.45586 60.8614 6.31719C61.2503 6.17852 61.6747 6.1665 62.0712 6.28293C62.4743 6.38154 62.8304 6.61255 63.0801 6.93728C63.3297 7.26202 63.4576 7.66075 63.4425 8.06671C63.3899 8.71788 63.2903 9.36461 63.1444 10.002C62.7509 12.1589 62.3693 14.3157 61.952 16.4493C61.7612 17.3004 61.5108 18.1165 61.2365 18.9792C61.1411 19.2489 60.9817 19.4926 60.7715 19.6904C60.6408 19.8392 60.4739 19.9533 60.2861 20.0222C60.0983 20.0912 59.8958 20.1127 59.6973 20.0848C59.4988 20.0569 59.3106 19.9805 59.1503 19.8627C58.99 19.7448 58.8627 19.5893 58.7802 19.4106C58.6384 19.09 58.5614 18.7455 58.5536 18.3963C58.5536 16.9506 58.5536 15.4933 58.649 14.0359C58.8111 11.9561 59.1299 9.89081 59.6029 7.85685C59.6586 7.58435 59.7635 7.32376 59.9129 7.08738V7.0524Z" fill="#6C6C77"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.42117 32.1487C6.28038 32.456 6.24177 32.7986 6.31057 33.1283C6.35634 33.5629 6.45687 33.9904 6.60987 34.401C6.80089 34.9038 7.01464 35.401 7.2782 36.0138C7.33881 36.1548 7.40215 36.302 7.46843 36.4569C7.82385 37.2871 8.26981 38.3481 8.86466 39.8836C9.03303 40.3198 9.18254 40.7596 9.3331 41.2024C9.39392 41.3813 9.45496 41.5608 9.51744 41.7407C9.7414 42.3803 10.1268 42.9549 10.6376 43.4103C10.8545 43.6606 11.1422 43.843 11.4648 43.9342C11.7937 44.0272 12.1435 44.0213 12.4689 43.9173C12.7943 43.8132 13.0801 43.6158 13.2892 43.3507C13.4942 43.0908 13.6161 42.7776 13.6398 42.4504C13.7728 41.813 13.7274 41.1521 13.5082 40.5376C13.1603 39.5173 12.764 38.4955 12.307 37.4961L12.3049 37.4917C11.5531 35.9281 10.7889 34.3753 9.9885 32.8219L9.98251 32.811C9.74821 32.4063 9.44372 32.0445 9.08272 31.7419C8.84836 31.4718 8.52509 31.2896 8.16809 31.2268C7.80348 31.1627 7.42744 31.2273 7.1071 31.4092C6.80406 31.5784 6.56384 31.8373 6.42117 32.1487Z" fill="#6C6C77"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M17.9044 28.2986C16.7256 28.0001 15.4945 27.9566 14.2969 28.1712C13.3693 28.2605 12.457 28.4697 11.8235 28.8841C11.5013 29.095 11.2408 29.3658 11.0959 29.71C10.9502 30.0561 10.9316 30.4519 11.051 30.8929C11.269 31.7007 11.5521 32.4861 11.8342 33.269L11.8799 33.3958L11.881 33.3986C12.7304 35.673 13.5879 37.9397 14.4532 40.1986C14.5541 40.5546 14.6968 40.898 14.8784 41.2219L14.8818 41.2279C15.1217 41.6303 15.4294 41.9902 15.7919 42.2925C15.9732 42.4587 16.1974 42.5737 16.4405 42.6251C16.686 42.6769 16.9413 42.6619 17.1786 42.5815C17.416 42.5012 17.6262 42.3587 17.7864 42.1695C17.944 41.9834 18.0472 41.7592 18.0851 41.5206C18.2415 40.8724 18.1914 40.1929 17.9414 39.5733C17.8634 39.3648 17.8022 39.1517 17.7377 38.9274C17.7162 38.8526 17.6944 38.7765 17.6714 38.699C19.6521 37.942 21.7596 36.9241 22.5007 34.5561C22.7909 33.7378 22.8151 32.8517 22.5699 32.0193C22.3245 31.186 21.821 30.4474 21.1288 29.9052C20.1867 29.1462 19.0862 28.5978 17.9044 28.2986ZM14.6369 31.2031C14.6759 31.1921 14.7152 31.1819 14.7546 31.1724C16.0441 30.9742 17.3634 31.2383 18.4696 31.9159C18.9571 32.2474 19.1568 32.6157 19.1911 32.9701C19.2265 33.335 19.0908 33.7304 18.8182 34.1105C18.3031 34.8285 17.3631 35.4032 16.514 35.5103C15.895 34.1165 15.2664 32.6663 14.6369 31.2031Z" fill="#6C6C77"></path><path d="M25.7637 25.7473C27.1675 25.1134 28.9064 25.0039 30.2671 25.4496C30.6098 25.5472 30.9071 25.7583 31.1082 26.0468C31.308 26.3335 31.4002 26.679 31.3694 27.0244C31.3674 27.2486 31.3111 27.4692 31.2052 27.6682C31.0974 27.8708 30.9413 28.045 30.7501 28.1762C30.5589 28.3073 30.3382 28.3916 30.1067 28.4217C29.8751 28.4519 29.6396 28.4271 29.4199 28.3494L29.4032 28.3435L29.3875 28.3354C29.2751 28.2779 29.1557 28.2346 29.0322 28.2064L29.0244 28.2047C28.0672 27.9561 27.1643 28.368 26.8345 28.8741C26.6772 29.1154 26.6577 29.359 26.7887 29.5806C26.929 29.8179 27.2731 30.0842 27.9694 30.274C28.1609 30.3254 28.3572 30.375 28.5563 30.4254C29.1069 30.5648 29.6791 30.7096 30.2324 30.9103L30.2345 30.9111C32.7871 31.8607 33.7376 33.8274 33.4122 35.6772C33.0903 37.5065 31.5278 39.1713 29.1781 39.564C28.3231 39.7493 27.4333 39.7132 26.5968 39.4593C25.7582 39.2046 25.0023 38.7399 24.4042 38.1111L24.3886 38.0947C24.1998 37.8578 24.0728 37.5795 24.0165 37.2842C23.9647 37.0177 23.992 36.7423 24.095 36.4904C24.1974 36.24 24.3706 36.0233 24.5941 35.8654C24.8302 35.6864 25.1148 35.579 25.4127 35.5566C25.7096 35.5343 26.0067 35.5974 26.2674 35.738C26.5278 35.861 26.77 36.0179 26.9874 36.2045L26.9915 36.2079C27.3761 36.5518 27.8414 36.6414 28.2876 36.5584C28.7403 36.4742 29.166 36.2123 29.4398 35.8648C29.7118 35.5195 29.821 35.1093 29.6914 34.7111C29.561 34.31 29.1689 33.8606 28.3074 33.4849C28.0822 33.3914 27.8487 33.316 27.6058 33.2426C27.5403 33.2228 27.4737 33.2031 27.4063 33.1831C27.2267 33.1298 27.0419 33.0749 26.8607 33.0144C26.7359 32.9728 26.6121 32.9334 26.4895 32.8943C26.1544 32.7876 25.8277 32.6836 25.5133 32.5441C24.829 32.3163 24.2378 31.8789 23.8277 31.2966C23.4159 30.712 23.2087 30.0129 23.2369 29.3037C23.2391 27.5754 24.3524 26.3847 25.7637 25.7473Z" fill="#6C6C77"></path><path d="M43.5631 25.5634C43.2909 25.4334 42.9899 25.3717 42.6873 25.3838C42.3846 25.396 42.0898 25.4816 41.8295 25.6331C41.5708 25.7835 41.3542 25.9941 41.199 26.2462C41.0567 26.4585 40.9582 26.6959 40.9091 26.9452C40.86 27.1943 40.8612 27.4503 40.9125 27.6988C40.9632 28.0182 41.0194 28.3288 41.0749 28.6351C41.1668 29.142 41.2562 29.6375 41.3152 30.1427L41.3174 30.1555C41.4517 30.9478 41.522 31.7491 41.5283 32.5521L41.5289 32.5635C41.5748 33.4307 41.2726 34.281 40.6871 34.934L40.6778 34.9456C40.4873 35.1843 40.2326 35.3665 39.9421 35.4718C39.6517 35.5771 39.3371 35.6013 39.0334 35.5417C38.7297 35.4821 38.449 35.3411 38.2226 35.1344C37.9962 34.9277 37.8329 34.6627 37.7514 34.3706C37.5774 33.7549 37.4767 33.1216 37.4511 32.4834L37.7483 27.8571C37.7527 27.7967 37.7577 27.7347 37.7628 27.6721C37.7741 27.5316 37.7857 27.3885 37.7905 27.255C37.7975 27.0586 37.7915 26.8566 37.7447 26.6654C37.6968 26.47 37.6057 26.2841 37.4441 26.1258C37.2841 25.9691 37.0681 25.8535 36.7963 25.7748C36.3048 25.6357 35.8892 25.6401 35.5429 25.7838C35.1964 25.9275 34.959 26.1943 34.791 26.5025C34.6243 26.8081 34.5172 27.1699 34.4362 27.5323C34.3761 27.8012 34.3278 28.0835 34.2819 28.3522C34.266 28.4448 34.2505 28.5357 34.2348 28.624L34.2344 28.6266C33.9888 30.1002 33.9157 31.5964 34.0165 33.0862C34.0353 33.8913 34.207 34.686 34.523 35.4297C34.8795 36.3893 35.5252 37.2207 36.3749 37.8142C37.2264 38.4089 38.2425 38.7366 39.2887 38.7539C40.3349 38.7712 41.3618 38.4773 42.2334 37.9112C43.1036 37.3459 43.778 36.5357 44.1674 35.5878C44.7121 34.3803 44.9679 33.0671 44.9151 31.7483C44.8831 30.7855 44.8295 29.8153 44.7762 28.85C44.75 28.3765 44.7239 27.904 44.7005 27.4344C44.6887 26.9635 44.5299 26.5074 44.2453 26.1273C44.0692 25.887 43.8348 25.6932 43.5631 25.5634Z" fill="#6C6C77"></path><path d="M53.195 32.8172C53.1674 32.8515 53.1383 32.887 53.1079 32.9239C52.8865 31.6751 52.6813 30.4267 52.4758 29.1764C52.4021 28.7278 52.328 28.2773 52.2535 27.8281L52.2451 27.778L52.2179 27.7347C52.1666 27.6532 52.1615 27.5733 52.1615 27.4029V27.3832L52.1584 27.3637C52.1028 27.0118 51.94 26.6843 51.6913 26.4241C51.4433 26.1646 51.1212 25.984 50.7669 25.9056C50.4132 25.8203 50.0415 25.8391 49.6986 25.9597C49.3566 26.08 49.0585 26.2962 48.8415 26.5812C48.6611 26.7999 48.5132 27.0425 48.4024 27.3017C48.1509 27.8601 47.8972 28.4199 47.6428 28.9812L47.6384 28.9909C47.0033 30.3922 46.3639 31.8029 45.7431 33.2247L45.7412 33.2293C45.3601 34.1512 45.0455 35.1226 44.732 36.091C44.6694 36.2843 44.6068 36.4775 44.5437 36.6702C44.4305 36.9758 44.381 37.3004 44.398 37.6249C44.3774 37.9154 44.4485 38.2052 44.6019 38.4551C44.7583 38.7101 44.9926 38.9107 45.2717 39.0288C45.5675 39.1556 45.8982 39.1825 46.2115 39.1053C46.5241 39.0282 46.8017 38.8518 47.0006 38.6038C47.2546 38.2983 47.4731 37.9651 47.6513 37.6121C48.1772 36.5603 48.6798 35.4957 49.1801 34.4357C49.3737 34.0257 49.5618 33.6585 49.7758 33.2586C49.7905 33.3079 49.8055 33.356 49.821 33.4042C50.0453 34.3697 50.4239 35.2945 50.9428 36.1447C51.041 36.3248 51.1778 36.4822 51.3438 36.6061C51.5118 36.7315 51.7057 36.8195 51.912 36.8642C52.1183 36.9089 52.3321 36.9091 52.5385 36.8648C52.7446 36.8206 52.9391 36.7325 53.1072 36.6077L53.4399 36.3642L56.0222 34.2375L55.8695 35.189C55.6599 36.4969 55.4519 37.7939 55.2309 39.0912C55.0863 39.6662 55.0865 40.2668 55.2315 40.8416C55.2943 41.1651 55.4543 41.4629 55.6911 41.6971C55.9299 41.9332 56.2357 42.0936 56.5689 42.1576C56.9021 42.2215 57.2473 42.1861 57.5596 42.0558C57.8674 41.9275 58.1292 41.7129 58.3122 41.4394C58.738 40.9229 59.003 40.2976 59.0758 39.6379C59.1854 38.7063 59.3092 37.762 59.4331 36.818C59.5758 35.7299 59.7185 34.6421 59.839 33.5752L59.8394 33.5719C59.9554 32.404 60.0115 31.2313 60.0076 30.0579C60.033 29.6871 59.9386 29.3177 59.7374 29.002C59.5355 28.6852 59.2365 28.4389 58.8831 28.298C58.5155 28.1346 58.104 28.0909 57.7091 28.1735C57.3168 28.2555 56.9617 28.4577 56.6953 28.7506C56.219 29.1813 55.7722 29.6422 55.3577 30.1303L55.3549 30.1336C54.9024 30.6849 54.453 31.247 54.0065 31.8055C53.735 32.145 53.4643 32.4837 53.195 32.8172Z" fill="#6C6C77"></path></g><defs><clipPath id="clip0_3236_3431"><rect width="70" height="44" fill="white"></rect></clipPath></defs></svg></div></div>
                    <!-- /wp:outermost/icon-block --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"center","width":"175px","align":"center"} -->
                    <div class="wp-block-outermost-icon-block aligncenter items-justified-center"><div class="icon-container" style="width:175px"><svg width="140" height="32" viewBox="0 0 140 32" fill="none" xmlns="https://www.w3.org/2000/svg"><g clip-path="url(#clip0_3236_3427)"><path d="M136.315 6.13132L139.654 9.49344C139.771 9.58632 139.858 9.71168 139.902 9.85368C139.97 10.6812 139.344 10.7265 138.704 10.7727C138.427 10.7927 138.148 10.813 137.922 10.8968C136.798 11.2007 135.797 11.8426 135.052 12.7354C134.306 13.6282 133.854 14.7287 133.756 15.8874C133.684 16.0213 133.575 16.1314 133.442 16.2046C133.309 16.2779 133.158 16.311 133.006 16.3002C132.83 16.2846 132.665 16.2076 132.54 16.0826L131.444 14.979C131.452 15.0546 131.452 15.1294 131.452 15.1895V15.9174C131.452 15.9634 131.454 16.0078 131.448 16.052C131.441 16.1016 131.424 16.151 131.385 16.2026V16.2702C131.385 16.3046 131.389 16.3367 131.393 16.3693C131.401 16.4359 131.41 16.5046 131.385 16.6004C131.361 16.6898 131.358 16.794 131.355 16.887C131.354 16.9423 131.353 16.9937 131.347 17.0356C131.339 17.0938 131.339 17.1558 131.334 17.2178C131.33 17.2759 131.32 17.3339 131.294 17.3883C131.259 17.4645 131.247 17.5372 131.244 17.6111C131.242 17.6465 131.242 17.6821 131.242 17.7186L131.197 17.9512L129.494 26.0713L129.358 26.6791L129.306 27.5647L128.555 31.3996L128.435 32H67.6998L67.4071 31.7073L67.3546 31.9625H60.8555L57.2382 28.3227L57.5834 26.6791H55.5422L54.2739 25.3958C52.6999 26.542 50.7947 27.1428 48.848 27.107C46.7554 27.1893 44.7153 26.439 43.1745 25.0206L41.2007 23.0319L40.773 25.0281C40.7205 25.3133 40.6529 25.5835 40.5778 25.8462L40.5103 26.0938L40.3978 26.454C40.3885 26.4853 40.3759 26.5155 40.3602 26.5441C40.2485 26.875 40.1157 27.1983 39.9625 27.5122C39.9665 27.5243 39.9665 27.5375 39.9625 27.5497C39.9428 27.5913 39.9202 27.6314 39.8949 27.6698C39.7816 27.894 39.6564 28.1119 39.5197 28.3227C39.4943 28.361 39.4718 28.4012 39.4522 28.4428L39.3696 28.5328C39.1862 28.7959 38.9856 29.0466 38.7692 29.2833C38.7098 29.3426 38.6505 29.3984 38.5902 29.4531C38.5286 29.5091 38.466 29.5641 38.4014 29.621L38.2364 29.7786C38.1323 29.865 38.0258 29.9485 37.9171 30.0289C37.8274 30.0952 37.7362 30.1594 37.6435 30.2214C36.0969 31.1378 34.3128 31.5739 32.5178 31.4746C30.0413 31.4746 28.06 30.7542 26.8067 29.4934L23.2795 25.9437C21.8706 26.741 20.2754 27.1502 18.6566 27.1294C16.5703 27.194 14.5426 26.4336 13.0131 25.0131L11.0394 23.0244L10.4015 26.0938L10.2739 26.7017H3.63229L0 23.0394L0.187617 22.1538L4.18012 2.97934L4.30017 2.37898H10.9643L11.137 2.5441V2.37898H56.0375L56.2026 2.5441V2.37898H62.7017L66.3339 6.04126L66.1538 6.9193L65.9587 7.87992H67.8274L68.1201 8.17264C68.9423 7.69075 69.8762 7.43204 70.8293 7.42215C71.5301 7.40831 72.226 7.54142 72.8722 7.81286C73.5186 8.08432 74.1008 8.488 74.5816 8.99808L74.484 8.88552L76.2476 10.6642C77.3208 8.64544 79.7298 7.42215 83.0016 7.42215C85.5384 7.42215 87.4072 8.06752 88.54 9.23824L89.816 10.5216L90.244 8.45776L90.3712 7.85738H96.8776L98.7392 9.72608L99.0016 8.46528L99.1296 7.8649H111.933L112.278 8.21016C113.145 7.69845 114.138 7.43854 115.145 7.45966C115.75 7.43602 116.354 7.54692 116.912 7.78438C117.47 8.02184 117.968 8.38 118.371 8.83304C118.35 8.80944 118.33 8.78584 118.31 8.76264C118.274 8.7196 118.238 8.6776 118.2 8.63872L118.852 9.2908C119.42 8.70256 120.103 8.23672 120.858 7.92188C121.613 7.60702 122.424 7.44968 123.242 7.45966C123.676 7.43296 124.11 7.46992 124.53 7.56826L123.82 6.85178C123.723 6.74822 123.658 6.61937 123.631 6.48017C123.605 6.34097 123.618 6.19705 123.67 6.06518C123.722 5.93326 123.81 5.81874 123.924 5.73483C124.038 5.65092 124.174 5.60103 124.315 5.591H124.886C125.039 5.57634 125.192 5.55381 125.343 5.52344C126.141 5.35579 126.891 5.01299 127.54 4.51976C128.19 4.02658 128.721 3.39534 129.096 2.67167C129.129 2.6157 129.158 2.55812 129.186 2.49907V2.46156C129.444 1.90572 129.601 1.30865 129.651 0.697933C129.664 0.508162 129.75 0.330485 129.889 0.200949C130.028 0.0713663 130.211 -0.000455872 130.402 2.1775e-06H130.462C130.575 0.0108122 130.686 0.0475478 130.783 0.107369C130.881 0.167236 130.963 0.248586 131.025 0.345234C131.565 0.870568 134.566 3.92494 134.566 3.92494C134.817 4.1939 134.798 4.54308 134.779 4.89637C134.767 5.11482 134.755 5.33486 134.806 5.53846C134.943 5.56297 135.082 5.58152 135.219 5.59407C135.352 5.60602 135.485 5.61253 135.618 5.6135C135.773 5.61674 135.924 5.66832 136.049 5.76112C136.174 5.85388 136.267 5.98328 136.315 6.13132Z" fill="#6C6C77"></path><path d="M34.3474 8.60057H39.0904L36.4337 21.2009C35.946 23.5874 35.0153 24.9533 33.6045 25.9214C32.1774 26.7495 30.5388 27.1408 28.8916 27.0471C25.7546 27.0471 22.7452 25.7338 22.445 22.5442H27.218C27.3681 23.2947 28.0585 23.7225 29.1092 23.7225C30.5276 23.7225 31.1805 22.867 31.4732 21.5236L31.7583 20.1352H31.6533C31.2345 20.5956 30.7265 20.966 30.1601 21.224C29.5937 21.482 28.9809 21.6222 28.3587 21.6362C25.597 21.6362 23.4056 19.4373 23.4506 16.2178C23.5107 12.4654 25.9572 8.20281 30.0623 8.20281C30.8402 8.15041 31.6169 8.32185 32.3005 8.69689C32.9841 9.07185 33.5459 9.63481 33.9197 10.3191H34.0022L34.3474 8.60057ZM30.2724 18.1165C32.0961 18.1165 33.1092 16.0152 33.1392 14.2066C33.1392 12.9983 32.6664 11.76 31.2705 11.76C29.3643 11.76 28.3962 13.8838 28.3662 15.7074C28.3662 16.9382 28.839 18.1165 30.2349 18.1165M83.5185 18.5218C83.5185 19.3247 82.8273 19.6474 81.9193 19.6474C80.4185 19.6474 79.9159 18.897 79.9084 17.8463H75.188C75.1054 21.7638 78.6026 22.7318 81.7097 22.7318C85.6793 22.7318 88.2537 21.0133 88.3065 17.5837C88.3065 14.8444 85.9721 14.0114 83.6761 13.4786C81.9121 13.0734 81.1393 12.7807 81.1465 12.1127C81.1545 11.4448 81.9425 11.1746 82.7153 11.1746C83.6833 11.1746 84.3433 11.5198 84.4113 12.4054H88.9969C88.9441 9.13337 85.9945 8.17281 82.9929 8.17281C79.3456 8.17281 76.5013 9.83129 76.4562 12.9682C76.4562 15.4373 78.1223 16.3454 80.6361 16.9908C82.2497 17.4186 83.5329 17.5536 83.5185 18.5218ZM118.587 10.6343H118.505C118.301 9.89529 117.85 9.24833 117.227 8.80057C116.605 8.35289 115.848 8.13137 115.083 8.17281C113.042 8.17281 111.796 9.18593 110.618 10.7169H110.535L110.971 8.60057H106.197L103.338 22.2741H108.329L109.83 14.897C110.175 13.291 110.993 12.1653 112.231 12.1653C113.47 12.1653 113.635 13.1558 113.379 14.3642L111.728 22.2741H116.719L118.22 14.897C118.565 13.1859 119.383 12.1653 120.621 12.1653C121.859 12.1653 122.025 13.1034 121.77 14.3642L120.119 22.2741H125.109L126.895 14.1465C127.646 10.7169 126.498 8.14273 123.203 8.14273C122.287 8.13897 121.384 8.36505 120.578 8.80033C119.771 9.23561 119.087 9.86617 118.587 10.6343ZM0.914062 22.2741H6.06978L10.0548 3.09961H4.90656L0.914062 22.2741ZM16.4337 8.19529C19.9159 8.19529 23.2405 10.1014 23.188 14.4166C23.1429 19.1371 19.9309 22.6719 15.0229 22.6719C11.6457 22.6719 8.26869 20.7957 8.32869 16.503C8.41125 11.8951 11.5782 8.19529 16.4337 8.19529ZM15.1655 19.3247C17.3644 19.3247 18.1673 16.1352 18.1673 14.2591C18.1673 12.9158 17.7546 11.6024 16.3061 11.6024C14.1298 11.6024 13.3869 14.9795 13.3869 16.7206C13.3869 18.1165 13.7771 19.3247 15.1955 19.3247M11.7733 3.09961L11.0229 6.93451H54.3174L55.0679 3.09961H11.7733ZM46.5951 8.19529C50.0773 8.19529 53.4018 10.1014 53.3493 14.4166C53.3043 19.1371 50.0848 22.6719 45.1767 22.6719C41.7996 22.6719 38.4225 20.7957 38.4901 16.503C38.5951 11.8951 41.7621 8.19529 46.5951 8.19529ZM45.3493 19.3247C47.5482 19.3247 48.3512 16.1352 48.3512 14.2591C48.3512 12.9158 47.9309 11.6024 46.4825 11.6024C44.3137 11.6024 43.5632 14.9795 43.5632 16.7206C43.5632 18.1165 43.9534 19.3247 45.3793 19.3247M56.839 3.09961L56.0885 6.93451H61.0717L61.8221 3.09961H56.839ZM52.8465 22.2741H57.8371L60.6964 8.60057H55.6757L52.8465 22.2741ZM68.7714 22.7318C67.9772 22.7882 67.1829 22.6222 66.4776 22.2524C65.7724 21.8826 65.1841 21.3235 64.7789 20.6381H64.6964L63.1955 27.5574H58.1448L62.1973 8.60057H66.9403L66.5651 10.4242C67.0604 9.75057 67.702 9.19801 68.4416 8.80801C69.1812 8.41809 69.9996 8.20089 70.8353 8.17281C73.8371 8.17281 75.6007 10.7469 75.5482 14.094C75.4806 18.3041 73.2968 22.7318 68.7414 22.7318H68.7714ZM68.5763 12.0452C66.6477 12.0452 65.4619 14.5142 65.4319 16.413C65.4319 17.7338 65.8972 19.2046 67.4806 19.2046C69.5445 19.2046 70.3925 16.473 70.4149 14.6493C70.4149 13.411 70.0548 12.0452 68.5763 12.0452ZM97.4321 20.1203H97.5145L97.0793 22.2891H101.822L104.682 8.61553H99.6985L98.1073 16.2553C97.7849 17.8388 96.8089 18.6718 95.5785 18.6718C94.3473 18.6718 94.0769 17.5161 94.3249 16.3078L95.9385 8.61553H90.9553L89.1913 17.0583C88.4409 20.7356 90.1521 22.7169 93.0193 22.7169C93.9193 22.7081 94.8017 22.4621 95.5761 22.0035C96.3505 21.545 96.9913 20.8902 97.4321 20.1052V20.1203ZM124.201 27.625L124.951 23.79H65.7696L65.0191 27.625H124.201Z" fill="white"></path><path d="M129.569 12.3526C129.52 12.3488 129.472 12.3353 129.428 12.3128C129.383 12.2904 129.344 12.2595 129.312 12.2218C129.28 12.1841 129.256 12.1405 129.241 12.0934C129.225 12.0463 129.22 11.9967 129.224 11.9473C129.286 11.279 129.207 10.6049 128.991 9.9694C128.775 9.33388 128.427 8.75108 127.969 8.2594C127.513 7.76769 126.957 7.37807 126.339 7.11607C125.721 6.85408 125.054 6.72561 124.383 6.7391C124.284 6.7391 124.189 6.69957 124.118 6.6292C124.048 6.55883 124.008 6.46338 124.008 6.36386C124.008 6.26434 124.048 6.16891 124.118 6.09854C124.189 6.02817 124.284 5.98863 124.383 5.98863C124.563 6.00026 124.744 6.00026 124.924 5.98863C126.257 5.84662 127.498 5.24439 128.435 4.28557C129.373 3.32674 129.945 2.0713 130.057 0.735347C130.065 0.641121 130.107 0.553228 130.177 0.489226C130.246 0.425224 130.337 0.389835 130.432 0.390139C130.481 0.393927 130.529 0.407437 130.573 0.429886C130.617 0.452335 130.657 0.483281 130.689 0.520946C130.721 0.558611 130.745 0.602248 130.761 0.649349C130.776 0.69645 130.781 0.746079 130.777 0.795387C130.715 1.46312 130.794 2.13652 131.009 2.77154C131.225 3.40656 131.573 3.9889 132.029 4.4805C132.485 4.97209 133.04 5.36187 133.657 5.62434C134.274 5.88681 134.94 6.01606 135.61 6.00364C135.709 6.00364 135.805 6.04318 135.876 6.11355C135.946 6.18392 135.985 6.27936 135.985 6.37888C135.985 6.4784 135.946 6.57385 135.876 6.64421C135.805 6.71458 135.709 6.75411 135.61 6.75411C134.185 6.77766 132.817 7.32689 131.772 8.29644C130.726 9.26596 130.075 10.5875 129.945 12.0074C129.937 12.1016 129.894 12.1896 129.825 12.2536C129.755 12.3176 129.664 12.3529 129.569 12.3526Z" fill="white"></path></g><defs><clipPath id="clip0_3236_3427"><rect width="140" height="32" fill="white"></rect></clipPath></defs></svg></div></div>
                    <!-- /wp:outermost/icon-block --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"center","width":"180px"} -->
                    <div class="wp-block-outermost-icon-block items-justified-center"><div class="icon-container" style="width:180px"><svg width="132" height="35" viewBox="0 0 132 35" fill="none" xmlns="https://www.w3.org/2000/svg"><path d="M44.8293 25.2045C44.2345 25.2368 43.6462 25.0677 43.1593 24.7245C42.9559 24.5737 42.7922 24.3756 42.6824 24.1474C42.5726 23.9191 42.5201 23.6676 42.5293 23.4145V14.1445C42.5245 14.1053 42.5286 14.0654 42.5415 14.028C42.5543 13.9906 42.5755 13.9567 42.6035 13.9287C42.6315 13.9007 42.6654 13.8795 42.7028 13.8667C42.7402 13.8538 42.7801 13.8497 42.8193 13.8545H44.4993C44.6893 13.8545 44.7793 13.9545 44.7793 14.1445V22.6945C44.7793 23.0745 44.9493 23.2645 45.2993 23.2645C45.4477 23.2706 45.5961 23.2538 45.7393 23.2145C45.9393 23.2145 46.0493 23.2745 46.0593 23.4545L46.2093 24.7045C46.2165 24.741 46.2158 24.7785 46.2073 24.8147C46.1988 24.8508 46.1826 24.8848 46.1598 24.9141C46.1371 24.9435 46.1083 24.9677 46.0755 24.985C46.0426 25.0023 46.0064 25.0124 45.9693 25.0145C45.6013 25.1361 45.2168 25.2002 44.8293 25.2045Z" fill="#6C6C77"></path><path d="M54.2793 24.1347C53.4352 24.8322 52.3743 25.2137 51.2793 25.2137C50.1843 25.2137 49.1235 24.8322 48.2793 24.1347C47.5374 23.3857 47.1211 22.374 47.1211 21.3197C47.1211 20.2654 47.5374 19.2537 48.2793 18.5047C49.1251 17.8108 50.1853 17.4316 51.2793 17.4316C52.3733 17.4316 53.4335 17.8108 54.2793 18.5047C55.0042 19.2606 55.4089 20.2674 55.4089 21.3147C55.4089 22.362 55.0042 23.3688 54.2793 24.1247V24.1347ZM49.8593 22.8147C50.2511 23.1696 50.7607 23.3661 51.2893 23.3661C51.8179 23.3661 52.3276 23.1696 52.7193 22.8147C53.0739 22.4071 53.2691 21.885 53.2691 21.3447C53.2691 20.8045 53.0739 20.2824 52.7193 19.8747C52.3276 19.5199 51.8179 19.3233 51.2893 19.3233C50.7607 19.3233 50.2511 19.5199 49.8593 19.8747C49.5048 20.2824 49.3095 20.8045 49.3095 21.3447C49.3095 21.885 49.5048 22.4071 49.8593 22.8147Z" fill="#6C6C77"></path><path d="M64.6589 17.6846C64.8489 17.6846 64.9389 17.7846 64.9389 17.9746V25.1446C64.9564 25.6286 64.8658 26.1103 64.6738 26.5548C64.4818 26.9994 64.1932 27.3956 63.8289 27.7146C63.0203 28.4041 61.9805 28.7614 60.9189 28.7146C59.9601 28.7483 59.014 28.4865 58.2089 27.9646C57.8651 27.7389 57.5714 27.4448 57.3461 27.1008C57.1207 26.7567 56.9685 26.37 56.8989 25.9646C56.8989 25.7646 56.8989 25.6746 57.1689 25.6746H58.8489C58.9202 25.677 58.9894 25.7001 59.0479 25.7409C59.1065 25.7817 59.152 25.8385 59.1789 25.9046C59.2879 26.2083 59.5051 26.4612 59.7889 26.6146C60.1348 26.7931 60.5198 26.8825 60.9089 26.8746C61.1437 26.8875 61.3787 26.8534 61.6002 26.7744C61.8217 26.6955 62.0252 26.5731 62.1989 26.4146C62.3576 26.2488 62.481 26.0525 62.5618 25.8377C62.6426 25.6229 62.679 25.3939 62.6689 25.1646V24.5346C62.0674 24.977 61.3353 25.2058 60.5889 25.1846C60.0665 25.2036 59.5457 25.1169 59.0576 24.9296C58.5696 24.7422 58.1245 24.4583 57.7489 24.0946C57.028 23.3488 56.625 22.352 56.625 21.3146C56.625 20.2773 57.028 19.2805 57.7489 18.5346C58.1263 18.1742 58.572 17.893 59.0597 17.7075C59.5475 17.522 60.0674 17.436 60.5889 17.4546C61.3569 17.4343 62.1087 17.6779 62.7189 18.1446V17.9846C62.7143 17.9463 62.7183 17.9074 62.7306 17.8708C62.7429 17.8343 62.7632 17.8009 62.79 17.7731C62.8168 17.7453 62.8495 17.7239 62.8856 17.7103C62.9218 17.6967 62.9605 17.6914 62.9989 17.6946L64.6589 17.6846ZM60.7789 23.4046C61.0365 23.4126 61.2928 23.3639 61.5295 23.2619C61.7662 23.16 61.9777 23.0073 62.1489 22.8146C62.4814 22.3853 62.6618 21.8576 62.6618 21.3146C62.6618 20.7716 62.4814 20.244 62.1489 19.8146C61.9783 19.6246 61.7681 19.4741 61.5332 19.3739C61.2982 19.2737 61.0442 19.2262 60.7889 19.2346C60.5283 19.2264 60.2691 19.2749 60.0291 19.3768C59.7891 19.4787 59.5741 19.6315 59.3989 19.8246C59.0306 20.2353 58.8369 20.7734 58.8589 21.3246C58.8409 21.8704 59.0303 22.4028 59.3889 22.8146C59.5645 23.0072 59.7796 23.1597 60.0195 23.2615C60.2594 23.3633 60.5184 23.4121 60.7789 23.4046Z" fill="#6C6C77"></path><path d="M73.5719 24.1348C72.7261 24.8287 71.6659 25.2079 70.5719 25.2079C69.4779 25.2079 68.4177 24.8287 67.5719 24.1348C66.8464 23.3772 66.4414 22.3688 66.4414 21.3198C66.4414 20.2709 66.8464 19.2624 67.5719 18.5048C68.4185 17.8127 69.4784 17.4346 70.5719 17.4346C71.6654 17.4346 72.7253 17.8127 73.5719 18.5048C74.2968 19.2607 74.7015 20.2675 74.7015 21.3148C74.7015 22.3621 74.2968 23.3689 73.5719 24.1248V24.1348ZM69.1419 22.8148C69.3336 22.9972 69.5596 23.1397 69.8068 23.2341C70.054 23.3285 70.3174 23.373 70.5819 23.3648C70.8447 23.3716 71.1063 23.3266 71.3517 23.2322C71.5971 23.1378 71.8214 22.996 72.0119 22.8148C72.3607 22.4044 72.5522 21.8834 72.5522 21.3448C72.5522 20.8062 72.3607 20.2852 72.0119 19.8748C71.8214 19.6937 71.5971 19.5518 71.3517 19.4575C71.1063 19.3631 70.8447 19.318 70.5819 19.3248C70.3174 19.3167 70.054 19.3611 69.8068 19.4555C69.5596 19.5499 69.3336 19.6925 69.1419 19.8748C68.7932 20.2852 68.6017 20.8062 68.6017 21.3448C68.6017 21.8834 68.7932 22.4044 69.1419 22.8148Z" fill="#6C6C77"></path><path d="M78.309 15.9848C78.0447 16.2162 77.7053 16.3437 77.354 16.3437C77.0027 16.3437 76.6634 16.2162 76.399 15.9848C76.2792 15.8717 76.1837 15.7353 76.1184 15.584C76.0532 15.4327 76.0195 15.2696 76.0195 15.1048C76.0195 14.94 76.0532 14.777 76.1184 14.6256C76.1837 14.4743 76.2792 14.3379 76.399 14.2248C76.6661 13.9992 77.0044 13.8755 77.354 13.8755C77.7036 13.8755 78.0419 13.9992 78.309 14.2248C78.4289 14.3379 78.5244 14.4743 78.5896 14.6256C78.6549 14.777 78.6885 14.94 78.6885 15.1048C78.6885 15.2696 78.6549 15.4327 78.5896 15.584C78.5244 15.7353 78.4289 15.8717 78.309 15.9848ZM78.519 25.2048C77.9246 25.234 77.3373 25.0652 76.849 24.7248C76.6487 24.5718 76.4878 24.373 76.38 24.1451C76.2721 23.9172 76.2203 23.6668 76.229 23.4148V17.9748C76.2242 17.9356 76.2283 17.8957 76.2412 17.8583C76.254 17.8209 76.2752 17.787 76.3032 17.759C76.3312 17.731 76.3651 17.7098 76.4025 17.697C76.4399 17.6841 76.4798 17.68 76.519 17.6848H78.199C78.389 17.6848 78.479 17.7848 78.479 17.9748V22.6948C78.479 23.0748 78.649 23.2648 78.989 23.2648C79.1407 23.2703 79.2923 23.2534 79.439 23.2148C79.639 23.2148 79.749 23.2748 79.759 23.4548L79.909 24.7048C79.9162 24.7413 79.9155 24.7788 79.907 24.815C79.8985 24.8511 79.8823 24.8851 79.8595 24.9144C79.8368 24.9438 79.808 24.968 79.7752 24.9853C79.7423 25.0026 79.7061 25.0127 79.669 25.0148C79.2978 25.1371 78.9099 25.2012 78.519 25.2048Z" fill="#6C6C77"></path><path d="M86.0908 17.4447C86.6156 17.424 87.1391 17.5089 87.6304 17.6944C88.1217 17.88 88.5708 18.1623 88.9508 18.5247C89.658 19.2837 90.0512 20.2824 90.0512 21.3197C90.0512 22.357 89.658 23.3558 88.9508 24.1147C88.5726 24.4804 88.1241 24.7655 87.6325 24.9528C87.1409 25.1402 86.6165 25.2259 86.0908 25.2047C85.342 25.2214 84.6081 24.9932 84.0008 24.5547V28.1647C84.0008 28.3547 83.9008 28.4447 83.7108 28.4447H82.0308C81.9925 28.4519 81.953 28.4496 81.9157 28.4381C81.8785 28.4265 81.8446 28.4061 81.817 28.3785C81.7895 28.3509 81.769 28.3171 81.7575 28.2798C81.7459 28.2426 81.7437 28.2031 81.7508 28.1647V19.9647C81.7626 19.8845 81.7554 19.8027 81.73 19.7257C81.7045 19.6488 81.6613 19.5788 81.604 19.5215C81.5467 19.4642 81.4768 19.4211 81.3998 19.3956C81.3229 19.3701 81.241 19.363 81.1608 19.3747H80.8308C80.6108 19.3747 80.5008 19.2947 80.5008 19.1347V17.9547C80.4956 17.8817 80.5156 17.8091 80.5575 17.7491C80.5993 17.689 80.6605 17.6451 80.7308 17.6247C81.0767 17.499 81.4428 17.438 81.8108 17.4447C82.1778 17.4122 82.5461 17.4901 82.8686 17.6682C83.191 17.8464 83.453 18.1168 83.6208 18.4447C83.9429 18.1189 84.3281 17.8622 84.7528 17.6902C85.1775 17.5183 85.6328 17.4347 86.0908 17.4447ZM84.5308 22.8147C84.7091 23.0011 84.9233 23.1494 85.1605 23.2507C85.3977 23.352 85.6529 23.4042 85.9108 23.4042C86.1687 23.4042 86.424 23.352 86.6611 23.2507C86.8983 23.1494 87.1125 23.0011 87.2908 22.8147C87.6664 22.3958 87.8637 21.8469 87.8408 21.2847C87.867 20.7221 87.6692 20.1719 87.2908 19.7547C87.1125 19.5684 86.8983 19.4201 86.6611 19.3188C86.424 19.2174 86.1687 19.1652 85.9108 19.1652C85.6529 19.1652 85.3977 19.2174 85.1605 19.3188C84.9233 19.4201 84.7091 19.5684 84.5308 19.7547C84.167 20.1793 83.9776 20.726 84.0008 21.2847C83.9805 21.843 84.1696 22.3887 84.5308 22.8147Z" fill="#6C6C77"></path><path d="M94.7691 25.2046C93.8714 25.2415 92.9813 25.0268 92.1991 24.5846C91.8853 24.3956 91.6181 24.1383 91.4172 23.8319C91.2164 23.5255 91.0872 23.1778 91.0391 22.8146C91.0391 22.6146 91.1091 22.5146 91.3291 22.5146H92.7991C92.869 22.5174 92.9369 22.5393 92.9951 22.5782C93.0533 22.617 93.0997 22.6711 93.1291 22.7346C93.3391 23.2746 93.8891 23.5446 94.7691 23.5446C95.0761 23.5587 95.3817 23.4968 95.6591 23.3646C95.7549 23.3214 95.837 23.253 95.8969 23.1667C95.9568 23.0804 95.9921 22.9794 95.9991 22.8746C95.9991 22.6146 95.8391 22.4346 95.5191 22.3146C95.1396 22.1883 94.7472 22.1044 94.3491 22.0646C93.8776 22.0112 93.41 21.9277 92.9491 21.8146C92.5009 21.7132 92.0934 21.4798 91.7791 21.1446C91.594 20.9168 91.4578 20.6533 91.3788 20.3706C91.2999 20.0879 91.28 19.7919 91.3203 19.5012C91.3607 19.2104 91.4604 18.931 91.6133 18.6805C91.7662 18.4299 91.969 18.2135 92.2091 18.0446C92.9299 17.5855 93.7756 17.3618 94.6291 17.4046C95.4555 17.3767 96.2731 17.5811 96.9891 17.9946C97.2777 18.1581 97.5261 18.3838 97.7164 18.6554C97.9067 18.927 98.034 19.2376 98.0891 19.5646C98.0891 19.7646 97.9991 19.8646 97.8191 19.8646H96.3391C96.2768 19.8683 96.2148 19.8531 96.1613 19.821C96.1078 19.7889 96.0652 19.7413 96.0391 19.6846C95.9402 19.4478 95.754 19.258 95.5191 19.1546C95.2541 19.016 94.9581 18.9471 94.6591 18.9546C94.366 18.9387 94.0736 18.9972 93.8091 19.1246C93.7159 19.1606 93.6357 19.2236 93.5786 19.3056C93.5216 19.3876 93.4904 19.4848 93.4891 19.5846C93.4955 19.7214 93.5456 19.8525 93.632 19.9587C93.7184 20.0649 93.8365 20.1405 93.9691 20.1746C94.3531 20.3194 94.7524 20.42 95.1591 20.4746C95.6268 20.5362 96.0908 20.623 96.5491 20.7346C96.9973 20.8361 97.4048 21.0694 97.7191 21.4046C97.8873 21.5893 98.0171 21.8054 98.1012 22.0406C98.1853 22.2757 98.222 22.5252 98.2091 22.7746C98.2177 23.1203 98.1366 23.4623 97.9736 23.7673C97.8106 24.0722 97.5713 24.3297 97.2791 24.5146C96.532 24.9943 95.6565 25.2349 94.7691 25.2046Z" fill="#6C6C77"></path><path d="M108.781 24.7046C108.787 24.7401 108.785 24.7764 108.777 24.8113C108.768 24.8463 108.753 24.8791 108.731 24.908C108.71 24.9369 108.683 24.9612 108.652 24.9795C108.621 24.9978 108.587 25.0097 108.551 25.0146C108.186 25.1338 107.805 25.1979 107.421 25.2046C107.041 25.244 106.657 25.1846 106.307 25.0322C105.956 24.8798 105.651 24.6395 105.421 24.3346C104.715 24.9419 103.801 25.2535 102.871 25.2046C102.439 25.2245 102.008 25.1538 101.605 24.9971C101.202 24.8404 100.836 24.6011 100.531 24.2946C100.228 23.9735 99.9928 23.5945 99.8398 23.1804C99.6869 22.7663 99.6192 22.3256 99.6406 21.8846V17.9746C99.6406 17.7846 99.7306 17.6846 99.9206 17.6846H101.601C101.791 17.6846 101.881 17.7846 101.881 17.9746V21.5846C101.863 22.0344 102.016 22.4742 102.311 22.8146C102.458 22.9706 102.637 23.0932 102.835 23.1743C103.033 23.2554 103.247 23.293 103.461 23.2846C103.68 23.2942 103.899 23.2603 104.105 23.1847C104.311 23.1092 104.5 22.9936 104.661 22.8446C104.813 22.6876 104.932 22.501 105.009 22.2963C105.087 22.0916 105.121 21.8732 105.111 21.6546V17.9746C105.111 17.7846 105.201 17.6846 105.391 17.6846H107.091C107.281 17.6846 107.371 17.7846 107.371 17.9746V22.6846C107.371 23.0746 107.541 23.2646 107.871 23.2646C108.026 23.2706 108.181 23.2538 108.331 23.2146C108.369 23.204 108.409 23.2021 108.447 23.2091C108.486 23.216 108.522 23.2316 108.554 23.2547C108.586 23.2778 108.612 23.3078 108.631 23.3424C108.649 23.377 108.659 23.4154 108.661 23.4546L108.781 24.7046Z" fill="#6C6C77"></path><path d="M124.669 24.7048C124.678 24.7406 124.679 24.778 124.672 24.8142C124.664 24.8503 124.649 24.8845 124.627 24.9141C124.605 24.9437 124.577 24.9681 124.544 24.9855C124.512 25.003 124.476 25.013 124.439 25.0148C124.067 25.1357 123.68 25.1998 123.289 25.2048C122.694 25.2355 122.107 25.0666 121.619 24.7248C121.408 24.5784 121.237 24.3823 121.12 24.1538C121.003 23.9253 120.944 23.6714 120.949 23.4148V21.0648C120.97 20.6164 120.82 20.1767 120.529 19.8348C120.389 19.6785 120.215 19.5553 120.022 19.474C119.828 19.3928 119.619 19.3555 119.409 19.3648C119.22 19.3577 119.032 19.3936 118.858 19.4698C118.685 19.546 118.532 19.6606 118.409 19.8048C118.145 20.1399 118.01 20.5587 118.029 20.9848V24.6748C118.029 24.8648 117.939 24.9648 117.749 24.9648H116.059C116.02 24.9697 115.98 24.9655 115.943 24.9527C115.905 24.9398 115.871 24.9186 115.843 24.8906C115.815 24.8627 115.794 24.8287 115.781 24.7913C115.768 24.7539 115.764 24.7141 115.769 24.6748V21.0648C115.791 20.6213 115.652 20.1847 115.379 19.8348C115.257 19.6878 115.104 19.5695 114.931 19.4883C114.759 19.4071 114.57 19.3649 114.379 19.3648C114.175 19.3566 113.972 19.3915 113.782 19.4674C113.592 19.5432 113.421 19.6582 113.279 19.8048C112.993 20.1292 112.846 20.553 112.869 20.9848V24.6748C112.874 24.7141 112.87 24.7539 112.857 24.7913C112.844 24.8287 112.823 24.8627 112.795 24.8906C112.767 24.9186 112.733 24.9398 112.696 24.9527C112.658 24.9655 112.618 24.9697 112.579 24.9648H110.949C110.759 24.9648 110.669 24.8648 110.669 24.6748V19.9648C110.681 19.8846 110.674 19.8028 110.648 19.7258C110.623 19.6489 110.58 19.5789 110.522 19.5216C110.465 19.4643 110.395 19.4212 110.318 19.3957C110.241 19.3702 110.159 19.3631 110.079 19.3748H109.749C109.529 19.3748 109.419 19.2948 109.419 19.1348V17.9548C109.414 17.8818 109.434 17.8092 109.476 17.7492C109.518 17.6891 109.579 17.6452 109.649 17.6248C109.995 17.4991 110.361 17.4381 110.729 17.4448C111.082 17.4147 111.437 17.4851 111.752 17.6479C112.067 17.8107 112.329 18.0592 112.509 18.3648C112.846 18.0451 113.246 17.7983 113.683 17.64C114.12 17.4817 114.585 17.4153 115.049 17.4448C115.5 17.4228 115.949 17.5073 116.361 17.6915C116.773 17.8757 117.135 18.1543 117.419 18.5048C117.75 18.1451 118.157 17.8635 118.61 17.6801C119.063 17.4968 119.551 17.4165 120.039 17.4448C120.475 17.4244 120.911 17.4947 121.319 17.6514C121.727 17.808 122.098 18.0475 122.409 18.3548C122.713 18.6753 122.948 19.0542 123.101 19.4685C123.254 19.8827 123.322 20.3238 123.299 20.7648V22.6948C123.299 23.0748 123.469 23.2648 123.789 23.2648C123.944 23.272 124.099 23.2552 124.249 23.2148C124.456 23.2148 124.566 23.2948 124.579 23.4548L124.669 24.7048Z" fill="#6C6C77"></path><path d="M7.41 16.3847C8.14777 13.4194 9.85643 10.7861 12.2639 8.90424C14.6714 7.02234 17.6393 6 20.695 6C23.7507 6 26.7186 7.02234 29.1261 8.90424C31.5336 10.7861 33.2422 13.4194 33.98 16.3847H32.78C30.7557 16.3549 28.7729 16.9599 27.11 18.1147C27.014 18.1842 26.9138 18.2477 26.81 18.3047H26.67C26.5662 18.2477 26.466 18.1842 26.37 18.1147C24.6924 16.9866 22.7166 16.3841 20.695 16.3841C18.6734 16.3841 16.6976 16.9866 15.02 18.1147C14.924 18.1842 14.8238 18.2477 14.72 18.3047H14.58C14.4762 18.2477 14.376 18.1842 14.28 18.1147C12.6171 16.9599 10.6343 16.3549 8.61 16.3847H7.41ZM30.62 22.6547C31.236 22.175 31.9995 21.924 32.78 21.9447H34.39V18.7347H32.78C31.4052 18.7181 30.0619 19.146 28.95 19.9547C28.3243 20.416 27.5674 20.6649 26.79 20.6649C26.0126 20.6649 25.2557 20.416 24.63 19.9547C23.4899 19.1611 22.1341 18.7356 20.745 18.7356C19.3559 18.7356 18.0001 19.1611 16.86 19.9547C16.2343 20.416 15.4774 20.6649 14.7 20.6649C13.9226 20.6649 13.1657 20.416 12.54 19.9547C11.4144 19.1356 10.0518 18.7072 8.66 18.7347H7V21.9447H8.61C9.39051 21.924 10.154 22.175 10.77 22.6547C11.908 23.4489 13.2623 23.8747 14.65 23.8747C16.0377 23.8747 17.392 23.4489 18.53 22.6547C19.1468 22.1765 19.9097 21.9257 20.69 21.9447C21.4708 21.9223 22.2348 22.1735 22.85 22.6547C23.9901 23.4484 25.3459 23.8738 26.735 23.8738C28.1241 23.8738 29.4799 23.4484 30.62 22.6547ZM30.62 28.3947C31.236 27.915 31.9995 27.664 32.78 27.6847H34.39V24.4747H32.78C31.4052 24.4581 30.0619 24.886 28.95 25.6947C28.3243 26.156 27.5674 26.4049 26.79 26.4049C26.0126 26.4049 25.2557 26.156 24.63 25.6947C23.4899 24.9011 22.1341 24.4757 20.745 24.4757C19.3559 24.4757 18.0001 24.9011 16.86 25.6947C16.2343 26.156 15.4774 26.4049 14.7 26.4049C13.9226 26.4049 13.1657 26.156 12.54 25.6947C11.4144 24.8757 10.0518 24.4472 8.66 24.4747H7V27.6847H8.61C9.39051 27.664 10.154 27.915 10.77 28.3947C11.908 29.1889 13.2623 29.6147 14.65 29.6147C16.0377 29.6147 17.392 29.1889 18.53 28.3947C19.1468 27.9165 19.9097 27.6657 20.69 27.6847C21.4708 27.6623 22.2348 27.9135 22.85 28.3947C23.9901 29.1884 25.3459 29.6138 26.735 29.6138C28.1241 29.6138 29.4799 29.1884 30.62 28.3947Z" fill="#6C6C77"></path></svg></div></div>
                    <!-- /wp:outermost/icon-block --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"center","width":"180px"} -->
                    <div class="wp-block-outermost-icon-block items-justified-center"><div class="icon-container" style="width:180px"><svg width="164" height="30" viewBox="0 0 164 30" fill="none" xmlns="https://www.w3.org/2000/svg"><g clip-path="url(#clip0_3236_3412)"><path d="M91.7656 22.143H95.2629V8.95158H91.7656V22.143ZM91.7656 6.89447H95.2629V3.75732H91.7656V6.89447Z" fill="#6C6C77"></path><path d="M97.5156 26.4628H101.013V20.6513H101.064C101.809 21.7828 103.018 22.5285 104.869 22.5285C108.264 22.5285 110.578 19.8285 110.578 15.5599C110.578 11.4456 108.341 8.59131 104.844 8.59131C103.044 8.59131 101.809 9.43993 100.961 10.597H100.884V8.95131H97.5156V26.4628ZM104.124 19.6228C102.041 19.6228 100.936 18.0542 100.936 15.6628C100.936 13.297 101.809 11.4199 103.996 11.4199C106.156 11.4199 107.029 13.1685 107.029 15.6628C107.029 18.157 105.898 19.6228 104.124 19.6228Z" fill="#6C6C77"></path><path d="M117.554 22.5285C120.846 22.5285 123.108 20.9342 123.108 18.2856C123.108 15.1999 120.666 14.5828 118.454 14.1199C116.577 13.7342 114.828 13.6313 114.828 12.4999C114.828 11.5485 115.728 11.0342 117.091 11.0342C118.583 11.0342 119.483 11.5485 119.637 12.9628H122.799C122.543 10.3142 120.614 8.59131 117.143 8.59131C114.134 8.59131 111.768 9.95421 111.768 12.8085C111.768 15.6885 114.083 16.3313 116.448 16.7942C118.248 17.1542 119.919 17.2828 119.919 18.5428C119.919 19.4685 119.046 20.0599 117.503 20.0599C115.934 20.0599 114.854 19.3913 114.623 17.8742H111.383C111.588 20.677 113.723 22.5285 117.554 22.5285Z" fill="#6C6C77"></path><path d="M136.389 22.1426V8.95117H132.891V16.5626C132.891 18.3112 131.889 19.5454 130.243 19.5454C128.751 19.5454 128.058 18.6969 128.058 17.1541V8.95117H124.586V17.7454C124.586 20.6254 126.231 22.5026 129.163 22.5026C131.015 22.5026 132.043 21.8083 132.943 20.5998H133.02V22.1426H136.389Z" fill="#6C6C77"></path><path d="M138.648 22.1428H142.146V14.4799C142.146 12.7313 143.097 11.5999 144.512 11.5999C145.797 11.5999 146.543 12.3713 146.543 13.8628V22.1428H150.04V14.4799C150.04 12.7313 150.94 11.5999 152.406 11.5999C153.692 11.5999 154.437 12.3713 154.437 13.8628V22.1428H157.935V13.2713C157.935 10.3913 156.366 8.59131 153.588 8.59131C151.917 8.59131 150.528 9.46558 149.628 10.9056H149.577C148.935 9.51703 147.597 8.59131 145.926 8.59131C144.1 8.59131 142.815 9.51703 142.095 10.7256H142.017V8.95131H138.648V22.1428Z" fill="#6C6C77"></path><path d="M0.617188 22.143H4.11433V3.75732H0.617188V22.143Z" fill="#6C6C77"></path><path d="M12.6649 22.5285C16.7535 22.5285 19.5563 19.4942 19.5563 15.5599C19.5563 11.6256 16.7535 8.59131 12.6649 8.59131C8.57628 8.59131 5.77344 11.6256 5.77344 15.5599C5.77344 19.4942 8.57628 22.5285 12.6649 22.5285ZM12.6649 19.8542C10.5049 19.8542 9.322 18.1313 9.322 15.5599C9.322 12.9885 10.5049 11.2399 12.6649 11.2399C14.7992 11.2399 16.0077 12.9885 16.0077 15.5599C16.0077 18.1313 14.7992 19.8542 12.6649 19.8542Z" fill="#6C6C77"></path><path d="M26.9933 26.6428C28.9476 26.6428 30.6448 26.1799 31.7504 25.1513C32.7276 24.2513 33.3191 22.9913 33.3191 21.1399V8.95131H29.9505V10.3399H29.8991C29.1019 9.23421 27.8933 8.59131 26.2476 8.59131C22.9048 8.59131 20.5391 11.1113 20.5391 15.0456C20.5391 19.0313 23.4191 21.3456 26.3505 21.3456C28.0219 21.3456 29.0248 20.677 29.7962 19.8028H29.8733V21.2428C29.8733 23.0428 28.9219 23.9942 26.9419 23.9942C25.3219 23.9942 24.5762 23.3513 24.2933 22.5285H20.8219C21.1819 25.0999 23.3933 26.6428 26.9933 26.6428ZM26.9419 18.5428C25.1419 18.5428 23.9591 17.2313 23.9591 14.9942C23.9591 12.7828 25.1419 11.3942 26.9162 11.3942C29.0248 11.3942 30.0533 13.0399 30.0533 14.9685C30.0533 16.9228 29.1533 18.5428 26.9419 18.5428Z" fill="#6C6C77"></path><path d="M41.8211 22.5285C45.9097 22.5285 48.7126 19.4942 48.7126 15.5599C48.7126 11.6256 45.9097 8.59131 41.8211 8.59131C37.7326 8.59131 34.9297 11.6256 34.9297 15.5599C34.9297 19.4942 37.7326 22.5285 41.8211 22.5285ZM41.8211 19.8542C39.6611 19.8542 38.4783 18.1313 38.4783 15.5599C38.4783 12.9885 39.6611 11.2399 41.8211 11.2399C43.9554 11.2399 45.164 12.9885 45.164 15.5599C45.164 18.1313 43.9554 19.8542 41.8211 19.8542Z" fill="#6C6C77"></path><path d="M159.207 6.78578C159.207 6.19405 159.687 5.71436 160.279 5.71436H162.422C163.013 5.71436 163.493 6.19405 163.493 6.78578C163.493 7.37752 163.013 7.85722 162.422 7.85722H160.279C159.687 7.85722 159.207 7.37752 159.207 6.78578Z" fill="#6C6C77"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M69.9219 0C78.2058 0 84.9221 6.71573 84.9221 15C84.9221 23.2843 78.2058 30 69.9219 30C61.6376 30 54.9219 23.2843 54.9219 15C54.9219 6.71573 61.6376 0 69.9219 0ZM69.3797 1.12244C67.6684 1.36327 66.039 2.73831 64.7741 5.03805C64.4072 5.70512 64.0761 6.4421 63.7877 7.23783C65.5076 6.80563 67.3969 6.55082 69.3797 6.5114V1.12244ZM62.5199 7.5981C62.8787 6.47219 63.3175 5.4363 63.824 4.51549C64.451 3.37544 65.1951 2.39096 66.0336 1.63483C61.4744 2.95892 57.8808 6.55259 56.5567 11.1118C57.3128 10.2733 58.2972 9.5292 59.4373 8.9022C60.3582 8.39573 61.394 7.95683 62.5199 7.5981ZM62.1597 8.86583C61.7274 10.5857 61.4727 12.475 61.4332 14.4578H56.0442C56.2851 12.7465 57.6601 11.1171 59.9599 9.8523C60.627 9.4854 61.3639 9.15435 62.1597 8.86583ZM62.5178 14.4578C62.5626 12.294 62.8741 10.2626 63.3895 8.46765C65.1844 7.95225 67.2159 7.6407 69.3797 7.59593V9.9381C68.5725 12.0047 66.9261 13.6509 64.8594 14.4578H62.5178ZM61.4332 15.5422H56.0442C56.2851 17.2535 57.6601 18.8828 59.9599 20.1477C60.627 20.5146 61.3639 20.8456 62.1597 21.1342C61.7274 19.4143 61.4727 17.525 61.4332 15.5422ZM63.3895 21.5324C62.8741 19.7374 62.5626 17.706 62.5178 15.5422H64.8594C66.9261 16.3491 68.5725 17.9953 69.3797 20.0619V22.4041C67.2159 22.3593 65.1844 22.0478 63.3895 21.5324ZM62.5199 22.4019C61.394 22.0432 60.3582 21.6043 59.4373 21.0978C58.2972 20.4708 57.3128 19.7267 56.5567 18.8882C57.8808 23.4474 61.4744 27.0411 66.0336 28.3652C65.1951 27.609 64.451 26.6246 63.824 25.4845C63.3175 24.5637 62.8787 23.5278 62.5199 22.4019ZM69.3797 28.8775C67.6684 28.6367 66.039 27.2617 64.7741 24.962C64.4072 24.2949 64.0761 23.5579 63.7877 22.7622C65.5076 23.1943 67.3969 23.4492 69.3797 23.4886V28.8775ZM73.8101 28.3652C74.6485 27.609 75.3926 26.6246 76.0196 25.4845C76.5259 24.5637 76.9654 23.5278 77.3239 22.4019C78.4496 22.0432 79.4854 21.6043 80.4064 21.0978C81.5464 20.4708 82.5311 19.7267 83.2871 18.8882C81.9626 23.4474 78.3694 27.0411 73.8101 28.3652ZM76.0563 22.7622C75.7676 23.5579 75.4361 24.2949 75.0694 24.962C73.8047 27.2617 72.1753 28.6367 70.464 28.8775V23.4886C72.4468 23.4492 74.3361 23.1943 76.0563 22.7622ZM77.6839 21.1342C78.4796 20.8456 79.2169 20.5146 79.8836 20.1477C82.1839 18.8829 83.5586 17.2535 83.7994 15.5422H78.4106C78.3708 17.525 78.1159 19.4143 77.6839 21.1342ZM77.3261 15.5422C77.2811 17.706 76.9698 19.7374 76.4538 21.5324C74.6592 22.0478 72.6278 22.3593 70.464 22.4041V20.0636C71.271 17.9963 72.9178 16.3493 74.9849 15.5422H77.3261ZM78.4106 14.4578H83.7994C83.5586 12.7465 82.1839 11.1171 79.8836 9.8523C79.2169 9.4854 78.4796 9.15435 77.6839 8.86583C78.1159 10.5857 78.3708 12.475 78.4106 14.4578ZM76.4538 8.46765C76.9698 10.2626 77.2811 12.294 77.3261 14.4578H74.985C72.9178 13.6507 71.271 12.0037 70.464 9.93637V7.59593C72.6278 7.6407 74.6592 7.95225 76.4538 8.46765ZM77.3239 7.5981C78.4496 7.95683 79.4854 8.39573 80.4064 8.9022C81.5464 9.5292 82.5311 10.2733 83.2871 11.1118C81.9626 6.55259 78.3694 2.95892 73.8101 1.63483C74.6485 2.39096 75.3926 3.37544 76.0196 4.51549C76.5259 5.4363 76.9654 6.47219 77.3239 7.5981ZM70.464 1.12244C72.1753 1.36327 73.8047 2.73831 75.0694 5.03805C75.4361 5.70513 75.7676 6.4421 76.0563 7.23783C74.3361 6.80563 72.4468 6.55082 70.464 6.5114V1.12244Z" fill="#6C6C77"></path></g><defs><clipPath id="clip0_3236_3412"><rect width="163.5" height="30" fill="white"></rect></clipPath></defs></svg></div></div>
                    <!-- /wp:outermost/icon-block --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->

                    <!-- wp:spacer -->
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div id="team" class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
                    <div class="wp-block-group"><!-- wp:spacer {"height":"74px"} -->
                    <div style="height:74px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color">MEET US</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading -->
                    <h2 class="wp-block-heading">Our Team</h2>
                    <!-- /wp:heading -->

                    <!-- wp:spacer {"height":"27px"} -->
                    <div style="height:27px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"0px"} -->
                    <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":7403,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team1.png" alt="" class="wp-image-7403"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Cynthia Howery</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color has-link-color">Co-founder / CEO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"currentColor","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"wrap"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
                    <!-- /wp:social-links --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":7404,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team2.png" alt="" class="wp-image-7404"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Jimmy Banh</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color has-link-color">LEAD DESIGNER</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"currentColor","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /--></ul>
                    <!-- /wp:social-links --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
                    <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":7405,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team3.png" alt="" class="wp-image-7405"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Leo Palmieri</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color has-link-color">CFO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"currentColor","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
                    <!-- /wp:social-links --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"63px"} -->
                    <div style="height:63px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">VIEW ALL</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->

                    <!-- wp:spacer {"height":"81px"} -->
                    <div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->

                    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg","id":24,"hasParallax":true,"dimRatio":40,"overlayColor":"black","minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"border":{"radius":"0px"}},"className":"is-position-center-center"} -->
                    <div class="wp-block-cover alignfull has-parallax is-position-center-center" style="border-radius:0px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-24 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#fffffa"},"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center has-text-color has-medium-font-size" style="color:#fffffa;text-transform:uppercase">Unleash your creativity with Inspiro</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"31px"} -->
                    <div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="#" style="border-radius:0px">CONTACT US</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group --></div></div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div id="news" class="wp-block-group"><!-- wp:spacer {"height":"108px"} -->
                    <div style="height:108px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"align":"left","textColor":"secondary"} -->
                    <p class="has-text-align-left has-secondary-color has-text-color">FROM THE BLOG</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"left","className":"wp-block-heading"} -->
                    <h2 class="wp-block-heading has-text-align-left">Latest News</h2>
                    <!-- /wp:heading -->

                    <!-- wp:spacer {"height":"33px"} -->
                    <div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:query {"queryId":4,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"240px","style":{"border":{"radius":"5px"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}}} /-->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"tertiary"} /-->

                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-small"}}}} /-->

                    <!-- wp:post-excerpt {"excerptLength":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /-->

                    <!-- wp:read-more {"style":{"border":{"width":"2px"},"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"10px","bottom":"10px"}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground"} /-->
                    <!-- /wp:post-template -->

                    <!-- wp:query-no-results -->
                    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                    <p></p>
                    <!-- /wp:paragraph -->
                    <!-- /wp:query-no-results --></div>
                    <!-- /wp:query -->

                    <!-- wp:spacer {"height":"85px"} -->
                    <div style="height:85px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->',
			),
            'about' => array(
                'thumbnail'    => '{{image-aerial-land}}',
                'post_type'    => 'page',
                'post_title'   => esc_html_x( 'About', 'Theme starter content', 'inspiro' ),
                'post_content' => '
                    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"fontSize":"large"} -->
                    <h2 class="has-large-font-size" id="inspiro-is-a-digital-product-agency-that-focuses-on-strategy-and-design" style="font-style:normal;font-weight:100"><strong>Inspiro is a digital product agency that focuses on strategy and design.</strong></h2>
                    <!-- /wp:heading -->

                    <!-- wp:spacer -->
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns {"align":"wide"} -->
                    <div class="wp-block-columns alignwide"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/video-1.jpeg" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"textColor":"black","fontSize":"medium"} -->
                    <p class="has-black-color has-text-color has-medium-font-size"><a href="#">The Crew</a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"color":{"text":"#7a7a7a"}}} -->
                    <p class="has-text-color" style="color:#7a7a7a">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/video-2.jpeg" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"textColor":"black","fontSize":"medium"} -->
                    <p class="has-black-color has-text-color has-medium-font-size"><a href="#">Our Philosophy</a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"color":{"text":"#7a7a7a"}}} -->
                    <p class="has-text-color" style="color:#7a7a7a">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/video-3.jpeg" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"textColor":"black","fontSize":"medium"} -->
                    <p class="has-black-color has-text-color has-medium-font-size"><a href="#">Services</a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"color":{"text":"#7a7a7a"}}} -->
                    <p class="has-text-color" style="color:#7a7a7a">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"300"}},"fontSize":"large"} -->
                    <h3 class="has-large-font-size" id="inspiro-is-a-digital-product-agency-that-focuses-on-strategy-and-desig" style="font-weight:300">Showreel</h3>
                    <!-- /wp:heading -->

                    <!-- wp:embed {"url":"https://videopress.com/v/bjvmxiQS","type":"video","providerNameSlug":"videopress","responsive":true,"align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
                    <figure class="wp-block-embed alignwide is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
                    https://videopress.com/v/bjvmxiQS
                    </div></figure>
                    <!-- /wp:embed -->

                    <!-- wp:spacer -->
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:cover {"overlayColor":"black","minHeight":316,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"50px","right":"50px","bottom":"50px","left":"50px"}}}} -->
                    <div class="wp-block-cover alignfull" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px;min-height:316px"><span aria-hidden="true" class="has-black-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"18px"}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color" style="font-size:18px;line-height:1"><strong>' . esc_html__( '"Best Film"', 'inspiro' ) . '<br></strong>' . esc_html__( 'Winner', 'inspiro' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->

                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"18px"}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color" style="font-size:18px;line-height:1"><strong>' . esc_html__( '"New Film Festival"', 'inspiro' ) . '</strong><br>' . esc_html__( 'Winner', 'inspiro' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->

                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
                    <!-- /wp:image -->

                    <!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"18px"}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color" style="font-size:18px;line-height:1"><strong>' . esc_html__( '"Best Short"', 'inspiro' ) . '</strong><br>' . esc_html__( 'Winner', 'inspiro' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->

                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div></div>
                    <!-- /wp:cover -->',
            ),
            'contact' => array(
                'thumbnail'    => '{{image-contact}}',
                'post_type'    => 'page',
                'post_title'   => esc_html_x( 'Contact', 'Theme starter content', 'inspiro' ),
                'post_content' => '
                    <!-- wp:spacer {"height":"156px"} -->
                    <div style="height:156px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"padding":{"right":"7%"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-column is-vertically-aligned-top" style="padding-right:7%;flex-basis:50%"><!-- wp:paragraph {"style":{"color":{"text":"#0bb4aa"}}} -->
                    <p class="has-text-color" style="color:#0bb4aa">Let\'s Connect!</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"fontSize":"large"} -->
                    <h2 class="wp-block-heading has-large-font-size">Ready to start your next project?</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who <a href="#">need some type</a> to visualize what the actual copy might look like if it were real content.<br></p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"top","width":"50%","layout":{"type":"default"}} -->
                    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:wpzoom-forms/form-block {"formId":"21"} /--></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"135px"} -->
                    <div style="height:135px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|x-small"}}},"backgroundColor":"light-background"} -->
                    <div class="wp-block-columns alignfull are-vertically-aligned-center has-light-background-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"map-grayscale","layout":{"type":"default"}} -->
                    <div class="wp-block-column is-vertically-aligned-center map-grayscale" style="flex-basis:50%"><!-- wp:image {"id":7500,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/map2.png" alt="" class="wp-image-7500"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"2%"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:2%;flex-basis:50%"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size">Inspiro</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><strong>Address</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>1500 Broadway, New York, NY 10036, United States</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><strong>Email</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>office@example.com</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><strong>Phone</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>509-394-2555</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","style":{"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull has-background" style="background-color:#f9f9f9"><!-- wp:group {"layout":{"type":"default"}} -->
                    <div class="wp-block-group"><!-- wp:spacer {"height":"69px"} -->
                    <div style="height:69px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#0bb4aa"}}} -->
                    <p class="has-text-align-left has-text-color" style="color:#0bb4aa">WHERE ARE WE LOCATED</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-large-font-size">Our Locations</h2>
                    <!-- /wp:heading -->

                    <!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.5"}}} -->
                    <p style="line-height:2.5">Amsterdam<br>Munich<br>Brussels<br>Hong Kong<br>Barcelona</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.5"}}} -->
                    <p style="line-height:2.5">New York<br>Paris<br>San Francisco<br>Sydney<br>Tokyo</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":5640,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/map.png" alt="" class="wp-image-5640"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"52px"} -->
                    <div style="height:52px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:spacer {"height":"33px"} -->
                    <div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","left":"0","bottom":"var:preset|spacing|60"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading -->
                    <h2 class="wp-block-heading">Thinking about joining our team?</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Check out our open positions, or drop us a line, say hi.</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"14px","letterSpacing":"1px"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px">View Job Openings</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"45px"} -->
                    <div style="height:45px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:group -->
                ',
            ),
			'blog',
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-aerial-land' => array(
				'post_title' => _x( 'Aerial Land', 'Theme starter content', 'inspiro' ),
				'file'       => 'assets/images/StockSnap_M6D1GS9PSL.jpg', // URL relative to the template directory.
			),
            'image-contact' => array(
                'post_title' => _x( 'Contact', 'Theme starter content', 'inspiro' ),
                'file'       => 'assets/images/StockSnap_6O7JXC5DC5.jpg', // URL relative to the template directory.
            ),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'     => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => __( 'Main Menu', 'inspiro' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters Inspiro array of starter content.
	 *
	 * @since Inspiro 1.0.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'inspiro_starter_content', $starter_content );
}
