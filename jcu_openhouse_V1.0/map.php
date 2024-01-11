<?php
/**
 * Template Name: map
 *
 * This is a custom template for the Contact Us page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JCU_Openhouse
 */

get_header();
?>

<div class="container ">

    <section id="contact" class="contact-section">
        <div class="contact-content">
            <div class="map-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.PNG" alt="Map Image">
            </div>
        </div>
    </section>
</div><!-- .container -->

<?php get_footer(); ?>
