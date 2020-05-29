<?php
/*
 * Template Name:  Front Range Homepage
 */
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main class="home-main">
    <div class="home-banner-section" style="background-image: url('<?php echo $feat_image; ?>');">
        <div class="banner-overlay">     
        </div>
        <div class="banner-content-section">
            <div class="banner-wrapper">
                <div class="banner-content">
                    <?php the_field('banner_content_section') ?>
                </div>
            </div>     
        </div>

    </div>
    <div class="banner-wrap-section">
        <div class="course-banner-content">     
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?> 
        </div>
    </div>
    <div class="why-real-estate-section">
        <div class="container">
            <h2 class="heading-wrapper"><?php the_field('why_real_estate_section_title') ?></h2>
            <span class="heading-border"></span>
            <div class="row">
                <?php
                if (have_rows('why_real_estate')):
                    while (have_rows('why_real_estate')) : the_row();
                        ?>
                        <div class="col-sm-4 real-estate-wrapper">
                             
                              <div class="logo-icon" data-aos="zoom-in"><img src="<?php the_sub_field('image') ?>" alt="Icon">  </div>
<!--                            <div class="logo-icon" data-aos="zoom-in"><?php //the_sub_field('font_logo'); ?></div>-->
                            <h3><?php the_sub_field('heading'); ?></h3>
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>  
                <div class="btn-section">
                    <a href="/our-funds" class="primary-btn-btn"><?php the_field('why_real_estate_section_button') ?></a> 
                </div>        
            </div>
        </div>
    </div>
    <div class="investment-process-section" style="background-image: url('<?php the_field('investment_process_background_image') ?>');">
        <div class="investment-process-section-overlay"></div>
        <div class="investment-process-content">
            <h2><?php the_field('investment_process_background_title') ?></h2>
            <span class="heading-border"></span>
            <div class="investment-timeline-section">
                <div class="wrapper">
                    <section class="horizontal-timeline-container">
                        <?php
                        if (have_rows('investment_timeline_section')):
                            while (have_rows('investment_timeline_section')) : the_row();
                                ?>
                                <div class="timeline-block">
                                    <div class="timeline-step-counter time-line-step-one"><?php the_sub_field('number'); ?></div>
                                    <div class="timeline-content">
                                        <p><?php the_sub_field('title'); ?></p>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        else :
                        endif;
                        ?>  
                    </section>
                </div>
            </div>
        </div> <!--   nvestment-process-content-->
    </div>
<!--    <div class="how-it-workshow-section">
        <div class="container">
            <h2 class="heading-wrapper"><?php // the_field('works_first_col_heading_section') ?></h2>
            <span class="heading-border"></span>
            <div class="row">
                <div class="col-sm-4">
                    <h3><?php // the_field('we_raise_money_title') ?></h3>
                    <div class="workshow-image"  data-aos="fade-right">
                        <img src="<?php // the_field('we_raise_money_image') ?>" class="how-it-workshow-logo-img" alt="how it workshow Image">
                    </div>

                </div>
                <div class="col-sm-4">
                    <h3><?php // the_field('we_build_or_purchase_title') ?></h3>
                    <div class="workshow-image" data-aos="fade-up">
                        <img src="<?php // the_field('we_build_or_purchase_image') ?>" class="how-it-workshow-logo-img" alt="how it workshow Image"> 
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <h3><?php // the_field('we_send_our_investors_title') ?></h3>
                    <div class="workshow-image" data-aos="fade-left" >
                        <img src="<?php // the_field('we_send_our_investors_image') ?>" class="how-it-workshow-logo-img" alt="how it workshow Image">  
                    </div>                 
                </div>
            </div>
        </div>
    </div>-->
    <!--    <div class="advantages-section">
            <div class="container">
                <h2 class="heading-wrapper">THE MORONGELL CAPITAL ADVANTAGE</h2>
                <span class="heading-border"></span>
    
                <div class="content">
                    <i class="fas fa-angle-right"></i><?php // the_field('advantages');           ?>                
                </div>
            </div>
        </div>-->
    <!--test-->
<!--    <div class="advantages-section">
        <div class="advantages-container">
            <h2 class="heading-wrapper"><?php // the_field('advantages_section_heading'); ?></h2>
            <span class="heading-border"></span>

            <div class="content">
                <ul>
                    <?php
//                    if (have_rows('advantages_section')):
//                        while (have_rows('advantages_section')) : the_row();
                            ?>
                            <li>  <i class="fas fa-angle-right"></i> <?php // the_sub_field('advantages_content_wrapper'); ?></li>
                                <?php
//                            endwhile;
//                        else :
//                        endif;
                        ?>  
                </ul>            
            </div>
        </div>
    </div>-->
</main>


<?php get_footer(); ?>