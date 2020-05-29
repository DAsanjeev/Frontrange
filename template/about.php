<?php
/*
 * Template Name:  About Page
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
<!--    <div class="banner-wrap-section">
        <div class="banner-content-wrapper">     
            <?php
//            while (have_posts()) : the_post();
//                the_content();
//            endwhile;
            ?> 
        </div>
    </div>-->
    <div class="core-values-section">
        <h2> <?php the_field('core_values_section_title') ?></h2>
        <span class="heading-border"></span>
        <div class="core-values-row">
            <?php
            if (have_rows('core_values_section')):
                $i = 1;
                while (have_rows('core_values_section')) : the_row();
                    if ($i % 2 == 0) {
                        ?>
                        <div class="core-values-col" id="sec<?php echo $i ?>">
                            <div class="core-values-col-content">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('content'); ?></p>
                            </div>                          
                        </div>
                    <?php } else { ?>
                        <div class="core-values-col core-values-background" id="sec<?php echo $i ?>">
                            <div class="core-values-col-content">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('content'); ?></p>
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
    </div>      
    <div class="our-team-section">
        <div class="our-team-container">
            <h2> <?php the_field('our_team_section_title') ?></h2>
            <span class="heading-border"></span>
            <div class="our-team-row">
                <?php
                if (have_rows('our_team_section')):
                    $i = 1;
                    while (have_rows('our_team_section')) : the_row();
                        if ($i % 2 == 0) {
                            ?>
                            <div class="team-background">
                                <div class="container">
                                    <div class="team-wrapper row  team-background" id="sec<?php echo $i ?>">
                                        <div class="col-sm-3">
                                            <img src="<?php the_sub_field('image'); ?>" class="team-member-img" alt="Team-image">                      
                                        </div>
                                        <div class="col-sm-9">
                                            <h3><?php the_sub_field('name_and_post'); ?></h3> 
                                            <p><?php the_sub_field('content'); ?></p>  
                                        </div>                             
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="container">
                                <div class="team-wrapper row" id="sec<?php echo $i ?>">

                                    <div class="col-sm-3">
                                        <img src="<?php the_sub_field('image'); ?>" class="team-member-img" alt="Team-image">                                 
                                    </div>
                                    <div class="col-sm-9">
                                        <h3><?php the_sub_field('name_and_post'); ?></h3> 
                                        <p><?php the_sub_field('content'); ?></p>  
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
        </div>
    </div>
</main>


<?php get_footer(); ?>