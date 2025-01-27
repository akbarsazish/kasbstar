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



function gregorian_to_jalali($gy, $gm, $gd) {
    $g_d_m = array(0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334);
    $gy2 = ($gm > 2) ? ($gy + 1) : $gy;
    $days = 355666 + (365 * $gy) + ((int)(($gy2 + 3) / 4)) - ((int)(($gy2 + 99) / 100)) + ((int)(($gy2 + 399) / 400)) + $gd + $g_d_m[$gm - 1];
    $jy = -1595 + (33 * ((int)($days / 12053)));
    $days %= 12053;
    $jy += 4 * ((int)($days / 1461));
    $days %= 1461;

    if ($days > 365) {
        $jy += (int)(($days - 1) / 365);
        $days = ($days - 1) % 365;
    }

    $jm = ($days < 186) ? 1 + (int)($days / 31) : 7 + (int)(($days - 186) / 30);
    $jd = 1 + (($days < 186) ? ($days % 31) : (($days - 186) % 30));
    return array($jy, $jm, $jd);
}


function format_jalali_date($timestamp) {
    $date = date('Y-m-d', $timestamp);
    list($gy, $gm, $gd) = explode('-', $date);
    list($jy, $jm, $jd) = gregorian_to_jalali($gy, $gm, $gd);
    $months = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
    return $jy . '-' . $months[$jm - 1] . '-' . $jd;
}
