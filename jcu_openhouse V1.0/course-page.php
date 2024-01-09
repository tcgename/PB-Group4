<?php
/**
 * Template Name: Courses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JCU_Openhouse
 */

get_header();
?>

<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
    the_post();

    // Here you can modify how the content is displayed or include new template parts
    get_template_part( 'template-parts/content', 'courses' ); // Make sure the 'content-courses.php' exists in 'template-parts' directory

endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
?>
