<?php
/*
 * Template Name:  Portfolio Page
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
    <div class="portfolio-carouse-section">
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
                    <div class="owl-carousel owl-theme" id="reserve-carousel">
                        <?php
                        if (have_rows('reserve_at_walnut_carousel')):
                            while (have_rows('reserve_at_walnut_carousel')) : the_row();
                                ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('image'); ?>" class="carousel-img" alt="reserve-carousel-image">
                                </div>
                                <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="reserve-content">
                    <?php the_field('reserve_at_walnut_content') ?>
                </div>
            </div>
          </div>  
        </div>
    </div>
  <!--2nd-->   
     <div class="portfolio-carouse-section carousel-background">
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
                    <div class="owl-carousel owl-theme" id="blair-carousel">
                        <?php
                        if (have_rows('blair@bitters_carousel')):
                            while (have_rows('blair@bitters_carousel')) : the_row();
                                ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('image'); ?>" class="carousel-img" alt="reserve-carousel-image">
                                </div>
                                <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="reserve-content">
                    <?php the_field('blair@bitters_content_section') ?>
                </div>
            </div>
          </div>  
        </div>
    </div>
  <!--3rd-->
<!--     <div class="portfolio-carouse-section">
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
                    <div class="owl-carousel owl-theme" id="henry-carousel">
                        <?php
                        //if (have_rows('the_henry_carousel')):
                          //  while (have_rows('the_henry_carousel')) : the_row();
                                ?>
                                <div class="item">
                                    <img src="<?php// the_sub_field('image'); ?>" class="carousel-img" alt="reserve-carousel-image">
                                </div>
                                <?php
                            //endwhile;
                        //else :
                        //endif;
                        ?>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="reserve-content">
                    <?php //the_field('the_henry_content') ?>
                </div>
            </div>
          </div>  
        </div>
    </div>-->
</main>


<?php get_footer(); ?>