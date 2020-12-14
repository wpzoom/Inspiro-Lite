<?php
/*
Template Name: Homepage (Page Builder)
*/

get_header(); ?>

<main id="content" class="clearfix" role="main">

    <div class="builder-wrap">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>

    </div>

</main><!-- #content -->

<?php
get_footer();
