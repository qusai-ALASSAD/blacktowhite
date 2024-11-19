<?php
if (!defined('ABSPATH')) exit;

// Theme Setup
function black_to_white_setup() {
    load_theme_textdomain('black-to-white', get_template_directory() . '/languages');
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('القائمة الرئيسية', 'black-to-white'),
        'footer' => __('قائمة التذييل', 'black-to-white')
    ));
}
add_action('after_setup_theme', 'black_to_white_setup');

// Enqueue Scripts and Styles
function black_to_white_scripts() {
    wp_enqueue_style('black-to-white-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.min.css', array(), '1.0.0');
    
    wp_enqueue_script('framer-motion', 'https://unpkg.com/framer-motion@10.16.16/dist/framer-motion.js', array(), '10.16.16', true);
    wp_enqueue_script('black-to-white-animations', get_template_directory_uri() . '/assets/js/animations.js', array('framer-motion'), '1.0.0', true);
    wp_enqueue_script('black-to-white-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'black_to_white_scripts');

// Custom Post Types
function black_to_white_post_types() {
    register_post_type('service', array(
        'labels' => array(
            'name' => __('الخدمات', 'black-to-white'),
            'singular_name' => __('خدمة', 'black-to-white'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-cleaning',
        'rewrite' => array('slug' => 'services'),
    ));
}
add_action('init', 'black_to_white_post_types');

// Include Required Files
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/template-functions.php';