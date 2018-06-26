<?php
add_action( 'wp_enqueue_scripts', 'craftsandarts_child_enqueue_styles', 100);
function craftsandarts_child_enqueue_styles() {
    wp_enqueue_style( 'craftsandarts-parent', get_theme_file_uri('/style.css') );
}

//var_dump(get_stylesheet_directory()); die();
//var_dump(get_stylesheet_directory_uri()); die;
function lametayel_home_page_scripts_init(){


    wp_enqueue_style('lametayel_home-page_style_css', get_stylesheet_directory_uri() . '/home-page-styles/css/main.min.css');
//    wp_enqueue_style('lametayel_home-main-page_style_css', get_stylesheet_directory_uri() . '/home-page-styles/css/home-main.css');
    wp_enqueue_style('lametayel_home-page_fontawesome_css', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css');
//<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
//
//    wp_enqueue_script('ronson_html5shiv_js', get_template_directory_uri() . '/js/html5shiv.js', array(), false, false);
//
    wp_deregister_script( 'jquery' );
//    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', array(), false, true);
//    wp_enqueue_script( 'jquery' );
//
//    wp_enqueue_script('ronson_main_js', get_template_directory_uri() . '/js/main.js', array(), false, true);
//
//    wp_register_script('ronson_maps_parameters_js', get_template_directory_uri() . '/js/maps_parameters.js', array(), false, true);
//    wp_enqueue_script('ronson_maps_parameters_js');
//
    wp_register_script('lametayel_home-page_scripts', get_stylesheet_directory_uri() . '/home-page-styles/js/scripts.min.js', array(), false, true);
    wp_enqueue_script('lametayel_home-page_scripts');

//    wp_register_script('themajax_scripts', get_template_directory_uri() . '/js/themajax.js', array(), false, true);
//    wp_enqueue_script('themajax_scripts');


}
add_action('wp_enqueue_scripts', 'lametayel_home_page_scripts_init');