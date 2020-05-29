<footer>
    <div class="multi-family-section"  style="background-image: url('<?php echo get_template_directory_uri() . '/images/real estate investments.jpg' ?>');">
        <div class="multi-family-overlay"></div>
        <div class="container multi-family-wrapper">
            <div class="multi-family-content"  data-aos="fade-up">
                <h2>Multi-family real estate investments</h2>
                <p>Enjoy passive real estate income without the hassle of management.</p>
                <a href="/our-funds" class="primary-btn-btn">INVEST NOW</a>
            </div>            
        </div>
    </div>
    <!--form section-->
    <div class="stay-connected-section">
        <div class="stay-connected-overlay">     
        </div>
        <div class="stay-connected-content row">
            <div class="col-sm-4">
                <div class="learn-more-wrapper">
                    <h3>LEARN MORE</h3>
                    <p>Schedule a call to learn more about Front Range.</p>
                    <a href="https://calendly.com/paulko" class="primary-btn-btn" target="_blank">SCHEDULE CALL<i class="fas fa-phone"></i></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="stay-connected-wrapper">
                    <h3>STAY CONNECTED</h3>
                    <p>Sign up to receive Front Range news, opportunities, and other updates.</p> 
<!--                    <form class="course-form-wrapper">
                        <div class="course-form-row"> 
                            <input type="email" class="course-form-control-wrapper" placeholder="EMAIL ADDRESS ">  
                        </div>
                        <button type="submit" class="btn course-submit-btn"><i class="fas fa-address-card"></i>SEND </button>
                    </form>-->
                    <?php echo do_shortcode('[mc4wp_form id="260"]') ?>                  
                </div>
            </div>

        </div>   
    </div>

    <div class="footer-background">
        <div class="footer-container">
            <div class="row footer-row">
                <div class="col-sm-4">
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="footer-widget-area connect-section">
                        <?php dynamic_sidebar('footer2'); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-widget-area">
                        <?php //dynamic_sidebar('footer3'); ?>
                        <div class="footer-post">
                            <h4>LATEST BLOG</h4>
                            <span class="footer-border"></span>
                            <div class="row-wrapper">          
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 1
                                );
                                $testimonials = new WP_Query($args);
                                if ($testimonials->have_posts()) :
                                    ?>
                                    <?php
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                        ?>
                                        <div class="latest-post-sec">
                                            <a class="post-link post-blog-link" href="<?php the_permalink(); ?>">                                             
                                                <h3><?php the_title(); ?></h3>
                                                <p><?php echo the_time('F j, Y'); ?></p>
                                                <div class="short-content">
                                                    <?php the_excerpt(); ?>
                                                    <a href="<?php the_permalink(); ?>" class="read-more-btn-sec"><button class="btn read-more-btn" type="">Read More »</button></a>
                                                </div>

                                            </a>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                    <?php
                                else :
                                    esc_html_e('No testimonials in the diving taxonomy!', 'text-domain');
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="copyright-section">
                <div class="container">
                    <div class="copyright-content">
                        <p>Front Range @ <?php echo date('Y'); ?>. All Rights Reserved.</p>  
                    </div>
                    <div class="footer-menu">
                        <div class="footer-widget-area">
                            <?php dynamic_sidebar('footer4'); ?>
                        </div>
                    </div>  
                </div>

            </div>
        </div>
        <div id="stop" class="scrollTop">
            <span><a href=""><i class="fas fa-angle-double-up"></i></a></span>
        </div>

    </div>


</footer>
<?php wp_footer(); ?>

</body>
</html>