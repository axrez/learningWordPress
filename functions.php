<?php 


function add_theme_scripts() { 
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'front-page', get_template_directory_uri() . '/front-page.js', array('jquery'),  '3.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 50 );

