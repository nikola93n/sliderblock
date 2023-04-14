<?php

function nb_files() {    
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/library/css/bootstrap.min.css'), false, '5.3.0-alpha3', 'all');
    wp_enqueue_style('nb-style', get_theme_file_uri('/assets/library/css/nb-style.css'), false, '1.0', 'all');
    wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/library/js/bootstrap.min.js'), array('jquery') ,'5.3.0-alpha3', true);
  }
  
add_action('wp_enqueue_scripts', 'nb_files');

function nb_features() {
    register_nav_menu('headerMenu', 'Header Menu');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'nb_features');


/**
 * Blocks
 */
require get_template_directory() . '/inc/blocks.php';