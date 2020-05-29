<?php
get_header();
?>
<main class="post-sec-page"> 
    <div class="category-col-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 first-col-sec">
                    <div class="blog-row">          
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 6
                        );
                        $testimonials = new WP_Query($args);
                        if ($testimonials->have_posts()) :
                            ?>
                            <?php
                            while ($testimonials->have_posts()) :
                                $testimonials->the_post();
                                ?>
                                <div class="blog-col post-wrapper-sec">
                                    <a class="post-link post-blog-link" href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                        <img src=" <?php the_post_thumbnail_url($size); ?>" class="post-feat-image" alt="post-image" class="post-image">                               
                                    </a>
                                    <div class="post-detail">
                                        <div class="post-date">
                                            <i class="far fa-clock"></i><?php echo the_time('F j, Y'); ?>
                                        </div> 
                                        <div class="folder-name">
                                            <i class="far fa-folder"></i><?php the_category(', '); ?>  
                                        </div>
                                        <div class="post-author">
                                            <i class="far fa-user"></i><?php echo get_author_name(); ?>                              
                                        </div>                          
                                    </div>
                                    <?php the_excerpt(); ?>
                                    <a class="post-link" href="<?php the_permalink(); ?>">  <button class="btn continue-reading-btn" type="">Continue Reading<i class="fas fa-angle-right"></i></button> </a> 
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                            <?php
                        else : ?>
                        <div class="no_posts">
                           <?php esc_html_e('Sorry. There are no posts right now. Stay tuned to be updated.', 'text-domain');?>
                        </div>
                          <?php endif;
                        ?>
                    </div>
                </div>
                <div class="col-sm-4 right-sec">
                    <section class="related-posts-section">
                        <div class="container">
                            <?php get_search_form(); ?>
                            <h4>RECENT POSTS</h4>
                            <div class="related-posts-row">         
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                );
                                $testimonials = new WP_Query($args);
                                if ($testimonials->have_posts()) :
                                    ?>
                                    <?php
                                    while ($testimonials->have_posts()) :
                                        $testimonials->the_post();
                                        ?>
                                        <div class="post-wrapper" <?php echo $i; ?>s">
                                             <a class="post-link" href="<?php the_permalink(); ?>">
                                                <p><?php the_title(); ?><p>                             
                                            </a>
                                        </div>

                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                    <?php
                                else :
                                    esc_html_e('There are no recent posts.', 'text-domain');
                                endif;
                                ?>                                                        
                            </div>
                            <div class="categories-section-wrapper">
                                <h4>CATEGORIES</h4>
                                <?php
                                wp_list_categories(array(
                                    'orderby' => 'name',
                                    'title_li' => ''
                                ));
                                ?> 
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div> 

</main>


<?php get_footer(); ?>