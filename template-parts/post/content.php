<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/post/article/header' ); ?>

	<?php if ( ! is_single() && 'excerpt' === get_theme_mod( 'display_content', 'excerpt' ) ): ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php endif ?>

	<?php
	if ( is_single() && 'side-right' === get_theme_mod( 'layout_single_post', 'full' ) && is_active_sidebar( 'blog-sidebar' ) ) {
		echo '<div class="entry-wrapper">';
	}
	?>

	<?php if ( is_single() || ( ! is_single() && 'full-content' === get_theme_mod( 'display_content', 'excerpt' ) ) ): ?>
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Read more<span class="screen-reader-text"> "%s"</span>', 'inspiro' ),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'inspiro' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			);
			?>
		</div><!-- .entry-content -->
	<?php endif ?>

	<?php if ( is_single() && 'side-right' === get_theme_mod( 'layout_single_post', 'full' ) && is_active_sidebar( 'blog-sidebar' ) ): ?>
		
		<aside id="secondary" class="widget-area" role="complementary">
		    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</aside>

		</div><!-- .entry-wrapper -->

		<div class="clear"></div>
		
	<?php endif ?>

	<?php
	if ( is_single() ) {
		inspiro_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
