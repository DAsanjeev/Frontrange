<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <?php if (is_home() || is_front_page()) { ?>
            <title><?php echo get_bloginfo('name'); ?></title>
        <?php } else { ?>
            <title><?php the_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
        <?php }
        ?>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">



        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="header-section-wrapper">
                <div class="header-container">
                    <div class="navbaar-section">
                        <div class="row header-row">
                            <div class="col-sm-4">
                                <a href="/" class="website-link"> 
                                    <img src='<?php bloginfo('template_url'); ?>/images/frontrangedark.png' class="img-responsive dark-logo-img" alt="Front Range">
                                    <img src='<?php bloginfo('template_url'); ?>/images/frontrange white.png' class="img-responsive white-logo-img" alt="Front Range">
<!--                                    <p>Front Range</p>-->
                                </a>
                            </div>
                            <div class="col-sm-8 menu-section">
                                <ul class="navbar-nav">
                                    <nav class="site-nav"> 
                                        <?php
                                        $args = array(
                                            'theme_location' => 'primary'
                                        );
                                        ?>          
                                        <?php wp_nav_menu($args); ?>
                                    </nav>
                                </ul> 
                            </div>
                            <!--mobile menu -->
                            <div class="mobile-menu col-sm-8">
                                <div id="myNav" class="header-overlay">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="closebtn-wrapper">&times;</span>  <span class="closebtn-wrapper-text">Close Menu</span></a>
                                    <div class="overlay-content">
                                        <?php
                                        $args = array(
                                            'theme_location' => 'primary'
                                        );
                                        ?>          
                                        <?php wp_nav_menu($args); ?>  
                                    </div>
                                </div>                          
                                <span class="mobile-menu-btn" onclick="openNav()"><i class="fas fa-bars"></i> menu</span>
                            </div>

                        </div>
                    </div> 
                </div>

            </div>
        </header>









