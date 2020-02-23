<?php
/**
* Template Name: Get Posts Array Using Ajax Page
*
* @package WordPress
* @subpackage Twenty_Twenty
* @since Twenty Twenty 1.0
*/

get_header();
?>

<main id="site-content" role="main">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php

            // Start the Loop.
            while ( have_posts() ) : the_post();
            // Include the page content template.
            get_template_part( 'template-parts/content', get_post_type() );
            // If comments are open or we have at least one comment, load up the comment template.
            endwhile;

        ?>
        </div>
    </div>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
