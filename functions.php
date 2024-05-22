<?php 
function webpackScript() {
    // styles
    wp_enqueue_style('stylesheet', get_stylesheet_uri(  ));
    wp_enqueue_style('main', get_theme_file_uri( 'dist/main.bundle.css'  ), [], '1.0.0', false);

    // scripts
    wp_enqueue_script('jq', "https://code.jquery.com/jquery-3.7.1.min.js", [], '3.7.1', false);
    wp_enqueue_script('main-js', get_theme_file_uri( 'dist/main.bundle.js' ), [], '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'webpackScript');