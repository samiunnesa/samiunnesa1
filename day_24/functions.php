<?php

wp_enqueue_style('style-samiun',get_stylesheet_uri());
wp_enqueue_style('style-boot',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'script-name', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array(
    'name'=>'banner',
    'id'=>'banner',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'side imaige',
    'id'=>'sideimg',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'side video',
    'id'=>'sidevideo',
    'before_widget'=>'',
    'after_widget'=>''
));
register_sidebar(array(
    'name'=>'footer',
    'id'=>'footermain',
    'before_widget'=>'',
    'after_widget'=>''
));