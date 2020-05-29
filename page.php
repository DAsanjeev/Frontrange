<?php
get_header();
$feat_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
?>
<main>
    <div class="life-design-section">
        <div class="free-resources-banner" style="background-image: url('<?php echo $feat_image; ?>');">
            <div class="container life-design-banner-content">     
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?> 
            </div>
        </div>      
</main>
<?php
get_footer();


