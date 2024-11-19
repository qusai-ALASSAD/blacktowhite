<?php
function black_to_white_register_post_types() {
    // Services Post Type
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'black-to-white'),
            'singular_name' => __('Service', 'black-to-white'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-cleaning',
        'rewrite' => array('slug' => 'services'),
    ));

    // Before/After Post Type
    register_post_type('before_after', array(
        'labels' => array(
            'name' => __('Before/After', 'black-to-white'),
            'singular_name' => __('Before/After', 'black-to-white'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-images-alt2',
    ));
}
add_action('init', 'black_to_white_register_post_types');