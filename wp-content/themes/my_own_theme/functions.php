<?php

    function my_files(){
        wp_enqueue_style('main_style', get_stylesheet_uri());
        wp_enqueue_script('icons', 'https://kit.fontawesome.com/76844b76e2.js');
    }
    add_action('wp_enqueue_scripts', 'my_files');

    function my_theme_sets(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'my_theme_sets');
?>