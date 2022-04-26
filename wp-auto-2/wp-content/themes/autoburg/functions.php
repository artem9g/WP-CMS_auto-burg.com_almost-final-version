<?php

function autoburg_assets() {

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true );

}
add_action( 'wp_enqueue_scripts', 'autoburg_assets' );

show_admin_bar(true);
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');