<?php
/*
 * Template Name: Investor network sign up Page
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main>
    <div class="banner-wrap-sec">
        <div class="banner-content-wrapper-sec">     
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?> 
        </div>
        <div class="contact-form-section">
            <div class="form-sec">
                <?php echo do_shortcode('[contact-form-7 id="176" title="Investor Network Form"]') ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>