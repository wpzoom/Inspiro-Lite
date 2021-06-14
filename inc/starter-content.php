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
				'search',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'front' => array(
				'thumbnail'    => '{{image-aerial-land}}',
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Beautiful portfolios for exceptional creatives', 'Theme starter content', 'inspiro' ),
				'post_content' => '
                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><meta charset="utf-8">This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":55} -->
                    <div style="height:55px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:group {"align":"full","style":{"color":{"background":"#e5e9ec"}}} -->
                    <div class="wp-block-group alignfull has-background" style="background-color:#e5e9ec"><div class="wp-block-group__inner-container"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
                    <h2>About us</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"contentJustification":"left"} -->
                    <div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius" href="#">About Us</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:spacer {"height":48} -->
                    <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:image {"id":26,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_JKMGVEJMPU.jpg" alt="" class="wp-image-26"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full"} -->
                    <div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer {"height":48} -->
                    <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:image {"id":27,"sizeSlug":"large","linkDestination":"none"} -->
                    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_M6D1GS9PSL.jpg" alt="" class="wp-image-27"/></figure>
                    <!-- /wp:image --></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
                    <h2>Our Services</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius" href="#">Services</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div></div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","backgroundColor":"black"} -->
                    <div class="wp-block-group alignfull has-black-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
                    <h2 class="has-text-align-center has-white-color has-text-color"><strong>Gallery</strong></h2>
                    <!-- /wp:heading -->

                    <!-- wp:gallery {"ids":[28,27,26,25,24,29],"linkTo":"none","align":"center"} -->
                    <figure class="wp-block-gallery aligncenter columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_P9QYJ8AAL8.jpg" alt="" data-id="28" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_P9QYJ8AAL8.jpg" data-link="#" class="wp-image-28"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_M6D1GS9PSL.jpg" alt="" data-id="27" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_M6D1GS9PSL.jpg" data-link="#" class="wp-image-27"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_JKMGVEJMPU.jpg" alt="" data-id="26" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_JKMGVEJMPU.jpg" data-link="#" class="wp-image-26"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_CXVCF2NNWJ.jpg" alt="" data-id="25" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_CXVCF2NNWJ.jpg" data-link="#" class="wp-image-25"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg" alt="" data-id="24" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg" data-link="#" class="wp-image-24"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_PGXCCTCLB5.jpg" alt="" data-id="29" data-full-url="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_PGXCCTCLB5.jpg" data-link="#" class="wp-image-29"/></figure></li></ul></figure>
                    <!-- /wp:gallery --></div></div>
                    <!-- /wp:group -->

                    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg","id":24,"hasParallax":true,"dimRatio":40,"overlayColor":"black","minHeight":375,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"is-position-center-center"} -->
                    <div class="wp-block-cover alignfull has-background-dim-40 has-black-background-color has-background-dim has-parallax is-position-center-center" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_89BQZ89TLH.jpg);min-height:375px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.1"},"color":{"text":"#fffffa"}},"fontSize":"huge"} -->
                    <p class="has-text-align-center has-text-color has-huge-font-size" style="color:#fffffa;line-height:1.1"><strong>Unleash your creativity with Inspiro</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":39} -->
                    <div style="height:39px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons {"contentJustification":"center"} -->
                    <div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":0,"textColor":"white","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color no-border-radius" href="#">Contact us</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div></div>
                    <!-- /wp:cover -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-aerial-land' => array(
				'post_title' => _x( 'Aerial Land', 'Theme starter content', 'inspiro' ),
				'file'       => 'assets/images/StockSnap_M6D1GS9PSL.jpg', // URL relative to the template directory.
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
