<?php

function my_theme_setup() {
    register_nav_menus(array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
// Add Featured image support to our posts
add_theme_support('post-thumbnails');
//set up custom footer widgets
function cmsclass_widget_init(){
    register_sidebar(array(
        'name'           => __('Footer Widget 1', 'cmsclass'),
        'id'             => 'footer_widget_1',
        'description'    => __('The first footer widget area', 'cmsclass'),
        'before_widget'  => '<div class="logo-widget">',
        'after_widget'   => '</div>',
        // 'before_title'   => '<h2 class="footer-widget-title">',
        // 'after_title'    => '</h2>'
    ));
    register_sidebar(array(
        'name'           => __('Footer Widget 2', 'cmsclass'),
        'id'             => 'footer_widget_2',
        'description'    => __('The second footer widget area', 'cmsclass'),
        'before_widget'  => '<div class="about-widget">',
        'after_widget'   => '</div>',
        'before_title'   => '<h2 class="widget-title">',
        'after_title'    => '</h2>'
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'cmsclass'),
        'id'            => 'footer_widget_3',
        'description'   => __('The third footer widget area', 'cmsclass'),,
        'before_widget'  => '<div class="menu-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 4', 'cmsclass'),
        'id'            => 'footer_widget_4',
        'description'   => __('The fourth footer widget area', 'cmsclass'),,
        'before_widget'  => '<div class="contact-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
}