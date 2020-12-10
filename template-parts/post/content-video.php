<?php
/**
 * Template part for displaying video posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version x.x.x
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) {
		echo inspiro_get_theme_svg( 'thumb-tack' );
	}
	?>
	<header class="entry-header">
		<?php
		if ( ( is_single() || ( is_page() && ! inspiro_is_frontpage() ) ) ) {
			echo '<div class="inner-wrap">';
		}
		?>
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				inspiro_single_entry_meta();
			} else {
				echo inspiro_entry_meta();
			};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
		<?php
		if ( ( is_single() || ( is_page() && ! inspiro_is_frontpage() ) ) ) {
			echo '</div><!-- .inner-wrap -->';
		}
		?>
	</header><!-- .entry-header -->

	<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$video   = false;

		// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() && empty( $video ) ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'inspiro-loop' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">

		<?php
		if ( ! is_single() ) {

			// If not a single post, highlight the video file.
			if ( ! empty( $video ) ) {
				foreach ( $video as $video_html ) {
					echo '<div class="entry-video">';
						echo $video_html;
					echo '</div>';
				}
			};

		};

		if ( is_single() || empty( $video ) ) {

			the_content(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'inspiro' ),
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
		};
		?>

	</div><!-- .entry-content -->

	<?php if ( is_single() && 'side-right' === get_theme_mod( 'layout_single_post' ) && is_active_sidebar( 'blog-sidebar' ) ): ?>
		
		<aside id="secondary" class="widget-area" role="complementary">
		    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</aside>
		
	<?php endif ?>

	<?php
	if ( is_single() ) {
		inspiro_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
