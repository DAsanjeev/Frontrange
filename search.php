<?php
get_header();
?>
<main class="category-page-sec">
    <div class="search-banner-background-sec banner-background-wrapper">
        <div class="banner-background-wrapper-overlay"></div>
        <div class="category-section">
            <div class="header-container life-design-banner-content">
                <div class="results-wrapper">
                    <h1><?php
                        $allsearch = new WP_Query("s=$s&showposts=0");
                        echo $allsearch->found_posts . ' Search Results Found';
                        ?></h1>
                    <p>You searched for: "<?php the_search_query(); ?>"</p>
                </div>
                <div class="container-list">
                    <a href="/"><i class="fas fa-home"></i></a> <i class="fas fa-angle-right"></i>
                    <a class="post-link" href="<?php the_permalink(); ?>">
                        Search results for "<?php the_search_query(); ?>"
                    </a>

                </div>
            </div>  
        </div>
    </div>
    <div class="search-page-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-8  first-col-sec">
                    <div class="search-page-sec">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                ?>

                                <article class="post <?php if (has_post_thumbnail()) { ?>has-thumbnail <?php } ?>">
                                    <div class="row post-row">
                                        <div class="col-sm-3">
                                            <!-- post-thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                                            </div><!-- /post-thumbnail -->
                                        </div>
                                        <div class="col-sm-9">

                                            <h2 class="search-heading-wrapper"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <?php the_excerpt(); ?>
                                            <a class="post-link" href="<?php the_permalink(); ?>">  <button class="btn search-continue-reading-btn" type="">Continue Reading</button></a> 
                                        </div>
                                    </div>
                                </article>
                                <?php
                            endwhile;

                        else :
                            echo '<p>Sorry, but nothing matched your search terms. Please try again with different keywords.</p>';

                        endif;
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
                                    esc_html_e('No testimonials in the diving taxonomy!', 'text-domain');
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
<?php
get_footer();
