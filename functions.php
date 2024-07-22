<?php

add_action('wp_enqueue_scripts', 'sparrow_enqueue_scripts');

add_action('wp_footer', 'sparrow_wp_footer');

function sparrow_enqueue_scripts(): void
{
    $path = get_template_directory_uri() . '/assets/';

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', $path . 'css/default.css');
    wp_enqueue_style('layout', $path . 'css/layout.css');
    wp_enqueue_style('media-queries', $path . 'css/media-queries.css');

    wp_enqueue_script('modernizr.js', $path . 'js/modernizr.js');
}

function sparrow_wp_footer(): void
{
    $path = get_template_directory_uri() . '/assets/';

    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery.flexslider', $path . 'js/jquery.flexslider.js', ['jquery']);
    wp_enqueue_script('doubletaptogo', $path . 'js/doubletaptogo.js', ['jquery']);
    wp_enqueue_script('init', $path . 'js/init.js', ['jquery']);
}