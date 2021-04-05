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
            'sidebar' => array(
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
                'post_title'   => esc_html_x( 'Create your website with blocks', 'Theme starter content', 'inspiro' ),
                'post_content' => '
                    <!-- wp:paragraph -->
                    <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a placeholder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>If you want to read, I might suggest a good book, perhaps Melville. That’s why they call it, the dummy copy. This, of course, is not the real copy for this entry. Rest assured, the words will expand the concept. With clarity. Conviction. And a little wit.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_WV0YTVMU7P.jpg","id":5284,"hasParallax":true,"align":"full"} -->
                    <div class="wp-block-cover alignfull has-background-dim has-parallax" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_WV0YTVMU7P.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size">Nice to meet you, Gutenberg</p>
                    <!-- /wp:paragraph --></div></div>
                    <!-- /wp:cover -->

                    <!-- wp:paragraph -->
                    <p>In today’s competitive market environment, the body copy of your entry must lead the reader through a series of disarmingly simple thoughts.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"align":"wide","id":5834} -->
                    <figure class="wp-block-image alignwide"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_U94B4HVBAO.jpg" alt="" class="wp-image-5834"/><figcaption>Wide width image</figcaption></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>All your supporting arguments must be communicated with simplicity and charm. And in such a way that the reader will read on. (After all, that’s a reader’s job: to read, isn’t it?) And by the time your readers have reached this point in the finished copy, you will have convinced them that you not only respect their intelligence, but you also understand their needs as consumers.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"align":"full","id":5835} -->
                    <figure class="wp-block-image alignfull"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_PU4RMD67KZ.jpg" alt="" class="wp-image-5835"/><figcaption>Full width image</figcaption></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>As a result of which, your entry will repay your efforts. Take your sales; simply put, they will rise. Likewise your credibility. There’s every chance your competitors will wish they’d placed this entry, not you. While your customers will have probably forgotten that your competitors even exist. Which brings us, by a somewhat circuitous route, to another small point, but one which we feel should be raised.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":5829} -->
                    <figure class="wp-block-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_WV0YTVMU7P.jpg" alt="" class="wp-image-5829"/><figcaption>Simple image (default size)</figcaption></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>This is dummy copy. It is not meant to be read. Accordingly, it is difficult to figure out when to end it. If this were real copy, it would have ended long ago, because‚ as we all know‚ no one reads body copy, and even fewer read body copy this long. But then, this is dummy copy. It is not meant to be read. Period.</p>
                    <!-- /wp:paragraph -->',
            ),
            'about',
            'contact',
            'blog',
        ),

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments' => array(
            'image-aerial-land' => array(
                'post_title' => _x( 'Aerial Land', 'Theme starter content', 'inspiro' ),
                'file'       => 'assets/images/StockSnap_PU4RMD67KZ.jpg', // URL relative to the template directory.
            ),
        ),

        // Default to a static front page and assign the front and posts pages.
        'options'     => array(
            'show_on_front'  => 'page',
            'page_on_front'  => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus'   => array(
            // Assign a menu to the "primary" location.
            'primary'   => array(
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