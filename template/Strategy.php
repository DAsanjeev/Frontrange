<?php
/*
 * Template Name:  Strategy Page
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
    <div class="banner-wrap-section">
<!--        <div class="banner-content-wrapper">     
            <?php
            //while (have_posts()) : the_post();
                //the_content();
            //endwhile;
            ?> 
        </div>-->
    </div>
    <div class="strategy-section-wrapper">
        <?php
        if (have_rows('strategy_section')):
            $i = 1;
            while (have_rows('strategy_section')) : the_row();
                if ($i % 2 == 0) {
                    ?>
                    <div class="strategy-section strategy-section-background" id="sec<?php echo $i ?>">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="strategy-section-img" style="background-image: url('<?php the_sub_field('image'); ?>');">
                                </div>             
                            </div>
                            <div class="col-sm-8">
                                <div class="strategy-section-content">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>        
                    </div>
                <?php } else { ?>
                    <div class="strategy-section" id="sec<?php echo $i ?>">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="strategy-section-img" style="background-image: url('<?php the_sub_field('image'); ?>');">
                                </div>             
                            </div>
                            <div class="col-sm-8">
                                <div class="strategy-section-content">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>        
                    </div>
                    <?php
                }
                $i++;
            endwhile;
        else :
        endif;
        ?>             
    </div>
</main>


<?php get_footer(); ?>