<?php

function frontrangecmg() {
    //wp_enqueue_style("jquery-ui", get_template_directory_uri() . '/css/jquery-ui.css');
    wp_enqueue_style("customcss", get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style("responsivecss", get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('bootstrap-v4', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', '1.0', 'all');
    
    wp_enqueue_style("aos-css", get_template_directory_uri() . '/css/aos.css');
    
    wp_enqueue_style('owl.carousel.min', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', '1.01', '1.01');
    wp_enqueue_style('owl.theme.default.min', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', '1.01', '1.01');
//  wp_enqueue_script("jqueryjs", get_template_directory_uri() . '/js/jquery.js', array('jquery'), 1.1, true);
    //wp_enqueue_script("jqueryvisiblejs", get_template_directory_uri() . '/js/jquery.visible.min.js', array('jquery'), 1.1, true);
   // wp_enqueue_script("jquerycntljs", get_template_directory_uri() . '/js/jquery.cntl.js', array('jquery'), 1.1, true);
    wp_enqueue_script("owlcarouseljs", get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20190612', true);
    
      wp_enqueue_script("aos-js", get_template_directory_uri() . '/js/aos.js', array('jquery'), 1.1, true);
    
    //wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2.min.js', array('jquery'), true);
    //wp_enqueue_script("jqueryui", get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), 1.1, true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array(), '2019061112', true);
}

add_action('wp_enqueue_scripts', 'frontrangecmg');

//navigation menu

register_nav_menus(array(
    'primary' => __('Primary menu'),
    'footer' => __('Footer menu 1'),
    'footermenu2' => __('Footer menu 2')
));

//them setup
function frontrangecmg_setup() {


    //Add featured image support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'frontrangecmg_setup');

//Add our Widget location
function ourWidgetsInit() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar1'
    ));
    //footer Area bar
    register_sidebar(array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Footer Area 5',
        'id' => 'footer',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="my-special-class">',
        'after_title' => '</h6>'
    ));
}

add_action('widgets_init', 'ourWidgetsInit');


function pagination_bar($custom_query) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}





