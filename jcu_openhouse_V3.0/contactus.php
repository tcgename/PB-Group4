<?php
/**
 * Template Name: Contact Us Page
 *
 * This is a custom template for the Contact Us page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JCU_Openhouse
 */

get_header();
?>

<div class="container">
    <h1>Contact Us</h1>

    <section id="contact" class="contact-section">
        <div class="contact-content">
            <div class="contact-info">
                <address>
                    <p>------------------------------------------------------------------</p>
                    <strong>School Address:</strong><br>
                    149 Sims Dr, Singapore 387380
                </address>
                    <p>------------------------------------------------------------------</p>
                <p><strong>Phone:</strong> 67093888</p>
                    <p>------------------------------------------------------------------</p>
                <p><strong>Website:</strong> <a href="https://www.jcu.edu.sg/?utm_source=GMB&utm_medium=organic" target="_blank">https://www.jcu.edu.sg</a></p>
                    <p>------------------------------------------------------------------</p>
                <p><strong>Email:</strong> admissions-singapore@jcu.edu.au</p>
                    <p>------------------------------------------------------------------</p>
            </div>
            
            <div class="contact-form-link">
                <?php
                    // Assuming contact-form.php is in the root theme directory
                    $contact_form_url = get_template_directory_uri() . '/contact-form.php';






                    
                ?>
            </div>
        </div>
    </section>
</div><!-- .container -->

<?php get_footer(); ?>