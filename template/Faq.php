<?php
/*
 * Template Name:  FAQ Page
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
            <h1> <?php the_field('page_heading_section') ?> </h1> 
        </div>
    </div>
    <div class="faq-section">
        <div class="container">
            <h2>FAQ</h2> 
            <div class="panel-group" id="accordion">
                <?php
                if (have_rows('accordion_section')):
                    while (have_rows('accordion_section')) : the_row();
                        ?>    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php the_sub_field('id'); ?>"><i class="far fa-plus-square"></i><?php the_sub_field('title'); ?></a>
                                </h4>

                            </div>
                            <div id="<?php the_sub_field('id'); ?>" class="panel-collapse collapse in">
                                <div class="panel-body"><?php the_sub_field('content'); ?></div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>                                            
            </div>
        </div>
    </div>

    <!--tab-section-wrapper-->
    <div class="tab-section-title">
        <h2> <?php the_field('key_terms_section_title') ?> </h2> 
    </div>
    <div class="tab-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="tab-sec">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php
                                    $l = 1;
                                    if (have_rows('key_terms_section_one')):
                                        while (have_rows('key_terms_section_one')) : the_row();
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ($l == 1) echo "active" ?>" data-toggle="tab" href="#tab-new-<?php echo $l ?>"><?php the_sub_field('title'); ?></a>
                                            </li>
                                            <?php
                                            $l++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                    $k = 1;
                                    if (have_rows('key_terms_section_one')):
                                        while (have_rows('key_terms_section_one')) : the_row();
                                            ?>
                                            <div id="tab-new-<?php echo $k ?>" class="container tab-pane <?php if ($k == 1) echo "active" ?>">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <?php
                                            $k++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="tab-sec">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php
                                    $l = 1;
                                    if (have_rows('key_terms_section_two')):
                                        while (have_rows('key_terms_section_two')) : the_row();
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ($l == 1) echo "active" ?>" data-toggle="tab" href="#tab-news-<?php echo $l ?>"><?php the_sub_field('title'); ?></a>
                                            </li>
                                            <?php
                                            $l++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                    $k = 1;
                                    if (have_rows('key_terms_section_two')):
                                        while (have_rows('key_terms_section_two')) : the_row();
                                            ?>
                                            <div id="tab-news-<?php echo $k ?>" class="container tab-pane <?php if ($k == 1) echo "active" ?>">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <?php
                                            $k++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--2nd tab-section-wrapper-->

    <div class="tab-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="tab-sec">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php
                                    $l = 1;
                                    if (have_rows('key_terms_section_three')):
                                        while (have_rows('key_terms_section_three')) : the_row();
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ($l == 1) echo "active" ?>" data-toggle="tab" href="#tab-three-<?php echo $l ?>"><?php the_sub_field('title'); ?></a>
                                            </li>
                                            <?php
                                            $l++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                    $k = 1;
                                    if (have_rows('key_terms_section_three')):
                                        while (have_rows('key_terms_section_three')) : the_row();
                                            ?>
                                            <div id="tab-three-<?php echo $k ?>" class="container tab-pane <?php if ($k == 1) echo "active" ?>">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <?php
                                            $k++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="tab-sec">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php
                                    $l = 1;
                                    if (have_rows('key_terms_section_four')):
                                        while (have_rows('key_terms_section_four')) : the_row();
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ($l == 1) echo "active" ?>" data-toggle="tab" href="#tab-four-<?php echo $l ?>"><?php the_sub_field('title'); ?></a>
                                            </li>
                                            <?php
                                            $l++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                    $k = 1;
                                    if (have_rows('key_terms_section_four')):
                                        while (have_rows('key_terms_section_four')) : the_row();
                                            ?>
                                            <div id="tab-four-<?php echo $k ?>" class="container tab-pane <?php if ($k == 1) echo "active" ?>">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <?php
                                            $k++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--key-terms-mobile-section-->
<div class="key-terms-mobile-section">
    <!--1-->
       <div class="accordion-section">
        <div class="container">
            <div class="accordion" id="accordionWrapper">
                <?php
                if (have_rows('key_terms_section_one')):
                    while (have_rows('key_terms_section_one')) : the_row();
                        ?>            
                        <div class="card">
                            <div class="card-header" id="<?php the_sub_field('id'); ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('id'); ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('title'); ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="<?php the_sub_field('id'); ?>" class="collapse" aria-labelledby="<?php the_sub_field('id'); ?>" data-parent="#accordionWrapper">
                                <div class="card-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>                        
            </div>
        </div>
    </div>
    <!--2-->
       <div class="accordion-section">
        <div class="container">
            <div class="accordion" id="accordionWrapper">
                <?php
                if (have_rows('key_terms_section_two')):
                    while (have_rows('key_terms_section_two')) : the_row();
                        ?>            
                        <div class="card">
                            <div class="card-header" id="<?php the_sub_field('id'); ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('id'); ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('title'); ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="<?php the_sub_field('id'); ?>" class="collapse" aria-labelledby="<?php the_sub_field('id'); ?>" data-parent="#accordionWrapper">
                                <div class="card-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>                        
            </div>
        </div>
    </div>
    <!--3-->
       <div class="accordion-section">
        <div class="container">
            <div class="accordion" id="accordionWrapper">
                <?php
                if (have_rows('key_terms_section_three')):
                    while (have_rows('key_terms_section_three')) : the_row();
                        ?>            
                        <div class="card">
                            <div class="card-header" id="<?php the_sub_field('id'); ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('id'); ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('title'); ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="<?php the_sub_field('id'); ?>" class="collapse" aria-labelledby="<?php the_sub_field('id'); ?>" data-parent="#accordionWrapper">
                                <div class="card-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>                        
            </div>
        </div>
    </div>
    <!--4-->
       <div class="accordion-section">
        <div class="container">
            <div class="accordion" id="accordionWrapper">
                <?php
                if (have_rows('key_terms_section_four')):
                    while (have_rows('key_terms_section_four')) : the_row();
                        ?>            
                        <div class="card">
                            <div class="card-header" id="<?php the_sub_field('id'); ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('id'); ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('title'); ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="<?php the_sub_field('id'); ?>" class="collapse" aria-labelledby="<?php the_sub_field('id'); ?>" data-parent="#accordionWrapper">
                                <div class="card-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else :
                endif;
                ?>                        
            </div>
        </div>
    </div>
</div><!--key-terms-mobile-section-->
 
</main>



<?php get_footer(); ?>