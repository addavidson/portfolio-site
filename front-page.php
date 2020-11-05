<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoFocus
 */

get_header(); ?>

    <main id="main" class="site-main">

        <?php
        while ( have_posts() ) : 
            the_post();
            photofocus_single_image();
            the_content();

        endwhile; // End of the loop.
        ?>

    </main><!-- #primary -->

<?php
get_footer();