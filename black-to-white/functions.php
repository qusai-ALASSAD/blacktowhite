<?php
if (!defined('ABSPATH')) exit;

// Theme Setup
function black_to_white_setup() {
    load_theme_textdomain('black-to-white', get_template_directory() . '/languages');
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('elementor');
    add_theme_support('elementor-pro');
    
    register_nav_menus(array(
        'primary' => __('Hauptmenü', 'black-to-white'),
        'footer' => __('Footer-Menü', 'black-to-white')
    ));
}
add_action('after_setup_theme', 'black_to_white_setup');

// Enqueue Scripts and Styles
function black_to_white_scripts() {
    wp_enqueue_style('black-to-white-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('elementor-custom', get_template_directory_uri() . '/assets/css/elementor-custom.css');
    
    wp_enqueue_script('black-to-white-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('black-to-white-animations', get_template_directory_uri() . '/assets/js/animations.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'black_to_white_scripts');

// Elementor Integration
function black_to_white_elementor_support() {
    update_option('elementor_disable_color_schemes', 'yes');
    update_option('elementor_disable_typography_schemes', 'yes');
    update_option('elementor_container_width', 1140);
    update_option('elementor_viewport_lg', 1025);
    update_option('elementor_viewport_md', 768);
    
    update_option('elementor_scheme_color', [
        1 => '#000000', // Primary
        2 => '#FFFFFF', // Secondary
        3 => '#333333', // Text
        4 => '#666666'  // Accent
    ]);
}
add_action('after_switch_theme', 'black_to_white_elementor_support');

// Include Required Files
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/elementor/elementor.php';