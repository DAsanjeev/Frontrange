<?php
/*
 * Template Name:  Contact Page
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main>
    <div class="banner-section" style="background-image: url('<?php echo $feat_image; ?>');">

        <div class="about-banner-overlay">     
        </div>
        <div class="banner-wrapper"></div>
        <div class="banner-heading-section">
            <h1><?php wp_title(''); ?> </h1> 
        </div>
    </div>
    <div class="contact-section">
        <div class="row">
            <div class="col-sm-4">
                <h2>Front Range</h2>
                <span class="heading-border"></span>
                <?php
                if (have_rows('contact_section')):
                    while (have_rows('contact_section')) : the_row();
                        ?>
                        <div class="contact-sec-wrapper" data-aos="fade-up">
                            <div class="contact-logo-icon"><?php the_sub_field('icon'); ?></div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="col-sm-8">
                <h2>GET IN TOUCH</h2>
                <span class="heading-border"></span>
                <div class="contact-form-section">
                    <p>Thank you for your interest in Front Range. Feel free to contact us with your questions. Please complete the form below and a member of our team will contact you.</p>
                    <div class="form-sec">                     
                        <?php echo do_shortcode('[contact-form-7 id="177" title="Contact Page Form"]') ?>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php get_footer(); ?>