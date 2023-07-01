<?php 
add_action('wp_enqueue_scripts', 'bonebreaker_styles'); 
add_action('wp_enqueue_scripts', 'bonebreaker_scripts'); 

function bonebreaker_styles() {
    wp_enqueue_style('bonebreaker-style', get_stylesheet_uri() );
};

function bonebreaker_scripts() {
    wp_enqueue_script('bonebreaker-scripts', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery1-scripts', 'https://code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script('jquery2-scripts', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
};

add_theme_support('custom-logo');
add_theme_support('menus');
?>