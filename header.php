<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro Lite 1.0.0
 * @version x.x.x
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inspiro' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php
	// Display custom header only on first page.
	if ( isset( $paged ) && $paged < 2 ) {

		if ( is_front_page() && is_home() && has_header_image() ) { // Default homepage
			get_template_part( 'template-parts/header/header', 'image' );
		}
		elseif ( is_front_page() && has_header_image() ) { // static homepage
			get_template_part( 'template-parts/header/header', 'image' );
		}
		elseif ( is_page() && inspiro_is_frontpage() && has_header_image() ) {
			get_template_part( 'template-parts/header/header', 'image' );
		}
		elseif ( is_page_template( 'page-templates/homepage-builder-bb.php' ) && has_header_image() ) {
			get_template_part( 'template-parts/header/header', 'image' );
		}

	}
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
