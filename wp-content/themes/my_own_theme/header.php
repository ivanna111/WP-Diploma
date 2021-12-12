<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
<header id="main-header" style="background-image: url(

    <?php if(is_front_page()) {
        echo get_theme_file_uri('/images/banner.jpg');
    } else {
        echo get_theme_file_uri('/images/page_banner.jpg');
    }
    ?>
        );">
    <div id="main-header-top">
        <div id="main-header-top">
            <h1>
                <a href="<?php echo site_url(); ?>">Potter Speaks <strong>English School</strong></a>
            </h1>
            <i class="fa fa-bars"></i>
            <nav id="main-navigation">
                <a <?php
                    if(is_page('about-us') || wp_get_post_parent_id(0) == 12){
                        echo 'class="current-menu-item"';
                    }
                ?>
                        href="<?php echo site_url('/about-us'); ?>">About Us</a>
                <a href="#">Programs</a>
                <a href="#">Events</a>
                <a href="#">Blog</a>
            </nav>
        </div>


