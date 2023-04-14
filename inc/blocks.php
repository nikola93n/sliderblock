<?php

// styles
function nb_setup() {
    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style('assets/library/css/nb-style.css');
}
add_action('after_setup_theme', 'nb_setup');

/****************** Gutenberg Block Custom Category ******************/
function nb_custom_category($categories, $post) {
    array_unshift(
        $categories,
        array(
            'slug' => 'nb-blocks',
            'title' => __('NB Blocks', 'nb-blocks'),
        )
    );
    return $categories;
}
add_filter('block_categories', 'nb_custom_category', 10, 2);

/****************** Loading ACF into Gutenberg ******************/
function nb_acf_block_render_callback($block) {
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if(file_exists(get_theme_file_path("/template-parts/block/{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block{$slug}.php"));
    }
}


// Registering ACF Block
add_action('acf/init', 'nb_acf_init');

function nb_acf_init() {
    // check function exists
    if(function_exists('acf_register_block')){
        acf_register_block(array(
            'name' => 'carousel-block',
            'title' => __('Carousel Block'),
            'description' => __('Let your images sliding.'),
            'render_callback' => 'nb_acf_block_render_callback',
            'category' => 'nb-blocks',
            'icon' => file_get_contents( get_template_directory() . '/template-parts/blocks/img/carousel.svg'),
            'keywords' => array('carousel', 'slider'),            
        ));
    }
}












?>