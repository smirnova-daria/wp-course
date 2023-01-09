<?php

add_action('wp_enqueue_scripts', function (){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('queries', get_template_directory_uri().'/assets/css/media-queries.css');
});

add_action('wp_footer', function(){
    wp_enqueue_script('flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider.js');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri().'/assets/js/doubletaptogo.js');
    wp_enqueue_script('init', get_template_directory_uri().'/assets/js/init.js');

});

add_action( 'after_setup_theme', function(){
    register_nav_menu('header', 'menu in header');
    register_nav_menu('footer', 'menu in footer');
});

add_action('widgets_init', function(){
    register_sidebar( array(
        'name'          => 'right sidebar',
        'id'            => 'right_sidebar',
        'description'   => '',
        'before_widget' => '<div class="widget widget_%2$s">',
		'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => "</h5>\n",
    ) );
});