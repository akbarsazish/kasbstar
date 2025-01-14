<?php

/*
* Add themes feature
*/
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
    // Add image size 
    add_image_size('blog-cover', 550, 280, true);
}


/*
* Define the excerpt length
*/
function custom_excerpt_length(){
    return 20;
}


/*
* Add themes style
*/

function enqueue_all_style_plus_tailwind_styles(){
    wp_enqueue_style('style', get_stylesheet_uri(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_all_style_plus_tailwind_styles');


/*
* Register menu theme
*/
function theme_register_menu() {
    register_nav_menu('primary_menu', __('Primary Menu'));
}
add_action('after_setup_theme', 'theme_register_menu');


/*
* Register wedgits
*/

function theme_widgets_init(){
    $args = [
        'name'  => __('Sidebar'),
        'id'  => 'sidebar_widget',
        'description'  => 'Registering widget area',
        'before_widget'  => '<section id="someId">',
        'after_widget'  => '</section>',
        'before_widget'  => '<h2 class="widget-title">',
        'after_widget'  => '</h2>',
    ];

    register_sidebar($args);
}

add_action('widgets_init', 'theme_widgets_init');

